<?php
// Changement dynamique du header
$title = "Error 404";
$css = "404.css";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
<h2 class="text-center mt-5 display-1">Erreur 404 page non trouvée</h2>
<!-- Fin contenu html -->
<?php
// Stock le contenu du tempon puis le clean
$content = ob_get_clean();
// Affiche le layout
require_once "layout.php";
?>