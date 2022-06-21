<?php
// Changement dynamique du header
$title = "Forum";
$css = "forums.css";
// Stock le contenu en tempon
ob_start();
// Inscrire l'id du post en session
$_SESSION['post_id'] = $_GET['post'];
?>
<!-- Contenu html -->
<?php while ($result = $posts->fetch()) { ?>
      <h1 class="text-center pt-5"><?= $result["post_title"] ?></h1>
      <p class="pt-5 text-center text-muted">Ecrit le <?= date("d-m-Y", strtotime($result["post_date"])) ?> par <?= $result["post_author"] ?></p>
      <p class="pt-5 text-justify"><?= $result["post_content"] ?></p>
<?php } ?>

<a href="?page=ajouter-commentaire" class="btn btn-warning"> Ajouter un commentaire</a>

<br /><br />

<!-- afficher les commentaires déjà existants -->

<?php while ($result = $comments->fetch()) { ?>
      <div class="card flex-row mt-5 text-white border-0">
            <div class="card-body bg-dark">

                  <h5>Ecrit le <?= date("d-m-Y", strtotime($result["comment_date"])) ?> par <?= $result["comment_author"] ?> avec <? $result[""] ?> likes </h5>
                  <p class="card-text"><?= $result["comment_content"]  ?></p>
                  <a href="?liked=<? $result["comment_id"] ?>" class="btn btn-warning"> Liker le post</a>


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