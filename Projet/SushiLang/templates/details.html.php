<?php require 'templates/inc.top.html.php'; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <img src="<?= $meal['photo'] ?>" class="img-fluid" alt="<?= $meal['name'] ?>">
        </div>
        <div class="col">
            <h1><?= $meal['name'] ?></h1>
            <p><?= $meal['description'] ?></p>
            <p><strong><?= $meal['price'] ?> €</strong></p>

            <form action="" method="POST">
                
                <div class="input-group mb-3">
                    <input type="hidden" name="meal_id" value="<?= $meal['id'] ?>">
                    <span class="input-group-text">Quantité</span>
                    <input type="number" class="form-control" name="qty" min="1" max="10">
                    <button class="btn btn-primary" type="submit">Ajouter au panier</button>
                </div>

            </form>
        </div>
    </div>
</div>
<?php require 'templates/inc.bottom.html.php'; ?>
