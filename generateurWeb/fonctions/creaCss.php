<?php

function creationCssBase($nomSite)
{

    $StyleCss = fopen('./'.$nomSite. '/CSS/style.css', "w");
    fputs($StyleCss,"");

    $phoneCss = fopen('./'.$nomSite. '/CSS/phone.css', "w");
    $medias = '@media screen and (max-width: 800px)'."\n".'{'."\n"."\t".'/**tapez votre code ici pour rendre responsive**/'."\n".'}';
    fputs($phoneCss,$medias);

    $initCss = fopen('./'.$nomSite. '/CSS/init.css', "w");

    $rootInit = ':root{'."\n".
        "\t".'/** utiliser ce genre de syntaxe pour les variables --[nom de la variable]: [propriétées];'."\n".
    '}';
    fputs($initCss,$rootInit);

    $htmlInit = 'html{'."\n".
        "\t".'scroll-behavior : smooth;'."\n".
    '}';
    fputs($initCss,$htmlInit);


}
