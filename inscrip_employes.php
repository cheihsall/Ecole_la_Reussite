 <?php

   // Vérifier si le formulaire est soumis 
  @$passeword = $_POST['passeword'];
    @$nom = $_POST['nom']; 
     @$prenom = $_POST['prenom']; 
     @$numero = $_POST['numero'];
      @$email = $_POST['email'];
      @$adresse = $_POST['adresse'];
      @$profession = $_POST['profession'];
      @$nationalite = $_POST['nationalite'];
      @$date_naissance = $_POST['date_naissance'];
      @$lieu_naissance = $_POST['lieu_naissance'];
      @$date_soumission = $_POST['date_soumission'];
      @$sexe = $_POST['sexe'];
      @$valider = $_POST['valider'];
      @$message = $_POST['message'];
  
   
     if(isset($valider)){
       if(empty($passeword)) $message="<li>mot de passe invalide!</li>";
        if(empty($nom)) $message="<li>Nom invalide!</li>";
        if(empty($prenom)) $message.="<li>Prénom invalide!</li>";
        if(empty($numero)) $message.="<li>numero invalide!</li>";
        if(empty($email)) $message.="<li>email invalide!</li>";
        if(empty($adresse)) $message.="<li>adresse invalide!</li>";
        if(empty($profession)) $message.="<li>profession invalide!</li>";
        if(empty($nationalite)) $message.="<li>Nationalité invalide!</li>";
        if(empty($date_naissance)) $message.="<li>Date de naissance invalide!</li>";
        if(empty($lieu_naissance)) $message.="<li>lieu de naissance invalide!</li>";
         if(empty($date_soumission)) $message="<li>Date de soumission invalide!</li>";
          if(empty($sexe)) $message="<li>sexe invalide!</li>";
        if(empty($message)){
            include("conexion.php");
            /* $req=$pdo->prepare("select id from eleve where login=? limit 1");
            $req->setFetchMode(PDO::FETCH_ASSOC);
            $req->execute(array($login));
            $tab=$req->fetchAll();
            if(count($tab)>0)
                $message="<li>eleve déjà inscrit!</li>";
            else{ */
                 @$ins=@$pdo->prepare("insert into employe(passeword,nom,prenom,numero,email,adresse,profession,nationalite,date_naissance,lieu_naissance,date_soumission,sexe) values(?,?,?,?,?,?,?,?,?,?,?,?)");
                $ins->execute(array($passeword,$nom,$prenom,$numero,$email,$adresse,$profession,$nationalite,$date_naissance,$lieu_naissance,$date_soumission,$sexe));
               ;}}echo  '<div style="color: green; padding: 5px;"> L\'INSCRIPTION VALIDÉ AVEC SUCCÉS</div>' .'<br>';

             /*   echo '<table border= 2px> <tr  style="background:#0096D7; color:white; ">';

  for($i=0; $i < $ins->columnCount(); $i++)



  {
    $Nom_colonne = $ins->getColumnMeta($i);
    echo '<th>' .$Nom_colonne['name'].'</th>';
  }

  echo "</tr>";


  while($ligne = $ins->fetch(PDO::FETCH_ASSOC))

  {
    echo '<tr>';
    foreach($ligne as $indice => $information)
    {
      echo '<td>' .$information . '</td>';
    }
    $action = 'Action';
    echo '<td>' . $action . '</td>';
    echo '<td>' . $action . '</td>';
    echo '</tr>';
 


echo '</table>'; */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inclusion/CSS/style.css">
    <title>INSCRIPTION EMPLOYE</title>
</head>
<body>
    <div class="container">
   <div class="a"> <h1>INSCRIPTION EMPLOYE</h1></div>
     
       <form class="box" id="myForm" method="post" action="">

<div> <label for="PASSEWORD"><h4>PASSEWORD</h4></label>
<input type="text" placeholder="passeword" id="passeword" name="passeword" value="<?php echo $passeword?>"></div>
<div> <label for="NOM"><h4>NOM</h4></label>
<input type="text" placeholder="nom" id="nom" name="nom" value="<?php echo $nom?>"></div>
<div> <label for="PRENOM"><h4>PRENOM</h4></label>
<input type="text" placeholder="entrer votre prenom" id="prenom" name="prenom" value="<?php echo $prenom?>"></div>
<div> <label for="TELEPHONE"><h4>NUMERO</h4></label>
<input type="nombre" placeholder="telephone" id="telephone" name="numero" value="<?php echo $numero?>"></div>
<div> <label for="EMAIL"><h4>EMAIL</h4></label>
<input type="email" placeholder="email" id="email" name="email" value="<?php echo $email?>"></div>
<div> <label for="ADRESSE"><h4>ADRESSE</h4></label>
<input type="text" placeholder="adresse" id="adresse" name="adresse" value="<?php echo $adresse?>"></div>
<div> <label for="PROFESSION"><h4>PROFESSION</h4></label>
<input type="text" placeholder="profession" id="profession" name="profession" value="<?php echo $adresse?>"></div>
<div> <label for="NATIONALITÉ"><h4>NATIONALITÉ</h4></label>
<input type="text" placeholder="Nationalité" id="nationalité" name="nationalite" value="<?php echo $nationalite?>"></div>
<div> <label for="DATE DE NAISSANCE"><h4>DATE DE NAISSANCE</h4></label>
<input type="date" placeholder="date" id="date" name="date_naissance" value="<?php echo $date_naissance?>"></div>
<div> <label for="lieu de naissance"><h4>LIEU DE NAISSANCE</h4></label>
<input type="text" placeholder="lieu de naissance" id="lieu_de_naissance" name="lieu_naissance" value="<?php echo $lieu_naissance?>"></div>
<div> <label for="date_de_soumission"><h4>DATE DE SOUMISSION</h4></label>
<input type="date" placeholder="date_de_soumission" id="date_de_soumission" name="date_soumission" value="<?php echo $date_soumission?>"></div>
<div>
  <label for="sexe"><h4>Sexe</h4></label>
 <input type="text" name="sexe" id="sexe" value="<?php echo $sexe?>" ></div>
<div class="bout">
<button type="submit" name="valider" value="s'inscrire">Envoyer</button></div>
</div>

</form>
<?php if(!empty($message)){ ?>
        <div id="message"><?php echo $message ?></div>
        <?php } ?>
</body>
</html>