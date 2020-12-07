DROP DATABASE IF EXISTS `GestionRepresentant`;
CREATE DATABASE IF NOT EXISTS `GestionRepresentant` DEFAULT CHARACTER SET utf8 ;
USE `GestionRepresentant`;
-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `IdClient` int(11) NOT NULL AUTO_INCREMENT,
  `NomClient` varchar(25) DEFAULT NULL,
  `VilleClient` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`IdClient`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `IdProduit` int(11) NOT NULL AUTO_INCREMENT,
  `NomProduit` varchar(25) DEFAULT NULL,
  `CouleurProduit` varchar(25) DEFAULT NULL,
  `PoidsProduit` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdProduit`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `representants`
--

DROP TABLE IF EXISTS `representants`;
CREATE TABLE IF NOT EXISTS `representants` (
  `IdRepres` int(11) NOT NULL AUTO_INCREMENT,
  `NomRepres` varchar(25) DEFAULT NULL,
  `VilleRepres` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`IdRepres`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ventes`
--

DROP TABLE IF EXISTS `ventes`;
CREATE TABLE IF NOT EXISTS `ventes` (
  `IdVente` int(11) NOT NULL AUTO_INCREMENT,
  `IdRepres` int(11) DEFAULT NULL,
  `IdProduit` int(11) DEFAULT NULL,
  `IdClient` int(11) DEFAULT NULL,
  `Quantite` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdVente`)
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

