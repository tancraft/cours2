<?php

//Test ValeuracquisManager

echo "recherche id = 1" . "<br>";
$obj =ValeuracquisManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Valeuracquis(["idStage" => "([value 1])", "ordreAcquis" => "([value 2])", "libelleAcquis" => "([value 3])", "valeurAcquis" => "([value 4])"]);
var_dump(ValeuracquisManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = ValeuracquisManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setidStage("[(Value)]");
ValeuracquisManager::update($obj);
$objUpdated = ValeuracquisManager::findById(1);
echo "Liste des objets" . "<br>";
$array = ValeuracquisManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = ValeuracquisManager::findById(1);
ValeuracquisManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = ValeuracquisManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>