<?php
// Changement dynamique du header
$title = "Article";
$css = "article.css";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
<?php while ($result = $articles->fetch()) { ?>
      <h1 class="text-center pt-5"><?= $result["article_title"] ?></h1>
      <p class="pt-5 text-center text-muted">Ecrit le <?= date("d-m-Y", strtotime($result["article_date"])) ?> par <?= $result["article_author"] ?></p>
      <img src="img/img.png" class="img-fluid pt-5 d-block mx-auto">
      <p class="pt-5 text-justify"><?= $result["article_content"] ?></p>
<?php } ?>
<!-- Fin contenu html -->
<?php
// Stock le contenu du tempon puis le clean
$content = ob_get_clean();
// Affiche le layout
require_once "layout.php";
?>