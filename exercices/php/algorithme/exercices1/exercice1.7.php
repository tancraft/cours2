<?php

// algorithme d echange de valeur n°2

$a = 1;
$b = 4;
$c = 7;

echo "$a, ". "$b, ". "$c";
// avant l echange
$temp = $c;

$c = $b;
$b = $a;
$a = $temp;

echo "\n";
echo "$a, ". "$b, ". "$c";
// apres l echange

?>