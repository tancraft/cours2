
DROP DATABASE IF EXISTS Finals;
CREATE DATABASE Finals;
USE Finals;

CREATE TABLE users(
        idUtilisateur Int  Auto_increment NOT NULL PRIMARY KEY,
        nom Varchar (50) NOT NULL,
        prenom Varchar (50) NOT NULL,
        motDePasse Varchar (50) NOT NULL,
        adresseMail  Varchar (50) NOT NULL,
        roleUser Int (5) NOT NULL,
        pseudo Varchar (50) NOT NULL 
)ENGINE=InnoDB;

CREATE TABLE articles(
        idArticle Int  Auto_increment NOT NULL PRIMARY KEY,
        titreArticle Varchar (50) NOT NULL,
        codeArticle Varchar (50) NOT NULL,
        codeLangue  Varchar (50) NOT NULL,
        texte Int (5) NOT NULL
)ENGINE=InnoDB;


INSERT INTO `users`(`idUtilisateur`, `nom`, `prenom`, `motDePasse`, `adresseMail`, `roleUser`, `pseudo`) VALUES (NULL,"bobozo","toto","georges225","toto@mail.fr",1,"toto59");
