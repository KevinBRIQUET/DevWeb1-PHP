<?php

if(!empty($_GET['id']))
{
    require 'data/db-connect.php';

    $query = $dbh->query("SELECT * FROM category LEFT JOIN meal ON meal.id_category = category.id_category WHERE category.id_category = " . $_GET['id']);
    $meals = $query->fetchAll();

    if(count($meals) > 0)
    {
        require 'templates/categorie.html.php';
    }
    else
    {
        header('HTTP/1.0 404 Not Found'); // On change le code de status de la réponse en 404
        require 'templates/404.html.php';
        die;
    }

}
else
{
    header('Location: /');
    die;
}