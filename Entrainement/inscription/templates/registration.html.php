<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
</head>
<body>
    <h1>Formulaire d'inscription</h1>
    
    <form method="post">
        <div>
            <label for="registrationEmail">E-mail</label><br>
            <input type="email" id="registrationEmail" name="registration_email" placeholder="Entrez votre adresse mail" value="<?= $email ?? '' ?>">

            <!-- Affiche les message d'erreurs sous l'input de l'email -->
            <?php if (!empty($errors['email'])): ?>
                <p><?= $errors['email'] ?></p>
            <?php endif; ?>

        </div>
        <br>

        <div>
            <label for="registrationPassword">Mot de passe</label><br>
            <input type="password" id="registrationPassword" name="registration_password" placeholder="Entrez votre mot de passe">

            <!-- Affiche les message d'erreurs sous l'input de du mot de passe -->
            <?php if (!empty($errors['password'])): ?>
                <p><?= $errors['password'] ?></p>
            <?php endif; ?>
            
        </div>
        <br>

        <input type="submit" id="registrationSubmit" name="registration_submit" value="S'inscire">

    </form>

    <br>
    <a href="/">Retour à l'accueil</a>

</body>
</html>