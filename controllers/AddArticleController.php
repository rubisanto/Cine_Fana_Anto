<?php

// Requiere l acces aux requetes lies a la table articles
require_once "models/AddArticle.php";

// Requete pour ajouter un article
function formAddArticle()
{
    require_once "views/addArticleView.php";
}

function addArticle()
{


    $title = htmlspecialchars($_POST['title']);
    $date = date("Y-m-d");
    $author = htmlspecialchars($_POST['pseudo']);
    $content = htmlspecialchars($_POST['content']);
    $type = htmlspecialchars($_POST['type']);
    try {

        $picture = checkImage();
    } catch (Exception $e) {
        var_dump($e->getMessage());
    }

    $addArticle = new AddArticle;
    $addArticles = $addArticle->sqlAddArticle($title, $date, $author, $content, $type, $picture);
    header("Location: index.php?page=articles");
}

function checkImage()
{

    if ($_FILES['picture']['error']) {
        switch ($_FILES['picture']['error']) {
            case 1: // UPLOAD_ERR_INI_SIZE
                throw  new Exception("La taille du fichier est plus grande que la limite autorisée par le serveur (paramètre upload_max_filesize du fichier php.ini).");
                break;
            case 2: // UPLOAD_ERR_FORM_SIZE
                throw new Exception("La taille du fichier est plus grande que la limite autorisée par le serveur (paramètre upload_max_filesize du fichier php.ini).");
                break;
            case 3: // UPLOAD_ERR_PARTIAL
                throw new Exception("La taille du fichier est plus grande que la limite autorisée par le serveur (paramètre upload_max_filesize du fichier php.ini).");
                break;
            case 4: // UPLOAD_ERR_NO_FILE
                throw new Exception("La taille du fichier est plus grande que la limite autorisée par le serveur (paramètre upload_max_filesize du fichier php.ini).");
                break;
        }
    } else {
        if ((isset($_FILES['picture']['name']) && ($_FILES['picture']['error'] == UPLOAD_ERR_OK))) {
            $chemin_destination = $_SERVER["DOCUMENT_ROOT"] . '/Cine_Fana_Anto/img/';
            move_uploaded_file($_FILES['picture']['tmp_name'], $chemin_destination . $_FILES['picture']['name']);
            return htmlspecialchars($_FILES['picture']['name']);
        } else {
            throw  new Exception("Le fichier n'a pas pu être copier dans le répertoire photos.");
        }
    }
}
