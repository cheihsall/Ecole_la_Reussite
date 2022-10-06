function afficher(){
    /*        Récupération des données         */
    if(document.getElementById('prenom').value == "")  {
      alert("Veuillez entrer votre prenom!");
      document.getElementById('prenom').focus();
      return false;
     }
    
    if(document.getElementById('nom').value == "") {
      alert("Veuillez entrer votre nom!");
      document.getElementById('nom').focus();
      return false;
     }
   
    if(document.getElementById('email').value == "") {
      alert("Veuillez entrer votre email!");
      document.getElementById('email').focus();
      return false; }

     

     

    if(document.getElementById('email').value.indexOf('@') == -1) {
      alert("Ce n'est pas une adresse électronique!");
      document.getElementById('email').focus();
      return false;
    }
   

    if(document.getElementById('adresse').value == "") {
        alert("Veuillez entrer votre adresse!");
        document.getElementById('adresse').focus();
        return false; }

        if(document.getElementById('age').value == "") {
            alert("Veuillez entrer votre age!");
            document.getElementById('age').focus();
            return false; }

            if(document.getElementById('sexe').value == "") {
                alert("Veuillez entrer votre sexe!");
                document.getElementById('sexe').focus();
                return false; }

                if(document.getElementById('tutteur').value == "") {
                    alert("Veuillez entrer votre tutteur!");
                    document.getElementById('tutteur').focus();
                    return false; }
    
                    if(document.getElementById('numero tutteur').value == "") {
                        alert("Veuillez entrer votre numero tutteur!");
                        document.getElementById('numero tutteur').focus();
                        return false; }

                        if(document.getElementById('nationalite').value == "") {
                            alert("Veuillez entrer votre nationalite!");
                            document.getElementById('nationalite').focus();
                            return false; }
    

    if(document.getElementById('message').value == "") {
      alert("Veuillez entrer votre commentaire!");
      document.getElementById('message').focus();
      return false;
     } 

      }