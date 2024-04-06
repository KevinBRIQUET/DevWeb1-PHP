<?php

if(!empty($_GET['firstname']))
{
    $firstname = $_GET['firstname'];
}

if(!empty($_GET['lastname']))
{
    $lastname = $_GET['lastname'];
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>
<body>



    <form method="GET">
        <input type="text" name="firstname" placeholder="Prénom"> 
        <input type="text" name="lastname" placeholder="NOM">
        <input type="submit">
    </form>


    <?php if(!empty($firstname) || !empty($lastname)) : ?>
    <p>Bonjour <?= $firstname ?? '' ?> <?= $lastname ?? '' ?></p>
    <?php endif; ?>


</body>
</html>
