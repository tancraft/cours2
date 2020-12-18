
function mouvement(dirleft, dirTop)// dans les parametres ne pas inverser left et top
{
    // permet de deplacer le joueur selon 2 directions left et top
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

left.addEventListener("mousedown", function () {
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

//gestion au clavier
window.addEventListener("keydown", function (event) {
    switch (event.key) {

        case "ArrowLeft":
            {
                mouvement(-5, 0);
                break;
            }
        case "ArrowRight":
            {
                mouvement(5, 0);
                break;
            }
        case "ArrowUp":
            {
                mouvement(0, -5);
                break;
            }
        case "ArrowDown":
            {
                mouvement(0, 5);
                break;
            }
    }


});

//gestion a la souris
var flag = false;
var ecartY,ecartX;

joueur.addEventListener("mousedown", (e) => {
    flag = true;
    ecartY = parseInt(window.getComputedStyle(joueur).top) - parseInt(e.clientY);
    ecartX = parseInt(window.getComputedStyle(joueur).left) - parseInt(e.clientX);
    
});

document.addEventListener("mousemove", (e) => {
    if (flag == true)
    {
        joueur.style.top = parseInt(e.clientY) + ecartY + "px";
        joueur.style.left = parseInt(e.clientX) + ecartX + "px";
    }
});

joueur.addEventListener("mouseup", function() {
    flag = false;
});