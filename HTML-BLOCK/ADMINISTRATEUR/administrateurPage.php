<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Lucie Belleudy">
    <meta name="description" content="Application de listes de prospects">
    <!--LINK FAVICON-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="administrateurPage.css">
    <link rel="stylesheet" type="text/css" href="../VUES/headerFooter.css">
    <link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--FONTS-->
    <title>Administrateur</title>
</head>

<body class="body-administrateur">

    <!--CHANGER LES LINKS SI ON EXPORTE-->
    <header class="container-fluid header">
        <div class="container-sm divHeader">
            <img class="logo" src="../img/logo-palantir.png" alt="logo-palantir">
            <a class="aHeader" href="../INDEX/homePage.html">
                <h1 class="h1Header"> Palantir</h1>
            </a>
            <ul class="ulHeader">
                <li class="liHeader">
                    <i class="fa-solid fa-bars"></i><a class="aHeader" href="../LISTE/listePage.php">Liste</a>
                </li>
                <li class="liHeader">
                    <i class="fa-solid fa-user"></i><a class="aHeader" href="../PROFIL/profilPage.php">Profil</a>
                    <ul class="dropdownMenu">
                        <li><a href="#">Mes info</a></li>
                        <li><a href="#">Mes listes</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>

    <main class="container-sm">

        <!---------------CONNEXION DE SESSION RÉUSSIE-------------->
        <?php
        session_start();
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            echo "<p class='bienvenue'>Bienvenue, $username!</p>";
            echo '<div class="bienvenueA"> <a href="../LOGIN/logout.php">Cerrar sesion</a></div>';
        }
        ?>

        <h1 class="administrateurH1">Administrateur</h1>

        <!---------------GESTION DES LISTES-------------------------->
        <div class="listesProspects">
            <h2>Gestion de Listes</h2>
            <form class="formListeProspect">
                <input type="text" placeholder="Nom" class="inputListeProspect">
                <input type="text" placeholder="Description" class="inputListeProspect">
                <input type="date" placeholder="Date de Creation" class="inputListeProspect">
                <input type="text" placeholder="Utilisateurs" class="inputListeProspect">
                <button class="ajouterListeProspect">Créer liste</button>
            </form>
            <table class="gestionListeProspectsTable">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Date de création</th>
                        <th>Utilisateurs</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Liste 1</td>
                        <td>Petite description de la liste</td>
                        <td>01/02/2020</td>
                        <td>Partenaires, Collaborateurs, Administrateur Fonctionnel, Administrateur Technique</td>
                        <td>
                            <button class="editerListeProspect">Editer</button>
                            <button class="eliminerListeProspect">Eliminer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Liste 2</td>
                        <td>Petite description de la liste</td>
                        <td>10/04/2023</td>
                        <td>Partenaire</td>
                        <td>
                            <button class="editerListeProspect">Editer</button>
                            <button class="eliminerListeProspect">Eliminer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Liste 3</td>
                        <td>Petite description de la liste</td>
                        <td>10/10/2021</td>
                        <td>Collaborateur</td>
                        <td>
                            <button class="editerListeProspect">Editer</button>
                            <button class="eliminerListeProspect">Eliminer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Liste 4</td>
                        <td>Petite description de la liste</td>
                        <td>15/10/2000</td>
                        <td>Administrateur Technique</td>
                        <td>
                            <button class="editerListeProspect">Editer</button>
                            <button class="eliminerListeProspect">Eliminer</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!---------------GESTION DES PROSPECTS-------------------------->
        <div class="gestionProspects">
            <h2 class="gestionProspectsH2">Gestion de Prospects</h2>
            <form class="formProspect">
                <input type="text" placeholder="Nom" class="inputProspect">
                <input type="text" placeholder="Email" class="inputProspect">
                <input type="text" placeholder="Téléphone" class="inputProspect">
                <button class="ajouterProspect">Ajouter prospect</button>
            </form>
            <table class="gestionProspectsTable">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Prospect 1</td>
                        <td>prospect1@example.com</td>
                        <td>123456789</td>
                        <td>
                            <button class="editerProspect">Editer</button>
                            <button class="eliminerProspect">Eliminer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Prospect 2</td>
                        <td>prospect2@example.com</td>
                        <td>987654321</td>
                        <td>
                            <button class="editerProspect">Editer</button>
                            <button class="eliminerProspect">Eliminer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Prospect 3</td>
                        <td>prospect3@example.com</td>
                        <td>987654321</td>
                        <td>
                            <button class="editerProspect">Editer</button>
                            <button class="eliminerProspect">Eliminer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Prospect 4</td>
                        <td>prospect4@example.com</td>
                        <td>987654321</td>
                        <td>
                            <button class="editerProspect">Editer</button>
                            <button class="eliminerProspect">Eliminer</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!---------------GESTION DES CATEGORIES-------------------------->
        <div class="categories">
            <h2 class="categoriesH2">Gestion des catégories</h2>
            <form class="formCategories">
                <input type="text" placeholder="Catégorie" class="inputCategorie">
                <input type="text" placeholder="Listes" class="inputCategorie">
                <button class="ajouterCategorie">Ajouter catégorie</button>
            </form>
            <table class="gestionCategoriesTable">
                <thead>
                    <tr>
                        <th>Catégorie</th>
                        <th>Listes</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Catégorie 1</td>
                        <td>Liste 1, Liste 4</td>

                        <td>
                            <button class="editerCategorie">Editer</button>
                            <button class="eliminerCategorie">Eliminer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Catégorie 2</td>
                        <td>Liste 5, Liste 2</td>

                        <td>
                            <button class="editerCategorie">Editer</button>
                            <button class="eliminerCategorie">Eliminer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Catégorie 3</td>
                        <td>Liste 2</td>

                        <td>
                            <button class="editerCategorie">Editer</button>
                            <button class="eliminerCategorie">Eliminer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Catégorie 4</td>
                        <td>Liste 7, Liste 10</td>
                        <td>
                            <button class="editerCategorie">Editer</button>
                            <button class="eliminerCategorie">Eliminer</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!---------------GESTION DES UTILISATEURS-------------------------->
        <div class="utilisateurs">
            <h2 class="utilisateursH2">Gestion des utilisateurs</h2>
            <form class="formUtilisateurs">
                <input type="text" placeholder="Catégorie" class="inputUtilisateur">
                <input type="text" placeholder="Nom" class="inputUtilisateur">
                <input type="text" placeholder="Username" class="inputUtilisateur">
                <input type="text" placeholder="Password" class="inputUtilisateur">
                <input type="email" placeholder="Email" class="inputUtilisateur">
                <input type="text" placeholder="Site web" class="inputUtilisateur">
                <button class="ajouterUtilisateur">Ajouter utilisateur</button>
            </form>
            <table class="gestionUtilisateursTable">
                <thead>
                    <tr>
                        <th>Catégorie</th>
                        <th>Nom</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Site web</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Partenaire</td>
                        <td>Ana Gonzalez</td>
                        <td>AnaGonzalez</td>
                        <td>Ana_Gonzalez_2023</td>
                        <td>anagonzalez@gmail.com</td>
                        <td>none</td>
                        <td>
                            <button class="editerUtilisateur">Editer</button>
                            <button class="eliminerUtilisateur">Eliminer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Administrateur technique</td>
                        <td>Pierre Martin</td>
                        <td>PierreMartin</td>
                        <td>Pierre_Martin_2023</td>
                        <td>pierremartin@gmail.com</td>
                        <td>www.studio60.ch</td>
                        <td>
                            <button class="editerUtilisateur">Editer</button>
                            <button class="eliminerUtilisateur">Eliminer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Collaborateur</td>
                        <td>Antonio Moreno</td>
                        <td>AntonioMoreno</td>
                        <td>Antonio_Moreno_2020</td>
                        <td>antoniomoreno@gmail.com</td>
                        <td>www.site.com</td>
                        <td>
                            <button class="editerUtilisateur">Editer</button>
                            <button class="eliminerUtilisateur">Eliminer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Administrateur fonctionnel</td>
                        <td>José Leblanc</td>
                        <td>JoseLeblanc</td>
                        <td>Jose_Leblanc_2019</td>
                        <td>joseleblanc@gmail.com</td>
                        <td>www.lesite.com</td>
                        <td>
                            <button class="editerUtilisateur">Editer</button>
                            <button class="eliminerUtilisateur">Eliminer</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <footer class="container-fluid footer">
        <div class="container-sm divFooter">
            <div class="divFooterItems1">
                <a href="../INDEX/homePage.html" class="aFooter">
                    <img class="logo" src="../img/logo-palantir.png" alt="logo-palantir">
                    <h2 class="h2Footer">Palantir</h2>
                </a>
                <p class="pFooter">Download the app by clicking the link below</p>
                <p class="pFooter"><button class="buttonFooter">Google Play</button> <button class="buttonFooter">App
                        Store</button></p>
            </div>
            <div class="divFooterItems2">
                <div class="divFooterContent2">
                    <h3 class="h3Footer">Pages</h3>
                    <ul class="ulFooter">
                        <li class="liFooter"><a class="aFooter" href="../LISTE/listePage.php">Listes</a></li>
                        <li class="liFooter"><a class="aFooter" href="../PROFIL/profilPage.php"> Profil</a></li>
                        <li class="liFooter"><a class="aFooter" href="../INDEX/homePage.html"> Home</a></li>
                    </ul>
                </div>
            </div>
            <div class="divFooterItems">
                <h3 class="h3Footer">Service</h3>
                <ul class="ulFooter">
                    <li class="liFooter"><a class="aFooter" href="https://studio60.ch/" target="_blank"> The Studio
                            60</a></li>
                    <li class="liFooter"><a class="aFooter" href="../INDEX/homePage.html"> Palantir </a></li>
                </ul>
            </div>
            <div class="divFooterItems">
                <h3 class="h3Footer">Contact</h3>
                <ul class="ulFooter">
                    <li class="liFooter"><i class="fa-solid fa-phone iFooter" style="margin: 0;"></i><a class="aFooter" href="tel:+41435433345"> +41 43
                            543 33 45 </a></li>
                    <li class="liFooter"><i class="fa-solid fa-envelope iFooter" style="margin: 0;"></i><a class="aFooter" href="mailto:thestudio60@gmail.com"> thestudio60@gmail.com </a></li>
                    <li class="liFooter"><i class="fa-solid fa-location-dot iFooter" style="margin: 0;"></i> Boulevard
                        de Grancy
                        29<br>1006
                        Laussane</li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="../script.js"></script>
</body>

</html>