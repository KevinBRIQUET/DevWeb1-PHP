<!-- __________________________ HTML ___________________________ -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Calculator T-800</title>
</head>

<body>


    <h1>Calculator T-800</h1>
    <form method="get" action=""> <!-- method GET pour envoyer des données visible dans l'URL (utiliser POST pour cacher les données)-->
        <!-- Action pour choisir où sera envoyé le formulaire, on laisse vide car on reste sur la même page -->

        <ul>
            <li> <!-- nombre 1 -->
                <label for="Ecrire le premier nombre"></label>
                <input type="text" id="nombre1" placeholder="Nombre 1" name="nombre1" required /> <!-- Créé la case nombre 1 -->
            </li>

            <li> <!-- opérateur -->
                <label for="Choisir l'opération"> </label>
                <select id="operation" name="operation" required>             <!-- Créé la case des opérations -->                      
                    <option value="addition">+</option>
                    <option value="soustraction">-</option>
                    <option value="multiplication">*</option>
                    <option value="division">/</option>
                </select>
            </li>

            <li> <!-- nombre 2 -->
                <label for="Ecrire le deuxième nombre"></label>
                <input type="text" id="nombre2" placeholder="Nombre 2" name="nombre2" required />  <!-- Créé la case nombre 2 -->
            </li>

            <li> <!-- égal-->
                <input type="submit" value="=" />
            </li>
        </ul>
    </form>

</body>

</html>

<!-- __________________________ PHP ___________________________ -->


<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {                             // Vérifie si on est bien passer par un formulaire HTML de type GET
    $nombre1 = isset($_GET["nombre1"]) ? $_GET["nombre1"] : null;      // Recupère le nombre écrit dans le input nombre 1 et le met dans une variable
    $nombre2 = isset($_GET["nombre2"]) ? $_GET["nombre2"] : null;      // Recupère le nombre écrit dans le input nombre 2 et le met dans une variable
    $operation = isset($_GET["operation"]) ? $_GET["operation"] : null;  // Recupère l'opérateur écrit dans le input nombre 1 et le met dans une variable


    switch ($operation) {                  // switch permet de remplacer if, on met les conditions dans des cases
        case 'addition':
            $resultat = $nombre1 + $nombre2;
            break;
        case 'soustraction':
            $resultat = $nombre1 - $nombre2;
            break;
        case 'multiplication':
            $resultat = $nombre1 * $nombre2;

            break;
        case 'division':
            if ($nombre2 != 0) {
                $resultat = $nombre1 / $nombre2;
            } else {
                echo "Erreur: Impossible de diviser par zéro !";
            }
            break;
        default:                              // Si on rentre autre chose que les 4 opérateurs
            echo "Opérateur non valide.";
    }

    if (isset($resultat)) {
        echo "Résultat : $resultat";
    }
}
?>