<?php
// require_once("get-proxy.php"); 

function popularMovies() {
    $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
    $url = "https://api.themoviedb.org/3/movie/popular?api_key=$key&language=fr-FR";
    $response = file_get_contents($url);
    $result = json_decode($response, true);
    return $result['results'];
}

function topRated() {
    $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
    $url = "https://api.themoviedb.org/3/movie/top_rated?api_key=$key&language=fr-FR";
    $response = file_get_contents($url);
    $result = json_decode($response, true);
    return $result['results'];
}

function filmParGenre($genre) {
    $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
    $url = "https://api.themoviedb.org/3/discover/movie?api_key=$key&language=fr-FR&with_genres=$genre";
    $response = file_get_contents($url);
    $result = json_decode($response, true);
    return $result['results'];
}

function getMovieDetail($movieId) {
    $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
    $url = "https://api.themoviedb.org/3/movie/$movieId?api_key=$key&language=fr-FR";
    $response = file_get_contents($url);
    $result = json_decode($response, true);
    return $result;
}


function getActeursFilm($movieId) {
    $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
    $url = "https://api.themoviedb.org/3/movie/$movieId/credits?api_key=$key&language=fr-FR";
    $response = file_get_contents($url);
    $result = json_decode($response, true);
    return $result['cast'];
}


function getVideosFilm($movieId) {
    $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
    $url = "https://api.themoviedb.org/3/movie/$movieId/videos?api_key=$key&language=fr-FR";
    $response = file_get_contents($url);
    $result = json_decode($response, true);
    return $result['results'];
}


function getFilmsActeur($acteurId) {
    $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
    $url = "https://api.themoviedb.org/3/person/$acteurId/combined_credits?api_key=$key&language=fr-FR";
    $response = file_get_contents($url);
    $result = json_decode($response, true);
    return $result['cast'];
}


function getActeurDetail($acteurId) {
    $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
    $url = "https://api.themoviedb.org/3/person/$acteurId?api_key=$key&language=fr-FR";
    $response = file_get_contents($url);
    $result = json_decode($response, true);
    return $result;
}


function rechercherActeur($motCle) {
    $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
    $url = "https://api.themoviedb.org/3/search/person?api_key=$key&query=$motCle&language=fr-FR";
    $response = file_get_contents($url);
    $result = json_decode($response, true);
    return $result['results'];
}


function rechercherFilm($motCle) {
    $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
    $url = "https://api.themoviedb.org/3/search/movie?api_key=$key&query=$motCle&language=fr-FR";
    $response = file_get_contents($url);
    $result = json_decode($response, true);
    return $result['results'];
}