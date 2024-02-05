<?php

// Boucle FOR
for($i=0;$i<10;$i++) // $i = $i + 1
{
    echo $i;
}

echo '<br>';

// Boucle WHILE
$j = 0;
while($j < 10)
{
    echo $j;
    $j++;
}

echo '<br>';

$tab = ['a','b','c','d','e','f']; 

// Parcours des élements
foreach($tab as $value)
{
    echo $value;
}

echo '<br>';

// Parcours des indices
for($i=0;$i<count($tab); $i++)
{
    echo $tab[$i];
}