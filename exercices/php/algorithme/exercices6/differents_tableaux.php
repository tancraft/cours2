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
            $nombre= readline($phrase);
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

    for ($i=0; $i<$tailletab; $i++) 
    {
        $tab[]= demandeEntier("veulliez entrer votre saisie: ");
    }
    return ($tab);
}

/*fonction qui permet de creer le tableau en attendant que l'utilisateur entre 0 pour indiquer qu'il a fini sa saisie
renvoie le tableau remplit a la fin de la saisie*/
function tableauSaisie()
{
    
    do
    {
        $nb= demandeEntier("Entrer une valeur");
        if ($nb != 0 ) //evite que le dernier 0 entre dans le tableau
        {
            $tab[]=$nb;
        }
    }
    while ($nb != 0 );
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

    for ( $i=0;$i<count($tab);$i++) // la fonction count renvoi la taille du tableau
    {
        echo $tab[$i]."\t";
    }
    echo "\n";
}

// on demande la saisie de la taille du tableau a l'utilisateur
$tailletab1= demandeEntier("merci d'entrer le nombre de valeurs a saisir: ");

// on appelle la fonction pour creer un tableau
$tab1= creerTab($tailletab1);

//on appelle la fonction pour afficher le tableau avec foreach
afficheForeach($tab1);

echo ("lorsque vous avez terminez votre saisie tapez zero.\n");

// on appelle la fonction pour creer le tableau avec arret utilisateur en appuyant sur 0
$tab2= tableauSaisie();

// on utilise la fonction pour afficher ce tableau avec count
afficheTableau($tab2);
