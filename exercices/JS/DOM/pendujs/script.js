/*
choix du mot ok
coder le mot ok
saisi lettre gestion clavier et souris
tester lettre ok
afficher lettres ok
tester gagner
gagner
perdu
rejouer
*/
var dico = [
    'BOUBOULE',
    'ANNA',
    'JAVASCRIPT',
    'VOITURE',
    'SORCIERE-DU-VENT'
];

window.addEventListener('load', init);

function init() {
    console.log('ok');
}

function tabClavier() {
    let choix = [];
    // on commence a 65 car c est la qu est le A dans la table ascii et 90 correspond au z
    for (let index = 65; index <= 90; index++) {
        //String.fromCharCode cette indtruction permet de transformer le 
        //code ascii en charactere affichable
        // push permet de remplir le tableau
        choix.push(String.fromCharCode(index));
    }
    return choix;//renvoi un tableau remplis des lettres de l alphabet
};

function afficheClavier(choix) {
    test = [];
    for (let i = 0; i < choix.length; i++) {
        test[i] = '<button class="touche">' + choix[i] + '</button>';
    }
    return test.join('');//sinon les "," s affichent
}


function choixMot() {
    let mot = dico[Math.floor(Math.random() * dico.length)];
    return mot;
}

function coderMot(mot) {
    tab = mot.split('');

    for (i = 1; i < tab.length - 1; i++) {
        if (tab[i] == '-') {
            tab[i] = "-";
        }
        else {
            tab[i] = "_";
        }

    }

    return tab.join('');// join permet de transformer l array en string
}

function afficherMot(motCoder) {
    afficheMot.innerHTML = '<h3>' + motCoder + '</h3>';
}

function testerLettre(lettre, mot) {
    res = mot.indexOf(lettre);
    if (res == -1) {
        return -1;
    }
    else {
        return 1;
    }
}

function creerPos(lettre, mot) {
    var tabPos = [];
    for (let i = 0; i < mot.length; i++) {
        if (lettre == mot[i])
        {
            tabPos.push(i);
        }
    }
    return tabPos;
}

function ajouterLettre(mot, index, lettre) {


    mot = mot.substr(0, index) + lettre + mot.substr(index + 1);

    return mot;
}

function ajouterLesLettre(motCoder, mot, lettre) {

    var tabPos = creerPos(lettre, mot);
    console.log(tabPos);
    if (tabPos != null) {
        for (let i = 0; i < tabPos.length; i++) {

            let index = tabPos[i];
            motCoder = ajouterLettre(motCoder, index, lettre);
        }
    }

    return motCoder;
}

function dessinePendu(nbErreurs)
{
    dessin.src = 'img/00'+nbErreurs+'.png';
}

function testerGagner(nbErreurs, motCoder) {
    if (nbErreurs == 8) // si nb erreur =8, partie perdue
    {
        return -1;
    }
    else if (motCoder.indexOf("_") == -1) // s'il y a un _ dans le tableau, la partie est en cours
    {
        return 1;
    }
    else {
        return 0;
    }
}

var afficheMot = document.querySelector('#motChoisi');
var clavier = document.querySelector('#clavier');
var temps = document.querySelector('#temp');
var nbErreurs = 0;
var dessin = document.querySelector('#dessin');

var mot = choixMot();
var motCoder = coderMot(mot);
console.log(motCoder);
var boutons = tabClavier();
clavier.innerHTML = afficheClavier(boutons);

console.log(mot);

afficherMot(motCoder);

clavier.addEventListener('click', function (e) {
    var lettreChoisi = e.target;
    var lettre = lettreChoisi.textContent;
    lettreChoisi.classList.add("desactive");
    var test = testerLettre(lettre, mot, 0);
    if (test == -1) {
        nbErreurs++;
        dessinePendu(nbErreurs);

    }
    else {
        motCoder = ajouterLesLettre(motCoder, mot, lettre);
    }

    afficherMot(motCoder);
    console.log("err: " + nbErreurs);
    var verif = testerGagner(nbErreurs, motCoder);
    console.log(verif);
    if (verif == 1) {
        console.log("vous avez gagner");
    }
    else if (verif == -1) {
        console.log("vous avez perdu");
    }

});












