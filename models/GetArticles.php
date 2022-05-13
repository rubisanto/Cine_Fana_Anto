<?php

// Require l'acces a la bdd
require_once "Database.php";

// Class qui permet de faire des requetes lies a la table article
class GetArticles extends Database {
  public function sqlGetArticles() {
    $database = $this->connectionDatabase();
    $request = $database->query("SELECT * FROM articles");
    return $request;
  }
  public function sqlGetSingleArticle($articleID) {
    $database = $this->connectionDatabase();
    $request = $database->prepare("SELECT * FROM articles WHERE article_id = ?");
    $request->execute(array($articleID));
    return $request;
  }
  public function sqlGetLastArticles() {
    $database = $this->connectionDatabase();
    $request = $database->query("SELECT * FROM articles ORDER BY article_date DESC LIMIT 3");
    return $request;
  }
}