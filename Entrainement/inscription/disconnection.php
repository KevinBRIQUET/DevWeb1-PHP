<?php

// On démarre la session pour avoir accès à la variable $_SESSION
session_start();

// On teste si l'utilisateur est connecté
if(!empty($_SESSION['customer_id'])){

    // On supprime la session pour DECONNECTER L'UTILISATEUR
    session_destroy();

}

// On redirige vers l'acceuil (ne pas oublier le die;) dans tout les cas
header('Location: /');
die;