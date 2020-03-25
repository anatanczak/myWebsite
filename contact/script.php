<?php

if (file_exists("../functions.php")){
require_once ("../functions.php");
}

if (file_exists("../db_config.php")){
require_once ("../db_config.php");
}

$db = connectToDB ();

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
global $db;
// when I require db_config this header doesn't work
// header("Location: success.php");
$addNewUserQuery = "INSERT INTO users(user_name, user_email, user_message) VALUES (:userName, :useEmail, :userMessage)";
$addUser = $db->prepare($addNewUserQuery);
$addUser->execute([
'userName' => $name, 
'useEmail' => $email,
'userMessage' => $message,
]);

// send email notification to me
$to = 'info@anastasiatanczak.com';
$subject = 'You reveived a new request on your site';
$message = 'You received a new questions from: ' . $name . ' whose email is: ' . $email . 'and they wrote :' . $message;

mail($to, $subject, $message);

include_once("success.php");
} else {
include_once("index.php");
}
?>