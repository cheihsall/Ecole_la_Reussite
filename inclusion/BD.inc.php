<?php
     $conect_ma_BD = new PDO('mysql:host=localhost;dbname=Ecole','sakha','traore', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    if($conect_ma_BD->connect_errno) die('Un probleme est survenu lors de la tentative de connexion a la BDD :' .$conect_ma_BD->connect_errno);

    session_start();

    define("RACINE_SITE","/Ecole_la_Reussite/");

    $contenu = '';
    /*require_once('fonction.inc.php');*/
?>