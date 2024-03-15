<!-- Ecrire un programme PHP permettant d'afficher un damier de 8 x 8 cases. L'atlernance
entre les cases noirs et blanches doit être géré en PHP uniquement.-->
 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
    
    <style>

        td {
            width: 65px;
            height: 65px;
        }

        .noir {
            background-color: black;
        }

        .blanc {
            background-color: white;
        }

    </style>


<body>
    <table>
    <?php
        // Boucle pour générer les lignes
        for ($i = 0; $i < 8; $i++) {
            echo "<tr>";
            // Boucle pour générer les cellules
            for ($j = 0; $j < 8; $j++) {
                // Détermine si la cellule doit être noire ou blanche
                $classe = ($i + $j) % 2 == 0 ? 'blanc' : 'noir';
                echo "<td class='$classe'></td>";
            }
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>
