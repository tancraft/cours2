<?php


// on demande un nombre à l'utilisateur
$nb = readline("entrez un nombre: ");

// on demande l'affichage de la table de multiplication entiere
for ($i = 1; $i <=10; $i++) // je prefere ecrire 10+1 plutot que 11 car au moins je connais ma valeur d'origine
{

  echo $nb . "x" . $i . "=" . $nb*$i;
  echo "\n";

}
