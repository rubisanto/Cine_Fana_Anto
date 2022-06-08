<?php

// Require l'acces aux articles et aux posts uniquement si elles n'existent pas déjà.
require_once "models/GetArticles.php";
require_once "models/GetForum.php";

// Requete qui recupere les 3 derniers articles et post et affiche la vue
function getHome()
{
  $article = new GetArticles();
  $articles = $article->sqlGetLastArticles();
  $post = new GetForum();
  $posts = $post->sqlGetLastPosts();
  require_once "views/homeView.php";
}
