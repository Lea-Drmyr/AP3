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
        <link rel="stylesheet" href="<?= base_url('CSS/Patterns.css') ?>">
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
        <header class="masthead" style="background-image: url('../assets/img/patterns.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Patrons</h1>
                            <span class="subheading">Explications et liens.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Sur cette page vous trouverez des liens vers des sites de patrons, gratuit ou payants.</p>
                    </div>
                </div>
            </div>
        </main>
      <!-- Filtrer par catégorie -->
      <div class="container my-5">
        <label for="categorySelect">Choisir une catégorie:</label>
        <select id="categorySelect" class="form-select" onchange="filterCategory()">
            <option value="all">Tout afficher</option>
            <option value="femme">Femme</option>
            <option value="homme">Homme</option>
            <option value="enfant">Enfant</option>
            <option value="accessoires">Accessoires</option>
            <option value="autres">Tout genre/Mélangé</option>
        </select>
    </div>

    <!-- Section des articles -->
    <div class="container my-5">
        <!-- Femme -->
        <div class="container my-5">
            <div class="container my-5 post-preview femme">
                <h3 class="post-title"><a href="https://wissew.com/en/2-nos-patrons">Patrons pour femmes.</a></h3>
                <h3 class="post-subtitle">Patrons payants</h3>
                <p class="post-meta">
                    Site: <a href="https://wissew.com/en/">Wissew</a>
                </p>
            </div>
        </div>
        <!-- Homme -->
        <div class="container my-5">
            <div class="container my-5 post-preview homme">
                <h3 class="post-title"><a href="https://wissew.com/en/21-men-sewing-patterns">Patrons pour hommes.</a></h3>
                <h3 class="post-subtitle">Patrons payants</h3>
                <p class="post-meta">
                    Site: <a href="https://wissew.com/en/">Wissew</a>
                </p>
            </div>
        </div>      
        <!-- Enfant -->
        <div class="container my-5">
            <div class="container my-5 post-preview enfant">
                <h3 class="post-title"><a href="https://wissew.com/en/30-child-and-baby-sewing-pattern">Patrons pour enfant, bébé et nouveau-nés.</a></h3>
                <h3 class="post-subtitle">Patrons payants</h3>
                <p class="post-meta">
                    Site: <a href="https://wissew.com/en/">Wissew</a>
                </p>
            </div>
        </div>
        <!-- Accessoires -->
        <div class="container my-5">
            <div class="container my-5 post-preview accessoires">
                <h3 class="post-title"><a href="https://www.popcouture.fr/patrons-gratuits/accessoires/">Large choix de patrons pour des accessoires.</h3>
                <h3 class="post-subtitle">Patrons gratuits</h3>
                <p class="post-meta">
                    Site: <a href="https://www.popcouture.fr/">Pop Couture</a>
                </p>
            </div>
        </div>
        <!-- Autres -->
        <div class="container my-5">
            <div class="container my-5 post-preview autres">
                <h3 class="post-title"><a href="https://www.moodfabrics.com/blog/category/free-sewing-patterns/">Site proposant un large choix de patrons gratuit.</a></h3>
                <h3 class="post-subtitle">Patrons gratuits</h3>
                <p class="post-meta">
                    Site: <a href="https://www.moodfabrics.com/">MoodFabrics</a>
                </p>
            </div>
        </div>
        <div class="container my-5">
            <div class="container my-5 post-preview autres">
                <h3 class="post-title"><a href="https://threadsmonthly.com/free-sewing-patterns/">Site proposant un large choix de patrons gratuit.</a></h3>
                <h3 class="post-subtitle">Patrons gratuits</h3>
                <p class="post-meta">
                    Site: <a href="https://threadsmonthly.com/">Threadsmonthly</a>
                </p>
            </div>
        </div>   
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>L'ajout de liens sera effectué sur le site, et il est possible que des mises à jour ou ajouts de contenu interviennent régulièrement pour enrichir les informations.</p>
                </div>
            </div>
        </div>
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

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script>
        function filterCategory() {
            var category = document.getElementById("categorySelect").value;
            var sections = document.querySelectorAll(".post-preview");
            
            sections.forEach(function(section) {
                if (category === "all") {
                    section.style.display = "block"; // Afficher toutes les sections
                } else if (section.classList.contains(category)) {
                    section.style.display = "block"; // Afficher les sections correspondantes
                } else {
                    section.style.display = "none"; // Cacher les autres sections
                }
            });
        }
    </script>
    </body>
</html>
