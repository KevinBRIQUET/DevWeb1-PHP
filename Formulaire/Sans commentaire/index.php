<?php

session_start();

if(!empty($_SESSION['customer_id'])){

    require 'data/db-connect.php';

    $query = $bdd->prepare("SELECT customer_email FROM customer WHERE customer_id = :customer_id");
    $query->execute([
        'customer_id' => $_SESSION['customer_id']
    ]);
    $customer = $query-> fetch();
}

require 'templates/index.html.php';