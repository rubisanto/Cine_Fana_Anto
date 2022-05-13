<?php

// Require l'acces au requetes lies a la table users
require_once "models/PutInscription.php";

// Requete qui verifie si un utilisateur existe deja et affiche la vue
function checkIfAlreadyExist() {
  require_once "views/inscriptionView.php";
  if(isset($_POST["mail"]) && isset($_POST["pseudo"])) {
    $mail = $_POST["mail"];
    $pseudo = $_POST["pseudo"];
    $checkInscription = new putInscription;
    $checkInscriptions = $checkInscription->sqlCheckIfExists($mail, $pseudo);
  }
}

// Requete qui stock l'utilisateur dans la bdd
function putInscription() {
  if(isset($_POST["pseudo"]) && isset($_POST["mail"]) && isset($_POST["adress"]) && isset($_POST["dob"]) && isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["password"])) {
    $pseudo = $_POST["pseudo"];
    $mail = $_POST["mail"];
    $adress = $_POST["adress"];
    $dob = $_POST["dob"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $password = $_POST["password"];
    $inscription = new PutInscription();
    $inscriptions = $inscription->sqlPutInscription($pseudo, $mail, $adress, $dob, $firstname, $lastname, $password);
    }
  }

  // Requete qui verifie avec les cookies si l'utilisateur existe
  function checkSession($mail, $password) {
    $session = new PutInscription();
    $sessions = $session->sqlCheckIfSessionExists($mail, $password);
  }