<?php
// Changement dynamique du header
$title = "Catalogue";
$css = "catalogue.css";
$js = "catalogue.js";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
<form method="get" class="mt-5 text-center">
  <div class="form-group">
    <label for="searchbar">Rechercher un film ou une serie</label>
    <input type="text" class="form-control" id="searchbar" name="searchbar">
  </div>
  <input type="submit" value="Rechercher" class="btn btn-warning" id="btnsearchbar">
</form>
<!-- Fin contenu html -->
<?php
// Stock le contenu du tempon puis le clean
$content = ob_get_clean();
// Affiche le layout
require_once "layout.php";
?>