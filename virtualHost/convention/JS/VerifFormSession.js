
function verification(event) {
    let monInput = event.target;
    let message = (monInput.parentNode).getElementsByClassName("cache")[0];


    if (monInput.value == '') {
        monInput.style.border = "2px solid orange";
        message.style.display = 'block';
        message.innerHTML = "champ manquant";
        val[0] = 0;
    } else if (!monInput.checkValidity()) {
        monInput.style.border = "2px solid red";
        message.style.display = 'block';
        message.innerHTML = "format incorrect";
        val[0] = 0;
    } else {
        message.innerHTML = "";
        monInput.style.border = "2px solid green";
        message.style.display = 'block';
        val[0] = 1;
    }
    validerForm();
}

function changeValeur() {
    choix = select.selectedIndex;
    valeur = select.options[choix].value;
    if (valeur === 'defaut') {
        val[1] = 0;
    }
    else{
        val[1] = 1;
    }
    validerForm();
}

function validerForm() {
    let valide = false;


        if (val[i] != 0) {
            valide = true;
            valider.disabled = '';

        }

}

function verifDateDebut(e) {// cette fonction verifie que la date de fin n est pas superieure a la date de debut
    let dateFin = e.target;
    let dateDebut = dateFin.parentNode.parentNode.getElementsByClassName('dateDebutPAE')[0];
    let message = (dateFin.parentNode).getElementsByClassName("cache")[0];
    if (dateFin.value < dateDebut.value) {
        message.innerHTML = "date incorrecte";
        message.style.display = 'block';
        dateFin.style.border = "2px solid red";
    }
    else {
        message.innerHTML = "";
        dateFin.style.border = "2px solid green";
        message.style.display = 'block';
    }
}

function verifDateRapport(e) {
    let dateRapport = e.target;
    let dateFin = dateRapport.parentNode.parentNode.children[0].children[3].children[1];
    let message = (dateRapport.parentNode).getElementsByClassName("cache")[0];
    if (dateFin.value < dateRapport.value) {
        message.innerHTML = "date incorrecte";
        message.style.display = 'block';
        dateRapport.style.border = "2px solid red";
    }
    else {
        message.innerHTML = "";
        dateRapport.style.border = "2px solid green";
        message.style.display = 'block';
    }
}

var ajoutP = document.querySelector('#ajout1p');
if (ajoutP != null) {
    ajoutP.addEventListener('click', function () {
        var form = document.querySelector('form');

        form.action += '&perSup=ok'
    });
}

var valider = document.getElementById('valide');
valider.disabled = 'disabled';

select = document.getElementById("select");
select.addEventListener('input',changeValeur );

var val = [];

var inputs = document.querySelectorAll("input");

for (let i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener('input', verification);
}

var listeDateFin = document.getElementsByClassName('dateFinPAE');

for (let i = 0; i < listeDateFin.length; i++) {
    listeDateFin[i].addEventListener('input', verifDateDebut);
}

var listeDateRapport = document.getElementsByClassName('dateRapportSuivi');

for (let i = 0; i < listeDateRapport.length; i++) {
    listeDateRapport[i].addEventListener('input', verifDateRapport);
}
