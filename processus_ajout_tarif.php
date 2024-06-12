
<?php
session_start();
//vérifier si le formulaire est valide 
if (isset($_POST['_csrf_token'])) {//si _csrf_token est defini dans $_POST
    $tokenFormulaire = $_POST['_csrf_token'];
    $tokenSession = $_SESSION["_csrf_token"];
    if($tokenFormulaire != $tokenSession){
        header('location:./ajouter_tarifs.php');
        exit;
    }
}
else{//si _csrf_token n'est pas defini dans $_POST
    header('location:./ajouter_tarifs.php?error=csrf');
    exit;
}
?>

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
//ajouter à la table  tarif 
$sql = "INSERT INTO tarif (tarif, service , type_id, machines)
        VALUES (?, ?, ? ,?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}
//var_dump($_POST["services"]);
try{
    
    $stmt->bind_param("ssds",$_POST["tarifs"] , $_POST["services"] , $_POST["type_id"]  ,$_POST["machines"]);
                  
if ($stmt->execute()) {
    header("Location:./listes_tarifs.php");
    exit;
}
 }
 catch(Exception $e)
 {
   
 //var_dump($e);
 }
?>





