<?php
// Changement dynamique du header
$title = "Contact";
$css = "contact.css";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
<h2 class="mt-5">Nous contacter:</h2>

<form method="POST" class="my-3">
  <div class="mb-3">
    <label for="name" class="form-label mt-3">Votre nom et prenom</label>
    <input type="text" class="form-control" name="name" required>
  </div>
  <div class="mb-3">
    <label for="subject" class="form-label">Votre sujet</label>
    <input type="text" class="form-control" name="subject" required>
  </div>
  <div class="mb-3">
    <label for="email">Votre email:</label>
    <input type="email" class="form-control" name="email" required>
  </div>
  <div class="mb-3">
    <label for="content" class="form-label">Votre demande:</label>
    <textarea class="form-control" name="content" id="content" rows="6" required></textarea>
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