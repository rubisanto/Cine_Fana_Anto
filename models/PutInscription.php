<?php

// Require l'acces a la bdd
require_once "Database.php";

// Class qui permet de gerer les inscriptions / connexions
class PutInscription extends Database
{
  public function sqlCheckIfExists($mail, $pseudo)
  {
    $database = $this->connectionDatabase();
    $request = $database->prepare("SELECT user_mail, user_pseudo FROM users WHERE user_mail = ? AND user_pseudo = ?");
    $request->execute(array($mail, $pseudo));
    if ($request->rowCount() == 0) {
      putInscription();
    } else {
      echo "Compte deja existant";
    }
  }
  public function sqlPutInscription($firstnane, $lastname, $mail, $adress, $dob, $pseudo, $password)
  {
    $database = $this->connectionDatabase();
    $request = $database->prepare("INSERT INTO users (user_first_name, user_last_name, user_mail, user_adress, user_date_of_birth, user_pseudo, user_password) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $request->execute(array($firstnane, $lastname, $mail, $adress, $dob, $pseudo, $password));
  }
  // Verifie avec les cookies
  // public function sqlCheckIfSessionExists($mail, $password)
  // {
  //   $database = $this->connectionDatabase();
  //   $request = $database->prepare("SELECT user_mail, user_password FROM users WHERE user_mail = ? AND user_password = ?");
  //   $request->execute(array($mail, $password));
  //   if ($request->rowCount() == 1) {
  //     $_SESSION["connect"] = true;
  //   }
  // }
}
