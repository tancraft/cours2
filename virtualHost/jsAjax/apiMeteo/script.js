var contenu = document.querySelector("main");
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
            // console.log(reponse);

            console.log('toto: '+reponse.sys.type);
            //contenu.innerHTML = reponse.sys.type;

        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

//on envoi la requête
// req.open('GET', 'http://api.openweathermap.org/data/2.5/weather?q=bangkok&appid=b5e768d8449e97500049bb40fb83f436&units=metric&lang=fr', true);
// req.send(null);

var choixP = document.querySelector('#choixPays');
function choixPays(){
    var valPays = document.querySelector('#pays').value;
    console.log(valPays);
req.open('GET', 'http://api.openweathermap.org/data/2.5/weather?q='+nomVille+','+valPays+'&appid=b5e768d8449e97500049bb40fb83f436&units=metric&lang=fr', true);
req.send(null);
};

choixP.addEventListener('click',choixPays);


