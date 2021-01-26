
function verifDateDebut(e) {// cette fonction verifie que la date de fin n est pas superieure a la date de debut
    var dateFin = e.target;
    console.log(e.target);
    var dateDebut = dateFin.parentNode.parentNode.getElementsByClassName('dateDebutPAE')[0];
    let message = (dateFin.parentNode).getElementsByClassName("cache")[0];
    if (dateFin.value < dateDebut.value) {
        message.innerHTML = "date incorrecte";
        message.style.display = 'block';
        dateFin.style.border = "2px solid red";
    }
    else
    {
        message.innerHTML = "";
        dateFin.style.border = "2px solid green";
        message.style.display = 'block';
    }
}

function verifDateRapport(e) {
    var dateRapport = e.target;
    var dateFin = dateRapport.parentNode.parentNode.children[0].children[3].children[1];
    let message = (dateRapport.parentNode).getElementsByClassName("cache")[0];
    if (dateFin.value < dateRapport.value) {
        message.innerHTML = "date incorrecte";
        message.style.display = 'block';
        dateRapport.style.border = "2px solid red";
    }
    else
    {
        message.innerHTML = "";
        dateRapport.style.border = "2px solid green";
        message.style.display = 'block';
    }
}

var ajoutP = document.querySelector('#ajout1p');

ajoutP.addEventListener('click', function(){
var form = document.querySelector('form');

form.action +='&perSup=ok'
});

var listeDateFin = document.getElementsByClassName('dateFinPAE');

for (let i = 0; i < listeDateFin.length; i++) {
    listeDateFin[i].addEventListener('input', verifDateDebut);
}

var listeDateRapport = document.getElementsByClassName('dateRapportSuivi');

for (let i = 0; i < listeDateRapport.length; i++) {
    listeDateRapport[i].addEventListener('input', verifDateRapport);
}