<?php
// var_dump($_POST);
$suppr = new Produits($_POST);
// var_dump($hotel);
ProduitsManager::delete($suppr);

header("location: index.php?code=liste");