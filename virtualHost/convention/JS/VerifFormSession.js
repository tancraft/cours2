var ajoutP = document.querySelector('#ajout1p');

ajoutP.addEventListener('click', function(){
var form = document.querySelector('form');

form.action +='&perSup=ok'
});

function verif(event){
var monInput = event.target;
var erreur = (monInput.closest()).getElementsByClassName("erreur")[0]; 

if (monInput.value == '')
{
    erreur.style.display = "flex";
    erreur.innerHTML = "champ vide";
}
}