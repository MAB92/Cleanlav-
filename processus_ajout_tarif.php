<?php
if (empty($_POST["services"])) {
    die("Le service est obligatoire");
}
if (empty($_POST["tarifs"])) {
    die("La tarif est obligatoire");
}
if (empty($_POST["machines"])) {
    die("La machine est obligatoire");
}
if (empty($_POST["type_id"])) {
    die("Le type_id est obligatoire");
}

mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);
//var_dump($_POST);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO tarif (tarif, service , type_id, machines)
        VALUES (?, ?, ? ,?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}
//var_dump($_POST["services"]);
try{
    //place code here that could potentially throw an exception
    $stmt->bind_param("ssds",$_POST["tarifs"] , $_POST["services"] , $_POST["type_id"] ,$_POST["machines"]);
                  
if ($stmt->execute()) {
    header("Location:listes_tarifs.php");
    exit;
}
 }
 catch(Exception $e)
 {
   //We will catch ANY exception that the try block will throw
 //var_dump($e);
 }






