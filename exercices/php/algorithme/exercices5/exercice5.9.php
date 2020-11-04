<?php

/* Ici nous allons ecrire un lgorithme permettant de calculer le prix total des courses d'un client
ainsi que le calcul pour lui rendre sa monnaie*/

function demandeEntier($phrase) // Demande un entier à l'utilisateur et on a besoin dune phrase dans les paramettres

{
    do {
        do {
            do {
                $nombre = readline($phrase); // la phrase est a ajouter dans les parametres d'appel de fonction
            } while (!is_numeric($nombre)); // on verifie que la chaine de caractere ne contient que des chiffres
            
        } while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)

    } while ($nombre < 0); // le nombre ne doit pas etre inferieur a zero
    return $nombre; //renvoi le nombre saisi
}

$nbart = demandeEntier("merci d'indiquer le nombre d'articles a passer: ");

$somdu = 0; // on initialise la variable somme due

for ($i = 1; $i <= $nbart; $i++) // ici on demande le prix de chaque article
{

    $prixart = demandeEntier("merci d'indiquer le prix de l'article " . $i . ": ");

    $somdu = $somdu + $prixart; // on calcul le prix total des articles

}

echo "vous devez la somme de " . $somdu . " euros\n";

do//on demande au client combien il va donner
{

    $paie = demandeEntier("combien allez vous donner?");
} while ($paie < $somdu);

$rembourse = $paie - $somdu; //on calcule combien on doit rendre au client

echo "nous vous devons " . $rembourse . " euros\n";

$bil10e = 0;

while ($rembourse > 9) // on calcule combien de billets de 10euros nous allons rendre au client
{

    $bil10e += 1;
    $rembourse -= 10;

}

$bil5e = 0;

while ($rembourse > 4) // on calcule combien de billets de 10euros nous allons rendre au client
{

    $bil5e += 1;
    $rembourse -= 5;

}

echo "nous allons vous rendre " . $bil10e . " billets de 10 euros\n";
echo "nous allons vous rendre " . $bil5e . " billets de 5 euros\n";
echo "nous allons vous rendre " . $rembourse . " pieces de 1 euros";
