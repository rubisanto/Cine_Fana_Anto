<?php
// Changement dynamique du header
$title = "Forum";
$css = "forums.css";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
<a href="?page=ajouter-post" class="btn btn-warning"> Ajouter un nouveau post</a>


<?php while ($result = $posts->fetch()) { ?>
  <div class="card flex-row mt-5 text-white border-0">
    <div class="card-body bg-dark">
      <h4 class="card-title"><?= $result["post_title"] ?></h4>
      <h5>Ecrit le <?= date("d-m-Y", strtotime($result["post_date"])) ?> par <?= $result["post_author"] ?></h5>
      <p class="card-text"><?= substr($result["post_content"], 0, 250) . "..." ?></p>
      <a href="?post=<?= $result["post_id"] ?>" class="btn btn-warning">Lire le post</a>
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