<?php

// On vérifie si l'utilisateur accède à la page en passant par le bouton 'Envoyer' du formulaire
if(isset($_POST['connection_submit'])) {

    // On récupère la base de données
    require 'data/db-connect.php';

    // On crée une variable 'errors' qui est un tableau vide pour stoquer les messages d'erreurs (et qui deviendra un tableau associatif)
    $errors = [];

    // VERIFICATIONS DU EMAIL //
    // On vérifie si la clés 'email' existe et est remplis dans le POST
    if(!empty($_POST['connection_email'])) { 

        // On défini la variable
        $email = $_POST['connection_email'];

    } else {

        // On défini le message d'erreur : Champ 'Email' vide
        $errors['email'] = 'Le champ \'Email\' est obligatoire.';

    }

    // VERIFICATIONS DU CHAMP MOT DE PASSSE //
    // On vérifie si la clés 'password' existe et est remplis dans le POST
    if(!empty($_POST['connection_password'])) { 

        // On défini la variable
        $password = $_POST['connection_password'];

    } else {

        // On défini le message d'erreur : Champ 'Password' vide
        $errors['password'] = 'Le champ \'Mot de passe\' est obligatoire.';

    }

    // VERIFICATIONS DE LA CORRESPONDENCE DU MOT DE PASSE //
    // On vérifie si la variable $email et la variable $password existe
    if(!empty($email) && !empty($password)) { 

        // On fait une requête pour vérifier si l'email existe en base de données
        $query = $bdd->prepare("SELECT * FROM customer WHERE customer_email = :customer_email");
        $query->execute([
            'customer_email' => $email,
        ]);
        $customer = $query-> fetch(); // Si email existant -> Tableau avec toute les infos, sinon -> null

        // On vérifie si l'email est enregistré en base de données
        if($customer){

            // On vérifie si le mot de passe renseigné par l'utilisateur corresponds au mot de passe haché en base de données
            if(password_verify($password, $customer['customer_password'])){

                // On stoque l'ID du client en session POUR LE CONNECTER
                session_start();
                $_SESSION['customer_id'] = $customer['customer_id'];

                // On redirige vers l'acceuil (ne pas oublier le die;)
                header('Location: /');
                die;
                
            } else {

                // On défini le message d'erreur : Adresse mail ou mot de passe incorrect (on reste flou pour ne pas aider les hackers)
                $errors['email'] = 'Adresse mail ou mot de passe incorrect.';
                $errors['password'] = 'Adresse mail ou mot de passe incorrect.';

            }

        } else {

            // On défini le message d'erreur : Adresse mail ou mot de passe incorrect (on reste flou pour ne pas aider les hackers)
            $errors['email'] = 'Adresse mail ou mot de passe incorrect.';
            $errors['password'] = 'Adresse mail ou mot de passe incorrect.';

        }

    }

}

// On affiche la page 'HTML' dans tous les cas
require 'templates/connection.html.php';