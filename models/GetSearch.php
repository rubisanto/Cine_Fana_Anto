<?php

// Require l'acces a la bdd
require_once "Database.php";

// Class qui permet de faire des requetes lies a toutes les tables
class GetSearch extends Database {
  public function sqlGetSearchAdmins($search) {
    $database = $this->connectionDatabase();
    $request = $database->prepare("SELECT * FROM admins WHERE admin_pseudo LIKE ?");
    $request->execute(array("%".$search."%"));
    return $request;
  }
  public function sqlGetSearchArticles($search) {
    $database = $this->connectionDatabase();
    $request = $database->prepare("SELECT * FROM articles WHERE article_title LIKE ? OR article_author LIKE ? OR article_content LIKE ?");
    $request->execute(array("%".$search."%","%".$search."%","%".$search."%"));
    return $request;
  }
  public function sqlGetSearchComments($search) {
    $database = $this->connectionDatabase();
    $request = $database->prepare("SELECT * FROM comments WHERE comment_author LIKE ? OR comment_content LIKE ?");
    $request->execute(array("%".$search."%","%".$search."%"));
    return $request;
  }
  public function sqlGetSearchPosts($search) {
    $database = $this->connectionDatabase();
    $request = $database->prepare("SELECT * FROM forum WHERE post_title LIKE ? OR post_author LIKE ? OR post_content LIKE ?");
    $request->execute(array("%".$search."%","%".$search."%","%".$search."%"));
    return $request;
  }
  public function sqlGetSearchProducts($search) {
    $database = $this->connectionDatabase();
    $request = $database->prepare("SELECT * FROM products WHERE product_title LIKE ?");
    $request->execute(array("%".$search."%"));
    return $request;
  }
  public function sqlGetSearchUsers($search) {
    $database = $this->connectionDatabase();
    $request = $database->prepare("SELECT * FROM users WHERE users_pseudo LIKE ?");
    $request->execute(array("%".$search."%"));
    return $request;
  }
}