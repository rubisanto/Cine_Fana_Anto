<?php

// Affiche la vue
function getContact() {
  require_once "views/contactView.php";
}

if (isset($_POST["name"]) && isset($_POST["subject"]) && isset($_POST["email"]) && isset($_POST["content"])) {
  $to = "killian.richard18@gmail.com";
  $name = $_POST["name"];
  $subject = $_POST["subject"];
  $email = $_POST["email"];
  $content = "De: " . $name . " (" . $email . ") \r\n" . $_POST["content"];
  if (mail($to, $subject, $content)) {
    echo "Mail envoyé";
  } else {
    echo "Erreur lors de l'envoi";
  }
}