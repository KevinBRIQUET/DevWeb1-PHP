<!DOCTYPE html>
<html>
<head>
    <title>Calcul de l'aire d'un rectangle</title>
</head>
<body>

<h2>Calcul de l'aire d'un rectangle (en cm)</h2>

<form method="post" action="">
    <label for="longueur">Longueur :</label>
    <input type="text" id="longueur" name="longueur" required><br><br>

    <label for="largeur">Largeur :</label>
    <input type="text" id="largeur" name="largeur" required><br><br>

    <input type="submit" value="Calculer">
</form>

<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs saisies
    $longueur = $_POST['longueur'];
    $largeur = $_POST['largeur'];

    // Vérifier si les valeurs sont des nombres positifs
    if (is_numeric($longueur) && is_numeric($largeur) && $longueur > 0 && $largeur > 0) {
        // Calculer l'aire du rectangle
        $aire = $longueur * $largeur;
        echo "<p>L'aire du rectangle est : $aire cm</p>";
    } else {
        echo "<p>Veuillez saisir des valeurs valides (nombres positifs).</p>";
    }
}
?>

</body>
</html>
