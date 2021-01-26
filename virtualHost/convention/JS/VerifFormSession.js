
// //ajout de classe pour traitement ajout de periode
// var ajoutP = document.querySelector('#ajout1p');
// if (ajoutP != null) {
//     ajoutP.addEventListener('click', function () {
//         var form = document.querySelector('form');

//         form.action += '&perSup=ok'
//     });
// }

// //verif dans le formulaire pour le numero d offre
// var inputs = document.querySelectorAll("input");

// for (let i = 0; i < inputs.length; i++) {
//     inputs[i].addEventListener('input', verification);
// }

// function verification(event) {
//     var monInput = event.target;
//     var message = (monInput.parentNode).getElementsByClassName("cache")[0];

//     if (monInput.value == '') {
//         monInput.style.border = "2px solid orange";
//         message.style.display = 'block';
//         message.innerHTML = "champ manquant";
//     } else if (!monInput.checkValidity()) {
//         monInput.style.border = "2px solid red";
//         message.style.display = 'block';
//         message.innerHTML = "format incorrect";
//     } else {
//         message.innerHTML = "";
//         monInput.style.border = "2px solid green";
//         message.style.display = 'block';
//     }

// }

// //verif des dates 
// //on recupere les dates de fin et on boucle sur l evenement pour faire la verif
// var listeDateFin = document.getElementsByClassName('dateFinPAE');

// for (let i = 0; i < listeDateFin.length; i++) {
//     listeDateFin[i].addEventListener('input', verifDateDebut);

// }

// function verifDateDebut(e) {// cette fonction verifie que la date de fin n est pas superieure a la date de debut
//     var dateFin = e.target;
//     var dateDebut = dateFin.parentNode.parentNode.getElementsByClassName('dateDebutPAE')[0];
//     if (dateFin.value < dateDebut.value)
//         console.log("superieur");

// }

// //meme chose que avant pour les dates de rapport
// var listeDateRapport = document.getElementsByClassName('dateRapportSuivi');

// for (let i = 0; i < listeDateRapport.length; i++) {
//     listeDateRapport[i].addEventListener('input', verifDateRapport);

// }

// function verifDateRapport(e) {
//     var dateRapport = e.target;
//     var dateFin = dateRapport.parentNode.parentNode.parentNode.getElementsByClassName('dateFinPAE')[0];
//     if (dateFin.value < dateRapport.value)
//         console.log("superieur");

// }


function verification(event) {
    var monInput = event.target;
    let message = (monInput.parentNode).getElementsByClassName("cache")[0];

    if (monInput.value == '') {
        monInput.style.border = "2px solid orange";
        message.style.display = 'block';
        message.innerHTML = "champ manquant";
    } else if (!monInput.checkValidity()) {
        monInput.style.border = "2px solid red";
        message.style.display = 'block';
        message.innerHTML = "format incorrect";
    } else {
        message.innerHTML = "";
        monInput.style.border = "2px solid green";
        message.style.display = 'block';
    }

}

function verifDateDebut(e) {// cette fonction verifie que la date de fin n est pas superieure a la date de debut
    var dateFin = e.target;
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
if (ajoutP != null) {
    ajoutP.addEventListener('click', function () {
        var form = document.querySelector('form');

        form.action += '&perSup=ok'
    });
}

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