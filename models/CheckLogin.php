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
      echo "Compte non existant";
    } else {
      $result = $request->fetch();
      createSession($result);
    }
  }
}
