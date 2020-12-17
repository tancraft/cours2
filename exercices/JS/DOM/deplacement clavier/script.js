function movement(dirleft,dirTop)// dans les parametres ne pas inverser left et top
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

var joueur = document.getElementById('joueur'),
    stylejoueur = joueur.style, // Un petit raccourci
document.onkeydown = function(event){
    var event = window.event,
        keyCode = event.keyCode;
     
    // On détecte l'événement puis selon la fleche, on incrémente ou décrément les variables globales de position, i et j.
    switch(keyCode){
    case 38:
        top--;
        break;
    case 40:
        top++;
        break;
    case 37:
        left--;
        break;
    case 39:
        left++;
        break;
    }
    // Et enfin on applique les modifications :
    stylejoueur.left = String(left)+'px';
    stylejoueur.top = String(top)+'px';
}

