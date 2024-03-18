<?php 

$notes = [5, 6, 10, 15, 2, 20, 18, 16, 17, 11];

// 1. Ecrire le code permettant de calculer la somme de toutes les notes/
// 2. Calculer la moyenne.
// 3. Afficher les notes dans un tableau HTML et clolorier en rouge les notes inferieurs à 10 et en vert les notes > à 15


// 1.

$somme = 0;

foreach ($notes as $note) {
$somme = $somme + $note ; 
}



// 2. 

$nb_notes = 0;
$nb_notes = count($notes);

$moyenne = 0;
$moyenne = $somme / $nb_notes;

// 3. 

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Notes</title>

<style>

.rouge {
    color: red;
}

.vert {
    color: green;
}


</style>

</head>
<body>
    
<table class="table">
    <tr>
        <th><h1>Les notes :</h1></th>
    </tr>
    <tr>
        <td>
            <?php foreach ($notes as $note): ?>
                <?php if ($note < 10): ?>
                    <span class="rouge"><?php echo $note; ?></span><br>
                <?php elseif ($note > 15): ?>
                    <span class="vert"><?php echo $note; ?></span><br>
                <?php else: ?>
                    <?php echo $note; ?><br>
                <?php endif; ?>
            <?php endforeach; ?>
        </td>
    </tr>
</table>


</body>
</html>