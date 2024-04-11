<?php

require "db-connect.php";

// 1. Vérification des données soumises
// 2. Récupération des données du formulaire
// 3. Vérification si les champs sont vides
// 4. Inserer dans la base de donnée

// 1. 

if ($_SERVER["REQUEST_METHOD"] == "POST"){

// 2.

    $nonFilm = $_POST['nonFilm'];
    $nonReal = $_POST['nonReal'];
}

// 3.

if (!empty($nonFilm) && !empty($nonReal)) {
    } else {
        echo "Remplissez tout le formulaire";
        die;
    } 

// 4.

 $requete = $bdd->prepare("INSERT INTO film VALUES (0, :nonFilm, :nonReal)");
 $requete->execute ([
    "nonFilm" => $nonFilm,
    "nonReal" => $nonReal,
 ]);

echo "Film rajouté !";


?>