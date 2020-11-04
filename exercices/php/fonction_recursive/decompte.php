<?php

function decompte($nombre)//creation de la fonction nombre
{

    

    echo "\t...".$nombre."...\t\n";// on affiche chaque nombre

    $nombre--;//on decremmente

    if($nombre >= 0)// condition d'arret tant qu on est pas a zero
    {

       decompte($nombre);//on rappelle la fonction qui fonctionne comme une boucle

    }


}

//test
$nombre= readline("veuillez entrez un nombre: ");

decompte($nombre);

echo "\tfin du decompte\n";