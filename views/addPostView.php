<?php
// Changement dynamique du header
$title = "Ajouter un post";
$css = "ajouterPost.css";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
<h2 class="mt-5">Ajouter un post du forum:</h2>

<form method="POST" class="my-3" action="?page=ajouter-post&statut=validation" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="pseudo" class="form-label mt-3">Votre pseudo</label>
        <input type="text" class="form-control" name="pseudo" required>
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Le titre</label>
        <input type="text" class="form-control" name="title" required>
    </div>
    <div class="mb-3">
        <label for="content">Le contenu de votre post</label>
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