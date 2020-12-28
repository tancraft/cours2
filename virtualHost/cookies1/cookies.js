
function createCookie(name, value, days) {
    // permet de créer un cookie
    if (days) {
        // si le nombre de jour est renseigné, on le transforme en millieme de seconde
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "expires=" + date.toGMTString();
    }
    else var expires = "";
    //le cookie doit contenir  clé=valeur;expires=temps;path=nomDomaine
    document.cookie = name + "=" + value + "; " + expires + "; path=/";
}

// function readCookie(name) {
//     // on récupère tous les cookies du site en une fois, séparé par ; 
//     // on range dans un tableau chaque cookie
//     var listeCookies = document.cookie.split(';');
// 	for(let i=0;i < listeCookies.length;i++) {
//         // pour chaque cookie, on sépare en tableau la clé et la valeur
//         var unCookie = listeCookies[i].split("=");
//         // si la clé correspond au cookie cherché, on renvoi la valeur
// 		if (unCookie[0]==name) return unCookie[1];
// 	}
// 	return null;
// }

// function readCookie(name) {
//     // on récupère tous les cookies du site en une fois, séparé par ; 
//     // on range dans un tableau chaque cookie
//     var listeCookies = document.cookie.split(';');
//     for (let i = 0; i < listeCookies.length; i++) {

//         // pour chaque cookie, on sépare en tableau la clé et la valeur
//         while (unCookie == name) {
//             var unCookie = listeCookies[i].split("=");
//             console.log(unCookie);
//         }
//         // si la clé correspond au cookie cherché, on renvoi la valeur
//         if (unCookie[0] == name) return unCookie[1];
//     }
//     return null;
// }

// function readCookie(name) {
//     var nomEntree = name + "=";// on cree l equivalent du nom du cookie avec son signe = qui apparait dans le console log
//     var listeCookies = document.cookie.split(';');// on fait la liste dez cookies que l on coupe a chaque ;

// 	for(let i=0;i < listeCookies.length;i++) {
//         // pour chaque cookie, on sépare en tableau la clé et la valeur
//         var unCookie = listeCookies[i];// on split pas ici comme sa on obtient toute la chaine de listeCookiesractere
//         console.log(listeCookies[i]);
//         while (unCookie.charAt(0)==' ') unCookie = unCookie.substring(1,unCookie.length);

//         // si la clé correspond au cookie cherché, on renvoi la valeur
//         if (unCookie[0]==name) return unCookie[1];

// 	}
// 	return null;
// }

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

createCookie("toto", "ballon_bleu", 1);
createCookie("titi", "ballon_rose", 1);
createCookie("tutu", "ballon_vert", 1);
var maValeur = readCookie("toto");
document.getElementById("lire").innerHTML = maValeur;
var maValeur2 = readCookie("titi");
document.getElementById("lire").innerHTML += maValeur2;
var maValeur3 = readCookie("tutu");
document.getElementById("lire").innerHTML += maValeur3;
console.log(maValeur);
console.log(maValeur2);
console.log(maValeur3);
// eraseCookie("toto");