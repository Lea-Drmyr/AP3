<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un abonnement</title>
    <link rel="stylesheet" href="<?= base_url('CSS/Abonnementstyle.css') ?>">
</head>
<body>
    <h1>Supprimer un abonnement</h1>

    <p>Êtes-vous sûr de vouloir supprimer cet abonnement ?</p>

    <table>
        <tr>
            <td><strong>ID :</strong></td>
            <td><?= esc($abonnement['idAbonnement']) ?></td>
        </tr>
        <tr>
            <td><strong>Prix :</strong></td>
            <td><?= esc($abonnement['prix']) ?> €</td>
        </tr>
    </table>

    <form action="<?= base_url('/abonnement/delete') ?>" method="post">
        <input type="hidden" name="idAbonnement" value="<?= esc($abonnement['idAbonnement']) ?>">

        <table>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <button type="submit" style="background-color:red; color:white;">Confirmer la suppression</button>
                    <button><a href="<?= site_url('abonnement') ?>">Annuler</a></button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
