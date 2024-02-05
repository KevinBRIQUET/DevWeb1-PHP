<!-- ________________________________ PHP ____________________________________ -->


<?php

$bdd = new PDO('mysql:host=localhost;dbname=messagerie;charset=utf8;', 'root', ''); // relie PHP au serveur
if (isset($_POST['valider'])) { // Quand on clique sur valider, exécute ce code
    if (!empty($_POST['pseudo']) && !empty($_POST['message'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $message = nl2br(htmlspecialchars($_POST['message']));

        $insererMessage = $bdd->prepare('INSERT INTO messages(pseudo, message) VALUES(?, ?)');
        $insererMessage->execute(array($pseudo, $message));

    } else {
        echo "Veuillez renseigner tous les champs.";
    }
}

?>



<!-- ________________________________ HTML ____________________________________ -->


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Messagerie instantanée</title>
</head>


<body>
    
<h1>Messagerie</h1>

<form method="POST" action="" align="center">
    <div class="form-group">
        <label class="pseudo" for="pseudo">Pseudo : </label>
        <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo">
    </div>

    <br>

    <div class="form-group">
        <label class="messagerie" for="message">Message :</label>
        <textarea name="message" id="message" placeholder="Écrivez votre message"></textarea>
    </div>

    <br>

    <input type="submit" name="valider">
</form>
    <section id="messages"> </section>


<!-- ________________________________ JS ____________________________________ -->


<script>
    setInterval('load_messages()', 500);
    function load_messages()
    {
        $('#messages').load('loadMessages.php');
    }
    
// =_________________________________________________________________________ -->
  
</script>


</body>
</html>
