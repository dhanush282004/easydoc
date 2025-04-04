<?php
$servername = "localhost";
$username = "root";  
$password = ""; 
$dbname = "edoc"; 
$port="3306";

$database = new mysqli($servername, $username, $password, $dbname,3306);

if ($database->connect_error) {
    die("Échec de la connexion : " . $database->connect_error);
}
?>

