<?php

// On vérifie si le formulaire a bien été envoyé
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
{
    if(!empty($_POST['firstname'])) // On vérifie le champs
    {
        $firstname = htmlspecialchars($_POST['firstname']); // On protège des failles XSS
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST">
        <label for="firstname">Prénom</label>
        <input type="text" name="firstname" placeholder="ex: John">
        <input type="submit" name="submit" value="Envoyer">
    </form>

    <?php if(isset($firstname)): ?>
    <p>Hello <?= $firstname ?></p>
    <?php endif; ?>
</body>
</html>