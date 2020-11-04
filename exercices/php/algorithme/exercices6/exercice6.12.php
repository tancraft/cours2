<?php

/*fonction pour verifier si la saisie d'un nombre est un entier
$phrase: il faut indiquer la phrase dans les parametre a ecrire pour l'utilisateur
renvoi la valeur nombre*/
function demandeEntier($phrase) // Demande un entier à l'utilisateur

{
    do {
        do {
            $nombre = readline($phrase);
        } while (!is_numeric($nombre)); // on verifie que la chaine de caracterer ne contient que des chiffres
    } while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)
    return $nombre; //renvoi le nombre saisi
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

// declaration des variables pour affichage du compte des valeurs positives et negatives des tableaux
$neg = 0;
$pos = 0;

$neg1 = 0;
$pos1 = 0;

$tailletab = demandeEntier("merci d'entrer le nombre de valeurs a saisir: ");

for ($i = 0; $i < $tailletab; $i++) {
    $note = demandeEntier("veulliez entrer votre saisie: ");

    $tab1[] = $note; // on cree le premier tableau

    $aug = $note + 1; //la notation++ ne fonctionne pas, on cree cette valeur pour la suite de l algorythme car on aurait pu faire $tab2[]=$note+1
    $tab2[] = $aug; // on cree le 2 eme tableau

    //compte des valeurs positives et negatives du premier tableau
    if ($note < 0) {
        $neg += 1;
    } else {
        $pos += 1;
    }

    //compte des valeurs positives et negatives du deuxieme tableau
    if ($aug < 0) {
        $neg1 += 1;
    } else {
        $pos1 += 1;
    }
}

//on affiche les 2 tableaux

echo "le premier tableaux\n";
afficheForeach($tab1);

echo "le deuxieme tableaux\n";
afficheForeach($tab2);

// affichage du compte des valeurs positives et negatives pour les tableaux
echo "il y a " . $pos . " valeurs positives dans le tableau 1\n et " . $neg . " valeurs negatives\n";

echo "il y a " . $pos1 . " valeurs positives dans le tableau 2\n et " . $neg1 . " valeurs negatives\n";
