<?php

// Require l'acces au requetes lies a la table users
require "models/CheckLogin.php";

// Verifie si l'utilisateur existe deja
function checkLogin() {
  if (isset($_POST["mail"]) && isset($_POST["password"])) {
    $mail = htmlspecialchars($_POST["mail"]);
    $password = htmlspecialchars($_POST["password"]);
    $connection = new CheckLogin();
    $connections = $connection->sqlCheckLogin($mail, $password);
  }
  require_once "views/loginView.php";
}

// Stock les donnees de la session
function createSession() {
  $_SESSION["mail"] = htmlspecialchars($_POST["mail"]);
  $_SESSION["password"] = htmlspecialchars($_POST["password"]);
  $_SESSION["connect"] = true;
  if (isset($_POST["stay_connect"]) && $_POST["stay_connect"] == "yes") {
    $mail = htmlspecialchars($_POST["mail"]);
    $password = htmlspecialchars($_POST["password"]);
    setrawcookie('mail', $mail, time()+ 364*24*3600, '/'); /* setrawcookie permet d'encoder le @ du mail */
    setcookie('password', $password, time()+ 364*24*3600, '/');
  }
  header("Location: index.php");
}

// Supprime la session
function logout() {
  $_SESSION["connect"] = false;
  require_once "views/logout.php";
}