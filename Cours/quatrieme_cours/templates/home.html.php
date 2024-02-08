<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <h1>Accueil</h1>

    <div class="container">

        <div class="d-flex">
            <?php foreach($stagiaires as $stagiaire): ?>
            <div class="flex-col">
                <div class="stagiaire-card">
                    <h3><?= $stagiaire['nom'] ?> <?= $stagiaire['prénom'] ?></h3>
                    <p><?= $stagiaire['taille'] ?> cm</p>
                    <p><?= $stagiaire['pointure'] ?> cm</p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>