DROP DATABASE IF EXISTS Combobox;
CREATE DATABASE Combobox;
USE Combobox;

DROP TABLE IF EXISTS `texte`;
CREATE TABLE IF NOT EXISTS `texte` (
	`idTexte` Int  Auto_increment NOT NULL PRIMARY KEY,
	`codeTexte` varchar(20) NOT NULL,
	`codeLangue` varchar(2) NOT NULL,
	`Texte` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("admin","FR","administrateur");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("admin","EN","admin");

INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("user","FR","utilisateur");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("user","EN","user");