<?php
//nous allons ecrire un algorithme permettant de calculer les chance de gagner d'un joueur de pmu
// tout d'abord la fonction de saisie du nombre
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

//maintenant nous allons creer la fonction de calcul de factorielle
function factorielle($nb)
{

    $fact = 1;

    for ($i = 1; $i <= $nb; $i++) // boucle pour le calcul de la factorielle
    {
        $fact *= $i;

    }
    return $fact;
}

// on demande a l'utilisateur le nombre de chevaux partant
$nbcp = demandeEntier("combien y a t'il de chevaux partant sur cette course: ");

// on demande a l'utilisateur le nombre de chevaux joués
$nbcj = demandeEntier("combien aller vous jouer de chevaux: ");

$diff = $nbcp - $nbcj; // on calcule la difference entre les chevaux part et chevaux joués

$factcp = factorielle($nbcp); //factorielle des chevaux partants

$factcj = factorielle($nbcj); //factorielle des chevaux joués

$factdiff = factorielle($diff); //factorielle de la difference

echo "dans l'ordre: vous avez une chance sur " . $factcp / $factdiff . " de gagner.\n"; // resultat de la formule cp!/(cp-cj)!
echo "dans le desordre: vous avez une chance sur " . $factcp / ($factcj * $factdiff) . " de gagner.\n"; // resultat de la formule cp!/(cp!x(cp-cj)!)
