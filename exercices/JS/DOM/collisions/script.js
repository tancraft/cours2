//gestion au clavier plus les boutons
function mouvement(dirleft, dirTop)// dans les parametres ne pas inverser left et top
{
    var col = true;
    var styleJoueur = window.getComputedStyle(document.getElementById('joueur'), null);

    var topActuel = parseInt(styleJoueur.top);
    var leftActuel = parseInt(styleJoueur.left);
    var joueurW = parseInt(styleJoueur.width);
    var joueurH = parseInt(styleJoueur.height);

    //on recupere les Murs
    var listeMurs = document.querySelectorAll('.mur');
    listeMurs.forEach(function (elt) {
        var listeMurs = window.getComputedStyle(elt, null);
        var topM = parseInt(listeMurs.top);
        var leftM = parseInt(listeMurs.left);
        var widthM = parseInt(listeMurs.width);
        var heigthM = parseInt(listeMurs.height);
        col = col && collision(topM, leftM, widthM, heigthM, topActuel + dirTop, leftActuel + dirleft, joueurW, joueurH);

    });

    //on modifie les positions left et top actuelles
    if (col) {
    document.getElementById('joueur').style.top = topActuel + dirTop + 'px';
    document.getElementById('joueur').style.left = leftActuel + dirleft + 'px';
    }
}

function collision(topM,leftM, widthM, heigthM, topActuel, leftActuel, joueurW, joueurH) {
    if (leftActuel < leftM + widthM && leftActuel + joueurW > leftM && topActuel < topM + heigthM && topActuel + joueurH > topM) {
        return false
    }
    return true;
}

//gestion a la souris
function deplaceSouris(e) {
    if (!collisionMurs(parseInt(e.clientY) + ecartY, parseInt(e.clientX) + ecartX)) {
        joueur.style.top = parseInt(e.clientY) + ecartY + "px";
        joueur.style.left = parseInt(e.clientX) + ecartX + "px";
    }
};

//Gestion des collisions
/**
 * Méthode qui renvoi vrai s'il y a une collision avec l'Mur
 * @param {*} mur //Mur fixe
 * @param {*} posX //position en x souhaité
 * @param {*} posY //position en y souhaité
 */
function collisionUnMur(mur, posX, posY) {
    var styleJoueur = window.getComputedStyle(joueur);
    var joueurW = parseInt(styleJoueur.width);
    var joueurH = parseInt(styleJoueur.height);
    var styleMur = window.getComputedStyle(mur);
    var topM = parseInt(styleMur.top);
    var leftM = parseInt(styleMur.left);
    var widthM = parseInt(styleMur.width);
    var heigthM = parseInt(styleMur.height);
    if (posY < leftM + widthM && posY + joueurW > leftM && posX < topM + heigthM && posX + joueurH > topM) {
        console.log("collision n°" + compteurCollision + "  " + mur.id);
        flag = false;
        compteurCollision++;
        return true;
    }
    return false;
}

/**
 * Méthode qui renvoi vrai s'il y a une collision avec l'un des Murs
 * @param {*} posX //position en x souhaité
 * @param {*} posY //position en y souhaité
 */
function collisionMurs(posX, posY) {
    var pasCollision = true;
    var listeMurs = document.querySelectorAll('.mur');
    //on teste pour chacun des Murs
    listeMurs.forEach(function (mur) {
        pasCollision = pasCollision && !collisionUnMur(mur, posX, posY);
    });
    return !pasCollision;
}

var flag = false;
var ecartY, ecartX;
var joueur = document.getElementById('joueur');
var left = document.getElementById("left");
var right = document.getElementById("right");
var up = document.getElementById("up");
var down = document.getElementById("down");

left.addEventListener("click", function () {
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

joueur.addEventListener("mousedown", (e) => {
    flag = true;
    ecartY = parseInt(window.getComputedStyle(joueur).top) - parseInt(e.clientY);
    ecartX = parseInt(window.getComputedStyle(joueur).left) - parseInt(e.clientX);

});

document.addEventListener("mousemove", (e) => {
    if (flag == true) {
        deplaceSouris(e);
    }
});

joueur.addEventListener("mouseup", function () {
    flag = false;
});
