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
    <link rel="stylesheet" type="text/css" href="detailsProspectPage.css">
    <link rel="stylesheet" href="../VUES/headerFooter.css">
    <link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../script.js"></script>
    <!--FONTS-->
    <title>Détails Prospects</title>
</head>

<body class="body-detailProspect">

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

        <!--------------------DIV INFO GENERALES---------------------------------->
        <div class="detailProspect">

            <img class="detailProspectImg" src="../img/la-florecida-logo.png" alt="la-florecida-logo" width="460" height="330">

            <div class="div1Prospect">
                <h1 class="detailProspectH1">La Florecida SL</h1>
                <ul class="detailProspectUl">
                    <li class="detailProspectLi"><i class="fa-sharp fa-solid fa-location-dot" style="margin-left: 0;"></i>
                        <strong> Adresse</strong>
                    </li>
                    <li class="detailProspectLi">Kirchstrasse 64</li>
                    <li class="detailProspectLi">3098 Köniz, Suiza</li>
                </ul>
                <ul class="detailProspectUl">
                    <li class="detailProspectLi"><i class="fa-solid fa-clock" style="margin-left: 0;"></i><strong>
                            Horaires</strong>
                    </li>
                    <li class="detailProspectLi">Ouverture 9:00am</li>
                    <li class="detailProspectLi">Fermeture 07:00pm</li>
                </ul>
                <ul class="detailProspectUl">
                    <li class="detailProspectLi"><i class="fa-solid fa-people-group" style="margin-left: 0;"></i>
                        <strong>Taille</strong>
                    </li>
                    <li class="detailProspectLi">5 employés</li>
                </ul>
            </div>

            <div class="div2Prospect">
                <ul class="detailProspectUl">
                    <li class="detailProspectLi"><i class="fa-solid fa-circle-info" style="margin-left: 0; padding-bottom: 20px;"></i><strong>
                            Description</strong>
                    </li>
                    <li class="detailProspectLi">Ceci est un texte court de description de l'entreprise. Lorem ipsum
                        dolor sit amet, consectetur adipiscing elit. Quisque tincidunt leo id metus ultricies, at
                        sagittis quam tempus. Integer ac sagittis nulla. Morbi at sagittis velit. Vestibulum euismod
                        lectus sit amet orci eleifend ultricies. Nullam non risus ac ante aliquam auctor. Nullam
                        interdum libero sed purus faucibus, vitae tristique dolor tincidunt. Curabitur viverra viverra
                        lorem, ut feugiat elit lobortis non. Sed auctor varius facilisis. Suspendisse finibus nunc quis
                        nisl fermentum, et convallis nunc lobortis. Maecenas eget tortor nec tortor placerat facilisis
                        at id mi. Fusce ac tristique enim, ac pharetra purus. Sed ac malesuada neque, sit amet
                        consectetur felis. Pellentesque mollis mi vitae mauris tincidunt, ut blandit quam interdum.</li>
                </ul>
                <img class="detailProspectMaps" src="../img/maps-suiza.PNG" alt="foto-de-mapa-de-suiza">
            </div>
        </div>

        <!-------------------------DIV INFO D ACTIVITE----------------------------------->
        <div class="infoActivite">

            <h2 class="infoActiviteH2">Informations d'activité</h2>

            <div class="infoActiviteContent">
                <div class="infoActiviteSection">
                    <h3 class="infoActiviteH3"><i class="fa-solid fa-tree" style="margin-left: 0;"></i> Domaine
                        d'activité
                    </h3>
                    <p class="infoActiviteP">Entreprise spécialisé dans la vente de plantes, d'arbres, de
                        semences,
                        de
                        fleurs, d'engrais, d'outils de jardinage.</p>
                </div>
                <div class="infoActiviteSection">
                    <h3 class="infoActiviteH3"><i class="fa-sharp fa-solid fa-location-dot" style="margin-left: 0;"></i>
                        Zone
                        d'activité</h3>
                    <p class="infoActiviteP">Köniz,
                        Berne, Lussanna</p>
                </div>
                <div class="infoActiviteSection">
                    <h3 class="infoActiviteH3"><i class="fa-solid fa-people-arrows" style="margin-left: 0;"></i>
                        Concurrents
                    </h3>
                    <p class="infoActiviteP">Outils et Jardinage Laporte<br>Jardiland<br>Fleurs et Jardin<br>Jardinerie
                        du
                        Soleil<br>Au Jardin Fleuri<br>Jardinerie Naturelle<br>La Serre Enchantée<br>Jardin Secret<br>La
                        Main
                        Verte<br>Le potager Magique</p>
                </div>
                <div class="infoActiviteSection">
                    <h3 class="infoActiviteH3"><i class="fa-solid fa-people-arrows" style="margin-left: 0;"></i> Clients
                    </h3>
                    <p class="infoActiviteP">Particuliers amateurs de jardinage<br>Paysagistes
                        professionnels<br>Entreprises
                        horticoles<br>Clientèle locale et international</p>
                </div>
            </div>
        </div>

        <!---------------------------------DIV INFOS CONTACTS-------------------------------->
        <div class="divInfoContact">
            <div class="infoContact">
                <img src="../img/angela.png" alt="foto-de-angela" class="infoContactImg">
                <h3 class="infoContactH3">Angela Moss</h3>
                <h4 class="infoContactH4">Marketing Manager</h4>
                <p class="infoContactP"><a href="tel:+12345657344"><i class="fa-solid fa-phone"> </i> +12 345 657
                        344</a>
                </p>
                <p class="infoContactP"><a href="mailto:angelamosss@gmail.com"> <i class="fa-solid fa-envelope"></i>
                        angelamoss@gmail.com</a></p>
            </div>
            <div class="infoContact">
                <img src="../img/ahmad.png" alt="foto-de-ahmad" class="infoContactImg">
                <h3 class="infoContactH3">Ahmad Zayn</h3>
                <h4 class="infoContactH4">Photographer</h4>
                <p class="infoContactP"><a href="tel:+12345657344"> <i class="fa-solid fa-phone"></i> +12 345 657
                        344</a>
                </p>
                <p class="infoContactP"><a href="mailto:ahmadzayn@gmail.com"> <i class="fa-solid fa-envelope"></i>
                        ahmadzayn@gmail.com</a></p>
            </div>
            <div class="infoContact">
                <img src="../img/placeholderimage.png" width="95" alt="foto-de-brian" class="infoContactImg">
                <h3 class="infoContactH3">Brian Connor</h3>
                <h4 class="infoContactH4">Marketing Manager</h4>
                <p class="infoContactP"><a href="tel:+12345657344"> <i class="fa-solid fa-phone"></i> +12 345 657
                        344</a>
                </p>
                <p class="infoContactP"><a href="mailto:brianconnor@gmail.com"> <i class="fa-solid fa-envelope"></i>
                        brianconnor@gmail.com</a></p>
            </div>
        </div>

        <!----------------------DIV INFOS SUPPLEMENTAIRES------------------------------------>
        <div class="infoSupplementaires">
            <h2 class="infoSupplementairesH2">Informations supplémentaires</h2>
            <div class="infoSupplementairesContent">
                <div class="infoSupplementairesSection">
                    <h3 class="infoSupplementairesH3"><i class="fa-solid fa-clock-rotate-left" style="margin-left: 0;"></i> Historique
                    </h3>
                    <p class="infoSupplementairesP">Petite description de l'historique de l'entreprise. Lorem ipsum
                        dolor sit amet, consectetur adipiscing elit. Quisque tincidunt leo id metus ultricies, at
                        sagittis quam tempus. Integer ac sagittis nulla. Morbi at sagittis velit. Vestibulum euismod
                        lectus sit amet orci eleifend ultricies. Nullam non risus ac ante aliquam auctor.</p>
                </div>
                <div class="infoSupplementairesSection">
                    <h3 class="infoSupplementairesH3"><i class="fa-solid fa-handshake" style="margin-left: 0;"></i>
                        Politique
                    </h3>
                    <p class="infoSupplementairesP">Description de la potilique d'entreprise du prospect, en matière
                        de
                        responsabilité sociale et environnementale. Lorem ipsum
                        dolor sit amet, consectetur adipiscing elit. Quisque tincidunt leo id metus ultricies, at
                        sagittis quam tempus. Integer ac sagittis nulla. Morbi at sagittis velit. Vestibulum euismod
                        lectus sit amet orci eleifend ultricies. Nullam non risus ac ante aliquam auctor.</p>
                </div>
                <div class="infoSupplementairesSection">
                    <h3 class="infoSupplementairesH3"><i class="fa-solid fa-shop" style="margin-left: 0;"></i>
                        Produits/services
                    </h3>
                    <p class="infoSupplementairesP">Liste de produits et/ou services proposés par l'entreprise. Lorem
                        ipsum
                        dolor sit amet, consectetur adipiscing elit. Quisque tincidunt leo id metus ultricies, at
                        sagittis quam tempus. Integer ac sagittis nulla. Morbi at sagittis velit. Vestibulum euismod
                        lectus sit amet orci eleifend ultricies. Nullam non risus ac ante aliquam auctor.</p>
                </div>
                <div class="infoSupplementairesSection">
                    <h3 class="infoSupplementairesH3"><i class="fa-solid fa-dollar-sign" style="margin-left: 0;"></i>
                        Chiffre d'affaires
                    </h3>
                    <p class="infoSupplementairesP">200 000 euros/an</p>
                </div>
                <div class="infoSupplementairesSection">
                    <h3 class="infoSupplementairesH3"><i class="fa-solid fa-link" style="margin-left: 0;"></i>
                        Site web
                    </h3>
                    <p class="infoSupplementairesP"><a href="www.laflorecida.com">www.laflorecida.com</a></p>
                </div>
                <div class="infoSupplementairesSection">
                    <h3 class="infoSupplementairesH3"><i class="fa-solid fa-people-group" style="margin-left: 0;"></i>
                        Nombre d'employés
                    </h3>
                    <p class="infoSupplementairesP">35 employés</p>
                </div>
            </div>
        </div>
        <button class="btn btn-liste detailPageButton container-sm">Ajouter à ma liste</button>

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