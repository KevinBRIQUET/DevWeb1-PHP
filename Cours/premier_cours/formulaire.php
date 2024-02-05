<?php
// Début du code PHP.

// Vérifie si le paramètre 'firstname' est présent dans l'URL et non vide.
if(!empty($_GET['firstname']))
{
    // Assigne la valeur du paramètre 'firstname' à la variable $firstname.
    $firstname = $_GET['firstname'];
}

// Vérifie si le paramètre 'lastname' est présent dans l'URL et non vide.
if(!empty($_GET['lastname']))
{
// Assigne la valeur du paramètre 'lastname' à la variable $lastname.
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

<!-- - Le formulaire est configuré pour envoyer les données avec la méthode GET. Cela signifie que les données du formulaire seront ajoutées à l'URL de la page lorsque le formulaire est soumis.
 - Les champs de saisie input pour 'firstname' et 'lastname' permettent à l'utilisateur d'entrer son prénom et son nom, qui sont ensuite envoyés via l'URL lorsque le formulaire est soumis. -->

    <form method="GET">
        <input type="text" name="firstname" placeholder="Prénom"> 
        <input type="text" name="lastname" placeholder="NOM">
        <input type="submit">
    </form>

<!--  Vérifie si au moins une des variables $firstname ou $lastname n'est pas vide. Si c'est le cas, le code entre ce if et endif; sera exécuté.  -->

    <?php if(!empty($firstname) || !empty($lastname)) : ?>
    <p>Bonjour <?= $firstname ?? '' ?> <?= $lastname ?? '' ?></p>
    <?php endif; ?>


</body>
</html>