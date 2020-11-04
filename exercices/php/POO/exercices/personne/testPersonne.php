<?php

require "Personnes.Class.php";
require "Voiture.Class.php";

$v1 = new Voiture(["marque"=>"Audi","Type"=>"A3","moteur"=>"diesel","annee"=>"2000"]);
$v2 = new Voiture(["marque"=>"Audi","Type"=>"Q3","moteur"=>"essence","annee"=>"1999"]);
$p1 = new Personne(["prenom"=>"Toto","nom"=>"Dupond","sexe"=>"garcon","age"=>"19","voiture"=>$v2]);

var_dump($v2);
var_dump($p1);
echo "la marque de la voiture de toto est ". $p1->getVoiture()->getMarque();