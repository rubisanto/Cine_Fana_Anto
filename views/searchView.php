<?php
// Changement dynamique du header
$title = "Search";
$css = "search.css";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
<h2 class="text-center mt-5">Les resultats correspondant a votre recherche "<?= $search ?>"</h2>
<!-- Articles result -->
<h2 class="mt-5">Parmi les articles</h2>
<div class="list-group mt-5">
  <?php while ($result = $articles_search->fetch()) { ?>
    <a href="#" class="list-group-item list-group-item-action">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1"><?= $result["article_title"] ?></h5>
      </div>
      <p class="mb-1">Ecrit par <?= $result["article_author"] ?></p>
      <p class="mb-1"><?= substr($result["article_content"], 0, 150) . "..." ?></p>
    </a>
  <?php } ?>
</div>
<!-- Comments result -->
<h2 class="mt-5">Parmi les commentaires</h2>
<div class="list-group mt-5">
  <?php while ($result = $comments_search->fetch()) { ?>
    <a href="#" class="list-group-item list-group-item-action">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1"><?= $result["comment_author"] ?></h5>
      </div>
      <p class="mb-1"><?= substr($result["comment_content"], 0, 150) . "..." ?></p>
    </a>
  <?php } ?>
</div>
<!-- Post result -->
<h2 class="mt-5">Parmi les posts</h2>
<div class="list-group mt-5">
  <?php while ($result = $forum_search->fetch()) { ?>
    <a href="#" class="list-group-item list-group-item-action">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1"><?= $result["post_title"] ?></h5>
      </div>
      <p class="mb-1">Ecrit par <?= $result["post_author"] ?></p>
      <p class="mb-1"><?= substr($result["post_content"], 0, 150) . "..." ?></p>
    </a>
  <?php } ?>
</div>
<!-- Users result -->
<h2 class="mt-5">Parmi les utilisateurs</h2>
<div class="list-group mt-5">
  <?php while ($result = $users_search->fetch()) { ?>
    <a href="#" class="list-group-item list-group-item-action">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1"><?= $result["user_pseudo"] ?></h5>
      </div>
    </a>
  <?php } ?>
</div>
<!-- Fin contenu html -->
<?php
// Stock le contenu du tempon puis le clean
$content = ob_get_clean();
// Affiche le layout
require_once "layout.php";
?>