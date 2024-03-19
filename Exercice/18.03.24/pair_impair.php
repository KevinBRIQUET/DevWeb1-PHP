<?php 

$nombres = [1, 0, 4, 7, 9, 11, 12, 13, 14, 52, 80, 90, 201, 437, 592];

$pair = [];
$impair = [];

foreach ($nombres as $nombre)
    if ($nombre % 2 == 0) {
        $pair[] = $nombre; 
    } else {
        $impair[] = $nombre;
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    
<table class="table">
    <tr>
        <th>Pair</th>
        <th>Impair</th>
    </tr>
    <tr>
        <th><?php echo implode (', ', $pair); ?> </th>
        <th><?php echo implode (', ', $impair); ?> </th>
    </tr>

</table>

</body>
</html>