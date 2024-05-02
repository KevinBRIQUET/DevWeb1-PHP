<?php

/*

-------- CONNEXION -------

INTRO

1. Vérifie si l'user passe bien par le bouton submit
2. Recup la base de donnée
3. Création de la variable erreur

VERIF MAIL


1. Vérifie si la clé email existe et est remplis dans le POST
2. Défini la variable
3. Défini le message d'erreur

VERIF PASSWORD

1. Vérifie la clé password existe et est remplis dans le POST
2. Défini la variable
3. Défini le message d'erreur 

VERIF Correspondence du mot de passe 
 
1. Vérifier si la variable $email et $password existe
2. Requête SQL pour vérifier si l'email existe dans la BDD
3. Si l'email existe -> tableau avec toutes les infos, sinon -> null
4. Vérifie si l'email est enregistré dans la base de donnée
5. Vérifier le mot de passe tapé par l'user correspond au mdp haché en bdd
6. Stock l'ID du client en session pour le connecter
7. Redirige vers l'accueil
8. Défini le message d'erreur : "adresse mail ou mdp incorrect)
9. "


0. On affiche la page HTML

--------























-------- INSCRIPTION -------


INTRO

1. Vérifie si l'user passe bien par le bouton submit
2. Recup la base de donnée
3. Création de la variable erreur


VERIF MAIL

1. Vérifie si la clé email existe et est remplis dans le POST
2. Défini la variable
3. requete SQL pour vérifier si le mail est dispo
4. Vérif si l'email est utilisé
5. Défini le message d'erreur

VERIF PASSWORD

1. Vérifie la clé password existe et est remplis dans le POST
2. Défini la variable
3. Défini le message d'erreur 
4. Vérif si le tableau error est bien vide
5. Requete SQL pour mettre dans la BDD
6. Recup l'ID de l'user qu'on vient de créé
7. Stock l'ID de l'user pour le connecter
8. On redirige vers l'accueil

0. On affiche la page HTML 






















*/







