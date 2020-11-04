
 /*creation de la base*/

DROP DATABASE IF EXISTS courseDeChevaux;
CREATE DATABASE courseDeChevaux;
USE courseDeChavaux;

CREATE TABLE chevaux
(
	idChevaux INT(11) Auto_Increment NOT NULL PRIMARY KEY,
	nom VARCHAR(20) NOT NULL,
	sexe VARCHAR(20) NOT NULL,
	dateDeNaissance DATE NOT NULL,
	idProprietaire INT(11) NOT NULL
	   
)ENGINE=InnoDB, CHARSET=UTF8;


CREATE TABLE proprietaire
(
	idProprietaire INT(11) Auto_Increment NOT NULL PRIMARY KEY,
	nom VARCHAR(20) NOT NULL,
	prenom VARCHAR(20) NOT NULL
	
)ENGINE=InnoDB, CHARSET=UTF8;


CREATE TABLE course
(
	idCourse INT(11) Auto_Increment NOT NULL PRIMARY KEY,
	nomCourse VARCHAR(50) NOT NULL,
	dotation DOUBLE(10) NOT NULL,
	dateCourse DATE NOT NULL
	   
)ENGINE=InnoDB, CHARSET=UTF8;

CREATE TABLE jockey
(
	idJockey INT(11) Auto_Increment NOT NULL PRIMARY KEY,
	nom VARCHAR(20) NOT NULL,
	prenom VARCHAR(20) NOT NULL,
	dossard INT(10) NOT NULL
	   
)ENGINE=InnoDB, CHARSET=UTF8;

CREATE TABLE champCourse
(
	idChampCourse INT(11) Auto_Increment NOT NULL PRIMARY KEY,
	nomChampCourse VARCHAR(40) NOT NULL,
	prenom VARCHAR(20) NOT NULL,
	placesTribunes INT(10) NOT NULL,
	idCourse INT(11) NOT NULL
	   
)ENGINE=InnoDB, CHARSET=UTF8;

ALTER TABLE chevaux ADD idtest INT(11);
/*creer foreign key*/
ALTER TABLE chevaux ADD CONSTRAINT FK_chevaux_proprietaire FOREIGN KEY (idProprietaire) REFERENCES proprietaire(idProprietaire);
