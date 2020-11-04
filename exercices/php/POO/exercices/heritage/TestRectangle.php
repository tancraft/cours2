<?php

//charge les fichiers de classe necessaires au programme
function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");


$rect = new Rectangle (["longueur"=>10,"largeur"=>10]);
$trirect = new TriangleRectangle (["base"=>5,"hauteur"=>10]);
$cercle = new Cercle (["diametre"=>10]);
$pave = new Pave (["longueur"=>8,"largeur"=>6,"hauteur"=>8]);
$sphere = new Sphere (["diametre"=>10]);

$rect->AfficherRectangle();
// var_dump($rect);

$trirect->afficherTriangleRectangle();

$cercle->afficherCercle();

$pave->AfficherPave();

$sphere->AfficherSphere();