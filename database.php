
<?php
$pdo = new PDO('mysql:host=localhost;dbname=cleanlav','root','');
?>

<?php

$host = "localhost";
$dbname = "cleanlav";
$username = "root";
$password = "";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;

?>