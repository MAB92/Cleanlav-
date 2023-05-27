
<?php

mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);
//var_dump($_POST);

$mysqli = require __DIR__ . "/database.php";

$sql = "UPDATE tarif SET tarif=?,service=?,type_id=?, machines=? WHERE id = ? ";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}
//var_dump($_POST["services"]);
try{
    // potentially throw an exception
    $stmt->bind_param("ssdsi",$_POST["tarifs"] , $_POST["services"] , $_POST["type_id"] ,$_POST["machines"], $_POST['id'] );
                  
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
?>