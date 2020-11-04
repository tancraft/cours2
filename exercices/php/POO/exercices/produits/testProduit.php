<?php

//charge les fichiers de classe necessaires au programme
function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");





//creation des produits
$prod[] = new Produit(["Numero"=>212,"Designation"=>"patate","Couleur"=>"Beige","DateValidite"=>new DateTime("20-05-2021"),"Categorie"=>"Nourriture","LieuDeStockage"=>$lieu1,"PrixHt"=>12.50]);