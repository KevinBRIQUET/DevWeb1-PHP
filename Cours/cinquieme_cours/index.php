<?php 

require 'data/db-connect.php';

$title = "Accueil";

$nbPerPage = 12;

$query = $dbh->query("SELECT COUNT(*) AS nbStagiaires FROM stagiaire");
$nbPages = ceil($query->fetch()['nbStagiaires'] / $nbPerPage);
$start = 0;
$currentPage = 1;

if(!empty($_GET['page']))
{
    $start = $_GET['page'] * $nbPerPage - $nbPerPage;
    $currentPage = $_GET['page'];
}

// Traitement du formulaire de recherche si une recherche est faite
if(!empty($_GET['search']))
{
    $search = strtolower($_GET['search']);
    $query = $dbh->query("SELECT * FROM stagiaire WHERE nom LIKE '%$search%' OR prénom LIKE '%$search%' ORDER BY nom ASC LIMIT $start,$nbPerPage");
    $stagiaires = $query->fetchAll();
    $resultCount = count($stagiaires);
}
else
{

    $query = $dbh->query("SELECT * FROM stagiaire ORDER BY nom ASC LIMIT $start,$nbPerPage");
    $stagiaires = $query->fetchAll();
}

// Affichage du template HTML
require 'templates/home.html.php';