<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <h1>Accueil</h1>

    <!-- Bloc à afficher si un utilisateur est connecté -->
    <?php if(empty($_SESSION['customer_id'])): ?>
        <p>Vous n'êtes pas connecté.</p>

        <div>
            <a href="registration.php">Inscription</a>
        </div>

        <div>
            <a href="connection.php">Connexion</a>
        </div>
    
    <!-- Bloc à afficher si aucun utilisateur est connecté -->
    <?php else: ?>
        <p>Vous êtes connecté avec l'adresse mail : <?= $customer['customer_email'] ?>.</p>

        <div>
            <a href="disconnection.php">Déconnexion</a>
        </div>
    <?php endif; ?>

</body>
</html>