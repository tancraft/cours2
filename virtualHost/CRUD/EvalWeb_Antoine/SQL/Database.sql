DROP DATABASE IF EXISTS `9512`;
CREATE DATABASE `9512`;
USE `9512`;

DROP TABLE IF EXISTS `matieres`;
CREATE TABLE IF NOT EXISTS `matieres` (
	`IdMatiere` Int (11)  Auto_increment NOT NULL PRIMARY KEY,
	`LibelleMatiere` varchar(50) NOT NULL

) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `eleves`;
CREATE TABLE IF NOT EXISTS `eleves` (
	`IdEleve` Int (11)  Auto_increment NOT NULL PRIMARY KEY,
	`NomEleve` varchar(50) NOT NULL,
	`PrenomEleve` varchar(50) NOT NULL,
	`Classe` varchar(50) NOT NULL

) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
	`IdUtilisateur` Int (11)  Auto_increment NOT NULL PRIMARY KEY,
	`Login` varchar(50) NOT NULL,
	`NomUtilisateur` varchar(50) NOT NULL,
	`PrenomUtilisateur` varchar(50) NOT NULL,
	`MotDePasse` varchar(50) NOT NULL,
	`Role` Int (11) NOT NULL,
	`IdMatiere` Int (11) NOT NULL

) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `suivis`;
CREATE TABLE IF NOT EXISTS `suivis` (
	`IdSuivi` Int (11)  Auto_increment NOT NULL PRIMARY KEY,
	`IdMatiere` Int (11) NOT NULL,
	`IdEleve` Int (11) NOT NULL,
	`Note` Int (11) NOT NULL,
	`Coefficient` Int (11) NOT NULL

) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

ALTER TABLE `suivis` ADD CONSTRAINT FK_suivis_matieres FOREIGN KEY (`IdMatiere`) REFERENCES `matieres`(`IdMatiere`);
ALTER TABLE `suivis` ADD CONSTRAINT FK_suivis_eleves_FK FOREIGN KEY (`IdEleve`) REFERENCES `eleves`(`IdEleve`);

