<?php 
session_start();
if(isset($_POST['deconnect'])) {
    unset($_SESSION['id']);
    unset($_SESSION['login']);
    header('Location: ../includes/accueil.php');
}
?>
