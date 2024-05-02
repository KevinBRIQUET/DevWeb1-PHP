<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>
    <label for ="connectionMail">E-mail</label><br>
    <input type ="email" id="connectionMail" name="connection_mail" placeholder="Entrez votre mail">
</div>

<?php if (!empty($error['email']))