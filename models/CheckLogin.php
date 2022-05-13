<?php

// Require l'acces a la bdd
require_once "Database.php";

// Class qui verifie si l'utlisateur existe deja ou non en bdd lors de la connexion
class CheckLogin extends Database {
  public function sqlCheckLogin($mail, $password) {
    $database = $this->connectionDatabase();
    $request = $database->prepare("SELECT user_mail, user_password FROM users WHERE user_mail = ? AND user_password = ?");
    $request->execute(array($mail, $password));
    if ($request->rowCount() == 0) {
      echo "Compte non existant, veuillez creer un compte";
    } else {
      createSession();
    }
  }
}