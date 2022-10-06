<!-- 

    require_once('../inclusion/BD.inc.php');
    require_once('../inclusion/header.inc.php');
 -->
<?php
 try
{
	// On se connecte à MySQL
	$pdo = new PDO('mysql:host=localhost;dbname=Ecole_de_la_Reussite;charset=utf8', 'root', 'mamysy');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
?>

<!-- 
    if(isset($_GET['action']) && $_GET['action']== "deconnexion")
    {
        session_destroy();
    }
    if(internauteEstConnecte())
    {
        header("location:profil.php");
    }


    if($_POST)
    {
      $resultat = executeRequete("SELECT * FROM employes WHERE mail = '$_POST[mail]'");
      if($resultat->num_rows !=0)
      {
        $eleve = $resultat->fetch(PDO::FETCH_ASSOC);
        if($employes['mdp'] == $_POST['mdp']){
          //$contenu .= '<div class ="validation">mdp connu !</div>';
          foreach($employes as  $indice => $element)
          {
            if($indice != 'mdp')
            {
              $_SESSION['membre'][$element] = $element;
            }
          }
          header("location:profil.php");
        }
        else{ $contenu .= '<div>Erreure de mdp </div>';}
      }
      
      else{$contenu .= '<div class="erreur">E-mail incorrecte</div>';}
    }

 -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="POST" action="">
    <p>
      <label for="mail">Mail</label><br>
      <input type="email" id="pseudo" name="mail" maxlength="20" placeholder="Votre pseudo"title="Carracteres accepte a-zA-Z0-9-_." required="required"><br>
    </p><br>
     <p>
        <label for="mdp">Mot de passe</label><br>
        <input type="password" id="mdp" name="mdp" required="required"><br>
      </p><br>
      <p>
        <input type="submit" value="Se connecter">
      </p>
    </form> 
</body>
</html> -->
