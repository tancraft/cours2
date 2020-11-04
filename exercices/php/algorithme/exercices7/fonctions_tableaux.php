<?php

// ici nous allons creer differents tableaux

/*fonction pour verifier si la saisie d'un nombre est un entier
$phrase: il faut indiquer la phrase dans les parametre a ecrire pour l'utilisateur
renvoi la valeur nombre*/
function demandeEntier($phrase) // Demande un entier à l'utilisateur

{
    do 
    {
        do 
        {
            $nombre = readline($phrase);
        } 
        while (!is_numeric($nombre)); // on verifie que la chaine de caracterer ne contient que des chiffres
    } 
    while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)
    return $nombre; //renvoi le nombre saisi
}

/*fonction qui permet de creer un tableau avec la taille que l'on demande à l'utilisateur
stailletab: c'est la valeur attendu pour poouvoir definir la taille du tableau
cela renvoi le tableau ($tab)*/
function creerTab($tailletab)
{

    for ($i = 0; $i < $tailletab; $i++) 
    {
        $tab[] = demandeEntier("veulliez entrer votre saisie: ");
    }
    return ($tab);
}

/*fonction qui permet de creer le tableau en attendant que l'utilisateur entre 0 pour indiquer qu'il a fini sa saisie
renvoie le tableau remplit a la fin de la saisie*/
function tableauSaisie()
{

    do 
    {
        $nb = demandeEntier("Entrer une valeur ");
        if ($nb != 0) //evite que le dernier 0 entre dans le tableau
        {
            $tab[] = $nb;
        }
    } 
    while ($nb != 0);
    return $tab;
}

/*fonction qui permet l'affichage du tableau avec la boucle foreach
attent la valeur $tab pour s'afficher
cela affiche le tableau*/
function afficheForeach($tab)
{
    echo "\n";
    foreach ($tab as $elt) // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tour dans $elt
    {
        echo $elt . "\t";
    }
    echo "\n";
}

/*fonction qui affiche le tableau en utilisant la boucle for
$tab: attend le nom de la variable tableau pour s'executer*/
function afficheTableau($tab)
{
    echo "\n";

    for ($i = 0; $i < count($tab); $i++) // la fonction count renvoi la taille du tableau
    {
        echo $tab[$i] . "\t";
    }
    echo "\n";
}

function recherchebulle($tab) // a renommer
{
    do//methode du tri a bulle pour le tableau1
    {
        $yapermut = false;

        for ($i = 0; $i < count($tab) - 1; $i++) 
        {

            if ($tab[$i] > $tab[$i + 1]) 
            {

                $temp = $tab[$i];
                $tab[$i] = $tab[$i + 1];
                $tab[$i + 1] = $temp;
                $yapermut = true;

            }

        }

    } 
    while ($yapermut);
    return ($tab);
}

function rechercheInsert($tab) // a renommer
{
    $tailletab = max($tab);  // a remplacer par Count

    for ($i = 0; $i < $tailletab - 1; $i++) 
    {
        $maxi = $tab[$i]; // la variable ou on mettra le plus grand nombre commence avec la valeur de base $i
        $pos = $i; // on enregistre la valeur de la position en commencant par $i

        for ($j = $i + 1; $j < $tailletab; $j++) // tri par insertion
        {

            if ($tab[$j] > $maxi) // verification des valeurs les plus grandes
            {

                $maxi = $tab[$j];
                $pos = $j;

            }
        } //<-- correction amanda le deplacement de } ici au lieu d apres echange de valeurs
        // echange des valeurs
        $tab[$pos] = $tab[$i];
        $tab[$i] = $maxi;

    }
    return ($tab);

}


function rechercheLarge($tab)   // a renommer
{

       for ($i = 0; $i< intdiv(count($tab),2);$i++)// diviser la taille du tableau
       {
       
              $temp= $tab[$i];
              $tab1[$i]= $tab[(count($tab)-1)-$i];
              $tab[(count($tab)-1)-$i] =$temp;
       }
       return($tab);

}
