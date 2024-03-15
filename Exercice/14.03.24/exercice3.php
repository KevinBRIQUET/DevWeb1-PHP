<!-- // Ecrire un programme permmetant d'afficher une table de multiplication dont l'ordre sera
// saisie via un formulaire. Bien sûr la table doit être affichée au format HTML en utilisant
// la balise <table> -->


<!DOCTYPE html>
<html>
<head>
    <title>Exercice 3</title>
</head>

<body>

    <h2>Table de multiplication</h2>

    <form method="get" action="">
        <label for="nombre">Entrez un nombre :</label>
        <input type="number" name="nombre" id="nombre">
        <input type="submit" value="Afficher la table">
    </form>

    <?php

    if(isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];

        echo "<h3>Table de multiplication de $nombre :</h3>";

        echo "<table border='5'>";

        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>$nombre x $i</td>";
            echo "<td>" . ($nombre * $i) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
