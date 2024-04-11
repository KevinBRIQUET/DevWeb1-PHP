<?php

// On vérifie si le formulaire est envoyé
if(isset($_POST['submit_form_upload']))
{
    // On vérifie que le fichier est bien envoyé
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0)
    {

        $authorizedFileTypes = [
            'image/jpeg',
            'image/jpg',
            'image/png',
            'image/gif'
        ];

        // On vérifie le type de fichier
        if(in_array(mime_content_type($_FILES['image']['tmp_name']), $authorizedFileTypes) 
        && $_FILES['image']['type'] == mime_content_type($_FILES['image']['tmp_name']))
        {
            // On vérifie le poid du fichier
            if($_FILES['image']['size'] < 1000000)
            {
                // On renomme le fichier
                $filename = md5($_FILES['image']['name']) . '.' . pathinfo($_FILES['image']['name'])['extension'];
                move_uploaded_file($_FILES['image']['tmp_name'], 'images/ '. $filename);
            }
            else
            {
                echo "Error: Le fichier est trop volumineux.";
            }
        }
        else
        {
            echo "Error: Le fichier doit être une image (jpg,png).";
        }

    }


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" accept=".jpg,.png,.jpeg" size="1000000">

        <input type="submit" name="submit_form_upload" value="Téléverser">
    </form>
</body>
</html>