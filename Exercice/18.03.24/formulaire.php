<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire PHP</title>
</head>
<body>
    <h2>Formulaire PHP</h2>
    <?php
    // Vérifier si les données ont été soumises
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $nom = $_POST["nom"];
        $email = $_POST["email"];

        // Vérifier si les champs ne sont pas vides
        if (!empty($nom) && !empty($email)) {
            // Afficher les données soumises
            echo "Nom : " . $nom . "<br>";
            echo "Email : " . $email;
        } else {
            echo "Veuillez remplir tous les champs.";
        }
    }
    ?>
    
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom"><br><br>

        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email"><br><br>

        <input type="submit" value="Soumettre">
    </form>
</body>
</html>
