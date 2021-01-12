const requ = new XMLHttpRequest();
//console.log(prenom);

requ.onreadystatechange = function (event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            var affNom = document.querySelectorAll('.nom');
            var affPrenom = document.querySelectorAll('.prenom');//ne plus confondre querySelector quand j ai besoin que df un et querySelectorAll quand j ai besoin de la liste
            reponse = JSON.parse(this.responseText);

            for (let i = 0; i < reponse.length; i++) {

                affNom[i].innerHTML = reponse[i].nom;
                affPrenom[i].innerHTML = reponse[i].prenom;

            }

        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

requ.open('GET', '/testAPIinterne/PHP/Model/Count.php', true);
requ.send(null);