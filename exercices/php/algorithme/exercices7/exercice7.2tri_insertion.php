<?php

require "fonctions_tableaux.php";
//algorithme qui trie un tableau dans l’ordre décroissant.

// le fichier est requis, le programme s'arrête si le fichier n'est pas dispo
require "fonctions_tableaux.php";

$tailletab1=demandeEntier("veuillez indiquez la taille du tableau ");

$tab1=creerTab($tailletab1);

echo "tableau saisie par l'utilisateur\n";

/*$tailletab1 = 4;
$tab1 = [6,2,9,8];*/

afficheTableau($tab1);

for ($i=0;$i<$tailletab1-1;$i++)
{
    $maxi=$tab1[$i];// la variable ou on mettra le plus grand nombre commence avec la valeur de base $i
    $pos=$i;// on enregistre la valeur de la position en commencant par $i

    for ($j=$i+1;$j<$tailletab1;$j++)// tri par insertion
    {
    
       if ($tab1[$j]>$maxi)// verification des valeurs les plus grandes
       {

         $maxi=$tab1[$j];
         $pos=$j;

       }
    } //<-- correction amanda le deplacement de } ici au lieu d apres echange de valeurs
      // echange des valeurs
       $tab1[$pos]=$tab1[$i];
       $tab1[$i]=$maxi;

    

}

echo "tableau trier par ordre decroissant\n";

afficheTableau($tab1);


?>