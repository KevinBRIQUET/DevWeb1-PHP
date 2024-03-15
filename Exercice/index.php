<?php

require 'db-connect.php';

$message = '';


if (!empty($_POST)) {
    if (empty($_POST['titre'])) {
        $message = "Vous avez oublié le titre du livre";
    } elseif (empty($_POST['auteur'])) {
        $message = "Vous avez oublié l'auteur du livre";
    } elseif (empty($_POST['genre'])) {
        $message = "Vous avez oublié le genre du livre";
    } elseif (empty($_POST['annee'])) {
        $message = "Vous avez oublié l'année du livre";
    } else {

        $titre = $_POST['titre'];
        $auteur = $_POST['auteur'];
        $genre = $_POST['genre'];
        $annee = $_POST['annee'];
        $query = $dbh->query("INSERT INTO library (titre, auteur, genre, annee) VALUES ('$titre', '$auteur', '$genre', '$annee')");


        $query = $dbh->query("SELECT * FROM library");
        $library = $query->fetchAll(PDO::FETCH_ASSOC);
        $message = "Le livre a été rajouté !";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque MNS</title>
</head>

<body>

    <h1> Biblothèque MNS </h1>
    <h2> Formulaire </h2>

    <?php if (!empty($message)) : ?>
        <p> <?php echo $message; ?> </p>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="titre" placeholder="Titre du livre"><br>
        <input type="text" name="auteur" placeholder="Auteur"><br>
        <input type="text" name="genre" placeholder="Genre"><br>
        <input type="date" name="annee"><br>
        <input type="submit" value="Envoyer"><br>
    </form>


    <div>

    <h3> Liste des livres </h3>

        <p> <?= $library['titre'] ?> </p> <br>
        <p> <?= $library['auteur'] ?> </p> <br>
        <p> <?= $library['genre'] ?> </p> <br>
        <p> <?= $library['annee'] ?> </p> <br>

        
    </div>


</body>

</html>