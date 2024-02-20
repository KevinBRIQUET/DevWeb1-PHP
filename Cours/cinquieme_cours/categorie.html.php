<?php

if(!empty($_GET['id']))
{
    require 'data/db-connect.php';

    $query = $dbh->query("SELECT * FROM meal WHERE id_category = " . $_GET['id']);
    $meals = $query->fetchAll();

    require 'templates/categorie.html.php';
}
else
{
    header('Location: /');
    die;
}