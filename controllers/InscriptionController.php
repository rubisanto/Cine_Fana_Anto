<?php

// Require l'acces au requetes lies a la table users
require_once "models/PutInscription.php";

// Requete qui verifie si un utilisateur existe deja et affiche la vue
function checkIfAlreadyExist()
{
  if (isset($_POST["mail"]) && isset($_POST["pseudo"])) {
    $mail = htmlspecialchars($_POST["mail"]);
    $pseudo = htmlspecialchars($_POST["pseudo"]);
    $checkInscription = new putInscription;
    $checkInscriptions = $checkInscription->sqlCheckIfExists($mail, $pseudo);
  }
  require_once "views/inscriptionView.php";
}

// Requete qui stock l'utilisateur dans la bdd
function putInscription()
{
  if (isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["mail"]) && isset($_POST["address"]) && isset($_POST["dob"]) && isset($_POST["pseudo"]) && isset($_POST["password"])) {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $mail = htmlspecialchars($_POST["mail"]);
    $address = htmlspecialchars($_POST["address"]);
    $dob = htmlspecialchars($_POST["dob"]);
    $pseudo = htmlspecialchars($_POST["pseudo"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $inscription = new PutInscription();
    $inscriptions = $inscription->sqlPutInscription($firstname, $lastname, $mail, $address, $dob, $pseudo, $password);
  }
}

/* Mauvaise methode cookies
  // Requete qui verifie avec les cookies si l'utilisateur existe
  function checkSession($mail, $password) {
    $session = new PutInscription();
    $sessions = $session->sqlCheckIfSessionExists($mail, $password);
  }
*/