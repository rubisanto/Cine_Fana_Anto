<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Qui sommes-nous ? </title>
  <!-- Bootstrap 4.6 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <!-- Bootstrap 4.6 JS -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous" defer></script>
  <!-- Bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- CSS custom -->
  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/<?= $css ?>">
  <!-- JS -->
  <script src="scripts/qsn.js" defer></script>
  <script src="scripts/darkMode.js" defer></script>
</head>

<body>
  <header class="container-fluid p-0 sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Cine Fana</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=catalogue">Catalogue</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=articles">Articles</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=forum">Forum</a>
          </li>
          <?php if (isset($_SESSION["admin"]) && $_SESSION["admin"] == true) { ?>
            <li class="nav-item">
              <a class="nav-link" href="?page=crud">CRUD</a>
            </li>
          <?php } ?>



        </ul>
        <form class="form-inline my-2 my-lg-0" method="get">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" id="search" />
          <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" id="btnsearch">
            Search
          </button>
        </form>
        <ul class="navbar-nav">
          <?php if (isset($_SESSION["admin"])) { ?>
            <li class="nav-item">
              <a class="nav-link" href="?page=logout">Deconnexion</a>
            </li>
          <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link" href="?page=login">Connexion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=inscription"> Inscription </a>
            </li>
          <?php } ?>

        </ul>
      </div>
    </nav>
  </header>



  <?php
  // Changement dynamique du header
  $title = "Qui sommes-nous ?";
  $css = "qsn.css";
  $js = "qsn.js";

  ?>
  <main class="container main bg-light ">
    <!-- Contenu html -->
    <h1 class="mt-5" id="about">A PROPOS DE CINEFANA</h1>
    <button id="mode" class="btn btn-warning">
      <i class=""></i>
      <span id="span">Anglais</span>
    </button>
    <h2 id="bonjour">Bonjour et bienvenu sur CineFana !</h2>
    <br>
    <h2 id="mission-titre">Notre Mission</h2>
    <p id="mission-contenu">
      Offrir aux cinéphiles une source pratique et rapide d'informations sur le
      cinéma, tout en facilitant l'accès aux salles, c'est la mission de
      CinéFana. CinéFana peut être joint 24h/24 en quelques secondes par
      téléphone au 0.892.842.692 , sur Internet (www.cinefana.fr) ou votre
      smartphone et votre tablette. Pour toutes autres questions ou remarques
      consultez la rubrique <a href="contact.php">contact</a>. <br />* 0,34
      euros la minute
    </p>

    <h3 id="historique-titre">Historique</h3>
    <br>
    <p id="historique-contenu">
      Partant à la base d'un simple projet concu par 3 étudiants en formation de
      développeur web et web mobile, CineFana est devenu un projet suivi par de
      nombreux cinéphiles du monde francophone. <br />
      CinéFana c'est l'occasion pour vous d'en apprendre plus sur les derniers
      films sortis, de pouvoir louer vos films préférés ou encore de discuter de
      chefs d'oeuvres sur notre forum
      <!-- Ajouter ici le lien du forum-->
      <br />
    </p>
    <h3 id="valeurs-titre">Nos Valeurs</h3>
    <br>
    <p id="valeurs-contenu">Etant parti à la base d'une team de 3 personnes, le site Ciné Fana se donne comme mission principale de donner des informations et des sensations fortes à tous les fans de cinéma.</p>
    <!-- Fin contenu html -->
    <?php ?>
  </main>
  <footer class="w-100 py-4 flex-shrink-0 bg-dark mt-5 text-center">
    <div class="container py-4">
      <div class="row gy-4 gx-5">
        <div class="col-lg-4 col-md-4">
          <h5 class="h1 text-white">Cine Fana.</h5>
          <p class="small text-muted">Votre site de cinema prefere</p>
          <p class="small text-muted mb-0">&copy; Copyrights. Tous droits reserves. <a class="text-warning" href="index.php">Cine Fana</a></p>
        </div>
        <div class="col-lg-4 col-md-4">
          <h5 class="text-white mb-3">Lien rapides</h5>
          <ul class="list-unstyled text-muted">
            <li><a href="index.php" class="text-warning">Accueil</a></li>
            <li><a href="?page=qsn" class="text-warning">Qui sommes-nous ?</a></li>
            <li><a href="?page=cgu" class="text-warning">Condition génerales d'utilisateur</a></li>
            <li><a href="?page=contact" class="text-warning">Nous contacter</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <h5 class="text-white mb-3">Reseaux Sociaux</h5>
          <ul class="list-unstyled text-muted">
            <li><a href="#" class="text-warning"><i class="bi bi-facebook"></i> Facebook</a></li>
            <li><a href="#" class="text-warning"><i class="bi bi-twitter"></i> Twitter</a></li>
            <li><a href="#" class="text-warning"><i class="bi bi-instagram"></i> Instagram</a></li>
            <li><a href="#" class="text-warning"><i class="bi bi-youtube"></i> Youtube</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>