<?php 
include("data.php");

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
                <form action="#" class="formulaire-sign-up" method="post">
                    <div class="champs-form champ-username">
                        <label for="input-username" class="label-username">Username</label>
                        <input type="text" id="input-username" require>
                    </div>
                    <div class="champs-form champ-date-naissance">
                        <label for="input-date-naissance">Birthday</label>
                        <input type="date" id="input-date-naissance" require>
                    </div>
                    <div class="champs-form champ-location">
                        <label for="select-pays">Location</label>
                        <select name="choice-country" id="choix-pays" require>
                            <?php for($i = 0; $i < count($pays); $i++) { ?>
                                <option value="<?php echo $pays[$i]; ?>"><?php echo $pays[$i]; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="champs-form champ-mdp">
                        <label for="input-mdp" class="label-mdp">Password</label>
                        <input type="password" id="input-mdp" require>
                    </div>
                    <div class="champs-form champ-conf-mdp">
                        <label for="input-conf-mdp" class="label-conf-mdp">Confirm Password</label>
                        <input type="password" id="input-conf-mdp" require>
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