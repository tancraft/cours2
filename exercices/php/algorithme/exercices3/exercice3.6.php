<?php

// on demande l'age de l'enfant
$age = readline("entrer l'age de votre enfant: ");

// on teste les categories en fonction de la tranche d'age
switch ($age) {

    case ($age > 5 && $age < 8):

        echo "votre enfant est un poussin";
        break;

    case '8':
    case '9':

        echo "votre enfant est un pupille";

        break;

    case '10':
    case '11':

        echo "votre enfant est un minime";
        break;

    case '12':
    case '13':

        echo "votre enfant est un cadet";
        break;

    default:
        echo "votre enfant n'entre dans aucune categorie";

}
