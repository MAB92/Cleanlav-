<?php

mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);
//var_dump($_POST);
$mysqli = require __DIR__ . "/database.php";
//supprimer de tarif avec l'id 
$sql = "DELETE FROM tarif  WHERE (id = ?)";
           
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}
//var_dump($_POST["services"]);
try{
    //place code here that could potentially throw an exception
    $stmt->bind_param("d",$_GET["id"] );
                  
if ($stmt->execute()) {
    header("Location:listes_tarifs.php");
    exit;
}
else{
    echo "tester";
}
 }
 catch(Exception $e)
 {
   //We will catch ANY exception that the try block will throw
 //var_dump($e);
 }
?>