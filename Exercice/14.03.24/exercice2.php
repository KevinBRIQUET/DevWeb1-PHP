<!-- Ecrire un script PHP permettant d'afficher le résultat "Bonjour {prenom}" où "prenom"
 est une valeur saisie via l'URL.
 Amélioration : faire en sorte que le prénom soit saisie via un formulaire -->
 

<?php

if(isset($_GET['prenom'])) {
    $prenom = $_GET['prenom'];
    echo "Bonjour $prenom .";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>


</head>
<body>
    
<form method="get" action=""><br><br>
    <label for="prenom">Votre prénom :</label><br><br>
    <input type="text" id="prenom" name="prenom"><br><br>
    <input type="submit" value="Envoyer"><br><br>
</form>


</body>
</html>

