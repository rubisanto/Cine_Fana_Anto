<?php

// Require l'acces au requetes lies a la table articles
require_once "models/GetArticles.php";

// Requete qui recupere tout les articles et affiche la vue
function getArticles() {
  $article = new GetArticles();
  $articles = $article->sqlGetArticles();
  require_once "views/articlesView.php";
}

// Requete qui recupere un article specifique et affiche la vue
function getSingleArticle($articleID) {
  $article = new GetArticles();
  $articles = $article->sqlGetSingleArticle($articleID);
  require_once "views/singleArticleView.php";
}