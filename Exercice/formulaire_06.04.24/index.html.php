<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">

    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>

<form action="traitement.php" method="POST">

<label for="prenom"> Entrez votre prénom </label>
<input type="text" id="prenom" name="prenom" placeholder="Prenom"><br>

<label for="nom"> Entrez votre nom </label>
<input type="text" id="nom" name="nom" placeholder="nom"><br>

<label for="mail"> Entrez votre adresse mail </label>
<input type="email" id="mail" name="mail" placeholder="Mail"><br>

<label for="mdp"> Entrez votre mot de passe </label>
<input type="password" id="mdp" name="mdp" placeholder="Mot de passe"><br>

<input type="submit" value="S'inscrire" name="ok">

</form>
</body>
</html>