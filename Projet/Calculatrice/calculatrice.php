<!-- __________________________ PHP ___________________________ -->


<?php
$resultat = null;
$messageErreur = "";


// Le REQUEST est la superglobale qui vérifie si la méthode de requete est bien GET
// Le isset empêche la requête de se faire si un des champs "nombre" est null

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nombre1"], $_GET["nombre2"], $_GET["operation"])) {
    $nombre1 = $_GET["nombre1"];
    $nombre2 = $_GET["nombre2"];
    $operation = $_GET["operation"];

    // Vérifiez si les deux variables sont numériques
    if (is_numeric($nombre1) && is_numeric($nombre2)) {  // Si l'op n'utilise pas de chiffre, ça renvoit au message d'erreur en else
        switch ($operation) {
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
                if ($nombre2 != 0) {                  // si le nombre2 est zéro alors ça renvoit au message d'erreur en else
                    $resultat = $nombre1 / $nombre2;
                } else {
                    $messageErreur = "Impossible de diviser par zéro !";
                }
                break;
            default:
                $messageErreur = "Opérateur non valide.";
        }
    } else {
        $messageErreur = "Veuillez n'écrire que des nombres !";
    }
}
?>



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
                <select id="operation" name="operation" required> <!-- Créé la case des opérations -->
                    <option value="addition">+</option>
                    <option value="soustraction">-</option>
                    <option value="multiplication">*</option>
                    <option value="division">/</option>
                </select>
            </li>

            <li> <!-- nombre 2 -->
                <label for="Ecrire le deuxième nombre"></label>
                <input type="text" id="nombre2" placeholder="Nombre 2" name="nombre2" required /> <!-- Créé la case nombre 2 -->
            </li>

            <li> <!-- égal-->
                <input type="submit" value="=" />
            </li>
        </ul>
    </form>

    <!-- _________________ Les résultats en PHP _____________ -->

    <?php
    // Affichage des résultats ou des erreurs
    if ($resultat !== null) {      // vérifie si le résultat n'est pas null
        echo "<p class='resultat'>Le résultat est : $resultat <img src='pouce_haut.png'></p>";
    } elseif ($messageErreur != "") {
        echo "<p class='erreur'>$messageErreur <img src='T800-deg.png'></p>";
    }
    // Si aucune des conditions ci-dessus n'est vraie, rien ne s'affiche.
    ?>



</body>

</html>