<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style propre de index.php -->
    <link rel="stylesheet" href="./style/index.css" type="text/css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="./fontawesome-free-6.0.0-beta3-web/css/all.min.css" type="text/css">
    <title>Site E-learning</title>
</head>

<body>
    <div class="block-accueil">
        <!-- header page accueil -->
        <header class="accueil-header">
            <!-- section contact de header -->
            <div class="header-contact">
                <div class="container-item-contact">
                    <i class="fa fa-envelope"></i>
                    <span class="item-contact item-contact-email">Email: tom@gmail.com</span>
                </div>
                <div class="container-item-contact">
                    <i class="fa fa-phone"></i>
                    <span class="item-contact item-contact-phone">Phone: +261 89 456 12</span>
                </div>
                <div class="container-item-contact">
                    <i class="fa fa-map-marker"></i>
                    <span class="item-contact item-contact-location">Localtion: Madagascar, Anananarivo</span>
                </div>
            </div>
            <!-- section navigation de header -->
            <nav class="header-nav">
                <span class="nav-sitename"><span>IA</span>natra</span>
                <div class="nav-container-itemsnav">
                    <ul>
                        <li class="itemnav-home"><a href="index.php" class="itemnav-lien">HOME</a></li>
                        <li class="itemnav-about"><a href="#" class="itemnav-lien">ABOUT</a></li>
                        <li class="itemnav-services"><a href="#" class="itemnav-lien">SERVICES</a></li>
                        <li class="itemnav-contact"><a href="#" class="itemnav-lien">CONTACT</a></li>
                    </ul>
                </div>
                <!-- partie de login et outils -->
                <div class="container-tools-login">
                    <div class="container-tools">
                        <button class="btn-tool btn-traduire">
                            <i class="fas fa-globe"></i>
                        </button>
                        <button class="btn-tool btn-darkmode">
                            <i class="fas fa-moon"></i>
                        </button>
                    </div>
                    <div class="container-login">
                        <a href="login.php">
                            <i class="fa fa-user"></i>
                            <span class="texte-login">LOGIN</span>
                        </a>
                    </div>
                </div>
            </nav>
        </header>
        <!-- corps de la page d'accueil -->
        <main class="accueil-main">
            <div class="filtre-fond"></div>
            <div class="slider-box">
                <div class="filtre-slider"></div>
                <div class="container-slider-titre">
                    <h1 class="slider-titre">Apprenez Le Code Et Le Digital</h1>
                </div>
                <div class="container-btn-slider">
                    <button class="btn-slider">READ MORE</button>
                </div>
            </div>
        </main>
        <!-- footer accueil -->
        <footer class="footer-accueil">
            <span class="texte-copyright">Copyright @e-learning © IA-natra</span>
            <div class="container-texte-auteur">Author: Tomefy Andry Tsiresy</div>
        </footer>
    </div>
</body>

</html>