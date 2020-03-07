<?php if (file_exists('functions.php')) {
include_once 'functions.php';
} ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=" <?php if (isset($pageName)) { if ($pageName == "homepage"){echo "assets/css/style.css";}else{echo "../assets/css/style.css";}}?>">
  <link rel="stylesheet" href=" <?php if (isset($pageName)) { if ($pageName == "homepage"){echo "assets/css/navbar.css";}else{echo "../assets/css/navbar.css";}}?>">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:700|Montserrat:300,400|Roboto:700&display=swap" rel="stylesheet">
  <title>Accueil</title>
</head>
