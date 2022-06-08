<?php

// Require l'acces au requetes lies a la table users
require "models/CheckLogin.php";

// Verifie si l'utilisateur existe deja
function checkLogin()
{
  if (isset($_POST["mail"]) && isset($_POST["password"])) {
    $mail = htmlspecialchars($_POST["mail"]);
    $connection = new CheckLogin();
    $connections = $connection->sqlCheckLogin($mail);
  }
  require_once "views/loginView.php";
}

// Stock les donnees de la session
function createSession($result)
{
  if (isset($_POST["mail"]) && isset($_POST["password"])) {
    $password = htmlspecialchars($_POST["password"]);
    if (password_verify($password, $result["user_password"])) {
      if ($result["user_role"] == "admin") {
        $_SESSION["admin"] = true;
      } else {
        $_SESSION["admin"] = false;
      }
      header("Location: index.php");
    } else {
      echo "Mot de passe erroné";
    }
  }
}

// Supprime la session
function logout()
{
  $_SESSION["connect"] = false;
  require_once "views/logout.php";
}
