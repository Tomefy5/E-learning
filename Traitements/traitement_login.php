<?php
$user = $_POST['input-username'];
$user_password = $_POST['input-password'];

//Connexion base de donnée
$servername = "localhost";
$username_db = "tomefy";
$password_db = "tomefy";
$dbname = "ianatra_db";

try {
    $conn = new PDO("mysql: host=$servername; dbname=$dbname",$username_db,$password_db);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT username, password FROM sign_up_ianatra WHERE username = :username AND password = :password";
    $stmt = $conn -> prepare($sql);
    $stmt -> bindParam(':username',$user);
    $stmt -> bindParam(':password',$user_password);

    $stmt -> execute();
    if($stmt -> rowCount() <= 0) {
        $err_mess = urlencode("wrong user or password");
        header("Location: ../login.php?error=$err_mess");
        exit();
    } else {
        header("Location: ../choix_parcours.php");
    }
} catch(PDOException $e) {
    echo "Error: " . $e -> getMessage();
}
?>