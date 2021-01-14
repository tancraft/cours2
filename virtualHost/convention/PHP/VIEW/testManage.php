<?php

// echo "recherche id = 5" . "<br>";
// $obj =StagesManager::getByIdStagiaire(6);
// var_dump($obj);
// echo $obj[0]->toString();

// echo "recherche id = 2" . "<br>";
// $obj =StagesManager::getByIdTuteur(2);
// var_dump($obj);
// echo $obj[0]->toString();

// echo "on supprime un objet". "<br>";
// AnimationManager::delete(3,8);

// echo "recherche id = 2" . "<br>";
// $obj =AnimationManager::getByFormation(2);
// var_dump($obj);
// echo $obj[0]->toString();

// echo "recherche id = 2" . "<br>";
// $obj =AnimationManager::getByUtilisateur(2);
// var_dump($obj);
// echo $obj[0]->toString();

// echo "recherche id = 2" . "<br>";
// $obj =EntreprisesManager ::getByNumSiret(79366437600001);
// var_dump($obj);
// echo $obj[0]->toString();

echo "recherche id = 8" . "<br>";
$obj =EntreprisesManager ::getByNumSiret(79366437600001);
var_dump($obj);
echo $obj[0]->toString();