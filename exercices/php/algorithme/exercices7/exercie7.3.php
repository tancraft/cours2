<?php

// algorihtme qui modifie l ordre des saisies
require "fonctions_tableaux.php";

$taille1=demandeEntier("combiens de saisies allez vous faire: ");

$tab1=creerTab($taille1);

echo"\n tableaux avant inversion des nombres\n";

afficheForeach($tab1);

for ($i = 0; $i< intdiv(count($tab1),2);$i++)// diviser la taille du tableau
{

       $temp= $tab1[$i];
       $tab1[$i]= $tab1[(count($tab1)-1)-$i];
       $tab1[(count($tab1)-1)-$i] =$temp;
}


afficheForeach($tab1);


/*$tab2=array_reverse ( $tab1);// fonction qui inverse les elements d'un tableau

echo"\n tableaux après inversion des nombres\n";

afficheForeach($tab2);*/

function rechercheLarge($tab)
{

       for ($i = 0; $i< intdiv(count($tab),2);$i++)// diviser la taille du tableau
       {
       
              $temp= $tab[$i];
              $tab1[$i]= $tab[(count($tab)-1)-$i];
              $tab[(count($tab)-1)-$i] =$temp;
       }
       return($tab);

}

?>