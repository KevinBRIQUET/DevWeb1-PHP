<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<label for="connectionEmail">E-mail </label>
<input type="email" id="connectionEmail" name="connection_email" placeholder="Mettez votre email">

<?php if(!empty($error['email'])) : ?>
    <p> <?= $error['email'] ?> </p>
<?php endif ; ?>



</body>
</html>


