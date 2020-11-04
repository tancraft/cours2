<?php
// correction affichage par amanda

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

$fact=1;

    echo "la factorielle de ".$nb." est: \n";

    echo "1";

for ($add=2; $add<=$nb; $add++)// boucle pour le calcul de la factorielle
{
      $fact = $fact*$add;
      echo "x".$add;
}

     echo "=".$fact; // affichage de la factorielle