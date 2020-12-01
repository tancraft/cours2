<?php

/**
 * fonctions pour crypter le mot de passe
 * 
 */
function cryptage($mot)
{

    return md5(md5(md5($mot).strlen($mot))."m6");

}