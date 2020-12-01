<?php

function creationCssBase($nomSite)
{

    $StyleCss = fopen('./'.$nomSite. '/CSS/Style.css', "w");
    fputs($StyleCss,"");

    $phoneCss = fopen('./'.$nomSite. '/CSS/Phone.css', "w");
    $medias = '@media screen and (max-width: 800px)'."\n".'{'."\n"."\t".'/**tapez votre code ici pour rendre responsive**/'."\n".'}';
    fputs($phoneCss,$medias);

    $initCss = fopen('./'.$nomSite. '/CSS/Init.css', "w");

    $rootInit = ':root{'."\n".
        "\t".'/** utiliser ce genre de syntaxe pour les variables --[nom de la variable]: [propriétées];**/'."\n".
    '}'."\n\n";
    fputs($initCss,$rootInit);

    $htmlInit = 'html{'."\n".
        "\t".'scroll-behavior : smooth;'."\n".
    '}'."\n\n";
    fputs($initCss,$htmlInit);

    $base= 'body{'."\n".
        "\t".'padding: 0;'."\n".
        "\t".'margin: 0;'."\n".
        "\t".'text-align: justify;'."\n".
    '}'."\n\n".
    
    'div, header{'."\n".
        "\t".'display: flex;'."\n".
        "\t".'flex: 1;'."\n".
    '}'."\n\n".
    
    'img{'."\n".
        "\t".'width: 100%;'."\n".
    '}'."\n\n".
    
    'h1, h2, h3, h4, h5, h6, p{'."\n".
        "\t".'padding: 0;'."\n".
        "\t".'margin: 0;'."\n".
    '}'."\n\n".
    
    '.centrer{'."\n".
        "\t".'justify-content: center;'."\n".
    '}'."\n\n".
    
    '.colonne{'."\n".
        "\t".'flex-direction: column;'."\n".
    '}';

    fputs($initCss,$base);
}
