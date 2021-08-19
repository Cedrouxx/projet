# Projet en groupe

## Mise en place

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