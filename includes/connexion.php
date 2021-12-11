<?php
session_start();
require ('../traitements/bdd.php'); 
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion - Projet Livre d'or</title>
        <meta name="description" content="Création d'un site web avec module de connexion, d'inscription et livre d'or">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Crafty+Girls&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="../css/styles.css" rel="stylesheet">
    </head>
    <body class="body-connexion">
        <?php require ('header.php'); ?>  
        <main>
            <span>
            <?php 
            if(isset($_GET['msg']) && $_GET['msg']=='insreussie') {
            ?> <p>Inscription réussie.</p> <?php
            } ?>
            </span>
            <section>
                <h1>Formulaire de connexion</h1>
                <form class="form" action="../traitements/form-connexion.php" method="post">
                    <label for="login">Login</label>
                    <input type="text" id="login" name="login" placeholder="">
                    <?php 
                    if(isset($_GET['err']) && $_GET['err']=='emptylogin') {
                    ?> <p>Le champs login est vide.</p> <?php
                    }
                    if(isset($_GET['err']) && $_GET['err']=='loginexist') {
                    ?> <p>Le login exite déja.</p> <?php
                    }?>
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="">
                    <?php 
                    if(isset($_GET['err']) && $_GET['err']=='emptymdp') {
                    ?> <p>Le champs mot de passe est vide.</p> <?php
                    }?>
                    <input type="submit" id="button" name="button">
                    <?php 
                    if(isset($_GET['err']) && $_GET['err']=='errlogmdp') {
                    ?> <p>Identifiant ou mot de passe incorrecte.</p> <?php
                    }?>
                </form>
            </section>
        </main>
        <?php require ('footer.php'); ?>  
    </body>
</html>
   
