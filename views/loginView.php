<?php
// Changement dynamique du header
$title = "Connexion";
$css = "login.css";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
<h1>Bonjour je suis la page pour se connecter</h1>
<form method="POST">
  <div class="form-group">
    <label for="mail">Adresse mail</label>
    <input type="email" class="form-control" id="mail" name="mail" required>
  </div>
  <div class="form-group">
    <label for="password">Mot de passe</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <div class="form-group">
    <label for="stay_connect">Rester connecter ?</label>
    <input type="checkbox" name="stay_connect" id="stay_connect" value="yes">
  </div>
  <button type="submit" class="btn btn-warning">Se connecter</button>
</form>
<h2>Vous n'avez pas de compte ? Inscrivez vous <a href="?page=inscription" class="text-warning">ici !</a></h2>
<!-- Fin contenu html -->
<?php
// Stock le contenu du tempon puis le clean
$content = ob_get_clean();
// Affiche le layout
require_once "layout.php";
?>