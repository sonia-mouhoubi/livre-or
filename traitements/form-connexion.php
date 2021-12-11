<?php 
session_start();
require ('../traitements/bdd.php'); 

if(isset($_POST['button'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    // Requête qui permet de verifier si le login est bien dans la bdd.
    $req = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login = '$login'");
    $res = mysqli_fetch_all($req, MYSQLI_ASSOC);

    if(isset($login) && isset($password)) {
        if(empty($login)) {
            header("Location: ../includes/connexion.php?err=emptylogin");
            exit;
        }
        elseif(empty($password)) {
            header("Location: ../includes/connexion.php?err=emptymdp");
        }
        elseif(!empty($res) && password_verify($password, $res[0]['password'])) {        
                $_SESSION['id'] = $res[0]['id'];
                $_SESSION['login'] = $res[0]['login'];
                header("Location: ../includes/accueil.php");
        } 
        else {
            header("Location: ../includes/connexion.php?err=errlogmdp");  
        }   
    }  
}
?>