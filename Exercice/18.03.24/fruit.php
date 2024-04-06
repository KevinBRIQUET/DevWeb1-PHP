<!-- 
// 1. Créez un tableau contenant le nom de quelques fruits
// 2. Affichez le contenu du tableau en utilisant une boucle foreach
// 3. Ajoutez un nouveau fruit à la fin du tableau
// 4. Affichez à nouveau le contenu mis à jour du tableau
// 5. Affichez le nombre total de fruits dans le tableau

-->

<?php

// 1. Créez un tableau contenant le nom de quelques fruits
$fruits = ["Pomme", "Banane", "Orange", "Fraise", "Kiwi"];

// 2. Affichez le contenu du tableau en utilisant une boucle foreach
echo "Liste des fruits : <br>";
foreach ($fruits as $fruit) {
    echo "- $fruit <br>";
}

// 3. Ajoutez un nouveau fruit à la fin du tableau
$fruits[] = "Ananas";

// 4. Affichez à nouveau le contenu mis à jour du tableau
echo "<br> Liste des fruits mise à jour : <br>";
foreach ($fruits as $fruit) {
    echo "- $fruit <br>";
}

// 5. Affichez le nombre total de fruits dans le tableau
$totalFruits = count($fruits);
echo "<br> Nombre total de fruits : $totalFruits";

?>