<?php

// On vérifie que le paramètre est bien présent dans l'URL
if(isset($_GET['id'])){
    // On  vérifie que le paramètre existe en tant qu'indice dans le tableaux des stagaires
    require 'data/stagiaires.php';
    if(isset($stagiaires[$_GET['id']])){
        // Si oui on affiche la page avec les données correspondantes
        $stagiaire = $stagiaires[$_GET['id']];

        $title = "Détail de " . $stagiaire['prénom'] . " " . $stagiaire['nom'];

        require 'templates/details.html.php';
    }
    else
    {
        header('HTTP/1.0 404 Not Found'); // On change le code de status de la réponse en 404
        require 'templates/404.html.php';
        die;
    }

} else {
    // Sinon on redirige vers la page d'accueil
    header('Location: /');
    die;
}
