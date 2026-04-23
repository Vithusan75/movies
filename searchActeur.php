<?php
require("header.php");
require_once("fonctions.php");

if(isset($_GET['query']) && !empty($_GET['query'])) {
    $acteurs = rechercherActeur($_GET['query']);

    echo "<div class='container py-5'>";
    echo "<h4>Résultats pour : " . $_GET['query'] . "</h4>";
    echo "<div class='row row-cols-2 row-cols-md-4 g-4'>";
    
    foreach($acteurs as $acteur) {
        $photo = $acteur['profile_path']
            ? 'https://image.tmdb.org/t/p/w185' . $acteur['profile_path']
            : 'https://via.placeholder.com/185x278?text=Pas+de+photo';

        echo "<div class='col'>
                <div class='card'>
                    <img src='" . $photo . "' class='card-img-top'>
                    <div class='card-body'>
                        <a href='actorDetails.php?id=" . $acteur['id'] . "'>" . $acteur['name'] . "</a>
                    </div>
                </div>
              </div>";
    }
    echo "</div></div>";
}

require("footer.php");
?>