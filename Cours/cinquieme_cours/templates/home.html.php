<?php require 'templates/inc.top.html.php'; ?>
    <h1>Accueil</h1>

    <div class="container">

        <div class="row">
            <?php foreach($stagiaires as $indice => $stagiaire): ?>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <small>#<?= $indice ?></small>
                        <h3><?= $stagiaire['nom'] ?> <?= $stagiaire['prénom'] ?></h3>
                        <p><?= $stagiaire['taille'] ?> cm</p>
                        <p><?= $stagiaire['pointure'] ?> cm</p>
                    </div>
                    <div class="card-footer">
                        <a href="/details.php?id=<?= $indice ?>" class="btn btn-primary">Voir details</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php require 'templates/inc.bottom.html.php'; ?>
