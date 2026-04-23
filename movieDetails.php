<?php 
require("header.php"); 
require_once("fonctions.php"); 

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $movie = getMovieDetail($_GET['id']);
    $acteurs = getActeursFilm($_GET['id']);
    $videos = getVideosFilm($_GET['id']);

    echo "<div class='container py-5'>";
    
    
    echo "<div class='row'>";
    
   
    echo "<div class='col-md-4'>";
    echo "<img src='https://image.tmdb.org/t/p/w500" . $movie['poster_path'] . "' class='img-fluid'>";
    echo "</div>";

  
    echo "<div class='col-md-8'>";
    echo "<h1>" . $movie['title'] . "</h1>";
    echo "<p>" . $movie['overview'] . "</p>";
    echo "<p>Note : " . $movie['vote_average'] . "/10</p>";
    echo "<p>Sortie : " . $movie['release_date'] . "</p>";
    echo "</div>";

    echo "</div>";

  
    if(!empty($videos)) {
        echo "<h4>Bande annonce</h4>";
        echo "<iframe width='672' height='378' src='https://www.youtube.com/embed/" . $videos[0]['key'] . "' allowfullscreen></iframe>";
    } else {
        echo "<p>Pas de bande annonce disponible</p>";
    }

  
    echo "<h4>Acteurs</h4>";
    echo "<div class='row row-cols-2 row-cols-md-6 g-3'>";
    foreach($acteurs as $acteur) {
        $photo = $acteur['profile_path']
            ? 'https://image.tmdb.org/t/p/w185' . $acteur['profile_path']
            : 'https://via.placeholder.com/185x278?text=?';

        echo "<div class='col'>
                <div class='card'>
                    <img src='" . $photo . "' class='card-img-top'>
                    <div class='card-body'>
                        <a href='actorDetails.php?id=" . $acteur['id'] . "'>" . $acteur['name'] . "</a>
                    </div>
                </div>
              </div>";
    }
    echo "</div>";

    echo "</div>"; 
}

require("footer.php"); 
?>