<?php 
require("header.php"); 
require_once("fonctions.php"); 

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $movie = getMovieDetail($_GET['id']);
?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-4">
            <img src="https://image.tmdb.org/t/p/w500<?php echo $movie['poster_path']; ?>" class="img-fluid rounded shadow">
        </div>
        
        <div class="col-md-8">
            <h1 class="display-4"><?php echo $movie['title']; ?></h1>
            <p class="text-muted"><em><?php echo $movie['tagline']; ?></em></p>
            <hr>
            <h5>Synopsis</h5>
            <p><?php echo $movie['overview']; ?></p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Note :</strong> <?php echo $movie['vote_average']; ?>/10</li>
                <li class="list-group-item"><strong>Date de sortie :</strong> <?php echo $movie['release_date']; ?></li>
                <li class="list-group-item"><strong>Durée :</strong> <?php echo $movie['runtime']; ?> minutes</li>
            </ul>
            <a href="javascript:history.back()" class="btn btn-outline-secondary mt-4">Retour</a>
        </div>
    </div>
</div>
<div class="album py-5 bg-body-tertiary">
  <div class="container">
    <h4>Films les plus populaires</h4>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
      <?php foreach($movies as $movie) : ?>  
        <div class="d-flex align-items-stretchl">
          <div class="card shadow-sm ">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w780/'.$movie['poster_path']; ?>" >
            <div class="card-body lh-sm d-flex flex-column">
              <p class=" lh-sm">
                <strong><?php echo $movie['title']; ?></strong>
              </p>
              <a href="movieDetails.php?id=<?php echo $movie['id']; ?>" class="btn btn-primary mt-auto">View</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<?php 
} else {
    echo "<div class='container'><p class='alert alert-danger'>Aucun film sélectionné.</p></div>";
}
require("footer.php"); 
?>