<?php 
require ('../traitements/bdd.php'); 
require ('../traitements/traitement-livre-or.php'); 
?>  
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Livre d'or - Projet Livre d'or</title>
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
    <body class="body-livreor">
        <?php require ('header.php'); ?>  
        <main>
        <?php 
            if(isset($_SESSION['login'])) { ?>
            <a href="commentaire.php">Ajouter un Commentaire</a>  
        <?php }
        ?>
            <section class ='section-livredor'>
                <h1>Livre d'or</h1>
                    <?php foreach($res as $key => $value) {
                        $date = strtotime($value['date']);
                        $datefr = date('d-m-Y H:i', $date);
                    ?>
                    <div class="com">
                        <p>Posté le <?php echo $datefr;?> par <?php echo $value['login']; ?></p>
                        <p><?php echo $value['commentaire'];?></p> 
                    </div>
                    <?php } ?>
            </section>
        </main>
        <?php require ('footer.php'); ?>  
    </body>
</html>
   
