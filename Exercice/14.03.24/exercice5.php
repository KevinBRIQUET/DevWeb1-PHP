<!-- Rédiger un programme PHP permettant d'afficher la liste des stagiaires suivantes dans
un tableau HTML.
Vous devez afficher le texte "mineur" lorsque le stagiaire à moins de 18 ans dans
une colonne dédiée
Vous devez ajouter une couleur de fond sur chaque ligne paires du tableau -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercice 5</title>



</head>
<body>
    
<?php

$trainees = [
[
"firstname" => "John",
"lastname" => "Doe",
"age" => 20
],

[
"firstname" => "Alice",
"lastname" => "Smith",
"age" => 22
],

[
"firstname" => "Bob",
"lastname" => "Johnson",
"age" => 19
],

[
"firstname" => "Emma",
"lastname" => "Brown",
"age" => 25
],

[
"firstname" => "James",
"lastname" => "Williams",
"age" => 18
],

[
"firstname" => "Olivia",
"lastname" => "Jones",
"age" => 30
],

[
"firstname" => "Michael",

"lastname" => "Davis",
"age" => 24
],

[
"firstname" => "Sophia",
"lastname" => "Miller",
"age" => 27
],

[
"firstname" => "Matthew",
"lastname" => "Wilson",
"age" => 21
],

[
"firstname" => "Emily",
"lastname" => "Moore",
"age" => 28
],

[
"firstname" => "Daniel",
"lastname" => "Taylor",
"age" => 17
],

[
"firstname" => "Charlotte",
"lastname" => "Anderson",
"age" => 23
],

[
"firstname" => "William",
"lastname" => "Thomas",
"age" => 26
],

[
"firstname" => "Amelia",
"lastname" => "Jackson",
"age" => 29
],

[
"firstname" => "Ethan",
"lastname" => "White",
"age" => 16
],

[
"firstname" => "Mia",
"lastname" => "Harris",
"age" => 20
],

[
"firstname" => "Alexander",
"lastname" => "Martin",
"age" => 22
],

[
"firstname" => "Abigail",
"lastname" => "Thompson",
"age" => 30

],

[
"firstname" => "Ryan",
"lastname" => "Garcia",
"age" => 19
],

[
"firstname" => "Ava",
"lastname" => "Young",
"age" => 25
],

[
"firstname" => "Liam",
"lastname" => "Scott",
"age" => 18
]
];


?>



</body>
</html>