<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style pour le header -->
    <link rel="stylesheet" href="./style/index.css" type="text/css">
    <!-- style propre de la page -->
    <link rel="stylesheet" href="./style/login.css" type="text/css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="./fontawesome-free-6.0.0-beta3-web/css/all.min.css" type="text/css">
    <title>Site E-learning</title>
</head>
<body>
    <div class="page-login">
        <!-- header de login.php -->
        <?php include("Components/header.php") ?>
        <!-- corps de login.php -->
        <main class="corps-de-login">
            <div class="filtre-fond"></div>
            <section class="container-formulaire-login">
                <div class="container-titre-login">
                    <h2 class="titre-login">LOGIN</h2>
                    <div class="soulignement"></div>
                </div>
                <form action="#" method="post" class="formulaire-login">
                    <div class="champ-form champ-user">
                        <label for="input-username">Username</label>
                        <input type="text" id="input-username">
                    </div>
                    <div class="champ-form champ-password">
                        <label for="input-password">Password</label>
                        <input type="password" id="input-password">
                        <span class="fas fa-eye-slash" id="icon-eye"></span>
                    </div>
                    <p class="texte-sign-up">No account ? <a href="sign_up.php">Sign up here</a></p>
                    <button type="submit" class="btn-submit">Login</button>
                </form>
            </section>
        </main>
        <!-- footer de login.php -->
        <?php include("Components/footer.php") ?>
    </div>
</body>
</html>