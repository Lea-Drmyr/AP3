<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un abonnement</title>
    <link rel="stylesheet" href="<?= base_url('CSS/Abonnementstyle.css') ?>">
</head>
<body>
    <h1>Ajouter un abonnement</h1>

    <form action="<?= base_url('/abonnement/ajout') ?>" method="post">
        <?= csrf_field() ?>

        <div class="form-group">
            <label for="prix">Prix :</label>
            <input type="text" id="prix" name="prix" required>
        </div>

        <td colspan="2" style="text-align:center;">
            <button type="submit">Ajouter</button>
            <button><a href="<?= site_url('abonnement') ?>">Annuler</a></button>
        </td>
    </form>
 
</body>
</html>
