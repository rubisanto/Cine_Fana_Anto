<?php

// Require l'acces a la bdd
require_once "Database.php";

// Class qui permet d'ajouter un article
class AddLike extends Database
{
    public function sqlNumberLike($commentId)
    {
        $database = $this->connectionDatabase();

        $request = $database->prepare("SELECT * FROM likes WHERE comment_id_fk = ?");
        $request->execute(array($commentId));
        return $request;
    }

    public function sqlNumberLikeAdd($numberLikes)
    {
        $database = $this->connectionDatabase();
        $request = $database->prepare("INSERT INTO comments (comment_likes) VALUES (?)");
        $request->execute(array($numberLikes));
    }

    public function sqlAddLike($userId, $commentId)
    {
        $database = $this->connectionDatabase();
        // deuxieme technique 
        $request = $database->prepare("INSERT INTO likes (user_id_fk, comment_id_fk) VALUES (?,?)");
        $request->execute(array($userId, $commentId));
    }
}
