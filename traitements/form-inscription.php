<?php 
// Connexion à la base de donnée.
require ('../traitements/bdd.php'); 
if(isset($_POST['button'])) {
    // Var 
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    // Requête pour savoir si le login existe déja.
    if(isset($login) && isset($password)) {
        $req = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login = '$login'");
        // Vérification pour voir si les champs sans vide et msg d'erreur.
        if(empty($login)) {
            header("Location: ../includes/inscription.php?err=emptylogin");
        }
        elseif(mysqli_num_rows($req)) {
            header("Location: ../includes/inscription.php?err=loginexist");
        }
        elseif(empty($password)) {
            header("Location: ../includes/inscription.php?err=emptymdp");
        }
        elseif(empty($password2)) {
            header("Location: ../includes/inscription.php?err=emptymdp2");
        }
        elseif($password != $password2) { 
            header("Location: ../includes/inscription.php?err=mdpnotidem");
        } 
        else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            mysqli_query($bdd, "INSERT INTO `utilisateurs`(`login`, `password`) VALUES ('$login', '$hashed_password')");
            header("Location: ../includes/connexion.php?msg=insreussie");
        }  
    }
}

?>