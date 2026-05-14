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
        <link rel="stylesheet" href="<?= base_url('CSS/Contact.css') ?>">
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
        <header class="masthead" style="background-image: url('../assets/img/contact.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Contact</h1>
                            <span class="subheading">Besoin d'aide?</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Tu as besoin d'aide ? Des idées à proposer ? Tu peux envoyer un mail ici.</p>
                        <div class="my-5">
                            <form id="contactForm" action="../php/contact_form.php" method="POST">
                                <div class="form-floating">
                                    <input class="form-control" id="names" type="text" name="names" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="names">Nom</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Entrez un nom.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="email" type="email" name="email" placeholder="Enter your email..." data-sb-validations="required,email" />
                                    <label for="email">Adresse Mail</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">Entrez une adresse mail valide.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Cette adresse mail est invalide.</div>
                                </div>
                                <div class="form-floating">
                                    <select class="form-control" id="dropdown" name="subjects" data-sb-validations="required">
                                        <option value="" disabled selected>Sélectionner une option</option>
                                        <option value="Renseignement">Renseignement</option>
                                        <option value="Aide">Aide</option>
                                        <option value="Contact">Contact</option>
                                        <option value="Autre">Autre</option>
                                    </select>
                                    <label for="dropdown">Sélectionner un motif</label>
                                    <div class="invalid-feedback" data-sb-feedback="dropdown:required">Veuillez sélectionner un motif.</div>
                                </div>                                
                                <div class="form-floating">
                                    <textarea class="form-control" id="messages" name="messages" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
                                    <label for="messages">Message</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">Entrez un message.</div>
                                </div>
                                <button class="btn btn-rose text-uppercase" id="submitButton" type="submit">Envoyer</button>
                            </form>
                        </div>
                        <script>
                            document.getElementById("contact_form").addEventListener("input", function() {
                                var name = document.getElementById("names").value;
                                var email = document.getElementById("email").value;
                                var message = document.getElementById("subjects").value;
                                var message = document.getElementById("messages").value;
                                
                                var submitButton = document.getElementById("submitButton");
                                
                                // Vérifier que tous les champs sont remplis
                                if (names && email && subjects && messages) {
                                    submitButton.disabled = false; // Activer le bouton si tous les champs sont remplis
                                } else {
                                    submitButton.disabled = true; // Sinon, laisser le bouton désactivé
                                }
                                });
                        </script>
                        <button id="openBtn">Ouvrir le planning</button>
                        <div id="myPopup" class="popup">
                            <div class="popup-content">
                                <span class="close-btn" id="closeBtn">&times;</span>
                                <h2>Horaires</h2>
                                <table border="1">
                                    <thead>
                                        <tr>
                                            <th>Jour</th>
                                            <th>Horaires</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Lundi</td>
                                            <td>9.00h-12.00h | 14.00h-17.00h</td>
                                        </tr>
                                        <tr>
                                            <td>Mardi</td>
                                            <td>8.00h-12.00h | 14.00h-17.00h</td>
                                        </tr>
                                        <tr>
                                            <td>Mercredi</td>
                                            <td>8.00h-12.00h | 14.00h-17.00h</td>
                                        </tr>
                                        <tr>
                                            <td>Jeudi</td>
                                            <td>8.00h-12.00h | 14.00h-17.00h</td>
                                        </tr>
                                        <tr>
                                            <td>Vendredi</td>
                                            <td>8.00h-12.00h | 14.00h-17.00h</td>
                                        </tr>
                                        <tr>
                                            <td>Samedi</td>
                                            <td>13.00h-17.00h</td>
                                        </tr>
                                        <tr>
                                            <td>Dimanche</td>
                                            <td>Fermer</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <script>
                            // Obtenez le bouton et le pop-up
                            let openBtn = document.getElementById("openBtn");
                            let popup = document.getElementById("myPopup");
                            let closeBtn = document.getElementById("closeBtn");
                    
                            // Ouvre le pop-up
                            openBtn.onclick = function() {
                                popup.style.display = "block";
                            }
                    
                            // Ferme le pop-up
                            closeBtn.onclick = function() {
                                popup.style.display = "none";
                            }
                    
                            // Ferme le pop-up en cliquant en dehors de celui-ci
                            window.onclick = function(event) {
                                if (event.target == popup) {
                                    popup.style.display = "none";
                                }
                            }
                        </script>
                        <p>Notre emplacement:</p>
                        <div class="map-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2864.1531264386917!2d4.078513741115816!3d44.121463622138826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b4426dbd8f8769%3A0xe1ff2db5b01dbfbb!2sLycee%20De%20La%20Salle%20Centre%20L%C3%A9onard%20De%20Vinci!5e0!3m2!1sfr!2sfr!4v1732985863902!5m2!1sfr!2sfr" 
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </main>
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
            // Activation du bouton lorsque le formulaire est valide
            document.getElementById("contactForm").addEventListener("input", function() {
                var name = document.getElementById("name").value;
                var email = document.getElementById("email").value;
                var phone = document.getElementById("phone").value;
                var message = document.getElementById("message").value;
                
                var submitButton = document.getElementById("submitButton");
                
                // Vérifier que tous les champs sont remplis
                if (name && email && phone && message) {
                    submitButton.disabled = false; // Activer le bouton si tous les champs sont remplis
                } else {
                    submitButton.disabled = true; // Sinon, laisser le bouton désactivé
                }
            });
        </script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
