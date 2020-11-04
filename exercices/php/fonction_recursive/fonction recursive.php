<?php


/*
départ : mot
arrivée : tom

inverser un mot consiste à mettre la 1ere lettre en 1er et inverser le reste du mot

 */

function inverseMot($mot)//nom de la fonction
{
    $longueur = strlen($mot);//definir la variable longueur du mot
    if ($longueur == 1)// condition d'arret quand le mot a une longueur de 1 caractere
    {
        return $mot;// si la condition est respecter on renvoi le mot inverser
    }
    else
    {
        return substr($mot, $longueur - 1).inverseMot(substr($mot,0,$longueur-1));// sinon on soustrait une lettre au mot existant et on rappelle la fonction
    }

}

echo inverseMot("cheval");// test d'inversement sur le mot cheval