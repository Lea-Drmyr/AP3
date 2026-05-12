<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="<?= base_url('CSS/dashboardstyle.css') ?>">
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="Index.php">AP3</a>
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
                </div>
            </div>
        </nav>
    <div class="container">
        <h1>Bienvenue sur le Dashboard Admin</h1>

        <div class="menu">
            <div class="square">
                <a href="<?= site_url('abonnement') ?>">Gestion des Abonnements</a>
            </div>
       <div class="square">
                <a href="<?= site_url('adherents') ?>">Gestion des Adherents</a>
            </div>
            </div>
        </div>

    </div>
</body>
</html>