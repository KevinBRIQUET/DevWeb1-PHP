<?php

// 1. Vérification si les données sont soumises
// 2. Récupéré les données du formulaire
// 3. Vérif si les données ne sont pas vide
// 4. Inserer dans la BDD

require "db-connect.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {

$livre = $_POST['livre'];
$auteur = $_POST['auteur'];
$parution = $_POST['parution'];
$genre =$_POST['genre'];

if(!empty($livre) && !empty($auteur) && !empty($parution) && !empty($genre)) {
} else {
            echo "VEuillez remplir tout les champs";
            die;
}
}

$requete = $bdd->prepare("INSERT INTO livre VALUE (0, :livre, :auteur, :parution, :genre)");
$requete->execute([
    "livre" => $livre,
    "auteur" => $auteur,
    "parution" => $parution,
    "genre" => $genre
]);



echo "Livre rajouté avec succès !";

?>