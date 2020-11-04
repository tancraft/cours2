<?php

$age = readline ("merci d'indiquer votre age: ");

$permis = readline ("depuis combien de temps avez vous le permis? ");

$acc = readline (" vous ets responsable de combien d'accidents? ");

$fid = readline ("vous etes assurer chez nous depuis combien d'annees? ");


$refuse = $acc >= 3 or $age <= 25 && $permis <2 && $acc ==1 or $age >= 25 && $permis < 2 && $acc == 2 or $age < 25 && $permis > 2 && $acc == 2 ;


if ($refuse)
{
    echo "refuse";
}
else{

    echo "a suivre";
}