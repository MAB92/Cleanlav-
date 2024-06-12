<?php

mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);
//var_dump($_POST);
$mysqli = require __DIR__ . "/database.php";
//supprimer de user avec l'id 
$sql = "DELETE FROM user  WHERE (id = ?)";
           
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

try{
   
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
 
 }
?>