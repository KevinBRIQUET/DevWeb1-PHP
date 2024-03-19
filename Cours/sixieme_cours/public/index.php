<?php

// Recuperation du paramètre de la page
$page = !empty($_GET['page']) ? $_GET['page'] : 'index';

// Verification de l'existence de la page
$path = '../src/pages' . $page . 'html.php';
if(file_exists($path))
{
    // Chargement des données pour la page
    require '$path';
    // Inlusion du template correspondant à la page
    require 'templates/layout.html.php';



}

else
{
    //Erreur 404
    header('HTTP/1.1 404 Not found');
    require '../templates/404.html.php';
}

