<?php

if(isset($_POST['registration_submit'])) {
    require 'data/db-connect.php';

    $errors = [];

    if(!empty($_POST['registration_email'])) { 

        $email = $_POST['registration_email'];
        
        $query = $bdd->prepare("SELECT count(*) AS email_count FROM customer WHERE customer_email = :customer_email");
        $query->execute([
            'customer_email' => $email,
        ]);
        $usedEmail = $query-> fetch(); 

        if($usedEmail['email_count'] === 1){

            $errors['email'] = 'Cet email est déjà utilisé.';

        }

    } else {

        $errors['email'] = 'Le champ \'Email\' est obligatoire.';

    }

    if(!empty($_POST['registration_password'])) { 
        $password = $_POST['registration_password'];
        
    } else {

        $errors['password'] = 'Le champ \'Mot de passe\' est obligatoire.';
    }

    if(empty($errors)){

        $query = $bdd->prepare("INSERT INTO customer (customer_email,customer_password) VALUES (:customer_email, :customer_password)");
        $query->execute([
            'customer_email' => $email,
            'customer_password' => password_hash($password, PASSWORD_DEFAULT), 
        ]);

        $customerId = $bdd->lastInsertId();

        session_start();
        $_SESSION['customer_id'] = $customerId;

        header('Location: /');
        die;
        
    }
}

require 'templates/registration.html.php';