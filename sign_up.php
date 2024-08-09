<?php 
include("data.php");

if(isset($_GET['err_mdp'])) {
    $error_mdp = urldecode($_GET['err_mdp']);
} else if(isset($_GET['err_nom'])) {
    $error_nom = urldecode($_GET['err_nom']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style de header -->
    <link rel="stylesheet" href="./style/index.css" type="text/css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="./fontawesome-free-6.0.0-beta3-web/css/all.min.css" type="text/css">
    <!-- style propre de sign_up.php -->
    <link rel="stylesheet" href="./style/sign_up.css" type="text/css">
    <title>Site E-learning</title>
</head>
<body>
    <div class="page-sign-up">
        <!-- header de sign_up.php -->
        <?php require_once('Components/header.php'); ?>
        <!-- corps de sign_up.php -->
        <main class="corps-de-sign-up">
            <div class="filtre-fond"></div>
            <section class="container-formulaire-sign-up">
                <div class="container-titre-sign-up">
                    <h2 class="titre-sign-up">Sign Up</h2>
                </div>
                <form action="Traitements/traitement_sign_up.php" class="formulaire-sign-up" method="post">
                    <div class="champs-form champ-username">
                        <label for="input-username" class="label-username">Username</label>
                        <input type="text" id="input-username" name="nom_utilisateur" required>
                        <?php if(isset($error_nom)) { ?>
                            <div class="container-err-mess">
                                <p class="message-erreur"><?php echo $error_nom; ?></p>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="champs-form champ-date-naissance">
                        <label for="input-date-naissance">Birthday</label>
                        <input type="date" id="input-date-naissance" name="date_naissance" required>
                    </div>
                    <div class="champs-form champ-location">
                        <label for="select-pays">Location</label>
                        <select name="choix_pays" id="choix-pays" required>
                            <?php for($i = 0; $i < count($pays); $i++) { ?>
                                <option value="<?php echo $pays[$i]; ?>"><?php echo $pays[$i]; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="champs-form champ-mdp">
                        <label for="input-mdp" class="label-mdp">Password</label>
                        <input type="password" id="input-mdp" name="mot_de_passe" required>
                    </div>
                    <div class="champs-form champ-conf-mdp">
                        <label for="input-conf-mdp" class="label-conf-mdp">Confirm Password</label>
                        <input type="password" id="input-conf-mdp" name="confirmation_mot_de_passe" required>
                        <?php if(isset($error_mdp)) { ?>
                            <div class="container-err-mess">
                                <p class="message-erreur"><?php echo $error_mdp; ?></p>
                            </div>
                        <?php } ?>
                    </div>
                    <p class="text-have-account">Already have an account ? <a href="login.php">Sign in</a></p>
                    <button type="submit" class="btn-sign-up">Sign Up</button>
                </form>
            </section>
        </main>
        <!-- foooter de sign_up.php -->
        <?php require_once('Components/footer.php'); ?>
    </div>
</body>
</html>