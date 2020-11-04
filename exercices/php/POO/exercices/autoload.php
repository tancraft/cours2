<?php
// Autoload pour les classes
function chargerClasse($classe)
{
    require $classe . ".class.php";
}
spl_autoload_register("chargerClasse");