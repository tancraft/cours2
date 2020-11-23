<!DOCTYPE html>
<html>
<head>
<?php


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

    if (file_exists('CSS/init.css')) 
    {
        echo '<link rel="stylesheet" href="CSS/init.css">';
    } 
    else if (file_exists('./../CSS/init.css')) 
    {
        echo '<link rel="stylesheet" href="./../CSS/init.css">';
    }
    else 
    {
        echo '<link rel="stylesheet" href="./../../CSS/init.css">';
    }

    if (file_exists('CSS/style.css')) 
    {
        echo '<link rel="stylesheet" href="CSS/style.css">';
    } 
    else if (file_exists('./../CSS/style.css')) 
    {
        echo '<link rel="stylesheet" href="./../CSS/style.css">';
    }
    else 
    {
        echo '<link rel="stylesheet" href="./../../CSS/style.css">';
    }

    if (file_exists('CSS/phone.css')) 
    {
        echo '<link rel="stylesheet" href="CSS/phone.css">';
    } 
    else if (file_exists('./../CSS/phone.css')) 
    {
        echo '<link rel="stylesheet" href="./../CSS/phone.css">';
    }
    else 
    {
        echo '<link rel="stylesheet" href="./../../CSS/phone.css">';
    }
?>

</head>

<body class="colonne">