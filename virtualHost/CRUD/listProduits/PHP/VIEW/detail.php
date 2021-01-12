<?php

$titre = "detail";

include "./Head.php";
include "./Header.php";
$id = $_GET = 'id';

$unProduit= produitsManager :: findById($id);

echo $unProduit->toString();