<?php

// Require l'acces a la bdd
require_once "Database.php";

// Class qui permet d'ajouter un article
class AddComment extends Database
{
    public function sqlAddComment($date, $author, $content, $userId, $postId)
    {
        $database = $this->connectionDatabase();
        $request = $database->prepare("INSERT INTO comments (comment_date, comment_author, comment_content, user_id_fk, post_id_fk) VALUES (?,?,?,?,?)");
        $request->execute(array($date, $author, $content, $userId, $postId));
    }
}
