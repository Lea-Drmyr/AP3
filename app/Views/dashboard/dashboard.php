<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="<?= base_url('CSS/dashboardstyle.css') ?>">
</head>
<body>
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

        <p>Connecté en tant que <strong><?= esc(session()->get('Identifiant')) ?></strong></p>

        <a href="<?= site_url('logout'); ?>">Déconnexion</a>

    </div>
</body>
</html>