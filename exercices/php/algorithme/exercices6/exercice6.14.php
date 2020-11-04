<?php

//appel du fichier de fonctions
require "Fonctions_tableaux.php";

//demarrage de la variable $total a 0
$total = 0;
//demmarage de la variable concernant les notes au dessus de la moyenne
$nbmoy = 0;
//on demande combien de notes vont etre saisies
$tailletab1 = demandeEntier("combien de notes allez vous saisirs? ");

/* on fait les saisies pour ecrire le tableau, pas de fonction car
ajout du calcul du total des notes dans la boucle*/
for ($i = 0; $i < $tailletab1; $i++) 
{
    $tab1[] = demandeEntier("veulliez entrer votre saisie: ");

    $total += $tab1[$i]; //calcul du total des notes
}

$moy = $total / $tailletab1; // ici on calcule la moyenne du total des notes par la taille du tableau

//on doit refaire une boucle avec condition pour la recherche du nombre de notes au dessus de la moyenne
for ($i = 0; $i < $tailletab1; $i++) 
{

    if ($tab1[$i] > $moy) 
    {

        $nbmoy += 1;//ajout du nombre de notes au dessus de la moyenne

    }

}
afficheTableau($tab1); // on affiche le tableau

echo "la moyenne de la classe est de " . $moy."\n"; // affichage de la moyenne
echo "il y a ".$nbmoy." eleves au dessus de la moyenne";//affichage du nombre d'élèves au dessus de la moyenne
