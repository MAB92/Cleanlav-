
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
if (($_POST["tarifs"])< 0){
    die("tarif doit être superieur à 0");
}

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
   
   //var_dump($e);
 }
?>