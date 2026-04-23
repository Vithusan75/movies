<?php
require("header.php");
require_once("fonctions.php");

if(isset($_GET['query']) && !empty($_GET['query'])) {
    $films = rechercherFilm($_GET['query']);

    echo "<div class='container py-5'>";
    echo "<h4>Résultats pour : " . $_GET['query'] . "</h4>";
    echo "<div class='row row-cols-2 row-cols-md-4 g-4'>";
    
    foreach($films as $film) {
        $affiche = $film['poster_path']
            ? 'https://image.tmdb.org/t/p/w185' . $film['poster_path']
            : 'https://via.placeholder.com/185x278?text=Pas+de+photo';

        echo "<div class='col'>
                <div class='card'>
                    <img src='" . $affiche . "' class='card-img-top'>
                    <div class='card-body'>
                        <a href='movieDetails.php?id=" . $film['id'] . "'>" . $film['title'] . "</a>
                    </div>
                </div>
              </div>";
    }
    echo "</div></div>";
}

require("footer.php");
?>