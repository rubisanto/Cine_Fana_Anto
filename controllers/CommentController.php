<?php

// Requiere l acces aux requetes lies a la table articles
require_once "models/AddComment.php";

// require_once "coontrollers/ForumController.php";

// Requete pour ajouter un commentaire
function formComment()
{

    require_once "views/addCommentView.php";
}

function postComment()
{
    // stocker l'id du Post depuis la variable de session
    $postId = $_SESSION["post_id"];

    $date = date("Y-m-d");
    // récupérer le nom de l'auteur par la session 
    $author = $_SESSION["user_pseudo"];
    $content = htmlspecialchars($_POST["content"]);
    // récupérer le user id 
    $userId = $_SESSION["user_id"];
    var_dump("ok");
    $postComment = new AddComment;
    $postComments = $postComment->sqlAddComment($date, $author, $content, $userId, $postId);
    header("Location: index.php?post=" . $postId);
}
