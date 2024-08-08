<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style propre de choix_parcours.php -->
    <link rel="stylesheet" href="./style/choix_parcours.css" type="text/css">
     <!-- style pour le header -->
     <link rel="stylesheet" href="./style/index.css" type="text/css">
     <!-- fontawesome -->
     <link rel="stylesheet" href="./fontawesome-free-6.0.0-beta3-web/css/all.min.css" type="text/css">
    <title>Site E-learning</title>
</head>
<body>
    <!-- toute la page choix_parcours -->
    <div class="page-choix-parcours">
        <!-- header -->
        <?php require_once("Components/header.php"); ?>
        <!-- corps de choix_parcours.php -->
        <main class="corps-de-choix-parcours">
            <div class="filtre-fond"></div>
            <section class="section-texte-welcome">
                <h2 class="titre-bienvenue">Bienvenue sur IAnatra 👋😁</h2>
                <h3 class="sous-titre-bienvenue">Vivez une merveilleuse aventure avec nous!!!!</h3>
            </section>
            <section class="section-parcours">
                <h3 class="texte-choix-parcours">Choisissez votre parcours d'apprentissage</h3>
                <div class="container-liste-parcours">
                    <article class="article-parcours">
                        <a href="#">
                            <h4 class="article-parcours-titre">HTML</h4>
                            <div class="container-img-parcours">
                                <img src="./images/fond1.jpg" alt="image representative du parcours html" class="image-parcours">
                            </div>
                        </a>
                    </article>
                    <article class="article-parcours">
                        <a href="#">
                            <h4 class="article-parcours-titre">CSS</h4>
                            <div class="container-img-parcours">
                                <img src="./images/fond2.jpg" alt="image representative du parcours css" class="image-parcours">
                            </div>
                        </a>
                    </article>
                    <article class="article-parcours">
                        <a href="#">
                            <h4 class="article-parcours-titre">JavaScript</h4>
                            <div class="container-img-parcours">
                                <img src="./images/fond3.jpg" alt="image representative du parcours javascript" class="image-parcours">
                            </div>
                        </a>
                    </article>
                    <article class="article-parcours">
                        <a href="#">
                            <h4 class="article-parcours-titre">PHP</h4>
                            <div class="container-img-parcours">
                                <img src="./images/fond1.jpg" alt="image representative du parcours php" class="image-parcours">
                            </div>
                        </a>
                    </article>
                </div>
            </section>
        </main>
        <!-- footer de choix_parcous.php -->
        <?php require_once("Components/footer.php"); ?>
    </div>
</body>
</html>