<?php
// Changement dynamique du header
$title = "Forum";
$css = "forums.css";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
<?php while ($result = $posts->fetch()) { ?>
      <h1 class="text-center pt-5"><?= $result["post_title"]?></h1>
      <p class="pt-5 text-center text-muted">Ecrit le <?= date("d-m-Y",strtotime($result["post_date"]))?> par <?= $result["post_author"]?></p>
      <p class="pt-5 text-justify"><?= $result["post_content"]?></p>
<?php } ?>
<!-- Fin contenu html -->
<?php
// Stock le contenu du tempon puis le clean
$content = ob_get_clean();
// Affiche le layout
require_once "layout.php";
?>