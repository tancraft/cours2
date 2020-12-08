DROP DATABASE IF EXISTS `GestionRepresentant`;
CREATE DATABASE IF NOT EXISTS `GestionRepresentant` DEFAULT CHARACTER SET utf8 ;
USE `GestionRepresentant`;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `IdRole` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `LibelleRole` varchar(25) DEFAULT NULL

) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `IdUtilisateur` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `NomUtilisateur` varchar(25) DEFAULT NULL,
  `PrenomUtilisateur` varchar(25) DEFAULT NULL,
  `PseudoUtilisateur` varchar(25) DEFAULT NULL,
  `EmailUtilisateur` varchar(25) DEFAULT NULL,
  `MotDePasseUtilisateur` varchar(25) DEFAULT NULL,
  `IdRole` INT(10) DEFAULT NULL

) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `IdClient` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `NomClient` varchar(25) DEFAULT NULL,
  `VilleClient` varchar(25) DEFAULT NULL

) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `IdProduit` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `NomProduit` varchar(25) DEFAULT NULL,
  `CouleurProduit` varchar(25) DEFAULT NULL,
  `PoidsProduit` int(11) DEFAULT NULL

) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `representants`
--

DROP TABLE IF EXISTS `representants`;
CREATE TABLE IF NOT EXISTS `representants` (
  `IdRepres` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `NomRepres` varchar(25) DEFAULT NULL,
  `VilleRepres` varchar(25) DEFAULT NULL

) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ventes`
--

DROP TABLE IF EXISTS `ventes`;
CREATE TABLE IF NOT EXISTS `ventes` (
  `IdVente` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `IdRepres` int(11) DEFAULT NULL,
  `IdProduit` int(11) DEFAULT NULL,
  `IdClient` int(11) DEFAULT NULL,
  `Quantite` int(11) DEFAULT NULL

) ENGINE=INNODB DEFAULT CHARSET=utf8;
COMMIT;


DROP TABLE IF EXISTS `texte`;
CREATE TABLE IF NOT EXISTS `texte` (
	`idTexte` Int  Auto_increment NOT NULL PRIMARY KEY,
	`codeTexte` varchar(20) NOT NULL,
	`codeLangue` varchar(2) NOT NULL,
	`Texte` varchar(200) NOT NULL

) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


ALTER TABLE `ventes` ADD FOREIGN KEY (`IdClient`) REFERENCES `clients`(`IdClient`); 
ALTER TABLE `ventes` ADD FOREIGN KEY (`IdProduit`) REFERENCES `produits`(`IdProduit`); 
ALTER TABLE `ventes` ADD FOREIGN KEY (`IdRepres`) REFERENCES `representants`(`IdRepres`);

ALTER TABLE `utilisateurs` ADD FOREIGN KEY (`IdRole`) REFERENCES `roles`(`IdRole`); 
