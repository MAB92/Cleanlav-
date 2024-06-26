<?php
if (empty($_POST["name"])) {
    die("Le nom est obligatoire");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Une adresse e-mail valide est requise");
}


if (strlen($_POST["password"]) < 8) {
    die("Le mot de passe doit comporter au moins 8 caractères");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Le mot de passe doit contenir au moins une lettre");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Le mot de passe doit contenir au moins un chiffre");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Les mots de passe doivent correspondre");
}

//email existant

session_start();
$mysqli = require __DIR__ . "/database.php";
$email = $_POST['email'];

$check_email ="SELECT email FROM user WHERE email = '$email' LIMIT 1";
$check_email_run =mysqli_query ($mysqli, $check_email);
if (mysqli_num_rows($check_email_run) > 0) 
{
    die("Adresse e-mail déjà prise");
}



$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";


$sql = "INSERT INTO user (name, email, password_hash , role_id)
        VALUES (?, ?, ? , 2)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss", $_POST["name"], $_POST["email"], $password_hash );
                  
if ($stmt->execute()) {
    header("Location:succès-d'inscription.php");
    exit;
    
} else {
    if ($mysqli->errno === 1062) {
        die("Adresse e-mail déjà prise");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}
?>