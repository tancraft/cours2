<?php

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


// on appelle la fonction pour creer le tableau en indiquant qu il y a 9 saisis a faire
$tab1= creerTab(9);


//on affiche le tableau obtenu $tab1
afficheForeach($tab1);

$total=0;

for($i=0;$i<9;$i++)
{

   $total+=$tab1[$i];

}

echo "la moyenne est de ". $total/9;
?>