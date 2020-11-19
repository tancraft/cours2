<!DOCTYPE html>
<html>
<head>
<?php

$css[] = "init";
$css[] = "style";
$css[] = "phone";


function logo($logo)
{
    if (file_exists('CSS/images/'.$logo)) 
    {
        echo '<img href="CSS/images/'.$logo.'">';
    } 
    else if (file_exists('./../CSS/images/'.$logo.'.css')) 
    {
        echo '<img href="./../CSS/images/'.$logo.'">';
    }
    else 
    {
        echo '<img href="./../../CSS/images/'.$logo.'">';
    }

}

function chargerClasse($classe)
{
    if (file_exists("PHP/CONTROLLER/" . $classe . ".Class.php"))
    {
        require "PHP/CONTROLLER/" . $classe . ".Class.php";
    }
    else if (file_exists("../CONTROLLER/" . $classe . ".Class.php"))
    {
       require "../CONTROLLER/" . $classe . ".Class.php";
    }

    if (file_exists("PHP/MODEL/" . $classe . ".Class.php"))
    {
        require "PHP/MODEL/" . $classe . ".Class.php";
    }
    else if (file_exists("../MODEL/" . $classe . ".Class.php"))
    {
       require "../MODEL/" . $classe . ".Class.php";
    }

}
spl_autoload_register("chargerClasse");

// initialise une connection
DbConnect::init();
//Si le titre est indiqué, on l'affiche entre les balises <title>
echo (!empty($titre)) ? '<title>' . $titre . '</title>' : '<title> Titre de la page </title>';
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php 

foreach ($css as $elt) {
    if (file_exists('CSS/'.$elt.'.css')) 
    {
        echo '<link rel="stylesheet" href="CSS/'. $elt .'.css">';
    } 
    else if (file_exists('./../CSS/'.$elt.'.css')) 
    {
        echo '<link rel="stylesheet" href="./../CSS/'. $elt .'.css">';
    }
    else 
    {
        echo '<link rel="stylesheet" href="./../../CSS/'. $elt .'.css">';
    }
}

?>

</head>

<body class="colonne">