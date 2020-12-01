<?php

/**
 * fonction pour creer l'arborescence de fichiers
 */
function arborescence($nomSite)
{

    mkdir('./' . $nomSite, 0777, true);
    mkdir('./' . $nomSite . '/PHP', 0777, true);
    mkdir('./' . $nomSite . '/PHP' . '/MODEL', 0777, true);
    mkdir('./' . $nomSite . '/PHP' . '/VIEW', 0777, true);
    mkdir('./' . $nomSite . '/PHP' . '/CONTROLLER', 0777, true);
    mkdir('./' . $nomSite . '/MEDIA', 0777, true);
    mkdir('./' . $nomSite . '/MEDIA' . '/IMG', 0777, true);
    mkdir('./' . $nomSite . '/MEDIA' . '/VIDEO', 0777, true);
    mkdir('./' . $nomSite . '/CSS', 0777, true);
    mkdir('./' . $nomSite . '/CSS' . '/FONTS', 0777, true);
    mkdir('./' . $nomSite . '/SQL', 0777, true);
    mkdir('./' . $nomSite . '/JS', 0777, true);
    mkdir('./' . $nomSite . '/DOCS', 0777, true);
}

/**
 * fonction pour creer les index vides dans tous les dossiers
 */
function creationIndex($nomSite)
{

    $index = fopen('./'.$nomSite. '/Index.php', "w");
    $indexTests = fopen('./'.$nomSite. '/IndexTests.php', "w");
    $indexCss = fopen('./'.$nomSite. '/CSS/Index.php', "w");
    $indexCssFonts = fopen('./'.$nomSite. '/CSS/FONTS/Index.php', "w");
    $indexMedia = fopen('./'.$nomSite. '/MEDIA/Index.php', "w");
    $indexMediaImg = fopen('./'.$nomSite. '/MEDIA/IMG/Index.php', "w");
    $indexMediaVideo = fopen('./'.$nomSite. '/MEDIA/VIDEO/Index.php', "w");
    $indexJs = fopen('./'.$nomSite. '/JS/index.php', "w");
    $indexPhp = fopen('./'.$nomSite. '/PHP/index.php', "w");
    $indexPhpControl = fopen('./'.$nomSite. '/PHP/CONTROLLER/Index.php', "w");
    $indexPhpView = fopen('./'.$nomSite. '/PHP/VIEW/Index.php', "w");
    $indexPhpModel = fopen('./'.$nomSite. '/PHP/MODEL/Index.php', "w");
    $indexSql = fopen('./'.$nomSite. '/SQL/Index.php', "w");
    $indexDocs = fopen('./'.$nomSite. '/DOCS/Index.php', "w");


    fputs($index,"");
    fputs($indexTests,"");
    fputs($indexCss,"");
    fputs($indexCssFonts,"");
    fputs($indexMedia,"");
    fputs($indexMediaImg,"");
    fputs($indexMediaVideo,"");
    fputs($indexJs,"");
    fputs($indexPhp,"");
    fputs($indexPhpControl,"");
    fputs($indexPhpView,"");
    fputs($indexPhpModel,"");
    fputs($indexSql,"");  
    fputs($indexDocs,"");
}

