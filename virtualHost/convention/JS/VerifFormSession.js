var ajoutP = document.querySelector('#ajout1p');

ajoutP.addEventListener('click', function () {
    var form = document.querySelector('form');

    form.action += '&perSup=ok'
});
var inputs = document.querySelectorAll("input");
for(i=0;i<inputs.length;i++)
{
    inputs[i].addEventListener('keyup',verif);
}

function verif(event) {
    var monInput = event.target.value;
    if(!monInput.checkValidity())
    {
        console.log("toto");
    }

}


// console.log(event.target);
// var erreur = (monInput.parentNode).getElementsByClassName("false")[0];
// console.log(monInput.parentNode);
// if (monInput.value == '') {
//     erreur.style.display = "flex";
//     erreur.innerHTML = "champ vide";
// }