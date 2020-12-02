<?php

function creationSql($nomSite)
{

    $database = fopen('./'.$nomSite. '/SQL/Database.sql', "w");

    $entete = 'DROP DATABASE IF EXISTS '.ucfirst($nomSite).';'."\n".
    'CREATE DATABASE '.ucfirst($nomSite).';'."\n".
    'USE '.ucfirst($nomSite).';'."\n\n";

    fputs($database,$entete);

    $tableTexte='DROP TABLE IF EXISTS `texte`;'."\n".
    'CREATE TABLE IF NOT EXISTS `texte` ('."\n\t".
      '`idTexte` Int  Auto_increment NOT NULL PRIMARY KEY,'."\n\t".
      '`codeTexte` varchar(20) NOT NULL,'."\n\t".
      '`codeLangue` varchar(2) NOT NULL,'."\n\t".
      '`Texte` varchar(200) NOT NULL'."\n".
    ') ENGINE=InnoDB  DEFAULT CHARSET=utf8;'."\n\n";

    fputs($database,$tableTexte);

    $insertTexte = 'INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("admin","FR","administrateur");'."\n".
    'INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("admin","EN","admin");'."\n\n".
    
    
    'INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("user","FR","utilisateur");'."\n".
    'INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("user","EN","user");';

    fputs($database,$insertTexte);

}