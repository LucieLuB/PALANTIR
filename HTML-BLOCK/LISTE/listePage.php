<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Lucie Belleudy">
    <meta name="description" content="Aplicacion de listas de prospectos">
    <!--LINK FAVICON-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../VUES/headerFooter.css">
    <link rel="stylesheet" type="text/css" href="listePage.css">
    <link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../script.js"></script>
    <!--FONTS-->
    <title>Liste Prospects</title>
</head>

<body class="body-liste">
    <!--CHANGER LES LINKS SI ON EXPORTE-->

    <header class="container-fluid header">
        <div class="container-sm divHeader">
            <img class="logo" src="../img/logo-palantir.png" alt="logo-palantir">
            <a class="aHeader" href="../INDEX/homePage.html">
                <h1 class="h1Header"> Palantir</h1>
            </a>
            <ul class="ulHeader">
                <li class="liHeader"><i class="fa-solid fa-bars"></i><a class="aHeader" href="listePage.php">Liste</a>
                </li>
                <li class="liHeader"><i class="fa-solid fa-user"></i><a class="aHeader" href="../PROFIL/profilPage.php">Profil</a>
                </li>
            </ul>
        </div>
    </header>

    <main class="container-sm">

        <!---------------CONNEXION SESSION RÉUSSIE-------------->
        <?php
        session_start();
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            echo "<p class='bienvenue'>Bienvenue, $username!</p>";
            echo '<div class="bienvenueA"> <a href="../LOGIN/logout.php">Cerrar sesion</a></div>';
        }
        ?>

        <!-----------------------BUTTONS CATEGORIES RECHERCHE-------------------------->
        <div class="dropdown listePage ">
            <button class="btn  dropdown-toggle listePageButton" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                Select Category
            </button>
            <ul class="dropdown-menu dropdown-menu-dark listePageUl" aria-labelledby="dropdownMenuButton2">
                <li class="listePageLi"><a class="dropdown-item active" href="#">Category 1</a></li>
                <li class="listePageLi"><a class="dropdown-item" href="#">Category 2</a></li>
                <li class="listePageLi"><a class="dropdown-item" href="#">Category 3</a></li>
            </ul>
            <button class="btn  dropdown-toggle listePageButton" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                Select Category
            </button>
            <ul class="dropdown-menu dropdown-menu-dark listePageUl" aria-labelledby="dropdownMenuButton2">
                <li class="listePageLi"><a class="dropdown-item active" href="#">Category 1</a></li>
                <li class="listePageLi"><a class="dropdown-item" href="#">Category 2</a></li>
                <li class="listePageLi"><a class="dropdown-item" href="#">Category 3</a></li>
            </ul>
            <button class="btn  dropdown-toggle listePageButton" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                Select Category
            </button>
            <ul class="dropdown-menu dropdown-menu-dark listePageUl" aria-labelledby="dropdownMenuButton2">
                <li class="listePageLi"><a class="dropdown-item active" href="#">Category 1</a></li>
                <li class="listePageLi"><a class="dropdown-item" href="#">Category 2</a></li>
                <li class="listePageLi"><a class="dropdown-item" href="#">Category 3</a></li>
            </ul>
            <button class="btn  dropdown-toggle listePageButton" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                Select Category
            </button>
            <ul class="dropdown-menu dropdown-menu-dark listePageUl" aria-labelledby="dropdownMenuButton2">
                <li class="listePageLi"><a class="dropdown-item active" href="#">Category 1</a></li>
                <li class="listePageLi"><a class="dropdown-item" href="#">Category 2</a></li>
                <li class="listePageLi"><a class="dropdown-item" href="#">Category 3</a></li>
            </ul><br>

            <button class="btn btn-search listePageButtonSearch container-sm">Search</button>
        </div>

        <!------------------TITRE PRINCIPAL------------------------------>
        <h1 class="listeH1">Toutes les listes <a class="listeH1A" href="#"> <button id="show-div"><i class="fa-solid fa-sliders listeH1I"></i></button></a></h1>

        <!----------------------DIV CACHÉ------------------------------>
        <div id="hidden-div" class="hidden-div">
            <!-- Contenue du div caché -->
            <span class="hidden-divSpan" id="critereRecherche">Critères recherche</span>
            <form class="formFiltres">
                <p>
                    <label for="secteurActivite">Secteur d'activité</label>
                    <select id="secteurActivite" name="secteurActivite" onchange="updateCritere('secteurActivite')">
                        <option value="opción1">Secteur 1</option>
                        <option value="opción2">Secteur 2</option>
                        <option value="opción3">Secteur 3</option>
                    </select>
                </p>
                <p>
                    <label for="region">Région</label>
                    <select id="region" name="region">
                        <option value="opción1">Région 1</option>
                        <option value="opción2">Région 2</option>
                        <option value="opción3">Région 3</option>
                    </select>
                </p>
                <p>
                    <label for="tailleEntreprise">Taille entreprise</label>
                    <select id="tailleEntreprise" name="tailleEntreprise">
                        <option value="opción1">Taille 1</option>
                        <option value="opción2">Taille 2</option>
                        <option value="opción3">Taille 3</option>
                    </select>
                </p>
                <p>
                    <label for="anciennete">Ancienneté</label>
                    <select id="anciennete" name="anciennete">
                        <option value="opción1">Ancienneté 1</option>
                        <option value="opción2">Ancienneté 2</option>
                        <option value="opción3">Ancienneté 3</option>
                    </select>
                </p>
                <p>
                    <label for="typeEntreprise">Type d'entreprise</label>
                    <select id="typeEntreprise" name="typeEntreprise">
                        <option value="opción1">Type 1</option>
                        <option value="opción2">Type 2</option>
                        <option value="opción3">Type 3</option>
                    </select>
                </p>
                <p>
                    <label for="roleContact">Rôle contact</label>
                    <select id="roleContact" name="roleContact">
                        <option value="opción1">Rôle 1</option>
                        <option value="opción2">Rôle 2</option>
                        <option value="opción3">Rôle 3</option>
                    </select>
                </p>
                <p>
                    <label for="langue">Langue</label>
                    <select id="langue" name="langue">
                        <option value="opción1">Langue 1</option>
                        <option value="opción2">Langue 2</option>
                        <option value="opción3">langue 3</option>
                    </select>
                </p>
                <p>
                    <label for="motsCles">Mots-clés</label>
                    <select id="motsCles" name="motsCles">
                        <option value="opción1">Mots-clés 1</option>
                        <option value="opción2">Mots-clés 2</option>
                        <option value="opción3">Mots-clés 3</option>
                    </select>
                </p>
                <p>
                    <label for="produitsServices">Produits/Services</label>
                    <select id="produitsServices" name="produitsServices">
                        <option value="opción1">Produit 1</option>
                        <option value="opción2">Produit 2</option>
                        <option value="opción3">Produit 3</option>
                    </select>
                </p>
                <p>
                    <label for="chiffreAffaire">Chiffre d'affaire</label>
                    <select id="chiffreAffaire" name="chiffreAffaire">
                        <option value="opción1">Chiffre 1</option>
                        <option value="opción2">Chiffre 2</option>
                        <option value="opción3">Chiffre 3</option>
                    </select>
                </p>
                <p>
                    <label for="typeEntreprise">Type d'entreprise</label>
                    <select id="typeEntreprise" name="typeEntreprise">
                        <option value="opción1">Type 1</option>
                        <option value="opción2">Type 2</option>
                        <option value="opción3">Type 3</option>
                    </select>
                </p>
                <p>
                    <label for="roleContact">Rôle contact</label>
                    <select id="roleContact" name="roleContact">
                        <option value="opción1">Rôle 1</option>
                        <option value="opción2">Rôle 2</option>
                        <option value="opción3">Rôle 3</option>
                    </select>
                </p>
            </form>

            <button class="btn btn-search listePageButtonSearch container-sm">Search</button>
        </div>

        <!------------------DIVS PROSPECT------------------------------>
        <div class="divsProspect">
            <div class="prospect">
                <img class="prospectImg" src="../img/placeholderlogo.png" alt="logo-la-florecida" width="90" height="67">
                <h2 class="prospectH2">La Florecida SL</h2>
                <p class="prospectP"><i class="fa-solid fa-location-dot"></i> Berne</p>
                <p class="prospectP">Commerce et Vente</p>
                <p class="prospectP">2 contacts</p>
                <p class="prospectP">35 employés</p>
                <a class="prospectA" href="../DETAILS/detailsProspectPage.php"><i class="fa-solid fa-circle-chevron-right"></i>
                    Plus
                    d'informations</a>
                <button class="prospectB container-sm"> Ajouter à ma liste</button>
            </div>
            <div class="prospect">
                <img class="prospectImg" src="../img/drexxine-logo.png" alt="logo-drexxine" width="90" height="67">
                <h2 class="prospectH2">Drexxine</h2>
                <p class="prospectPDrexxine"><i class="fa-solid fa-location-dot"></i> Zürich</p>
                <p class="prospectP">Communication</p>
                <p class="prospectP">1 contacts</p>
                <p class="prospectP">18 employés</p>
                <a class="prospectA" href="../DETAILS/detailsProspectPage.php"><i class="fa-solid fa-circle-chevron-right"></i>
                    Plus
                    d'informations</a>
                <button class="prospectB container-sm"> Ajouter à ma liste</button>
            </div>
            <div class="prospect">
                <img class="prospectImg" src="../img/tattoo-studio-logo.png" alt="logo-tattoo-studio" width="90" height="67">
                <h2 class="prospectH2">Tattoo Studio</h2>
                <p class="prospectPTattoo"><i class="fa-solid fa-location-dot"></i> Berne</p>
                <p class="prospectP">Service personnel</p>
                <p class="prospectP">3 contacts</p>
                <p class="prospectP">5 employés </p>
                <a class="prospectA" href="../DETAILS/detailsProspectPage.php"><i class="fa-solid fa-circle-chevron-right"></i>
                    Plus d'informations</a>
                <button class="prospectB container-sm"> Ajouter à ma liste</button>
            </div>
            <div class="prospect">
                <img class="prospectImg" src="../img/nature-sarl-logo.png" alt="logo-nature-sarl" width="90" height="67">
                <h2 class="prospectH2">Nature SARL</h2>
                <p class="prospectPNature"><i class="fa-solid fa-location-dot"></i> Laussane</p>
                <p class="prospectP">Agroalimentaire</p>
                <p class="prospectP">5 contacts</p>
                <p class="prospectP">110 employés </p>
                <a class="prospectA" href="../DETAILS/detailsProspectPage.php"><i class="fa-solid fa-circle-chevron-right"></i>
                    Plus d'informations</a>
                <button class="prospectB container-sm"> Ajouter à ma liste</button>
            </div>
            <div class="prospect">
                <img class="prospectImg" src="../img/la-florecida-logo.png" alt="logo-la-florecida" width="90" height="67">
                <h2 class="prospectH2">La Florecida SL</h2>
                <p class="prospectP"><i class="fa-solid fa-location-dot"></i> Berne</p>
                <p class="prospectP">Commerce et Vente</p>
                <p class="prospectP">2 contacts</p>
                <p class="prospectP">35 employés </p>
                <a class="prospectA" href="../DETAILS/detailsProspectPage.php"><i class="fa-solid fa-circle-chevron-right"></i>
                    Plus d'informations</a>
                <button class="prospectB container-sm"> Ajouter à ma liste</button>
            </div>
            <div class="prospect">
                <img class="prospectImg" src="../img/placeholderlogo.png" alt="logo-drexxine" width="90" height="67">
                <h2 class="prospectH2">Drexxine</h2>
                <p class="prospectPDrexxine"><i class="fa-solid fa-location-dot"></i> Zürich</p>
                <p class="prospectP">Communication</p>
                <p class="prospectP">1 contacts</p>
                <p class="prospectP">18 employés</p>
                <a class="prospectA" href="../DETAILS/detailsProspectPage.php"><i class="fa-solid fa-circle-chevron-right"></i>
                    Plus
                    d'informations</a>
                <button class="prospectB container-sm"> Ajouter à ma liste</button>
            </div>
            <div class="prospect">
                <img class="prospectImg" src="../img/tattoo-studio-logo.png" alt="logo-tattoo-studio" width="90" height="67">
                <h2 class="prospectH2">Tattoo Studio</h2>
                <p class="prospectPTattoo"><i class="fa-solid fa-location-dot"></i> Berne</p>
                <p class="prospectP">Service personnel</p>
                <p class="prospectP">3 contacts</p>
                <p class="prospectP">5 employés </p>
                <a class="prospectA" href="../DETAILS/detailsProspectPage.php"><i class="fa-solid fa-circle-chevron-right"></i>
                    Plus d'informations</a>
                <button class="prospectB container-sm"> Ajouter à ma liste</button>
            </div>
            <div class="prospect">
                <img class="prospectImg" src="../img/nature-sarl-logo.png" alt="logo-nature-sarl" width="90" height="67">
                <h2 class="prospectH2">Nature SARL</h2>
                <p class="prospectPNature"><i class="fa-solid fa-location-dot"></i> Laussane</p>
                <p class="prospectP">Agroalimentaire</p>
                <p class="prospectP">5 contacts</p>
                <p class="prospectP">110 employés </p>
                <a class="prospectA" href="../DETAILS/detailsProspectPage.php"><i class="fa-solid fa-circle-chevron-right"></i>
                    Plus d'informations</a>
                <button class="prospectB container-sm"> Ajouter à ma liste</button>
            </div>
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

</body>

</html>