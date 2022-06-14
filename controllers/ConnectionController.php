<?php

// Require l'acces au requetes lies a la table users
require "models/CheckLogin.php";


// afficher le formulaire 
function formLogin()
{
  require_once "views/loginView.php";
}




// Verifie si l'utilisateur existe deja
function checkLogin()
{

  $mail = htmlspecialchars($_POST["mail"]);
  $connection = new CheckLogin();
  $userDatas = $connection->sqlCheckLogin($mail);
  if (is_string($userDatas)) {
    header('Location: index.php?page=login&error=1');
  } else {
    createSession($userDatas);
  }
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
      header('Location: index.php?page=login&error=2');
    }
  }
}

// Supprime la session
function logout()
{
  $_SESSION["connect"] = false;
  require_once "views/logout.php";
}
