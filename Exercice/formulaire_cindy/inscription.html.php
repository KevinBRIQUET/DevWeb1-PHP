<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulaire d'inscription</title>
    <style>
        #container {

            background-color: white;
            border-radius: 10px;
            padding: 20px;

        }

        #button:hover {
            background-color: black;
        }


        .centre {
            padding-top: 130px;
            width: 50%;
            margin: auto;
        }

        #ajout {
            background-color: #e8bdcf;
            color: black;
            font-size: 30px;

        }

        li a:after {
            content: "";
            display: block;
            margin: auto;
            height: 1px;
            width: 0;
            background: transparent;
            transition: 0.4s ease, 0.4s ease;
            background-color: #fff;
        }

        li a:hover:after {
            width: 90%;
            background: #fff;
        }

        li a:hover {
            background-color: #365b6d;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-black py-0 fixed-top ">
        <div class="container-fluid">

            <a class="navbar-brand fs-2 text-white" href="index.html">Accueil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-lg-end " id="navbarSupportedContent">
                <ul class="navbar-nav ">

                    <li class="nav-item">
                        <a class="nav-link active p-lg-3 pe-lg-5 text-white" aria-current="page" href="#">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active p-lg-3 pe-lg-5 text-white" href="#">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active p-lg-3 pe-lg-5 text-white" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="centre">
        <div id="container" class="container mt-3">
            <div id class="card ">
                <div class="card-header">
                    <h1 class="text-center">Formulaire d'inscription</h1>
                </div>
                <div class="card-body">

                    <?php if (!empty($success_message)) : ?>
                        <div id="ajout" class="alert alert-success text-center" role="alert">
                            <?= $success_message; ?>
                        </div>
                    <?php endif; ?>

                    <form action="" method="POST">
                        <label class="form-label">Votre prénom</label>
                        <input class="form-control" type="text" name="prenom" value="<?= $_SESSION['prenom'] ?? ''; ?>">

                        <!--  Cette ligne vérifie si le tableau $error contient une clé "prenom" et si sa valeur n'est pas vide.  -->
                        <?php if (isset($error['prenom'])) : ?>
                            <p class="text-danger fs-5">
                                <?= $error['prenom']  ?>
                            </p>
                        <?php endif; ?>

                        <label class="form-label">Votre nom</label>
                        <input class="form-control" type="text" name="nom" value="<?= $_SESSION['nom'] ?? ''; ?>">

                        <?php if (isset($error['nom'])) : ?>
                            <p class="text-danger fs-5">
                                <?= $error['nom']  ?>
                            </p>
                        <?php endif; ?>

                        <label class="form-label">Votre email</label>
                        <input class="form-control" type="email" name="email" value="<?= $_SESSION['email'] ?? ''; ?>">

                        <?php if (isset($error['email'])) : ?>
                            <p class="text-danger fs-5">
                                <?= $error['email']  ?>
                            </p>
                        <?php endif; ?>

                        <label class="form-label">Votre mot de passe</label>
                        <input class="form-control" type="password" name="mdp" minlength="8">
                        <div id="passwordHelp" class="form-text">Doit contenir au moins 8 caractères.</div>

                        <?php if (isset($error['mdp'])) : ?>
                            <p class="text-danger fs-5">
                                <?= $error['mdp']  ?>
                            </p>
                        <?php endif; ?>

                        <button id="button" class="btn btn-primary mt-3 " type="submit" name="submit">S'inscrire</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>