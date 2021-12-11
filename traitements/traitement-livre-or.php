<?php
//Initialisation ou récupération de session.
session_start(); 
// Connexon à la base de donnée.
require ('../traitements/bdd.php'); 
// Récupération de commentaire.
// Fonction pour afficher la date, l'heure du jour.
// date_default_timezone_set('Europe/Paris'). '<br>'; // Récup du fuseau horaire.
// setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']); // Date et heure au format français.
// $strftime = strftime('%A %d %B %Y %H:%M:%S'); // Jour, date, année et heure.

// Requête qui permet d'afficher les commentaires.
$req = mysqli_query($bdd, "SELECT * FROM utilisateurs INNER JOIN commentaires ON utilisateurs.id = commentaires.id_utilisateur ORDER BY date DESC");
$res = mysqli_fetch_all($req, MYSQLI_ASSOC);
?>