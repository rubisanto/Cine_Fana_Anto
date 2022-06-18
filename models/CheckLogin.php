<?php

// Require l'acces a la bdd
require_once "Database.php";

// Class qui verifie si l'utlisateur existe deja ou non en bdd lors de la connexion
class CheckLogin extends Database
{
  public function sqlCheckLogin($mail)
  {
    $database = $this->connectionDatabase();
    $request = $database->prepare("SELECT user_role, user_mail, user_password FROM users WHERE user_mail = ?");
    $request->execute(array($mail));
    if ($request->rowCount() == 0) {
      return "";
    } else {
      $result = $request->fetch();
      return $result;
    }
  }
  // Fonction pour récupérer l'Id de la personne qui s'est connectée
  public function sqlGetId($mail)
  {
    $database = $this->connectionDatabase();
    $request = $database->prepare("SELECT user_id FROM users WHERE user_mail = ?");
    $request->execute(array($mail));
    $result = $request->fetch();
    // Ne récupérer que la colonne résultat
    return $result['user_id'];
  }

  // Fonction pour récupérer le pseudo de la personne qui s'est connecté 
  public function sqlGetPseudo($mail)
  {
    $database = $this->connectionDatabase();
    $request = $database->prepare("SELECT user_pseudo FROM users WHERE user_mail = ?");
    $request->execute(array($mail));
    $result = $request->fetch();
    // Ne récupérer que la colonne résultat
    return $result['user_pseudo'];
  }
}
