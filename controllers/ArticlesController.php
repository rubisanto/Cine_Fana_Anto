<?php

// Require l'acces aux requetes liées à la table "articles" uniquement si elle n'existe pas déjà.
require_once "models/GetArticles.php";

// Requete qui recupere tous les articles et affiche la vue
function getArticles()
{
  $article = new GetArticles();
  $articles = $article->sqlGetArticles();
  require_once "views/articlesView.php";
}

// Requete qui recupere un article specifique et affiche la vue
function getSingleArticle($articleID)
{
  $article = new GetArticles();
  $articles = $article->sqlGetSingleArticle($articleID);
  require_once "views/singleArticleView.php";
}
