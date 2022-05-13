<?php
// Changement dynamique du header
$title = "Home";
$css = "home.css";
$js = "home.js";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
<h2 class="text-center mt-5"><u>Les films du moment</u></h2>
<div class="mt-5 mx-auto col-10 col-sm-10 col-md-8 col-lg-6 col-xl-5">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="" id="linkimg1">
        <img src="" class="d-block w-100" id="img1" alt="...">
      </a>
    </div>
    <div class="carousel-item">
      <a href="" id="linkimg2">
        <img src="" class="d-block w-100" id="img2" alt="...">
      </a>
    </div>
    <div class="carousel-item">
      <a href="" id="linkimg3">
        <img src="" class="d-block w-100" id="img3" alt="...">
      </a>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
</div>
<h2 class="text-center mt-5"><u>Les derniers articles</u></h2>
<?php while ($result = $articles->fetch()) { ?>
  <div class="card flex-row mt-5 text-white border-0">
    <img src="img.png" class="card-img mx-auto rounded-0 d-none d-sm-none d-md-none d-lg-block" style="height:auto; width:auto">
    <div class="card-body bg-dark">
      <h4 class="card-title"><?= $result["article_title"]?></h4>
      <h5>Ecrit le <?= date("d-m-Y",strtotime($result["article_date"]))?> par <?= $result["article_author"]?></h5>
      <p class="card-text"><?= substr($result["article_content"],0,250) . "..."?></p>
      <a href="?article=<?= $result["article_id"]?>" class="btn btn-warning">Lire l'article</a>
    </div>
  </div>
<?php } ?>
<h2 class="text-center mt-5"><u>Les derniers posts</u></h2>
<?php while ($result = $posts->fetch()) { ?>
  <div class="card flex-row mt-5 text-white border-0">
    <div class="card-body bg-dark">
      <h4 class="card-title"><?= $result["post_title"]?></h4>
      <h5>Ecrit le <?= date("d-m-Y",strtotime($result["post_date"]))?> par <?= $result["post_author"]?></h5>
      <p class="card-text"><?= substr($result["post_content"],0,250) . "..."?></p>
      <a href="?post=<?= $result["post_id"]?>" class="btn btn-warning">Lire le post</a>
    </div>
  </div>
<?php } ?>
<!-- Fin contenu html -->
<?php
// Stock le contenu du tempon puis le clean
$content = ob_get_clean();
// Affiche le layout
require_once "layout.php";
?>