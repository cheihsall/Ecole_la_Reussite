<?php
include("inclusion/BD.inc.php");


    if(isset($_POST['email'],$_POST['passeword']))
    {

$user = trim($_POST['email']);
$pass = trim($_POST['passeword']);
$profession = trim($_POST['profession']);
try{
$sth = $pdo->prepare(" SELECT * FROM employe WHERE email = '".$user."' AND passeword = '".$pass."' AND profession = '".$profession."'"); 
$sth->execute();
$res = $sth->fetchAll(PDO::FETCH_ASSOC); 
if(count($res) == 0){        
    echo "Vous n'êtes pas dans la base de données, inscrivez-vous";
    }
    else{

        if($profession=='professeur'){
            header("location:profil/professeur.php");
            

        }
        else if($profession=='secretaire'){
            header("location:profil/secretaire.php");
        }
    }


}
catch(PDOException $e){ echo ("Erreur:".$e->getMessage());}
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
        <label for="nom ">profession</label><br>
        <input type="text" name="profession" id="prof" required placeholder="profession" class="case"><br><br>
        <button type="submit" id="envoyer" onclick="afficher()" class="btn" >CONNEXION</button>
   
    </form>

</div>
</div>
<script defer type="text/javascript" src="formulaire.js"></script> 

    </body>
</html>











































    

    




















  


