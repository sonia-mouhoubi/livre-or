<?php
//Initialisation ou récupération de session.
session_start(); 
// Connexon à la base de donnée.
require ('../traitements/bdd.php'); 
// Récupération de commentaire.
if(isset($_SESSION['id'])) {
    $session_id = $_SESSION['id'];
    if(isset($_POST['button'])) {
        $com = $_POST['com'];
        if(empty($com)) {
            header("Location: ../includes/commentaire.php?err=emptycom");
        }
        elseif(!empty($com)) {
        mysqli_query($bdd, "INSERT INTO `commentaires`(`commentaire`, `id_utilisateur`, `date`) VALUES ('$com', '$session_id', NOW())");
        header("Location: ../includes/commentaire.php?msg=envoimsg");
        }
    } 
}
?>