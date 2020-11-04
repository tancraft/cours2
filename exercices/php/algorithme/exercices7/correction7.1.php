<?php
require "fonctions_tableaux.php";
$tab = creerTab(5);// on cree le tableau avec 5 valeurs
$consec = true; // variable consecutive sur vraie
$i = 0;// initialize $i car pas encore fait du coup risque d erreur si n'apparait pas 
if ($tab[0] < $tab[$i + 1])// on verifie que la premiere valeur du tableau soit inferieur de 1 par rapport a la seconde valeur
{ //Sens croissant
    $sens = 1;
}
else
{
    $sens = 0; //Evite une erreur undefined variable si le tableau est décroissant
}

do// boucle do while j aurais du y penser plutot que me casser la tete avec une while
{
    $consec = false;// la on bascule la variable cobnsecutive direct a false 
    if ($sens == 1)
    { //on verifie si le Sens est croissant
        if ($tab[$i] + 1 == $tab[$i + 1])
    {
            $i += 1;
            $consec = true;// on bascule sur true 
        }
    }
    else
    { //on verifie si le Sens est décroissant
        if ($tab[$i] - 1 == $tab[$i + 1])
    {
            $i += 1;
            $consec = true;// on bascule sur true 
        }

    }

} while ($consec && $i < count($tab) - 1);// on verifie que consec est = a true et que $i est bien inferieur a la taille du tableau-1
//conclusion
if ($consec == true)// si consec =true on affiche consecutif
{
    echo "Le tableau est consécutif";
}
else// si consec =false on affiche pas consecutif
{
    echo "Le tableau n'est pas consécutif";
}