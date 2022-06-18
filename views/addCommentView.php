<?php

// Changement dynamique du header
$title = "Ajouter un commentaire";
$css = "ajouterCommentaire.css";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->

<h2 class="mt-5">Ajouter un commentaire au post en tant que <?= $_SESSION["user_pseudo"] ?>:</h2>

<form method="POST" class="my-3" action="?page=ajouter-commentaire&statut=validation" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="content">Votre commentaire</label>
        <input type="text" class="form-control" name="content" required>
    </div>
    <button type="submit" class="btn btn-warning mb-3">Envoyer</button>
</form>
<!-- Fin contenu html -->
<?php
// Stock le contenu du tempon puis le clean
$content = ob_get_clean();
// Affiche le layout
require_once "layout.php";
?>