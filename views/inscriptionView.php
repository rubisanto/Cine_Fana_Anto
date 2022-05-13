<?php
// Changement dynamique du header
$title = "Inscription";
$css = "signup.css";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
<h1>Bonjour je suis la page pour s'inscrire</h1>
<form action="" method="POST">
  <div class="form-group">
    <label for="mail">Adresse mail</label>
    <input type="email" class="form-control" name="mail" id="mail" required>
  </div>
  <div class="form-group">
    <label for="lastname">Nom</label>
    <input type="text" class="form-control" name="lastname" id="lastname" required>
  </div>
  <div class="form-group">
    <label for="firstname">Prenom</label>
    <input type="text" class="form-control" name="firstname" id="firstname" required>
  </div>
  <div class="form-group">
    <label for="pseudo">Pseudo</label>
    <input type="text" class="form-control" name="pseudo" id="pseudo" required>
  </div>
  <div class="form-group">
    <label for="adress">Adresse</label>
    <input type="text" class="form-control" name="adress" id="adress" required>
  </div>
  <div class="form-group">
    <label for="dob">Date de naissance</label>
    <input type="date" class="form-control" name="dob" id="dob" required>
  </div>
  <div class="form-group">
    <label for="password">Mot de passe</label>
    <input type="password" class="form-control" name="password" id="password" required>
  </div>
  <div class="form-group">
    <label for="verif_password">Verification du mot de passe</label>
    <input type="password" class="form-control" name="verif_password" required>
  </div>
  <button type="submit" class="btn btn-warning">S'inscrire</button>
</form>
<!-- Fin contenu html -->
<?php
// Stock le contenu du tempon puis le clean
$content = ob_get_clean();
// Affiche le layout
require_once "layout.php";
?>