<?php

// Requiere l acces aux requetes lies a la table forum
require_once "models/AddPost.php";

// Requete pour ajouter un post
function formAddPost()
{
    require_once "views/addPostView.php";
}

function addPost()
{


    $title = htmlspecialchars($_POST['title']);
    $date = date("Y-m-d");
    $author = htmlspecialchars($_POST['pseudo']);
    $content = htmlspecialchars($_POST['content']);

    $addPost = new AddPost;
    $addPosts = $addPost->sqlAddPost($title, $date, $author, $content);
    header("Location: index.php?page=forum");
}
