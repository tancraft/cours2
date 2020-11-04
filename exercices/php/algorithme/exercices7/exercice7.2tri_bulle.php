<?php

//algorithme qui trie un tableau dans l’ordre décroissant.

// le fichier est requis, le programme s'arrête si le fichier n'est pas dispo
require "Fonctions_tableaux.php";

$tailletab1 = demandeEntier("veuillez indiquez la taille du tableau ");

$tab1 = creerTab($tailletab1);

echo "tableau saisie par l'utilisateur\n";

/*$tailletab1 = 4;
$tab1 = [6,2,9,8];*/

afficheTableau($tab1);

do//methode du tri a bulle pour le tableau1
{
    $yapermut = false;

    for ($i=0; $i < count($tab1) - 1; $i++) 
    {

        if ($tab1[$i] > $tab1[$i + 1]) 
        {

            $temp = $tab1[$i];
            $tab1[$i] = $tab1[$i + 1];
            $tab1[$i + 1] = $temp;
            $yapermut = true;

        }

    }

} 
while ($yapermut);

echo "tableau trier par ordre decroissant\n";

afficheTableau($tab1);
