<?php
// Commence la session
session_start();

// Require tout les controllers
require_once "controllers/ArticlesController.php";
require_once "controllers/CguController.php";
require_once "controllers/ForumController.php";
require_once "controllers/HomeController.php";
require_once "controllers/QsnController.php";
require_once "controllers/InscriptionController.php";
require_once "controllers/ConnectionController.php";
require_once "controllers/ContactController.php";
require_once "controllers/CatalogueController.php";
require_once "controllers/MovieController.php";
require_once "controllers/SearchController.php";

// Verification cookie
if (isset($_COOKIE["mail"]) && isset($_COOKIE["password"])) {
  $mail = htmlspecialchars($_COOKIE["mail"]);
  $password = htmlspecialchars($_COOKIE["password"]);
  checkSession($mail, $password);
}

// Verification url du routeur
if (isset($_GET["article"])) {
  $articleID = htmlspecialchars($_GET["article"]);
}
if (isset($_GET["post"])) {
  $postID = htmlspecialchars($_GET["post"]);
}
if (isset($_GET["search"])) {
  $search = htmlspecialchars($_GET["search"]);
}

// Routeur
if (isset($_GET["page"])) {
  if ($_GET["page"] == "articles") {
    getArticles();
  } elseif ($_GET["page"] == "qsn") {
    getQsn();
  } elseif ($_GET["page"] == "cgu") {
    getCgu();
  } elseif ($_GET["page"] == "forum") {
    getForum();
  } elseif ($_GET["page"] == "inscription") {
    checkIfAlreadyExist();
  } elseif ($_GET["page"] == "login") {
    checkLogin();
  } elseif ($_GET["page"] == "logout") {
    logout();
  } elseif ($_GET["page"] == "contact") {
    getContact();
  } elseif ($_GET["page"] == "catalogue") {
    getCatalogue();
  }
} elseif (isset($_GET["article"])) {
    if ($_GET["article"] == $articleID) {
      getSingleArticle($articleID);
    }
} elseif (isset($_GET["post"])) {
    if ($_GET["post"] == $postID) {
      getSinglePost($postID);
    }
} elseif (isset($_GET["movie"])) {
  getSingleMovie();
} elseif (isset($_GET["search"])) {
  if ($_GET["search"] == $search) {
    getSearch($search);
  }
} else {
  getHome();
}

