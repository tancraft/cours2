<?php
  

  // on demande les valeurs a l utilisateur

  $nb1 = readline("merci d'entrer un nombre: ");

  $nb2 = readline("merci d'entrer un deuxieme nombre: ");

  // on verifie si un des deux chiffre est negatif
  if ($nb1<0 xor $nb2<0)
  {

     echo "le produit de ces nombres est negatif";

  }

  // sinon c est que le chiffre est nul 
  else if ($nb1 == 0 or $nb2 == 0)

  {

   echo "ce chiffre est nul: ";

  }



  else // on verifie que les deux nombre sont soit positifs ou negatifs
  {
   
   echo "le produit de ces nombre est positif: ";
   

  }

?>