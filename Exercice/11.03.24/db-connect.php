<?php

$host = "localhost";
$user = "root";
$password = "";
$dbName = "bibliotheque";

try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}


