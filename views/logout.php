<?php
// Detruit la session
session_destroy();

// Detruit les cookies
setcookie('mail', $mail, time() -1, '/');
setcookie('password', $password, time() -1, '/');

// Redirige sur la page d'accueil
header("Location: index.php");