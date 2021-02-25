<?php
require("config.php");
$title = "test";
require("inc/header.php");
?>
<main class="flex-fill">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://via.placeholder.com/3440x1440.png" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="https://via.placeholder.com/3440x1440.png" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="https://via.placeholder.com/3440x1440.png" class="d-block w-100">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <div class="container">
    <h1 class="mt-5"><?php echo($config['site-name']); ?></h1>
    <p class="lead">Site Description</p>
    <p><a href="app.php" class="btn btn-success">Go!</a></p>
  </div>
</main>
<?php
require("inc/footer.php");
?>