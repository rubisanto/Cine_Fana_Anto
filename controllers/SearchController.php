<?php

// Require l'acces au requetes lies a toutes les tables
require_once "models/GetSearch.php";

// Requete qui recupere dans toutes les tables et affiche la vue
function getSearch($search)
{
  $getSearch = new GetSearch();
  $articles_search = $getSearch->sqlGetSearchArticles($search);
  $comments_search = $getSearch->sqlGetSearchComments($search);
  $forum_search = $getSearch->sqlGetSearchPosts($search);
  $users_search = $getSearch->sqlGetSearchUsers($search);
  require_once "views/searchView.php";
}
