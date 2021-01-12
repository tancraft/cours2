const requ = new XMLHttpRequest();

requ.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            reponse=JSON.parse(this.responseText);
            console.log(reponse);
           //on traite les éléments de la liste ....
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

requ.open('POST', '/Combobox/index.php?codePage=listeAPI', true);
requ.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

var id= document.querySelector('option').value;
var args = "idRegion="+id;
// var args = "idPersonne=1&test=2";
requ.send(args);


