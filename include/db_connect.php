<?php
$host = "localhost";
$dbname = "projet_web_efrei"; 
$username = "root";
$password = ""; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
} catch(PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>