<?php

// On vérifie si l'utilisateur accède à la page en passant par le bouton 'Envoyer' du formulaire

    // On récupère la base de données

    // On crée une variable 'errors' qui est un tableau vide pour stoquer les messages d'erreurs (et qui deviendra un tableau associatif)

    // VERIFICATIONS DU EMAIL //
    // On vérifie si la clés 'email' existe et est remplis dans le POST

        // On défini la variable



        // On défini le message d'erreur : Champ 'Email' vide


    // VERIFICATIONS DU CHAMP MOT DE PASSSE //
    // On vérifie si la clés 'password' existe et est remplis dans le POST

        // On défini la variable

   

        // On défini le message d'erreur : Champ 'Password' vide

    

    // VERIFICATIONS DE LA CORRESPONDENCE DU MOT DE PASSE //
    // On vérifie si la variable $email et la variable $password existe

        // On fait une requête pour vérifier si l'email existe en base de données

         // Si email existant -> Tableau avec toute les infos, sinon -> null

        // On vérifie si l'email est enregistré en base de données
       

            // On vérifie si le mot de passe renseigné par l'utilisateur corresponds au mot de passe haché en base de données

                // On stock l'ID du client en session POUR LE CONNECTER

                // On redirige vers l'acceuil (ne pas oublier le die;)
                

                // On défini le message d'erreur : Adresse mail ou mot de passe incorrect (on reste flou pour ne pas aider les hackers)


            // On défini le message d'erreur : Adresse mail ou mot de passe incorrect (on reste flou pour ne pas aider les hackers)



// On affiche la page 'HTML' dans tous les cas
