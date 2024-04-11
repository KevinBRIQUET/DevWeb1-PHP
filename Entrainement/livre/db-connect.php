<?php


$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'bibliotheque';

try {
    $bdd = new PDO("mysql:host=$host;dbname=bibliotheque",$user, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
}

?>