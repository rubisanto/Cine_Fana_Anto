<?php
// Changement dynamique du header
$title = "Articles";
$css = "articles.css";
// Stock le contenu en tampon
ob_start();
?>

<a href="?page=ajouter-article" class="btn btn-warning"> Ajouter un nouvel article </a>



<?php while ($result = $articles->fetch()) { ?>
  <!-- Contenu html -->
  <div class="card flex-row mt-5 text-white border-0">
    <div class="card-body bg-dark">
      <h4 class="card-title"><?= $result["article_title"] ?></h4>
      <h5>Ecrit le <?= date("d-m-Y", strtotime($result["article_date"])) ?> par <?= $result["article_author"] ?></h5>
      <p class="card-text"><?= substr($result["article_content"], 0, 250) . "..." ?></p>
      <a href="?article=<?= $result["article_id"] ?>" class="btn btn-warning">Lire l'article</a>
    </div>
  </div>
<?php } ?>
<!-- Fin contenu html -->
<?php
// Stock le contenu du tampon puis le clean
$content = ob_get_clean();
// Affiche le layout
require_once "layout.php";
?>