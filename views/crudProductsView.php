<?php
// Changement dynamique du header
$title = "Crud Products";
$css = "crud.css";
$table = "Products";
$href = "?page=crud";
$link = "Back to crud";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
<!-- Fin contenu html -->
<?php
// Stock le contenu du tempon puis le clean
$content = ob_get_clean();
// Affiche le layout
require_once "crudLayout.php";
?>