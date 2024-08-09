<?php

// Reception des données
$nom_utisateur = $_POST['nom_utilisateur'];
$date_naissance = $_POST['date_naissance'];
$choix_pays = $_POST['choix_pays'];
$mot_de_passe = $_POST['mot_de_passe'];
$confirmation_mot_de_passe = $_POST['confirmation_mot_de_passe'];


// Base de données
$servername = "localhost";
$username_db = "tomefy";
$password_db = "tomefy";
$dbname = "ianatra_db";
 try {
    $conn = new PDO("mysql: host=$servername; dbname=$dbname",$username_db,$password_db);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT id FROM sign_up_ianatra WHERE username = :username";
    $stmt = $conn -> prepare($sql);
    $stmt -> bindParam(':username',$nom_utisateur);

    $stmt -> execute();

    //Traitement des données côté serveur
    if($stmt -> rowCount() > 0) {
        $err_mess = urlencode("Nom déjà pris");
        header("Location: ../sign_up.php?err_nom=$err_mess");
        exit();
    } else if($mot_de_passe !== $confirmation_mot_de_passe) {
        $err_mess = urlencode("Error: password");
        header("Location: ../sign_up.php?err_mdp=$err_mess");
        exit();
    }
    
    
    else {
        $insertion =    "INSERT INTO sign_up_ianatra (username, birthday, country, password)
                        VALUES ('$nom_utisateur', '$date_naissance', '$choix_pays' , '$mot_de_passe')"; 
        $conn -> exec($insertion);
    }
 } catch(PDOException $e) {
    echo "Error: " . $e -> getMessage();
 }

?>