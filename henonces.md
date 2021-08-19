# Projet en groupe

## Mise en place de Laravel

* Personne A du groupe initialise le dépôt sur github avec un fichier Readme
* Personne A envoie les invitations aux autres membres
* Personne A clone le projet dans son dossier projet
* Personne A installe laravel
```
composer create-project laravel/laravel projet
```
* Personne A ajoute, commit et push l'installation de Laravel
* Les autres membres clonent le projet dans le dossier projet
```
git clone https://github.com/{nom_utilisateur}/projet
cd projet
```
* Les autres membres installent les bibliothèques externes avec composer
```
composer install
```
* Les autres membres dupiquent le fichier .env.example et le renommer .env
```
cp .env.example .env
```
* Les autres membres remplissent les informations de connexion à la base de données dans .env

## Description projet

### Données

games : id, title, mark, image, description, studio_id, price, release_date, created_at, updated_at
studios : id, name, logo
ratings : id, mark, content, user_id, game_id, created_at, updated_at
platforms : id, name, logo
users : id, username (unique), display_name (nullable), email (unique), password, avatar (nullable), is_admin, created_at, updated_at
categories : id, name
categorie_game : game_id, category_id
game_platform : game_id, plateform_id

### Fonctionnalités

* Accueil (les 5 dernières sorties, les 5 jeux les mieux notés)
* Affichage de tous les jeux vidéos avec pagination (entre 10 et 20 jeux par page)
* Détail d'un jeu vidéos avec affichage des avis (ratings) des utilisateurs
* Formulaire de création d'un avis sur un jeu
* Inscription/Connexion/Déconnexion
* Mise à jour du profil (avec ajout éventuel d'un avatar)
* Création de catégories
* Création de studios
* Création de plateformes
* Création de jeux vidéos

## Etapes

1. Mise en place de la base de données (structure des tables, ajouter des données dans les tables)


## Aide

### Base de données

#### Création des tables

Il faut créer des migrations pour les différentes tables.
```
php artisan make:migration CreateGamesTable
```
Cette commande va créer un fichier database/migrations/xxxx_create_games_tables.php. Ajouter ensuite les colonnes de cette table.
[Doc de laravel](https://laravel.com/docs/8.x/migrations#columns)

#### Ajout de données

Il faut créer des seeder pour ajouter des données dans les tables.
```
php artisan make:seeder GameTableSeeder
```
Cette commande va créer un fichier database/seeders/GameTableSeeder.php. Dans ce fichier, créer plusieurs données dans une table.
[Doc de laravel](https://laravel.com/docs/8.x/seeding#writing-seeders)

Utiliser les factories pour générer beaucoup de données fictives (principalement pour les utilisateurs et les avis).