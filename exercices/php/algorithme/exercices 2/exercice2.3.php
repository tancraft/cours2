<?php

$pa = readline("entre le prix d'un article: ");

$taux = readline("entrer le taux de TVA en%: ");

$nbart = readline("merci d'indiquer le nombre d'articles");

      $tva = ($pa/100)*$taux; // on calcule la tva d'un article

      $total = ($pa+$tva)*$nbart; // on calcule le montant total qui devra etre payer

echo "le prix total est de " . $total . "euros";     

?>