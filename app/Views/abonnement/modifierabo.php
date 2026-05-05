<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un abonnement</title>
    <link rel="stylesheet" href="<?= base_url('CSS/Abonnementstyle.css') ?>">
</head>
<body>
    <h1>Modifier l'abonnement</h1>

    <form action="<?= base_url('/abonnement/update') ?>" method="post">
        <input type="hidden" name="idAbonnement" value="<?= esc($abonnement['idAbonnement']) ?>">

        <table>
            <tr>
                <td><label for="prix">Prix :</label></td>
                <td><input type="text" name="prix" id="prix" value="<?= esc($abonnement['prix']) ?>" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <button type="submit">Modifier</button>
                    <button><a href="<?= site_url('abonnement') ?>">Annuler</a></button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
