<?php

if (file_exists("../functions.php")){
require_once ("../functions.php");
}

//get input and sanitize it
$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$name = sanitizeInputFromString($_POST["name"]);
$message = sanitizeInputFromString($_POST["message"]);

// conditions
$formIsValid = false;
$nameIsValid = false;
$emailISValid = false;
$messageIsValid = false;

// Regex

// name
if(empty($name)){
$nameError = "Le nom n'est pas valide.";
} else {
$nameIsValid = true;
}

// email
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailISValid = true;
} else {
$emailError = "Email n'est pas valide.";
};

//message
if(empty($message)){
$messageError = "Le message n'est pas valide.";
} else {
$messageIsValid = true;
}

if ($nameIsValid && $emailISValid && $messageIsValid) {
$formIsValid = true;
}

if ($formIsValid) {
header("Location: success.php");
} else {
include_once("index.php");
}
?>