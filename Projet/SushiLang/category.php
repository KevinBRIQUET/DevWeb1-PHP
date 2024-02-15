<?php require 'templates/inc.top.html.php';

session_start();

require 'data/db-connect.php'; ?>


<h1> Categorie </h1>


<div class="row">
    <?php foreach ($categories as $indice => $category) : ?>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card h-100" data-aos="fade-down">
                <div class="card-body">
                    <h3><?= $category['name'] ?></h3>
                </div>
                <div class="card-footer">
                    <a href="/details.php?id=<?= $category['id_category'] ?>" class="btn btn-primary">Voir details</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>




<?php require 'templates/inc.bottom.html.php'; ?>