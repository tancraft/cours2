<?php

function creationPhp($nomSite)
{
    $index = fopen('./'.$nomSite. '/Index.php', "w");

    $entete= '<?PHP'."\n\n".
    
    'include \'PHP/Outils.php\';'."\n\n".

    '//on recupere les paramètres de l\'application'."\n".
    'Parametre::init();'."\n".
    '//on active la connexion à la base de données'."\n".
    'DbConnect::init();'."\n".
    'session_start(); // initialise la variable de Session\''."\n\n";

    fputs($index,$entete);

    $multilang='/***************************GESTION DES LANGUES ******************/'."\n".
    '// on recupere la langue de l\'URL'."\n".
    'if (isset($_GET[\'lang\']))'."\n".
    '{'."\n\t".
        '$_SESSION[\'lang\'] = $_GET[\'lang\'];'."\n".
    '}'."\n\n".
    
    '//on prend la langue de la session sinon FR par défaut'."\n".
    '$lang = isset($_SESSION[\'lang\']) ? $_SESSION[\'lang\'] : \'FR\';'."\n\n".
    
    '/**'."\n".
     '* fonction qui ramène le texte dans la bonne langue'."\n".
     '*/'."\n".
    'function texte($codetexte)'."\n".
    '{'."\n\t".
        'global $lang; //on appel la variable globale'."\n\t".
        'return TexteManager::findByCodes($lang, $codetexte);'."\n".
    '}'."\n".
    '/************************ FIN GESTION DES LANGUES ******************/'."\n\n";

    fputs($index,$multilang);

    $routes='/* création d\'un tableau de redirection, en fonction du code, on choisit la page à afficher */'."\n".
    '$routes = ['."\n\t".
        '"default" => ["PHP/VIEW/", "Accueil", "Accueil"],'."\n\t".
        '"accueil" => ["PHP/VIEW/", "Accueil", "Accueil"]'."\n\n".
    '];'."\n\n";

    fputs($index,$routes);

    $codePage='if (isset($_GET["codePage"]))'."\n".
    '{'."\n\n\t".

        '$code = $_GET["codePage"];'."\n\n\t".
    
        '//Si cette route existe dans le tableau des routes'."\n\t".
        'if (isset($routes[$code]))'."\n\t".
        '{'."\n\t\t".
            '//Afficher la page correspondante'."\n\t\t".
           'AfficherPage($routes[$code]);'."\n\t".
        '}'."\n\t".
        'else'."\n\t".
        '{'."\n\t\t".
            '//Sinon afficher la page par defaut'."\n\t\t".
            'AfficherPage($routes["default"]);'."\n\t".
        '}'."\n\n".
    
    '}'."\n".
    'else'."\n". 
    '{'."\n\t".
        '//Sinon afficher la page par defaut'."\n\t".
        'AfficherPage($routes["default"]);'."\n\n".
    
    '}';

    fputs($index,$codePage);

    $viewHead = fopen('./'.$nomSite. '/PHP/VIEW/Head.php', "w");

    $head='<html>'."\n".
    '<head>'."\n\t".
        '<title><?php echo $titre ?></title>'."\n\t".
        '<link rel="stylesheet" href="CSS/init.css">'."\n\t".
        '<link rel="stylesheet" href="CSS/style.css">'."\n\t".
        '<link rel="stylesheet" href="CSS/phone.css">'."\n\n".
    
    '</head>'."\n".
    '<body>'."\n\t".
        '<main>';

    fputs($viewHead,$head);

    $viewFooter = fopen('./'.$nomSite. '/PHP/VIEW/Footer.php', "w");

    $footer = "\n\n".'</main>'."\n".
    '<script type="text/javascript" src="JS/script.js"></script>'."\n\n".
        
    '</body>'."\n\n".
        
    '</html>';

    fputs($viewFooter,$footer);

    $viewHeader = fopen('./'.$nomSite. '/PHP/VIEW/Header.php', "w");

    $lang = '<?php'."\n\n".

    '/* construction de l\'url en fonction de l\'uri existante  */'."\n".
    '// var_dump($_SERVER);'."\n".
    '$uri = $_SERVER[\'REQUEST_URI\'];'."\n".
    'if (substr($uri, strlen($uri) - 1) == "/") // se termine par /'."\n".
    '{'."\n\t".
        '$uri .= "index.php?";'."\n".
    '}'."\n".
    'else if (in_array("?", str_split($uri))) // si l\'uri contient deja un ?'."\n".
    '{'."\n\t".
        '$uri .= "&";'."\n".
    '}'."\n".
    'else'."\n".
    '{'."\n\t".
        '$uri .= "?";'."\n".
    '}'."\n\n".
    
    '?>';

    fputs($viewHeader,$lang);

    

    $viewNav = fopen('./'.$nomSite. '/PHP/VIEW/Nav.php', "w");

    $nav = '<?php'."\n\n".

    'if (isset($_SESSION[\'utilisateur\']))'."\n".
    '{'."\n\t".
        'if ($_SESSION[\'utilisateur\']->getRoleUser() == 1)'."\n\t".
        '{'."\n\t\t".
            'echo \'<button><a href="index.php?codePage=admin">\'.texte(\'admin\').\'</a></button>\';'."\n\t".
        '}'."\n\t".
        'echo \'<button><a href="index.php?codePage=user">\'.texte(\'user\').\'</a></button>\';'."\n".
    '}';

    fputs($viewNav,$nav);

}
