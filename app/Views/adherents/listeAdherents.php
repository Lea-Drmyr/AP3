<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des adhérents</title>
    <link rel="stylesheet" href="<?= base_url('CSS/Adherentstyle.css') ?>">
</head>
<body>

    <h1>Liste des Adhérents : </h1>

    <table border="3">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>  
                <th>Email</th>
                <th>Date de naissance</th>
                <th>Téléphone</th>   
                <th>Adresse</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($adherents as $adherent): ?>
                <tr>
                    <td><?= esc($adherent['nom']) ?></td>
                    <td><?= esc($adherent['prenom']) ?></td>
                    <td><?= esc($adherent['mail']) ?></td>
                    <td><?= esc($adherent['dateNaissance']) ?></td>
                    <td><?= esc($adherent['numTel']) ?></td>
                    <td><?= esc($adherent['adresse']) ?></td> 

                    <td>
                        <a href="<?= base_url('/adherents/modifierAdherent/' . esc($adherent['idAdherents'])) ?>">
                            <button type="button">Modifier</button>
                        </a>
                    <td>
                       <form action="<?= base_url('/adherents/delete') ?>" method="post" style="display:inline;">
                            <input type="hidden" name="idAdherents" value="<?= esc($adherent['idAdherents']) ?>">
                            <button type="submit" style="background-color:red; color:white; border:none; padding:5px 10px;">
                                Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br><br>

    <button>
        <a href="<?= site_url('adherents/createAdherent') ?>">Ajouter un adhérent</a>
    </button>

</body>
</html>
