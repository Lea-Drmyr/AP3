<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="<?= base_url('CSS/loginstyle.css') ?>">
</head>
<body>
    <h1>Inscription</h1>

    <form action="<?= base_url('/ajoutAdherent') ?>" method="post">
        <?= csrf_field() ?>

        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
        </div>

        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>

        <div class="form-group">
            <label for="mail">Email :</label>
            <input type="email" id="mail" name="mail" required>
        </div>

        <div class="form-group">
            <label for="dateNaissance">Date de naissance :</label>
            <input type="date" id="dateNaissance" name="dateNaissance" required>
        </div>

        <div class="form-group">
            <label for="numTel">Téléphone :</label>
            <input type="text" id="numTel" name="numTel" required>
        </div>

        <div class="form-group">
            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" required>
        </div>

        <div class="form-group">
            <label for="MotDePasse">Mot de passe :</label>
            <input type="password" id="MotDePasse" name="MotDePasse" required>
        </div>

        <div style="text-align:center; margin-top:20px;">
            <button type="submit">Ajouter</button>
            <a href="<?= site_url('login') ?>">
                <button type="button">Annuler</button>
            </a>
        </div>

    </form>
</body>
</html>
