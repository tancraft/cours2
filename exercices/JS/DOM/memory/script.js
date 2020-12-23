var nbImageSelectionne = 0;
var i = 0;
var nbPairTrouvee = 0;
var cartes = document.querySelectorAll('.carte');
var tab1 = [1, 2, 3, 4, 5, 6, 7, 8, 1, 2, 3, 4, 5, 6, 7, 8];
var tab2 = new Array;
//fonctions
function changeCoter(carte) {

    var eval = carte.getAttribute("class");
    var numC = carte.getAttribute("id");

    if (eval == "carte verso") {
        carte.src = "IMG/recto" + numC + ".jpg";
        carte.classList.remove("verso");
        carte.classList.add("recto");
        carte.setAttribute('alt', 'carte recto' + numC);


    }
    else {
        carte.src = "IMG/verso.jpg";
        carte.classList.remove("recto");
        carte.classList.add("verso");
        carte.setAttribute('alt', 'carte a l endroit');


    }
}

var i = 0;
var nbPairTrouvee = 0;
var cartes = document.querySelectorAll('.carte');

var tab1 = [1, 2, 3, 4, 5, 6, 7, 8, 1, 2, 3, 4, 5, 6, 7, 8];
var tab2 = new Array;

for (let i = 0; i < tab1.length; i++) {
    tab2[i] = [tab1[i], Math.floor(Math.random() * 100)]
}
tab2.sort((a, b) => a[1] - b[1]);

for (let i = 0; i < tab1.length; i++) {
    tab1[i] = tab2[i][0];
}


do {
    let nb = tab1[i];
    cartes[i].classList.add("verso");
    cartes[i].src = "IMG/verso.jpg";
    cartes[i].setAttribute('alt', 'carte a l envers');
    cartes[i].setAttribute('id', nb);
    i++

} while (i < cartes.length);

console.log(cartes);

document.addEventListener("click", (e) => {
    if (nbImageSelectionne == 2) {
    }
    else {
        changeCoter(e.target.parentNode.getElementsByClassName("carte")[0]);

    }
});



// setTimeout(function(){        
//     carte.src = "IMG/verso.jpg";
//     carte.classList.remove("recto");
//     carte.classList.add("verso");
//     carte.setAttribute('alt', 'carte a l envers');
// }, 3000);


function verifPair(img, imgp) {
    if (imgp.src == img.src) {
        //gagné
        nbPairTrouvee++;
        //on ne les affiche pas
    } else {
        //on cache les images cliquées
        setTimeout(function () {
            affiche(img, false);
            affiche(img.parentNode.getElementsByClassName("plage")[0], true);
            affiche(imgp, false);
            affiche(imgp.parentNode.getElementsByClassName("plage")[0], true);

        }, 800);
    }
}