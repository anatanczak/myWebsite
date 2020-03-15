
<?php 

if (isSet($pageName) && $pageName == "homepage") {
  if (file_exists('functions.php')) {
    include_once 'functions.php';
  }
} else {
  if (file_exists('../functions.php')) {
    include_once '../functions.php';
  }
}
$title = setTitleForPage($pageName);
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href=" <?php if (isset($pageName)) { if ($pageName == "homepage"){echo "assets/css/style.css";}else{echo "../assets/css/style.css";}}?>">
  <link rel="stylesheet" href=" <?php if (isset($pageName)) { if ($pageName == "homepage"){echo "assets/css/navbar.css";}else{echo "../assets/css/navbar.css";}}?>">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:700|Montserrat:300,400|Roboto:700&display=swap" rel="stylesheet">
<link rel="shortcut icon" type="image/ico" href=" <?php if (isset($pageName)) { if ($pageName == "homepage"){echo "assets/images/flavicon.ico";}else{echo "../assets/images/flavicon.ico";}}?>"/>
  <title><?php echo $title; ?></title>
 
</head>
