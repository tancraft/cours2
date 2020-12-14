function cherche(lettre, phrase) {
    var depart = 0;
    var compteur = 0;
    console.table(phrase);
    phrase2 = phrase;
    do
    {
        index =phrase2.indexOf(lettre);
        if (index!= -1)
        {
            console.log(index+depart);
            depart += index+1;
            phrase2 = phrase.substring(depart);

        }
    }
    while ( index != -1)

    return compteur;
}

var lettre = prompt('entrer une lettre a chercher');

var phrase = prompt('entrer une phrase dans laquelle chercher');

compteur = cherche(lettre, phrase);

