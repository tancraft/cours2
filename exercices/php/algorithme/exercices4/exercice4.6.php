<?php

// on recueille nombre de voix obtenues par chaqure candidats zu

$nbvoix1 = readline("indiquez le nombre de voix obtenues par le candidat 1: ");
$nbvoix2 = readline("indiquez le nombre de voix obtenues par le candidat 2: ");
$nbvoix3 = readline("indiquez le nombre de voix obtenues par le candidat 3: ");
$nbvoix4 = readline("indiquez le nombre de voix obtenues par le candidat 4: ");

// on calcule le nombre total de voix
$voixtot = $nbvoix1 + $nbvoix2 + $nbvoix3 + $nbvoix4;

// on calcule le score de chaque candidat
$score1 = 100 * $nbvoix1 / $voixtot;
$score2 = 100 * $nbvoix2 / $voixtot;
$score3 = 100 * $nbvoix3 / $voixtot;
$score4 = 100 * $nbvoix4 / $voixtot;

echo "le candidat 1 a obtenu " . $score1 . " % des voix\n";

// on test si le candidat 1  a gagner en obtenant + 50% des voix

if ($score1 >= 50) {
    echo "le candidat est élu president\n";

} else {

    if ($score1 > 12.5) { // ici on test si son score est superieur a 12.5

        echo "le candidat est selectionner pour le second tour\n";

    } else if ($score1 < 12.5) {

        echo "le candidat 1 n'est pas retenu pour le second tour, il a perdu\n";

    } else if ($score1 == 12.5) {

        echo "le candidat 1 est selectionner de justesse\n";

    } else {

        if ($score1 > $score2 && $score1 > $score3 && $score1 > $score4) {

            echo "le candidat 1 est favori pour gagner\n";

        } else {

            echo "le candidat n'est pas favori pour gagner\n";

        }

    }

}
