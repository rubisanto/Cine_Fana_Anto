<?php

// Require l'acces a la bdd
require_once "Database.php";

// Class qui permet d'ajouter un post
class AddPost extends Database
{
    public function sqlAddPost($title, $date, $author, $content)
    {

        $database = $this->connectionDatabase();
        $request = $database->prepare("INSERT INTO forum (post_title, post_date, post_author, post_content) VALUES (?,?,?,?)");
        $request->execute(array($title, $date, $author, $content));
    }
}
