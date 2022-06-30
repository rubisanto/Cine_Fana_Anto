<?php

// Requiere l acces aux requetes lies a la table articles
require_once "models/AddComment.php";

require_once "models/AddLike.php";

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

    $postComment = new AddComment;
    $postComments = $postComment->sqlAddComment($date, $author, $content, $userId, $postId);
    header("Location: index.php?post=" . $postId);
}

// ajouter un like 
function addLike($commentId)
{

    // récupérer en url l'id du comment 
    $commentId = $_GET["liked"];
    // récupérer l'ID du user
    $userId = $_SESSION["user_id"];
    // récupérer le nombre de like 
    $numberLike = new AddLike;
    $numberLikes = $numberLike->sqlNumberLike($commentId);



    //ajouter un au nombre de likes récupéré
    $finalNumberLikes = $numberLikes + 1;

    // mettre le nouveau nombre de likes en BDD
    $insertNumber = new AddLike;
    $insertNumbers = $insertNumber->sqlNumberLikeAdd($finalNumberLikes, $commentId);

    // inscrire un nouveau like avec les différents paramètres
    $putLike = new AddLike;
    $putLikes = $putLike->sqlAddLike($userId, $commentId);


    // rediriger vers le post où le commentaire a été liké 
    header('Location: index.php?page=forum');
}
