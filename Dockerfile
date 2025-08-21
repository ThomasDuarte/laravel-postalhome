FROM php:8.4-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    libzip-dev \
    libcurl4-openssl-dev \
    zip \
    unzip \
    default-mysql-client \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip curl intl

# Copy vhost config
COPY vhost.conf /etc/apache2/sites-available/000-default.conf

# Activer mod_rewrite pour Laravel
RUN a2enmod rewrite

# Get latest Composer
RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

ARG WWW_USER=1000

# Create user
RUN groupadd --force -g $WWW_USER webapp
RUN useradd -ms /bin/bash --no-user-group -g $WWW_USER -u $WWW_USER webapp

# Switch to webapp user
USER ${WWW_USER}

# Set working directory
WORKDIR /var/www/html

# Copy composer files first (for Docker layer caching)
COPY --chown=webapp:webapp composer.json composer.lock ./

# Install PHP dependencies
RUN composer install --no-scripts --no-autoloader --no-dev --prefer-dist

# Copy application files
COPY --chown=webapp:webapp . .

# Complete composer installation
RUN composer dump-autoload --optimize

# Create necessary directories with proper permissions
RUN mkdir -p storage/framework/cache/data \
    && mkdir -p storage/framework/sessions \
    && mkdir -p storage/framework/views \
    && mkdir -p bootstrap/cache

# Switch back to root for final setup
USER root

# Set final permissions
RUN chown -R webapp:webapp /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Optimize Laravel for production
RUN php artisan config:cache || echo "Config cache skipped" \
    && php artisan route:cache || echo "Route cache skipped" \
    && php artisan view:cache || echo "View cache skipped"

# Expose port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]