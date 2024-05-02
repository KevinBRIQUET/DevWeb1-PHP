<?php

if(isset($_POST['connection_submit'])) {  // Vérifie si l'user passe bien par le bouton submit
    require 'data/db-connect.php';      // récup la BDD
    $errors = [];         // Défini la variable erreur




    if(!empty($_POST['connection_email'])) {   // Vérifie si la la clé  email existe et si elle rest remplis dans POST
        $email = $_POST['connection_email'];   // Création de la variable 

    } else {
        $errors['email'] = 'Le champ \'Email\' est obligatoire.'; 
    }

    if(!empty($_POST['connection_password'])) {     
        $password = $_POST['connection_password'];

    } else {
        $errors['password'] = 'Le champ \'Mot de passe\' est obligatoire.';
    }

    if(!empty($email) && !empty($password)) {  

        $query = $bdd->prepare("SELECT * FROM customer WHERE customer_email = :customer_email"); 
        $query->execute([
            'customer_email' => $email,
        ]);
        $customer = $query-> fetch(); 
        if($customer){

            if(password_verify($password, $customer['customer_password'])){ 

                session_start();
                $_SESSION['customer_id'] = $customer['customer_id'];

                header('Location: /');
                die;
                
            } else {

                $errors['email'] = 'Adresse mail ou mot de passe incorrect.';
                $errors['password'] = 'Adresse mail ou mot de passe incorrect.';

            }

        } else {

            $errors['email'] = 'Adresse mail ou mot de passe incorrect.';
            $errors['password'] = 'Adresse mail ou mot de passe incorrect.';

        }
    }
}

require 'templates/connection.html.php';