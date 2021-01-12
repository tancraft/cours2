
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
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE articles(
        idArticle Int  Auto_increment NOT NULL PRIMARY KEY,
        titreArticle Varchar (50) NOT NULL,
        codeArticle Varchar (50) NOT NULL,
        codeLangue  Varchar (50) NOT NULL,
        texte Int (5) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `texte`;
CREATE TABLE IF NOT EXISTS `texte` (
  `idTexte` int(11) NOT NULL AUTO_INCREMENT,
  `codeTexte` varchar(20) NOT NULL,
  `codeLangue` varchar(2) NOT NULL,
  `Texte` varchar(200) NOT NULL,
  PRIMARY KEY (`idTexte`),
  KEY `Code Texte` (`codeTexte`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("admin","FR","administrateur");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("admin","EN","admin");


INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("user","FR","utilisateur");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("user","EN","user");

INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("homeUser","FR","Je suis utilisateur");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("homeUser","EN","I am a user");

INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("homeAdmin","FR","Je suis administrateur");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("homeAdmin","EN","I am admin");

INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("homeInvit","FR","Veulliez vous connecter ou vous inscrire");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("homeInvit","EN","Please sign in or register");

INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("exist","FR","le pseudo existe deja");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("exist","EN","the nickname already exists");

INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("match","FR","la confirmation ne correspond pas au mot de passe");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("match","EN","the confirmation does not match the password");

INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("connectOk","FR","connection reussie");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("connectOk","EN","successful connection");

INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("incPwd","FR","le mot de passe est incorrect");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("incPwd","EN","the password is incorrect");

INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("inExist","FR","le pseudo n'existe pas");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("inExist","EN","the nickname does not exist");

INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("emp","FR","Employé");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("emp","EN","Employee");

INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("pseudo","FR","Pseudo");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("pseudo","EN","Nickname");

INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("mdp","FR","Mot de passe");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("mdp","EN","Password");

INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("val","FR","Valider");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("val","EN","Validate");

INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("role","FR","Role (1 administrateur 2 utilisateur)");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("role","EN","Role (1 administrator 2 user)");

INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("prn","FR","Prénom");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("prn","EN","Surname");

INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("nm","FR","Nom");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("nm","EN","Name");

INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("email","FR","Adresse e-mail");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("email","EN","E-mail adress");

INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("cmdp","FR","Confirmation du mot de passe");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("cmdp","EN","Password Confirmation");