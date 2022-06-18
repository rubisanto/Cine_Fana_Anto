<?php

// Require l'acces au requetes lies a la table forum
require "models/GetForum.php";

// Requete qui recupere tout les post et affiche la vue
function getForum()
{
  // mettre l'id du post en Session 
  $post = new getForum();
  $posts = $post->sqlGetForum();
  require_once "views/forumView.php";
}



//  Requete qui recupere un post specifique et affiche la vue
function getSinglePost($postID)
{
  $post = new getForum();
  $posts = $post->sqlGetSinglePost($postID);
  require_once "views/singlePostView.php";
}
