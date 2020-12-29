//global
function createCookie(name, value, days) {
    // permet de créer un cookie
    if (days) {
        // si le nombre de jour est renseigné, on le transforme en millieme de seconde
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "expires=" + date.toGMTString();
    } else var expires = "";
    //le cookie doit contenir  clé=valeur;expires=temps;path=nomDomaine
    document.cookie = name + "=" + value + "; " + expires + "; path=/";
}

function readCookie(name) {
    var nomCookie = name + "="; //on cree un equivalent du nom avec le =
    var listeCookies = document.cookie.split(';');//on cree le tableau de la liste des cookies
	for(var i=0;i < listeCookies.length;i++) {// on boucle sur la longueur de ce tableau
        var unCookie = listeCookies[i];//on cree un tableau avec le texte de chaque cookie different
    // on boucle si le premier caractere du string est un espace; sinon on soustrait cet espace en creant une nouvelle chaine commence a l index 1
        while (unCookie.charAt(0)==' ') unCookie = unCookie.substring(1,unCookie.length);
        // on verifie maintenant que si l indice 0 coresspond au nom cu cookie on refait un tour dans le for sinon on decoupe la longuer du nom du cookie et ensuite on renvoie enfin la chaine qui correspond a l information
        if (unCookie.indexOf(nomCookie) == 0) return unCookie.substring(nomCookie.length,unCookie.length);

	}
	return null;
}

function eraseCookie(name) {
    // pour supprimer un cookie, on le périme
    createCookie(name, "", -1);
}

//changement de couleur
function changeMode(monMode)
{
    if (monMode.getAttribute('value') == 2) {
        monMode.setAttribute('value', 1);
    } else {
        monMode.setAttribute('value', 2);
    }
    createCookie("couleur", monMode.value, 5);
    return monMode.value;
}

function changeCouleur(maValeur) {
    if (maValeur == 2) {
        nouvClass = "dark";
        monMode.value = 2;
        monMode.innerHTML = nouvClass;
    } else {
        nouvClass = "light";
        monMode.value = 1;
        monMode.innerHTML = nouvClass;
    }
    mesParagraphes = document.getElementsByClassName("paragraphe");
    for (let i = 0; i < mesParagraphes.length; i++) {
        mesParagraphes[i].setAttribute("class", "paragraphe " + nouvClass);
    }
    document.body.setAttribute("class", nouvClass);
    createCookie("couleur", monMode.value, 5);
}

//changement de couleur
var monMode = document.getElementById('mode');
monMode.addEventListener("click", function () {
    changeMode(monMode);
});

monMode.addEventListener("click", function () {
    changeCouleur(monMode.value);
});

maCouleur = readCookie("couleur");
changeCouleur(maCouleur);

//le compteur
// du coup je reutilise index of que j aime bien et on verifie si le cookie est present sur le domaine
if (document.cookie.indexOf('compteur') != -1)
{ 
    //alert('cookie est la');
    var compte = readCookie("compteur");
    compte++;
    document.getElementById("compteVue").innerHTML = compte;
    createCookie("compteur", compte, 1)

} 
else 
{
var compteur =1;
createCookie("compteur", compteur, 1);
var compte = readCookie("compteur");
document.getElementById("compteVue").innerHTML = compte;

}

//bouton reset de cookie compteur
var reset=document.getElementById('reset');
reset.addEventListener("click",function(){
    var compte = readCookie("compteur");
    compte = 0;
    document.getElementById("compteVue").innerHTML = compte;
    createCookie("compteur", compte, 1);
});