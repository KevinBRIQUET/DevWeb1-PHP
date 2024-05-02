<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<label for="connectionMail">E-mail</label><br>
<input type="email" id="connectionEmail" placeholder="Entre votre adresse mail">

<?php if (!empty($errors['email'])): ?>
    <p><?= $errors['email'] ?></p>
<?php endif; ?>

</body>
</html>