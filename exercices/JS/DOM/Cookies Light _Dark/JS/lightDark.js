var monRange = document.getElementsByTagName('input')[0];
monRange.addEventListener("change", function () {
    changeCouleur(monRange.value);
});
maCouleur = readCookie("couleur");
changeCouleur(maCouleur);

function changeCouleur(maValeur) {
    if (maValeur == 2) {
        nouvClass = "dark";
        monRange.value = 2;
    } else {
        nouvClass = "light";
        monRange.value = 1;
    }

    mesParagraphes = document.getElementsByClassName("paragraphe");
    for (let i = 0; i < mesParagraphes.length; i++) {
        mesParagraphes[i].setAttribute("class", "paragraphe " + nouvClass);
    }
    document.body.setAttribute("class", nouvClass);
    createCookie("couleur", monRange.value, 5);
}


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
        console.log(unCookie);
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