<?php
   require_once("inclusion/BD.inc.php");
    if(!internauteEstConnecte()) header("location:connexion.php");

    $contenu .= '<p class ="centre"> Bonjour <strong>' .$_SESSION['membre']['pseudo'] .'</strong></p>';
    $contenu .= '<div class="cadre"<h2>Voici vos informations</h2>';
    $contenu .= '<p>Votre email est '.$_SESSION['membre']['email'].'<br>';
    $contenu .= '<p>Votre ville est '.$_SESSION['membre']['ville'].'<br>';
    $contenu .= '<p>Votre code postal est '.$_SESSION['membre']['cp'].'<br>';
    $contenu .= '<p>Votre adresse est '.$_SESSION['membre']['adresse'].'</p></div><br><br>';

    require_once('/home/sakha/Bureau/Xampp/E-Commerce/inclusion/header.inc.php');
    echo $contenu;
    require_once('/home/sakha/Bureau/Xampp/E-Commerce/inclusion/footer.inc.php');
?>