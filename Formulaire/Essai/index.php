<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php if (empty($_SESSION['customer_id'])) : ?>
    <p> Vous n'êtes pas co </p>


    <a href="registration.php">Inscription</a>
    <a href="connetion.php">Connexion</a>


<?php else: ?>
    <p>Vous êtes co avec l'adresse : <?= $customer['customer_email'] ?>

</body>
</html>