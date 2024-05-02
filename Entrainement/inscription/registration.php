<?php

// On vérifie si l'utilisateur accède à la page en passant par le bouton 'Envoyer' du formulaire
if(isset($_POST['registration_submit'])) {

    // On récupère la base de données
    require 'data/db-connect.php';

    // On crée une variable 'errors' qui est un tableau vide pour stoquer les messages d'erreurs (et qui deviendra un tableau associatif)
    $errors = [];

    // VERIFICATIONS DU CHAMP EMAIL //
    // On vérifie si la clés 'Email' existe et est remplis dans le POST
    if(!empty($_POST['registration_email'])) { 

        // On défini la variable email
        $email = $_POST['registration_email'];
        
        // On fait une requête pour vérifier la disponibilité de l'email
        $query = $bdd->prepare("SELECT count(*) AS email_count FROM customer WHERE customer_email = :customer_email");
        $query->execute([
            'customer_email' => $email,
        ]);
        $usedEmail = $query-> fetch(); // Si l'email est utilisé -> $usedEmail = 1 , si elle est libre -> $usedEmail = 0

        // On vérifie si l'email est déjà utiisé
        if($usedEmail['email_count'] === 1){

            // On défini le message d'erreur : Email déjà utilisé
            $errors['email'] = 'Cet email est déjà utilisé.';

        }

    } else {

        // On défini le message d'erreur : Champ 'Email' vide
        $errors['email'] = 'Le champ \'Email\' est obligatoire.';

    }

    // VERIFICATIONS DU CHAMP MOT DE PASSE //
    // On vérifie si la clés 'Mot de passe' existe et sest remplis dans le POST
    if(!empty($_POST['registration_password'])) { 

        // On défini la variable password
        $password = $_POST['registration_password'];
        
    } else {

        // On défini le message d'erreur  : Champ 'Mot de passe' vide
        $errors['password'] = 'Le champ \'Mot de passe\' est obligatoire.';

    }

    // On vérifie si il n'y a aucune erreur en vérifiant si le tableau de la variable errors est vide
    if(empty($errors)){

        // Comme les clés 'email' et 'password' sont remplis, on insère dans la base de données
        $query = $bdd->prepare("INSERT INTO customer (customer_email,customer_password) VALUES (:customer_email, :customer_password)");
        $query->execute([
            'customer_email' => $email,
            'customer_password' => password_hash($password, PASSWORD_DEFAULT), // On hach le mot de passe (BASE DE DONNEE -> VARCHAR 255 !!!)
        ]);
        // On récupère l'ID de l'utilisateur qu'on viens de créer
        $customerId = $bdd->lastInsertId();

        // On stock l'ID du client en session POUR LE CONNECTER
        session_start();
        $_SESSION['customer_id'] = $customerId;

        // On redirige vers l'acceuil (ne pas oublier le die;)
        header('Location: /');
        die;
        
    }
}

// On affiche la page 'HTML' dans tout les cas
require 'templates/registration.html.php';