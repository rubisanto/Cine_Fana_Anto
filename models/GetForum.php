<?php

// Require l'acces a la bdd
require_once "Database.php";

// Class qui permet de faire des requetes a la table forum
class GetForum extends Database
{
  public function sqlGetForum()
  {
    $database = $this->connectionDatabase();
    $request = $database->query("SELECT * FROM forum ORDER BY post_date DESC");
    return $request;
  }
  public function sqlGetSinglePost($postID)
  {
    $database = $this->connectionDatabase();
    $request = $database->prepare("SELECT * FROM forum WHERE post_id = ?");
    $request->execute(array($postID));
    return $request;
  }
  public function sqlGetLastPosts()
  {
    $database = $this->connectionDatabase();
    $request = $database->query("SELECT * FROM forum ORDER BY post_date DESC LIMIT 3;");
    return $request;
  }
  // fonction pour récupérer les commentaires les mettre dans l'ordre du plus récent 
  public function sqlGetComments($postID)
  {
    $database = $this->connectionDatabase();
    $request = $database->prepare("SELECT * FROM comments WHERE post_id_fk = ? ORDER BY comment_date DESC");
    $request->execute(array($postID));
    return $request;
  }
}
