<?php
// Changement dynamique du header
$title = "Connexion";
$css = "login.css";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
<form action="?page=login&statut=validation" method="POST" class="mt-5">
  <div class="form-group">
    <label for="mail">Adresse mail</label>
    <input type="email" class="form-control" id="mail" name="mail" required>
  </div>
  <div class="form-group">
    <label for="password">Mot de passe</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <button type="submit" class="btn btn-warning">Se connecter</button>
</form>
<?php
if (isset($_GET['error']) && $_GET['error'] == '1') {
  echo '<div class="alert alert-danger" role="alert">
  Mail incorrect
</div>';
}
if (isset($_GET['error']) && $_GET['error'] == '2') {
  echo '<div class="alert alert-danger" role="alert">
  Mot de passe incorrect
</div>';
}
?>
<h2 class="mt-5">Vous n'avez pas de compte ? Inscrivez vous <a href="?page=inscription" class="text-warning">ici !</a></h2>
<!-- Fin contenu html -->
<?php
// Stock le contenu du tempon puis le clean
$content = ob_get_clean();
// Affiche le layout
require_once "layout.php";
?>