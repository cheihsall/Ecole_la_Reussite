<?php
     function executeRequete($req)
     {
         global $conect_ma_BD;
         $resultat = $conect_ma_BD->query($req);
         if(!$resultat)
         {
             die("Erreur sur la requette sql.<br>Message :" .$conect_ma_BD ->error ."<br>Code :" .$req);
         }
         return $resultat;
     }



    function internauteEstConnecte()
    {
        if(!isset($_SESSION['employes'])) 
        return false;
        else 
        return true;
    }

    function internauteEstConnecteEtEstAdmin()
    {
        if(internauteEstConnecte() && $_SESSION['employes']['statut'] == 1)
         return true;
        else return false;
    }
?>