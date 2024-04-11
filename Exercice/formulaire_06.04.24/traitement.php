<?php

include 'db-connect.php';

// Vérifier si les données ont été soumises
  if ($_SERVER["REQUEST_METHOD"] == "POST") {  
// Récupérer les données du formulaire

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];

// Vérifier si les champs ne sont pas vides
    if (!empty($prenom) && !empty($nom) && !empty($mail) && !empty($mdp)){

    } else {
                echo "Veuillez remplir tous les champs.";
                die;
            }
        }

// Insert dans la base de donnée
        $requete = $bdd->prepare("INSERT INTO utilisateurs VALUES (0, :prenom, :nom, :mdp, :mail)");
        $requete->execute([
                "prenom" => $prenom,
                "nom" => $nom,
                "mdp" => $mdp,
                "mail" => $mail
        ]);
        

        echo "Inscription réussie !"; ?> <br> <?php
        echo "Prénom : $prenom"; ?> <br> <?php
        echo "Nom : $nom"; ?> <br> <?php
        echo "Adresse mail : $mail"; ?> <br> <?php


?>

