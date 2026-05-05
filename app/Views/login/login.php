<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('CSS/loginstyle.css') ?>"> 
</head>
<body>
    <div class="container">
        <h1>Connexion</h1>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="error"><?= esc(session()->getFlashdata('error')) ?></div>
        <?php endif; ?>

        <form action="<?= base_url('/loginpost') ?>" method="post">
            <label for="mail">Email :</label>
            <input type="email" name="mail" id="mail" required>

            <label for="MotDePasse">Mot de passe :</label>
            <input type="password" name="MotDePasse" id="MotDePasse" required>

            <button type="submit">Se connecter</button>
        </form>

        <p style="text-align:center; margin-top:15px;">
            Pas encore inscrit ? <a href="<?= base_url('/login/register') ?>">Créer un compte</a>
        </p>
    </div>
</body>
</html>
