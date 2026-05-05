<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un adhérent</title>
    <link rel="stylesheet" href="<?= base_url('CSS/Adherentstyle.css') ?>">
</head>
<body>
    <h1>Modifier l'adhérent</h1>

  <form action="<?= base_url('/adherents/update') ?>" method="post">
    <input type="hidden" name="idAdherents" value="<?= esc($adherent['idAdherents']) ?>">

    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" value="<?= esc($adherent['nom']) ?>" required>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" value="<?= esc($adherent['prenom']) ?>" required>

    <label for="mail">Email :</label>
    <input type="email" name="mail" id="mail" value="<?= esc($adherent['mail']) ?>" required>

    <label for="dateNaissance">Date de naissance :</label>
    <input type="date" name="dateNaissance" id="dateNaissance" value="<?= esc($adherent['dateNaissance']) ?>" required>

    <label for="numTel">Téléphone :</label>
    <input type="text" name="numTel" id="numTel" value="<?= esc($adherent['numTel']) ?>" required>

    <label for="adresse">Adresse :</label>
    <input type="text" name="adresse" id="adresse" value="<?= esc($adherent['adresse']) ?>" required>

    <label for="MotDePasse">Mot de passe :</label>
    <input type="password" name="MotDePasse" id="MotDePasse">

    <button type="submit">Modifier</button>
    <a href="<?= site_url('adherents') ?>">Annuler</a>
</form>

</body>
</html>
