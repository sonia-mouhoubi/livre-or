<?php 
require ('../traitements/bdd.php'); 
require ('../traitements/form-commentaire.php'); 
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Commentaires - Projet Livre d'or</title>
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
    <body class="body-com">
        <?php require ('header.php'); ?>  
        <main>
            <section>
                <h1>Commentaires</h1>
                <p><?php ?></p>
                <form class="form form-commentaire" action="#" method="post">
                    <label for="com">Commentaires</label>
                    <!-- <input type="text" id="com" name="com" placeholder="Votre commentaire."> -->
                    <textarea id="com" name="com" rows="5" cols="33"></textarea>
                    <input type="submit" id="button" name="button">
                    <?php 
                    if(isset($_GET['err']) && $_GET['err']=='emptycom') {
                    ?> <p>Ecrivez un message.</p> <?php
                    }
                    if(isset($_GET['msg']) && $_GET['msg']=='envoimsg') { ?> 
                    <p>Commentaire envoyé !</p> 
                    <a href="livre-or.php">Cliquer sur ce lien pour voir votre commentaire.</a>   
                    <?php }?>
                </form>
            </section>
        </main>
        <?php require ('footer.php'); ?>  
    </body>
</html>
   
