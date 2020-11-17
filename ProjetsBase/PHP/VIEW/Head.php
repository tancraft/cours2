<!DOCTYPE html>
<html>
<head>
<?php

function chargerClasse($classe)
{
    if (file_exists("PHP/CONTROLLER/" . $classe . ".class.php"))
    {
        require "PHP/CONTROLLER/" . $classe . ".class.php";
    }

    if (file_exists("PHP/MODEL/" . $classe . ".class.php"))
    {
        require "PHP/MODEL/" . $classe . ".class.php";
    }

}
spl_autoload_register("chargerClasse");

// initialise une connection
DbConnect::init();
//Si le titre est indiqué, on l'affiche entre les balises <title>
echo (!empty($titre)) ? '<title>' . $titre . '</title>' : '<title> Titre de la page </title>';
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="CSS/init.css">
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/phone.css">
</head>

<body>
<main>