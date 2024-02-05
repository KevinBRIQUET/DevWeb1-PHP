<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tables de multiplication</title>
</head>


<body>

<?php

// Ajouter des liens pour naviguer entre les pages
echo "<p>Pages : ";
for ($i = 1; $i <= 50; $i++) {
    echo "<a href='?page=$i'>$i</a> ";
}
echo "</p>";

// Récupérer le numéro de la page depuis l'URL
$NumeroPage = isset($_GET['page']) ? intval($_GET['page']) : 1;

// Fonction pour afficher la table de multiplication
function TableMultiplication($nombre)
{
    echo "<h2>Table de multiplication de $nombre :</h2>";
    echo "<table border='5'>";
    for ($i = 1; $i <= 10; $i++) { // Débute une boucle for qui va de 1 à 10. La variable $i représente le multiplicateur dans la   table de multiplication.

        echo "<tr><td>$nombre x $i</td><td>" . ($nombre * $i) . "</td></tr>";
    }
    
    // À chaque itération de la boucle, cette ligne génère une nouvelle ligne (<tr>) dans le tableau avec deux cellules (<td>). La première cellule affiche le texte "X", indiquant la multiplication en cours (par exemple, "5 x 1"). La deuxième cellule affiche le résultat de la multiplication, qui est calculé avec $nombre * $i.

    echo "</table>";
}

// Afficher la table de multiplication de la page actuelle
TableMultiplication($NumeroPage);


?>

</body>
</html>
