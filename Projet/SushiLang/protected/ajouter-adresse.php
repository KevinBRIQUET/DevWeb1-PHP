<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['address_form_submit'])) {
    require '../lib/form.lib.php';
    $errors = checkFormRequiredsFields($_POST);

    if (empty($errors)) {

        try {

            require '../data/db-connect.php';
            $query = $dbh->prepare("INSERT INTO address (number, stret, zip_code, city) VALUES (:number, :street, :zip_code, :city)");
            $query->execute($_POST['address']['requireds']);

            if (!$dbh->lastInsertId()) {
                $alert = [
                    'status' => 'danger',
                    'message' => 'Un problème est survenu lors de l\'enregistrement.'
                ];
            } else {
                $alert = [
                    'status' => 'success',
                    'message' => 'Adresse enregistrée avec succès.'
                ];
            }
        } catch (PDOException $e) {

            $alert = [
                'status' => 'danger',
                'message' => $e->getMessage()
            ];

        }
    }
}
require '../templates/protected/ajouter-adresse.html.php';
