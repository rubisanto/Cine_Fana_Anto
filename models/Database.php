<?php

// Class qui permet de se connecter a la bdd
class Database
{
  protected function connectionDatabase()
  {
    try {
      $database = new PDO("mysql:host=localhost;dbname=cine_fana;charset=utf8", "root", "root");
    } catch (\Exception $e) {
      echo "Erreur: " . $e->getMessage();
    }
    return $database;
  }
}
