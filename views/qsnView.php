<?php
// Changement dynamique du header
$title = "Qui sommes-nous ?";
$css = "qsn.css";
// Stock le contenu en tempon
ob_start();
?>
<!-- Contenu html -->
  <h1 class="mt-5">A PROPOS DE CINEFANA</h1>
  <h2>Bonjour et bienvenu sur CineFana !</h2>
  <p>
    Offrir aux cinéphiles une source pratique et rapide d'informations sur le
    cinéma, tout en facilitant l'accès aux salles, c'est la mission de
    CinéFana. CinéFana peut être joint 24h/24 en quelques secondes par
    téléphone au 0.892.842.692 , sur Internet (www.cinefana.fr) ou votre
    smartphone et votre tablette. Pour toutes autres questions ou remarques
    consultez la rubrique <a href="contact.php">contact</a>. <br />* 0,34
    euros la minute
  </p>
  <h2>Notre Mission</h2>
  <h3>Historique</h3>
  <br>
  <p>
    Partant à la base d'un simple projet concu par 3 étudiants en formation de
    développeur wbe et web mobile, CineFana est devenu un projet suivi par de
    nombreux cinéphiles du monde francophone. <br />
    CinéFana c'est l'occasion pour vous d'en apprendre plus sur les derniers
    films sortis, de pouvoir louer vos films préférés ou encore de discuter de
    chefs d'oeuvres sur notre forum
    <!-- Ajouter ici le lien du forum-->
    <br />
  </p>
  <h3>Nos Valeurs</h3>
  <br>
  <p>Etant parti à la base d'une team de 3 personnes, le site Ciné Fana se donne comme mission principale de donner des informations et des sensations fortes à tous les fans de cinéma.</p>
<!-- Fin contenu html -->
<?php
// Stock le contenu du tempon puis le clean
$content = ob_get_clean();
// Affiche le layout
require_once "layout.php";
?>