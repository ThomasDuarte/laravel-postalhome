# PostalHome - Application de Gestion de Colis

Application Laravel pour la gestion et le suivi de colis avec interface d'administration.

## 🚀 Fonctionnalités

- ✅ Création et suivi de colis
- ✅ Gestion des adresses de départ et d'arrivée
- ✅ Système de numéros de tracking automatiques
- ✅ Gestion du poids des colis (en kg)
- ✅ Interface d'administration intuitive
- ✅ Base de données MariaDB/MySQL
- ✅ Migrations automatisées

## 📋 Prérequis

- PHP 8.1+ avec extensions : `pdo_mysql`, `mbstring`, `openssl`
- Composer 2.0+
- Node.js 16+ & NPM
- MySQL 8.0+ ou MariaDB 10.3+

## 🛠️ Installation

### 1. Cloner le projet

```bash
git clone https://github.com/votre-username/postalhome.git
cd postalhome
```

### 2. Installer les dépendances

```bash
composer install --optimize-autoloader
npm install && npm run build
```

### 3. Configuration de l'environnement

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configuration de la base de données

Modifiez votre fichier `.env` :

```properties
APP_NAME=PostalHome
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=postalhome
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Sessions en fichier pour simplicité
SESSION_DRIVER=file
CACHE_DRIVER=file
```

### 5. Créer la base de données

```sql
CREATE DATABASE postalhome CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### 6. Lancer les migrations

```bash
php artisan migrate --seed
```

### 7. Lancer le serveur de développement

```bash
php artisan serve
```

Accédez à l'application : `http://localhost:8000`

## 📊 Structure de la base de données

### Table `parcels`

| Colonne           | Type         | Description                        |
| ----------------- | ------------ | ---------------------------------- |
| `id`              | bigint       | Identifiant unique auto-incrémenté |
| `address_dep`     | string       | Adresse complète de départ         |
| `address_arr`     | string       | Adresse complète d'arrivée         |
| `weight`          | decimal(8,2) | Poids du colis en kilogrammes      |
| `tracking_number` | string       | Numéro de suivi unique             |
| `status`          | string       | Statut du colis                    |
| `created_at`      | timestamp    | Date de création                   |
| `updated_at`      | timestamp    | Date de dernière modification      |

## 🔧 Commandes utiles

```bash
# Vider le cache
php artisan config:clear
php artisan cache:clear

# Voir le statut des migrations
php artisan migrate:status

# Accéder aux données via Tinker
php artisan tinker
```

## 🐳 Déploiement avec Docker

```dockerfile
FROM php:8.1-fpm
RUN docker-php-ext-install pdo pdo_mysql
COPY . /var/www/html
WORKDIR /var/www/html
RUN composer install --optimize-autoloader --no-dev
```

## 🔒 Sécurité

- ✅ Clés d'application générées automatiquement
- ✅ Protection CSRF intégrée
- ✅ Validation des données utilisateur
- ✅ Pas d'informations sensibles dans le code

## 🐛 Dépannage

### Erreur de connexion base de données

```bash
php artisan config:clear
# Vérifiez vos paramètres .env
```

### Erreur de migration

```bash
php artisan migrate:fresh
```

## 🤝 Contribution

Les contributions sont les bienvenues ! Merci de :

1. Fork le projet
2. Créer une branche : `git checkout -b feature/ma-fonctionnalite`
3. Commiter : `git commit -m "feat: ajouter ma fonctionnalité"`
4. Push : `git push origin feature/ma-fonctionnalite`
5. Ouvrir une Pull Request

## 📝 License

Ce projet est sous licence MIT. Voir le fichier `LICENSE` pour plus de détails.

## 🆘 Support

Pour toute question ou problème, ouvrez une issue sur GitHub avec :

- Version de PHP utilisée
- Message d'erreur complet
- Étapes pour reproduire le problème
