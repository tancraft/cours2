<?php

//Test EvaluationsManager

echo "recherche id = 1" . "<br>";
$obj =EvaluationsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Evaluations(["dateEvaluation" => "([value 1])", "objectifAcquisition" => "([value 2])", "comportementMt" => "([value 3])", "satisfactionEnt" => "([value 4])", "remarqueEnt" => "([value 5])", "perspectiveEmb" => "([value 6])"]);
var_dump(EvaluationsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = EvaluationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setdateEvaluation("[(Value)]");
EvaluationsManager::update($obj);
$objUpdated = EvaluationsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = EvaluationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = EvaluationsManager::findById(1);
EvaluationsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = EvaluationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>