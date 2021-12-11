<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projet Livre d'or</title>
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
    <body>
        <?php require ('header.php'); ?>         
        <main class="main-accueil">
            <section class="description-accueil">
                <h1>Bienvenue sur mon site.</h1>
                <p>Alios autem dicere aiunt multo etiam inhumanius (quem locum breviter paulo ante perstrinxi) praesidii 
                adiumentique causa, non benevolentiae neque caritatis</p>
                <p>Pour t'inscrire, clique sur ce lien : <a href="inscription.php">Inscription</a></p>
            </section>
            <div>
                <img class="chat-accueil" src="../assets/img/chat-accueil.png" alt="Chat en couleur.">
            </div>    
        </main>
        <?php require ('footer.php'); ?>  
    </body>
</html>
   
