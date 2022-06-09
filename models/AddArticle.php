<?php

// Require l'acces a la bdd
require_once "Database.php";

// Class qui permet d'ajouter un article
class AddArticle extends Database
{
    public function sqlAddArticle($title, $date, $author, $content, $type, $picture)
    {
        $database = $this->connectionDatabase();
        $request = $database->prepare("INSERT INTO articles (article_title, article_date, article_author, article_content, article_type, article_picture) VALUES (?,?,?,?,?,?)");
        $request->execute(array($title, $date, $author, $content, $type, $picture));
    }
}
