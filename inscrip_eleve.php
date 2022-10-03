<?php
  include_once("inclusion/header.inc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form method="POST" action="formulaire.php">
    <label for="prenom">Prenom</label><br>
    <input type="text" name="prenom" placeholder="prenom" id="prenom" required=""><br><br>
    <label for="prenom">Nom</label><br>
    <input type="text" name="nom" placeholder="nom" id="nom" required=""><br><br>
    <label for="sexe">Sexe</label><br>
    Masculin <input type="radio" name="sexe" placeholder="sexe" id="sexe" value="m" checked=""> -
    Feminin <input type="radio" name="sexe" placeholder="sexe" id="sexe" value="f"> <br><br>
    <label for="classe">Classe</label><br>
    <select name="classe">
      <option value="2nd">2nd</option>
      <option value="1ere">1ere</option>
      <option value="t">Tml</option>
  </select><br><br>
   
    <label for="date_inscrip">Date d'inscription <i>(Format: AAAA-MM-JJ)</i></label><br>
    <input type="date" name="date_inscrip" placeholder="ex: 2015-07-30" id="prenom"><br><br>
    <label for="montant">Montant</label><br>
    <input type="text" name="montant" placeholder="montant" id="salaire"><br><br>
    <input type="submit"><br><br>
  </form>
</body>
</html>