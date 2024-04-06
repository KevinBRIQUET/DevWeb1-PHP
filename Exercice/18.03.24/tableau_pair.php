<?php 

// Remplir un tableau avec des nombres pairs de 1 à 20

$nombres = [];

for ($i = 0; $i <= 30; $i = $i + 2) {
    $nombres_pairs[] = $i;
}

// Afficher les nombres pairs séparés par des virgules
echo "Nombres pairs de 1 à 20 : ";
echo implode(', ', $nombres_pairs);
?>