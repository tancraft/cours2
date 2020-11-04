<?php
function demandeEntier($phrase) // Demande un entier à l'utilisateur et on a besoin dune phrase dans les paramettres
{
    do
    {
        do
        {
            $nombre = readline($phrase);
        }
        while (!is_numeric($nombre)); // on verifie que la chaine de caractere ne contient que des chiffres
    }
    while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)
    return $nombre; //renvoi le nombre saisi
}


// on appelle la fonction en demandant a ce que la valeur nombre soit appeller $nb1 et dans le parametre on y met se qui sera $phrase

$nb1= demandeEntier("entrer un mobre svp: ");

echo $nb1+$nb1;