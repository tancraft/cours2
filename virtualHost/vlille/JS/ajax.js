function triStations(a, b) {
    if (a.fields.commune<b.fields.commune)
    {
       return -1;
    }
    else{
        if (a.fields.commune > b.fields.commune)
        {
            return 1;
        }
        else{
            if (a.fields.nom<b.fields.nom)
            {
                return -1;
            }
            else{
                if (a.fields.nom>b.fields.nom)
                {
                    return 1;
                }
                else{
                    return 0;
                }
            }
        }
    }
  }

// Utilisation de l'Ajax pour appeler l'API et récuperer les enregistrements
var contenu = document.getElementById("contenu");
var enregs; // contient la reponse de l'API
// on définit une requete
const req = new XMLHttpRequest();
//on vérifie les changements d'états de la requête
req.onreadystatechange = function (event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            // la requete a abouti et a fournit une reponse
            //on décode la réponse, pour obtenir un objet
            reponse = JSON.parse(this.responseText);
            console.log(this.responseText);
            console.log(reponse);
            enregs = reponse.records;
            enregs = enregs.sort(triStations);
            console.log(enregs);
            for (let i = 0; i < enregs.length; i++) {
                // on crée la ligne et les div internes
                ligne = document.createElement("div");
                ligne.setAttribute("class", "ligne");
                ligne.id = i;
                commune = document.createElement("div");
                commune.setAttribute("class", "commune");
                ligne.appendChild(commune);
                nom = document.createElement("div");
                nom.setAttribute("class", "rue");
                ligne.appendChild(nom);
                type = document.createElement("div");
                type.setAttribute("class", "type");
                ligne.appendChild(type);
                etat = document.createElement("div");
                etat.setAttribute("class", "etat");
                ligne.appendChild(etat);
                contenu.appendChild(ligne);
                espace = document.createElement("div");
                espace.setAttribute("class","espaceHorizon");
                contenu.appendChild(espace);
                //on met à jour le contenu
                commune.innerHTML = enregs[i].fields.commune;
                nom.innerHTML = enregs[i].fields.nom;
                type.innerHTML = enregs[i].fields.type;
                etat.innerHTML = enregs[i].fields.etat;
                var imgVrai = '<img class="vrai" src="images/vrai.png" alt="icone oui"></img>';
                var imgFaux = '<img class="vrai" src="images/faux.png" alt="icone non"></img>';
                et =enregs[i].fields.etat;
                tp =enregs[i].fields.type;
                
                if(et ==="EN SERVICE")
                {
                    etat.innerHTML= imgVrai;
                    
                }
                else
                {
                    type.innerHTML= imgFaux;
                }
                
                if(tp ==="AVEC TPE")
                {
                    type.innerHTML= imgVrai;
                    
                }
                else
                {
                    type.innerHTML= imgFaux;
                }
            }
            console.log("Réponse reçue: %s", this.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

//on envoi la requête
req.open('GET', 'https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&facet=libelle&facet=nom&facet=commune&facet=etat&facet=nom&facet=etatconnexion', true);
req.send(null);