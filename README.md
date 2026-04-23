
## Les attributs du formulaire
- **action** : page où les données sont envoyées
- **method** : comment les données sont envoyées
- **name** : nom de la donnée, accessible avec `$_GET['name']`

## GET vs POST
- **GET** : données visibles dans l'URL
- **POST** : données cachées dans l'URL

## Fichiers modifiés
- `fonctions.php` : ajout des fonctions
- `header.php` : formulaires de recherche
- `movieDetails.php` : acteurs et bande annonce
- `actorDetails.php` : infos et films d'un acteur

## Fonctions créées
- `rechercherFilm()` : recherche un film
- `rechercherActeur()` : recherche un acteur
- `getActeursFilm()` : acteurs d'un film
- `getVideosFilm()` : bande annonce d'un film
- `getActeurDetail()` : infos d'un acteur
- `getFilmsActeur()` : films d'un acteur

## Format des données
L'API retourne du **JSON** converti en tableau PHP avec `json_decode()`

## Utilisation supplémentaire
Fiche acteur : photo, biographie et films où il a joué
