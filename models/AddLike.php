<?php

// Require l'acces a la bdd
require_once "Database.php";

// Class qui permet d'ajouter un article
class AddLike extends Database
{
    // récupérer le nombre de like grâce à la tablede liaisons
    public function sqlNumberLike($commentId)
    {
        $database = $this->connectionDatabase();

        // compter le nombre de lignes
        $request = $database->prepare("SELECT COUNT(*) FROM likes WHERE comment_id_fk = ? ");
        $request->execute(array($commentId));

        // on ne peut pas utiliser row count 
        $nbLikes = $request->fetchColumn();

        // retourne le nombre de colonne correspondant au comment id 
        return $nbLikes;
    }


    public function sqlNumberLikeAdd($finalNumberLikes, $commentId)
    {
        $database = $this->connectionDatabase();
        $request = $database->prepare("UPDATE comments SET comment_likes = ? WHERE comment_id = ?");

        $request->execute(array($finalNumberLikes, $commentId));
    }

    public function sqlAddLike($userId, $commentId)
    {
        $database = $this->connectionDatabase();
        // deuxieme technique 
        $request = $database->prepare("INSERT INTO likes (user_id_fk, comment_id_fk) VALUES (?,?)");
        $request->execute(array($userId, $commentId));
    }
}
