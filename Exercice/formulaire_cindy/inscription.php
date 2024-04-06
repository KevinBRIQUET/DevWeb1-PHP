<?php

require 'db-connect.php';
$error = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

    if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['mdp'])) {

        if (empty($_POST['prenom'])) {
            $error['prenom'] = "Veuillez entrer votre prénom !";
        }
        if (empty($_POST['nom'])) {
            $error['nom'] = "Veuillez entrer votre nom !";
        }
        //si la variable n'est pas une adresse email valide
        if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error['email'] = "Le champs Email est obligatoire et doit être une adresse email valide !";
        }
        if (empty($_POST['mdp'])) {
            $error['mdp'] = "Veuillez entrer votre mot de passe !";
        }
    }

    // Si aucune erreur n'est détectée, insérez l'utilisateur dans la base de données
    if (empty($error)) {

        $email = $_POST['email'];
        $query = $dbh->prepare("SELECT id_user FROM user WHERE user_mail = :email");
        $query->execute(['email' => $email]);
        $userId = $query->fetch();

        if ($userId) {
            $error['email'] = 'Un compte existe déjà pour cette adresse email.';
        } else {
            $salt = "dw1";
            $query = $dbh->prepare("INSERT INTO user (user_prenom, user_nom, user_mail, user_pwd) VALUES (:prenom, :nom, :email, :mdp)");
            $query->execute([
                ':prenom' => $_POST['prenom'],
                ':nom' => $_POST['nom'],
                ':email' => $_POST['email'],
                ':mdp' => password_hash($_POST['mdp'] . $salt, PASSWORD_DEFAULT)
            ]);


            // Vérification si l'insertion s'est bien déroulée
            if ($query) {
                $success_message = "Ajout avec succès !";

                $_SESSION['prenom'] = '';
                $_SESSION['nom'] = '';
                $_SESSION['email'] = '';
            } else {

                $error[] = "Une erreur s'est produite.";
            }
        }
    } else {
        $_SESSION['prenom'] = $_POST['prenom'] ?? '';
        $_SESSION['nom'] = $_POST['nom'] ?? '';
        $_SESSION['email'] = $_POST['email'] ?? '';
    }
}


require 'inscription.html.php';
