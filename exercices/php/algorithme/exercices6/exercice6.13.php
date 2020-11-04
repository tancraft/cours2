<?php

/*inclus le fichier
include "Fonctions_tableaux.php";

/* inclus le fichier s'il n'est pas présent
include_once "Fonctions_tableaux.php";
 */

// le fichier est requis, le programme s'arrête si le fichier n'est pas dispo
require "Fonctions_tableaux.php";
//je demande le nombre de valeurs a saisir
$tailletab1 = demandeEntier("merci d'entrer le nombre de notes a saisir: ");

//ici les variables necessaire a la recherche du plus grand nombre
$plusgrand = 0;

/*je n'utilise pas la fonction de creation de tableau car
je doit ajouter la recherche du plus grand nombre et sa position*/
for ($i = 0; $i < $tailletab1; $i++) 
{
    $tab1[] = demandeEntier("veulliez entrer votre saisie: ");

    if ($tab1[$i] > $plusgrand) 
    {
        //recherche du plus grand nombre et $pos correspond a sa position dans le tableau
        $plusgrand = $tab1[$i];
        $pos = $i+1;// je rajoute +1 pour pas que lors de l affichage cela m indique 0 par exemple si en premiere position

    }
}

// on affiche le tableau
afficheTableau($tab1);

//on indique le resultat de la recherche
echo "la valeur la plus grande est " . $plusgrand . "\n";
echo "il est en position " . $pos;
