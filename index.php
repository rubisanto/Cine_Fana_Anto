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
require_once "controllers/CrudController.php";
require_once "controllers/AddArticleController.php";
require_once "controllers/AddPostController.php";

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
if (isset($_GET["table"])) {
  $tableName = htmlspecialchars($_GET["table"]);
}
if (isset($_GET["delete_admin"])) {
  $delete = htmlspecialchars($_GET["delete_admin"]);
}
if (isset($_GET["delete_article"])) {
  $delete = htmlspecialchars($_GET["delete_article"]);
}
if (isset($_GET["delete_comment"])) {
  $delete = htmlspecialchars($_GET["delete_comment"]);
}
if (isset($_GET["delete_contact"])) {
  $delete = htmlspecialchars($_GET["delete_contact"]);
}
if (isset($_GET["delete_forum"])) {
  $delete = htmlspecialchars($_GET["delete_forum"]);
}
if (isset($_GET["delete_product"])) {
  $delete = htmlspecialchars($_GET["delete_product"]);
}
if (isset($_GET["delete_user"])) {
  $delete = htmlspecialchars($_GET["delete_user"]);
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
    operateInscription();
  } elseif ($_GET["page"] == "login") {
    checkLogin();
  } elseif ($_GET["page"] == "logout") {
    logout();
  } elseif ($_GET["page"] == "contact") {
    getContact();
  } elseif (($_GET["page"] == "ajouter-article") && (!isset($_GET["statut"]))) {
    formAddArticle();
  } elseif ($_GET["page"] == "ajouter-article" && $_GET["statut"] == "validation") {
    addArticle();
  } elseif ($_GET["page"] == "ajouter-post" && (!isset($_GET["statut"]))) {
    formAddPost();
  } elseif ($_GET["page"] == "ajouter-post" && $_GET["statut"] == "validation") {
    addPost();
  } elseif ($_GET["page"] == "catalogue") {
    getCatalogue();
  } elseif ($_GET["page"] == "crud") {
    getCrud();
  } else {
    header("Location: index.php");
  }
} elseif (isset($_GET["table"])) {

  if ($_GET["table"] == "articles") {
    getArticlesTable();
  } elseif ($_GET["table"] == "comments") {
    getCommentsTable();
  } elseif ($_GET["table"] == "contacts") {
    getContactsTable();
  } elseif ($_GET["table"] == "forum") {
    getForumTable();
  } elseif ($_GET["table"] == "users") {
    getUsersTable();
  } else {
    header("Location: index.php");
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
} elseif (isset($_GET["delete_article"])) {
  deleteArticlesTable($delete);
} elseif (isset($_GET["delete_comment"])) {
  deleteCommentsTable($delete);
} elseif (isset($_GET["delete_contact"])) {
  deleteContactsTable($delete);
} elseif (isset($_GET["delete_forum"])) {
  deleteForumTable($delete);
} elseif (isset($_GET["delete_user"])) {
  deleteUsersTable($delete);
} else {
  getHome();
}
