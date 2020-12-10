var str = prompt('ecrire une chaine');

var compteur = 0;

var lettre=str.substr(0,1);

    if (lettre == 'a' || lettre == 'e' || lettre == 'i' || lettre == 'o' || lettre == 'u' || lettre == 'y' )
    {
        compteur++;
    }


console.log(compteur);