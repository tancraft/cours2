<?php

$id = $_GET['idRegion'];
$listeDepartement = DepartementsManager::getListByRegion($id,true);
var_dump($listeDepartement);
?>

