<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des abonnements</title>
    <link rel="stylesheet" href="<?= base_url('CSS/Abonnementstyle.css') ?>">
</head>
<body>
    <h1>Liste des Abonnement </h1>
  <table border="3">
    <thead>
        <tr>
            <th>Prix</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($abonnement as $abonnement): ?>
            <tr>
                <td><?php echo ($abonnement['prix']); ?></td>
                <td><form action="/abonnement/modifierabo/<?= esc($abonnement['idAbonnement']) ?>" method="get">
                        <button type="submit">
                            <i class="fas fa-edit"></i> Modifier
                        </button>  

                    </form>
                </td>
                <td> <form action="/abonnement/supprimerabo/<?= esc($abonnement['idAbonnement']) ?>">
                        <button type="submit">
                            <i class="fas fa-trash"></i> Supprimer
                        </button>
                    </form>
                <td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<br><br>
<button><a href=<?= site_url('abonnement/createabo') ?> >Ajouter</a> </button> 
</body>
</html>   