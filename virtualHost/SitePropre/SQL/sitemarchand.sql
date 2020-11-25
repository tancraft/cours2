
CREATE DATABASE IF NOT EXISTS `sitemarchand` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sitemarchand`;

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nomClient` varchar(50) NOT NULL,
  `prenomClient` varchar(50) NOT NULL,
  `emailClient` varchar(50) NOT NULL,
  `motDePasseClient` varchar(50) NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `idProduit` int(11) NOT NULL AUTO_INCREMENT,
  `libelleProduit` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  `dateDePeremption` date NOT NULL,
  PRIMARY KEY (`idProduit`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;


INSERT INTO `produits` (`idProduit`, `libelleProduit`, `prix`, `dateDePeremption`) VALUES
(1, 'gommemm', 2, '2020-11-30'),
(2, 'crayonsss', 150, '2020-11-30'),
(3, 'boboze', 500, '2020-10-05');

INSERT INTO `clients` (`idClient`, `nomClient`, `prenomClient`, `emailClient`, `motDePasseClient`) VALUES
(1, 'Dupont', 'Georges', 'dupont@gmail.com', 'toto666'),
(2, 'Durand', 'Sophie', 'durand@gmail.com', 'tata555');