<?php

//charge les fichiers de classe necessaires au programme
function ChargerClasse($classe)
{
	require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");

$toto = new Toto ([""=>" ", ""=>" "]); // remplacer le mot classe par le nom de la classe de l objet a creer
