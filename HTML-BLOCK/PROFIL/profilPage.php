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
    <link rel="stylesheet" type="text/css" href="profilPage.css">
    <link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../script.js"></script>
    <!--FONTS-->
    <title>Profil</title>
</head>

<body class="body-profil">
    <!--CHANGER LES LINKS SI ON EXPORTE-->
    <header class="container-fluid header">
        <div class="container-sm divHeader">
            <img class="logo" src="../img/logo-palantir.png" alt="logo-palantir">
            <a class="aHeader" href="../INDEX/homePage.html">
                <h1 class="h1Header"> Palantir</h1>
            </a>
            <ul class="ulHeader">
                <li class="liHeader"><i class="fa-solid fa-bars"></i><a class="aHeader" href="../LISTE/listePage.php">Liste</a>
                </li>
                <li class="liHeader"><i class="fa-solid fa-user"></i><a class="aHeader" href="../PROFIL/profilPage.php">Profil</a>
                </li>
            </ul>
        </div>
    </header>

    <main>

        <!---------------CONNEXION SESSION RÉUSSIE-------------->
        <?php
        session_start();
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            echo "<p class='bienvenue'>Bienvenue, $username!</p>";
        }
        ?>

        <!------------------------BUTTONS INFO ET LISTES----------------------------------->
        <div class="divsButtonProfil">
            <button id="button1" class="buttonsProfil">Mes informations</button>
            <button id="button2" class="buttonsProfil">Mes listes</button>
        </div>

        <!------------------------DIV INFO UTILISATEUR-------------------------------------->
        <div id="container" class="profil">
            <div id="content1" class="profilContent">
                <h2 class="profilH2">Informations Utilisateur</h2>
                <p class="profilP"><i class="fa-solid fa-user"></i><span class="profilSpan"> User:</span> Ana Gonzalez
                </p>
                <p class="profilP"><i class="fa-solid fa-envelope"></i> <span class="profilSpan"> Email:</span>
                    anagonzalez@gmail.com</p>
                <p class="profilP"><i class="fa-solid fa-copyright"></i> <span class="profilSpan"> Entreprise:</span> La
                    Florecida SL</p>
                <p class="profilP"><i class="fa-solid fa-link"></i><span class="profilSpan"> Site web:</span>
                    <a href="www.laflorecida.com"> www.laflorecida.com</a>
                </p>
            </div>

            <!--------------------DIV INFO LISTES-------------------------------------------------->
            <div id="content2" class="profilContent">
                <h2>Mes listes</h2>
                <div class="profilListe">
                    <h3 class="profilListeH3">Secteur d'activité Commerce</h3>
                    <p class="profilListeP">3</p>
                    <button class="profilListeButton">Voir liste</button>
                </div>
                <div class="profilListe">
                    <h3 class="profilListeH3">Secteur d'activité Agroalimentaire</h3>
                    <p class="profilListeP">6 </p>
                    <button class="profilListeButton">Voir liste</button>
                </div>
                <div class="profilListe">
                    <h3 class="profilListeH3">Région Laussanne</h3>
                    <p class="profilListeP">4</p>
                    <button class="profilListeButton">Voir liste</button>
                </div>
                <div class="profilListe">
                    <h3 class="profilListeH3">Mot-clé Marketing Digital</h3>
                    <p class="profilListeP">10</p>
                    <button class="profilListeButton">Voir liste</button>
                </div>

            </div>
            <a href="../INDEX/homePage.html"> <button class="btn profilButton container-sm">LogOut</button></a>
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
                    <li class="liFooter "><i class="fa-solid fa-phone iFooter" style="margin: 0;"></i><a class="aFooter" href="tel:+41435433345"> +41 43
                            543 33 45 </a></li>
                    <li class="liFooter "><i class="fa-solid fa-envelope iFooter" style="margin: 0;"></i><a class="aFooter" href="mailto:thestudio60@gmail.com">
                            thestudio60@gmail.com </a></li>
                    <li class="liFooter "><i class="fa-solid fa-location-dot iFooter" style="margin: 0;"></i> Boulevard
                        de Grancy
                        29 / 1006
                        Laussane</li>
                </ul>
            </div>
        </div>
    </footer>

</body>

</html>