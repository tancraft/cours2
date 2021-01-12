DROP DATABASE IF EXISTS employes;
CREATE DATABASE employes;
USE employes;

CREATE TABLE employe
(
	idPersonne INT(11) Auto_Increment NOT NULL PRIMARY KEY,
	nom VARCHAR(20) NOT NULL,
	prenom VARCHAR(20) NOT NULL,
	age INT(4) NOT NULL
	   
)ENGINE=InnoDB, CHARSET=UTF8;

INSERT INTO `employe`(`idPersonne`, `nom`, `prenom`, `age`) VALUES (NULL,"Decoster","Toto",15);