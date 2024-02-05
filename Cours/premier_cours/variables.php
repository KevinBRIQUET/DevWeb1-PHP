<?php

// Type

$string = 'Hello';

$int = 24;

$float = 1.20;

$bool = true; // false

// Operateurs

// Addition
$somme = '1' + 2;

// Concatenation

$chaine = 'Hello' . 'World';

// Logique

$et= true && false; // ET
$ou = true || false; // OU
$not = !true; // NOT : false

// Comparateurs

$test1 = 1 === '1'; 
$test2 = 1 == true;

// Fonctions utiles
echo strtolower('HELLO') . "<br>";       // Transforme la chaine de caractère en minuscule
echo strtoupper('hello') . "<br>";       // Transforme la chaine de caractère en majuscule 
echo ucfirst('kevin') . "<br>";         // Transforme la première lettre en majuscule
echo str_replace(' ','','Hello world') . "<br>"; // remplace le premier caractère (un espace) par le second (pas d'escpace)
echo str_replace(['e','o'],'','Hello world') . "<br>"; // remplace le e et o par un espace

// Structure de contrôle

if('Nicolas' == 'Théo')
{
    echo 'LOL';
}

// on peu aussi l'écrire comme ça aussi : 

if('Nicolas' == 'Théo'):
    echo 'LOL';
endif;

// ou encore (utilisez rarement car ne fonctionne que si il n'y a que une ligne):

if('Nicolas' == 'Théo')
    echo 'LOL';
    





