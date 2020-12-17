
function mouvement(dirleft,dirTop)// dans les parametres ne pas inverser left et top
{
    // permet de deplacer le carre selon 2 directions left et top
    //on recupere son style (tout le CSS)
    var styleJoueur = window.getComputedStyle(joueur);
    //on recupere les positions left et top actuelles
    var topActuel = styleJoueur.top;
    var leftActuel = styleJoueur.left;

    //on modifie les positions left et top actuelles
    joueur.style.top = parseInt(topActuel) + dirTop + 'px';
    joueur.style.left = parseInt(leftActuel) + dirleft + 'px';
}

var joueur = document.getElementById('joueur');
var left = document.getElementById("left");
var right = document.getElementById("right");
var up = document.getElementById("up");
var down = document.getElementById("down");

left.addEventListener("mousedown", function() {
    mouvement(-5, 0);
});
right.addEventListener("click", function () {
    mouvement(5, 0);
});
up.addEventListener("click", function () {
    mouvement(0, -5);
});
down.addEventListener("click", function () {
    mouvement(0, 5);
});

