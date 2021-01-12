
--
-- Base de données :  baseproduits
--
DROP DATABASE baseproduits;
CREATE DATABASE IF NOT EXISTS baseproduits ;
USE baseproduits;


DROP TABLE IF EXISTS produits;
CREATE TABLE IF NOT EXISTS produits (
  idProduit int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  libelleProduit varchar(50) NOT NULL,
  prix int(11) NOT NULL,
  dateDePeremption date NOT NULL,
  idCategorie int NOT NULL
) ENGINE=InnoDB ;

--
-- Chargement des données de la table produits
--

INSERT INTO produits (idProduit, libelleProduit, prix, dateDePeremption, idCategorie) VALUES(1, 'gomme', 2, '2020-11-30', 1);
INSERT INTO produits (idProduit, libelleProduit, prix, dateDePeremption, idCategorie) VALUES(2, 'crayon', 1, '2020-11-30', 2);


DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `idCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `LibelleCategorie` varchar(50) NOT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `produits`
  ADD CONSTRAINT `FK_produits_categories` FOREIGN KEY (`idCategorie`) REFERENCES `categories` (`idCategorie`)


INSERT INTO `categories`(`idCategorie`, `LibelleCategorie`) VALUES (NULL,"perissable");
INSERT INTO `categories`(`idCategorie`, `LibelleCategorie`) VALUES (NULL,"scolaire");
