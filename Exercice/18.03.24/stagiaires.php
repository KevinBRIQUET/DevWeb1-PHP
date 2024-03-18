<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter des stagiaires</title>
</head>
<body>

<?php
// Tableau contenant les stagiaires
$stagiaires = [];

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];

    // Vérifie si le nom et le prénom ont été fournis
    if (!empty($nom) && !empty($prenom)) {
        // Ajoute le stagiaire au tableau des stagiaires
        $stagiaires[] = array("nom" => $nom, "prenom" => $prenom);
    }
}
?>

<h1>Ajouter des stagiaires</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br><br>
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required><br><br>
    <input type="submit" value="Ajouter">
</form>

<h2>Liste des stagiaires</h2>
<table border="1">
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
    </tr>
    <?php foreach ($stagiaires as $stagiaire): ?>
        <tr>
            <td><?php echo $stagiaire["nom"]; ?></td>
            <td><?php echo $stagiaire["prenom"]; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
