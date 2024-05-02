<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
</head>
<body>
    <h1>Formulaire de connexion</h1>

    <form method="post">
        <div>
            <label for="connectionEmail">E-mail</label><br>
            <input type="email" id="connectionEmail" name="connection_email" placeholder="Entrez votre adresse mail" value="<?= $email ?? '' ?>">

            <!-- Affiche les message d'erreurs sous l'input de l'email -->
            <?php if (!empty($errors['email'])): ?>
                <p><?= $errors['email'] ?></p>
            <?php endif; ?>

        </div>
        <br>

        <div>
            <label for="connectionPassword">Mot de passe</label><br>
            <input type="password" id="connectionPassword" name="connection_password" placeholder="Entrez votre mot de passe">
 <!-- Affiche les message d'erreurs sous l'input du mot de passe -->
            <?php if (!empty($errors['password'])): ?>
                <p><?= $errors['password'] ?></p>
            <?php endif; ?>

        </div>
        <br>

        <input type="submit" id="connectionSubmit" name="connection_submit" value="Se connecter">

    </form>

    <br>
    <a href="/">Retour à l'accueil</a>

</body>
</html>