<?php

/**
 * fonction pour creer le dossier de projet et verifier la saisie, et si il n'existe pas
 *
 * @param string $phrase mettez la phrase pour la saisie que vous attendez
 * @return string le nom du projet
 */
function nomDeSite()
{
    do {
        $nomSite = ucfirst(readline("Donnez le nom du site : "));
        if(strlen($nomSite) < 1)
        {

            echo "Nommez votre site svp! ";
        }
        else if (is_dir($nomSite))
        {
            echo "il existe déja";
        }
        else
        {
            echo "";
        }


    } while (strlen($nomSite) < 1 || is_dir($nomSite));

    return $nomSite;

}
