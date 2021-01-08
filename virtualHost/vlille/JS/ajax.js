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
            console.log(enregs);
            for (let i = 0; i < enregs.length; i++) {
                // on crée la ligne et les div internes
                ligne = document.createElement("div");
                ligne.setAttribute("class", "ligne");
                ligne.id = i;
                commune = document.createElement("div");
                commune.setAttribute("class", "ville");
                ligne.appendChild(commune);
                libelle = document.createElement("div");
                libelle.setAttribute("class", "libelle");
                ligne.appendChild(libelle);
                nbvelosdispo = document.createElement("div");
                nbvelosdispo.setAttribute("class", "etat");
                ligne.appendChild(nbvelosdispo);
                contenu.appendChild(ligne);
                espace = document.createElement("div");
                espace.setAttribute("class","espaceHorizon");
                contenu.appendChild(espace);
                //on met à jour le contenu
                commune.innerHTML = enregs[i].fields.commune;
                libelle.innerHTML = enregs[i].fields.type;
                nbvelosdispo.innerHTML = enregs[i].fields.nbvelosdispo;

                // on ajoute un evenement sur ligne pour afficher le detail
                ligne.addEventListener("click", afficheDetail);
            }
            console.log("Réponse reçue: %s", this.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

function afficheDetail(e) {
    parkingClique = (e.target).parentNode;
    parkingClique.removeEventListener("click", afficheDetail);
    detail = document.createElement("div");
    detail.setAttribute("class", "detail");
    adresse = document.createElement("div");
    adresse.setAttribute("class", "adresse");
    detail.appendChild(adresse);
    dispo = document.createElement("div");
    dispo.setAttribute("class", "dispo");
    detail.appendChild(dispo);
    nbMax = document.createElement("div");
    nbMax.setAttribute("class", "nbMax");
    detail.appendChild(nbMax);
    adresse.innerHTML = enregs[parkingClique.id].fields.adresse;
    dispo.innerHTML = enregs[parkingClique.id].fields.dispo;
    nbMax.innerHTML= "  nb places max " + enregs[parkingClique.id].fields.max;
    contenu.insertBefore(detail, parkingClique.nextSibling);

}

//on envoi la requête
req.open('GET', 'https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion', true);
req.send(null);