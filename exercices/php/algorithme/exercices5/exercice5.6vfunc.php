<?php


// demande saisie d'un nombre avec verification si c'est un entier
do 
{
   do 
   {
        $nb = readline("Entrer un nombre : "); // demande de saisie
   } 
   while (!is_numeric($nb)); // verifier que c'est une valeur numerique

} 
while (!is_int($nb * 1)); // verifier qu'il s'agit d'un entier

$fact = gmp_fact($nb); // appel de la fonction de calcul de la factorielle

echo $fact; // affichage de la factorielle