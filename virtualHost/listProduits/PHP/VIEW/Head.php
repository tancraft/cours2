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
        echo '<img href="CSS/images/'. $logo .'" alt = "logo">';
    } 
    else 
    {
        echo '<img rel="stylesheet" href="./../CSS/images'. $logo.'" alt = "logo">';
    }

}

function chargerClasse($classe)
{
    if (file_exists("PHP/CONTROLLER/" . $classe . ".class.php"))
    {
        require "PHP/CONTROLLER/" . $classe . ".class.php";
    }
    else if (file_exists("../PHP/CONTROLLER/" . $classe . ".class.php"))
    {
       echo file_exists("../PHP/CONTROLLER/" . $classe . ".class.php");
    }

    if (file_exists("PHP/MODEL/" . $classe . ".class.php"))
    {
        require "PHP/MODEL/" . $classe . ".class.php";
    }
    else if (file_exists("../PHP/MODEL/" . $classe . ".class.php"))
    {
       echo file_exists("../PHP/MODEL/" . $classe . ".class.php");
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
    else 
    {
        echo '<link rel="stylesheet" href="./../CSS/'. $elt .'.css">';
    }
}

?>

</head>

<body class="colonne">