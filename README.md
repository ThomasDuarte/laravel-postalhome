# 📦 Postalhome - Laravel Parcel Management

> Application Laravel moderne pour la gestion d'envoi de colis avec interface utilisateur responsive.

## 🌟 Fonctionnalités

- ✅ **Enregistrement de colis** avec validation des données
- ✅ **Interface moderne** avec design responsive
- ✅ **Gestion des erreurs** avec messages utilisateur-friendly
- ✅ **Base de données MariaDB** avec migrations Laravel
- ✅ **Validation côté serveur** avec feedback visuel
- ✅ **Design mobile-first** compatible tous appareils

## 🚀 Technologies utilisées

- **Framework** : Laravel 11
- **Base de données** : MariaDB
- **Frontend** : HTML5, CSS3, JavaScript vanilla
- **Outils** : Prettier, Docker, Composer, NPM

## 🛠️ Installation

### Prérequis
- PHP 8.1+
- Composer
- Node.js & NPM
- MariaDB ou Docker

### Étapes d'installation

1. **Cloner le repository**
   ```bash
   git clone https://github.com/VOTRE_USERNAME/laravel-postalhome.git
   cd laravel-postalhome
   ```

2. **Installer les dépendances**
   ```bash
   composer install
   npm install
   ```

3. **Configuration de l'environnement**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configuration de la database**
   
   **Option A - Docker :**
   ```bash
   docker run --name laravel-mariadb -e MYSQL_ROOT_PASSWORD=root -e MYSQL_DATABASE=tuto_graven -p 3306:3306 -d mariadb:latest
   ```
   
   **Option B - XAMPP :**
   - Démarrer XAMPP
   - Créer une base de données `tuto_graven`

5. **Migrations**
   ```bash
   php artisan migrate
   ```

6. **Démarrer le serveur**
   ```bash
   php artisan serve
   ```

## 🎨 Formatage du code

Le projet utilise Prettier pour le formatage automatique :

```bash
# Formater tout le projet
npm run format

# Formater seulement les fichiers PHP
npm run format:php

# Vérifier le formatage
npm run format:check
```

## 👨‍💻 Auteur

**Thomas** - Développement initial

---

⭐ N'hésitez pas à star le projet si vous le trouvez utile !

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
