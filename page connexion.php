

<?php
session_start();
/*LIAISON AVEC LE FORMULAIRE A LA BASE DE DONNEE*/
require_once('inclusion/BD.inc.php');
//$result = new PDO('mysql:host=localhost;dbname=ECOLS','papa','260594', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

$erreur="";

//var_dump($_POST['email'],$_POST['Telephone']);die;
if(isset($_POST['email'],$_POST['passeword']))
{

    $email = $_POST['email'];
    $pass = $_POST['passeword'];

    $_SESSION['email']= $email;
    $_SESSION['pass']= $pass;   

    $sql = "SELECT * FROM employe where email='$email'";
    //$result = $LINKER->prepare($sql);
    $result=$pdo->query($sql);
   
    if($result->rowCount() > 0)
        {
             $data = $result->fetchAll()[0];
                 if ($data["passeword"] === $pass) {
                       echo "CONNECTER";
                          //var_dump($data) ;die;
                        $_SESSION['autoriser']='oui';
                        header("location:profil.php");
                        
        }        else {
                        $erreur="mauvaise login ou mt de pass";
                        echo "mot de passe incorrect";
                        header("location:page_accueil.php");
                    }
    }
    else{
        $erreur="mauvaise login ou mt de pass";
    }
 }

 



?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inclusion/CSS/connexion.css">
    
    <title>Document</title>
</head>
<body >
 

<div class="general">
    <nav class="nav" >
        <img src="inclusion/logo.jpg" alt="Trulli" ><br>
        <h1>Ecole de la Reussite</h1>
    </nav>
    <div class="titre"><h4>connexion</h4></div><br><br><br>
<div class="container">
    
    <form method="POST" action=""  >
       
        
        <label for="pseudo " >Email</label> <br>
        <input type="text" name="email" id="email" required placeholder="saisir votre mail" class="case"><br><br>
        <label for="nom ">Mot de pass</label><br>
        <input type="password" name="passeword" id="pass" required placeholder="Mot de pass" class="case"><br><br>
        <button type="submit" id="envoyer" onclick="afficher()" class="btn" >CONNEXION</button>
   
    </form>

</div>
</div>
<script defer type="text/javascript" src="inclusion/formulaire.js"></script> 

    </body>
</html>