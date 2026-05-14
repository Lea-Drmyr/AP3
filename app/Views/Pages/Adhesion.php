<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>L'Atelier Couture</title>
        <link rel="icon" type="image/x-icon" href="../assets/logo.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="<?= base_url('CSS/Adhesion.css') ?>">
    </head>
    <body>
        <!-- Navigation-->
                <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand">AP3</a>
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
                    <?php if(session()->get('isLoggedIn')): ?>
                            <a href="Profil" class="btn btn-outline-light me-2">Profil</a>
                            <?php if(session()->get('Role') == 'Admin'):?>
                              <li class="nav-item"><a class="nav-link" href="dashboard"> DashBoard</a></li>
                            <?php endif; ?>
                        <?php else: ?>
                        <div class="d-flex">
                            <a href="<?= site_url("/login")?>" class="btn btn-outline-light me-2">Se Connecter</a>
                        </div>
                     <?php endif; ?>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('../assets/img/tarifs.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Adhésion</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>Calculer ici le prix pour l'adhesion sur place, la ou vous pourrez venir travailler sur vos projet.
                        <br> Le prix de base est de 15€. Mais il y a une reduction de 30% pour les enfants de moins de 12ans, une reduction de 20%
                        pour les enfants de 12 à 16ans et une reduction de 10% pour ceux de 16 à 18ans.
                        <br> Et ensuite vous trouverez le formulraire d'adhésion.
                    </p>
                </div>
            </div>
        </div>
        <div class="container px-4 px-lg-5 mt-5">
            <h2>Calculateur du tarif</h2>
            <form id="calculateurForm">
                <label for="adults">Nombre d'adultes :</label>
                <input type="number" id="adults" name="adults" value="0" min="0" required><br>

                <label for="childrenUnder12">Nombre d'enfants de moins de 12 ans :</label>
                <input type="number" id="childrenUnder12" name="childrenUnder12" value="0" min="0" required><br>

                <label for="children12to16">Nombre d'enfants de 12 à 16 ans :</label>
                <input type="number" id="children12to16" name="children12to16" value="0" min="0" required><br>

                <label for="children16to18">Nombre d'enfants de 16 à 18 ans :</label>
                <input type="number" id="children16to18" name="children16to18" value="0" min="0" required><br>

                <!--<button type="submit" class="btn btn-rose mt-3">Calculer</button>-->
                <button onclick="calculateCost()" type="submit" class="btn btn-rose mt-3">Calculer</button>
                <div class="result mt-4" id="result"></div>
            </form>
          <!-- Formulaire d'adhésion-->
          <section class="form-container">
            <h2>Formulaire d'adhésion</h2>
            <form action="<?= base_url('/ajoutAdherent') ?>" method="post">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required><br>

                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required><br>

                <label for="age">Âge :</label>
                <input type="number" id="age" name="age" required><br>

                <label for="telephone">Numéro de téléphone :</label>
                <input type="tel" id="telephone" name="telephone" required><br>

                <label for="mail">Adresse e-mail :</label>
                <input type="email" id="mail" name="mail" required><br>

                <label for="motdepasse">Mot de passe :</label>
                <input type="password" id="motdepasse" name="motdepasse" required><br>

                <label for="adresse">Adresse :</label>
                <textarea id="adresse" name="adresse" rows="1" required></textarea><br>

                <button type="submit" class="btn btn-rose mt-3">Soumettre</button>
            </form>
        </section>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-pinterest fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-tiktok fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy;La Maison Couture</div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="script.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../ScriptJS/scripts.js"></script>
        <script src="../ScriptJS/calcul.js"></script>
    </body>
</html>
