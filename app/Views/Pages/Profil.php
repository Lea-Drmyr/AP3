<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>L'Atelier Couture</title>
        <link rel="stylesheet" href="<?= base_url('CSS/Homestyle.css') ?>">
    </head>
<body>

        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand">AP3</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="Home">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="Patterns">Patron</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="Realisation">Realisation</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="Adhesion">Adhésion</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="Contact">Contact</a></li>
                    </ul>

                    <div class="d-flex">
                        <span class="navbar-text text-white me-3"></span>
                        <a href="<?= site_url("/logout")?>" class="btn btn-outline-light">Déconnexion</a>
                    </div>
                            <?php if(session()->get('Role') == 'Admin'):?>
                              <li class="nav-item"><a class="nav-link" href="dashboard"> DashBoard</a></li>
                            <?php endif; ?>
                </div>
            </div>
        </nav>

<div class="container mt-5">
    <h1 class="text-center">Mon Compte</h1>
    <div class="card mx-auto mt-4" style="max-width: 400px;">
        <div class="card-body">
            <h5 class="card-title text-center">Informations du compte :</h5>
            <p><strong>Nom :</strong> <?= session()->get('nom') ?></p>
            <p><strong>Prénom :</strong> <?= session()->get('prenom'); ?></p>
            <p><strong>Email :</strong> <?= session()->get('mail'); ?></p>
            <p><strong>Numéro de téléphone :</strong> <?= session()->get('numTel'); ?></p>
            <p><strong>Adresse :</strong> <?= session()->get('adresse'); ?></p>
        </div>  
    </div>

    <!-- Bouton Modifier -->
    <div class="text-center mt-3">
       <a href="/modifierAdherent/<?= session()->get('idAdherents'); ?>" class="btn btn-primary w-100">Modifier mes informations</a>
    </div>
</div>


</body>
</html>