<?php
/**
 * methode pour demander a quelle position le joueur veut placer son pion
 * et renvoie le$plateauleau des positions.
 *
 * @param [array] $plateau est le plateau qui est deja remplis.
 *
 * @return [array] $positions renvoie le$plateauleau de positions.
 *
 */
function selectionPosition($plateau)
{

    do {
        do//boucle pour verifier si les position existe dans le plateau
        {

            do//boucle pour verifier la position du caractere alpha au debut ou a la fin de la chaine de caractere
            {

                do// boucle pour la saisie et verifier si la chaine est bien alpha numerique
                {

                    $position = readline("veuillez saisir la position de votre pion: ");

                } while (strlen($position) > 3 && ctype_alnum($position));
            } while (ctype_alpha($position) == 0 xor ctype_alpha($position) == strlen($position, -1));

            $positions = conversionPosition($position);
            $lig = $positions[0];
            $col=$positions[1];

        } while ($lig >= count($plateau) && $col>= count($plateau[0]));
        
    } while ($plateau[$lig][$col] == ".");
    return ($positions);

}

function conversionPosition($position)
{}

$plateau[0] = [".", 3, 6];
$plateau[1] = [1, 4, 7];
$plateau[2] = [2, 5, 8];

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        echo $plateau[$i][$j];

    }

    echo "\n";
}

selectionPosition($plateau);
