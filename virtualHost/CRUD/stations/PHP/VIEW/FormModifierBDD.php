<?php
// var_dump($_POST);
$modif = new Produits($_POST);
// var_dump($hotel);
ProduitsManager::update($modif);

header("location: index.php?code=liste");