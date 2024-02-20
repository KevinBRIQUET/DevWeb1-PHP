<?php require 'templates/inc.top.html.php'; ?>

<h1> Insription </h1>
    <form action="#" method="post">
        <label for="nom">Nom : (*)</label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom : (*)</label>
        <input type="text" id="prenom" name="prenom" required>

        <label for="telephone">Numéro de téléphone  :</label>
        <input type="tel" id="telephone" name="telephone" pattern="[0-9]{10}" required>
        <small>Format : 0123456789</small>

        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse" required>

        <label for="email">Adresse email : (*) </label>
        <input type="email" id="email" name="email" required>

        <input type="submit" value="Envoyer">
    </form>
<p> (*) Les champs sont requis, les autres champs ne sont pas obligatoire pour l'inscription mais le sont pour les commandes en lignes </p>

<?php require 'templates/inc.bottom.html.php'; ?>
