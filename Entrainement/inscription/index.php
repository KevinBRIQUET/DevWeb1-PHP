<?php

// On démarre la session pour avoir accès à la variable $_SESSION
session_start();

// On teste si l'utilisateur est connecté
if(!empty($_SESSION['customer_id'])){

    // On récupère la base de données
    require 'data/db-connect.php';

    // On récupère l'email de l'utilisateur pour l'afficher dans notre page HTML si il est connecté
    $query = $bdd->prepare("SELECT customer_email FROM customer WHERE customer_id = :customer_id");
    $query->execute([
        'customer_id' => $_SESSION['customer_id']
    ]);
    $customer = $query-> fetch();
}

// On affiche la page 'HTML' dans tout les cas
require 'templates/index.html.php';