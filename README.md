# PostalHome - Application de Gestion de Colis

Application Laravel pour la gestion et le suivi de colis avec interface d'administration.

## 🚀 Fonctionnalités

- ✅ Création et suivi de colis
- ✅ Gestion des adresses de départ et d'arrivée
- ✅ Système de numéros de tracking
- ✅ Gestion du poids des colis
- ✅ Interface d'administration
- ✅ Base de données MariaDB/MySQL

## 📋 Prérequis

- PHP 8.1+
- Composer
- Node.js & NPM
- MySQL/MariaDB

## 🛠️ Installation

### 1. Cloner le projet

```bash
git clone https://github.com/votre-username/postalhome.git
cd postalhome
```

### 2. Installer les dépendances

```bash
composer install
npm install
```

### 3. Configuration de l'environnement

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configuration de la base de données

Modifiez votre fichier `.env` :

```properties
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=postalhome
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5. Créer la base de données

```sql
CREATE DATABASE postalhome;
```

### 6. Lancer les migrations

```bash
php artisan migrate
```

### 7. Lancer le serveur de développement

```bash
php artisan serve
npm run dev
```

Accédez à l'application : `http://localhost:8000`

## 📊 Structure de la base de données

### Table `parcels`

- `id` : Identifiant unique
- `address_dep` : Adresse de départ
- `address_arr` : Adresse d'arrivée
- `weight` : Poids du colis (decimal)
- `tracking_number` : Numéro de suivi
- `status` : Statut du colis
- `created_at` / `updated_at` : Timestamps

## 🔧 Migrations disponibles

- `add_weight_to_parcels_table` : Ajoute la colonne poids
- `remove_weigth_column_from_parcels_table` : Supprime l'ancienne colonne mal orthographiée

## 🐳 Déploiement avec Docker

```dockerfile
# Exemple de configuration Docker
FROM php:8.1-fpm
# ... configuration Docker
```

## 🤝 Contribution

Les contributions sont les bienvenues ! Merci de :

1. Fork le projet
2. Créer une branche pour votre fonctionnalité
3. Commiter vos changements
4. Push vers la branche
5. Ouvrir une Pull Request

## 📝 License

Ce projet est sous licence MIT.

## 🆘 Support

Pour toute question ou problème, ouvrez une issue sur GitHub.
