-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 25 nov. 2020 à 09:25
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_hotels`
--

DELIMITER $$
--
-- Procédures
--
DROP PROCEDURE IF EXISTS `archivage`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `archivage` ()  BEGIN
UPDATE `reservations` SET `archive` = "oui" WHERE `dateFinSejour` < CURDATE();
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `chambres`
--

DROP TABLE IF EXISTS `chambres`;
CREATE TABLE IF NOT EXISTS `chambres` (
  `IdChambre` int(11) NOT NULL,
  `numChambre` int(11) NOT NULL,
  `typeChambre` int(11) NOT NULL,
  `capaciteChambre` int(11) NOT NULL,
  `idHotel` int(11) NOT NULL,
  PRIMARY KEY (`IdChambre`),
  KEY `FK_Chambres_idHotel` (`idHotel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chambres`
--

INSERT INTO `chambres` (`IdChambre`, `numChambre`, `typeChambre`, `capaciteChambre`, `idHotel`) VALUES
(1, 101, 1, 1, 1),
(2, 102, 1, 2, 1),
(3, 103, 1, 1, 1),
(4, 104, 1, 2, 2),
(5, 105, 1, 2, 2),
(6, 106, 1, 1, 2),
(7, 107, 1, 3, 3),
(8, 108, 1, 1, 3),
(9, 109, 1, 2, 3),
(10, 235, 1, 1, 4),
(11, 157, 1, 1, 4),
(12, 874, 1, 1, 7),
(13, 125, 1, 5, 7),
(14, 101, 1, 3, 6),
(15, 102, 1, 3, 6),
(16, 103, 1, 2, 10),
(17, 104, 1, 3, 15),
(18, 105, 1, 3, 6),
(19, 106, 1, 1, 15),
(20, 107, 1, 1, 11),
(21, 108, 1, 2, 13),
(22, 109, 1, 2, 10),
(23, 235, 1, 3, 12),
(24, 157, 1, 1, 11),
(25, 874, 1, 2, 7),
(26, 125, 1, 1, 9),
(27, 101, 1, 3, 8),
(28, 102, 1, 3, 15),
(29, 103, 1, 1, 11),
(30, 104, 1, 1, 11),
(31, 105, 1, 1, 13),
(32, 106, 1, 2, 15),
(33, 107, 1, 2, 12),
(34, 108, 1, 1, 9),
(35, 109, 1, 3, 13),
(36, 235, 1, 3, 8),
(37, 157, 1, 3, 14),
(38, 874, 1, 1, 8),
(39, 125, 1, 2, 10);

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nomClient` varchar(25) NOT NULL,
  `prenomClient` varchar(25) NOT NULL,
  `adresseClient` varchar(250) NOT NULL,
  `villeClient` varchar(25) NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `villeClient`) VALUES
(1, 'DOE', 'John', 'Rue Du General Leclerc', 'Chatenay Malabry'),
(2, 'HOMME', 'Josh', 'Rue Danton', 'Palm Desert'),
(3, 'PAUL', 'Weller', 'Rue Hoche', 'Londres'),
(4, 'WHITE', 'Jack', 'Allee Gustave Eiffel', 'Detroit'),
(5, 'CLAYPOOL', 'Les', 'Rue Jean Pierre Timbaud', 'San Francisco'),
(6, 'SQUIRE', 'Chris', 'Place Paul Vaillant Couturier', 'Londres'),
(7, 'WOOD', 'Ronnie', 'Rue Erevan', 'Londres'),
(8, 'THUNDERS', 'Johnny', 'Rue Du General Leclerc', 'New York'),
(9, 'JEUNEMAITRE', 'Eric', 'Rue Du General Leclerc', 'Chaville'),
(10, 'KARAM', 'Patrick', 'Rue Danton', 'Courbevoie'),
(11, 'RUFET', 'Corinne', 'Rue Hoche', 'Le Plessis Robinson'),
(12, 'SAINT JUST ', 'Wallerand', 'Allee Gustave Eiffel', 'Marnes La Coquette'),
(13, 'SANTINI', 'Jean-Luc', 'Rue Jean Pierre Timbaud', 'Chatenay Malabry'),
(14, 'AIT', 'Eddie', 'Place Paul Vaillant Couturier', 'Le Plessis Robinson'),
(15, 'BARBOTIN', 'Eddie', 'Rue Erevan', 'Chatenay Malabry'),
(16, 'BERESSI', 'Isabelle', 'Rue Du General Leclerc', 'Londres'),
(17, 'CAMARA', 'Lamine', 'Rue Ernest Renan', 'Antony'),
(18, 'CECCONI', 'Frank', 'Rue Georges Marie', 'Chatenay Malabry'),
(19, 'CHEVRON', 'Eric', 'Boulevard Gallieni', 'Suresnes'),
(20, 'CIUNTU', 'Marie-Carole', 'Esplanade Du Belvedere', 'Meudon');

-- --------------------------------------------------------

--
-- Structure de la table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE IF NOT EXISTS `hotels` (
  `idHotel` int(11) NOT NULL AUTO_INCREMENT,
  `nomHotel` varchar(25) NOT NULL,
  `categorieHotel` int(11) NOT NULL,
  `adresseHotel` varchar(25) NOT NULL,
  `villeHotel` varchar(25) NOT NULL,
  `idStation` int(11) NOT NULL,
  PRIMARY KEY (`idHotel`),
  KEY `FK_Hotels_idStation` (`idStation`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `hotels`
--

INSERT INTO `hotels` (`idHotel`, `nomHotel`, `categorieHotel`, `adresseHotel`, `villeHotel`, `idStation`) VALUES
(1, 'Le Magnifique', 3, 'rue du bas', 'Pralo', 1),
(2, 'Hotel du haut', 1, 'rue du haut', 'Pralo', 1),
(3, 'Le Narval', 3, 'place de la liberation', 'Vonten', 2),
(4, 'Les Pissenlis', 4, 'place du 14 juillet', 'Bretou', 2),
(5, 'RR Hotel', 5, 'place du bas', 'Bretou', 2),
(6, 'La Brique', 2, 'place du haut', 'Bretou', 2),
(7, 'Le Beau Rivage', 3, 'place du centre', 'Toras', 3),
(8, 'Résidence les marmottes', 1, '1 Chemin des randonneurs', 'Alpe d Huez', 6),
(9, 'Résidence les edelweiss', 5, '2 Rue des sapins', 'Areches', 2),
(10, 'Résidence les panoramas', 4, '7 Avenue de la neige', 'Beaufort', 2),
(11, 'Résidence les sapins', 5, '8 Chemin des pissenlits', 'Aussois', 4),
(12, 'Chalets les marmottes', 3, '10 Rue des etables', 'Avoriaz', 3),
(13, 'Chalets les edelweiss', 3, '8 Avenue des sapins', 'Alpe d Huez', 8),
(14, 'Chalets les panoramas', 2, '3 Chemin de la neige', 'Areches', 6),
(15, 'Chalets les sapins', 5, '3 Rue des pissenlits', 'Beaufort', 8);

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `idReservation` int(11) NOT NULL AUTO_INCREMENT,
  `dateReservationSejour` date NOT NULL,
  `dateDebutSejour` date NOT NULL,
  `dateFinSejour` date NOT NULL,
  `prixSejour` int(11) NOT NULL,
  `arrhesSejour` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `IdChambre` int(11) NOT NULL,
  `archive` varchar(50) NOT NULL,
  `debutModif` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `finModif` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idReservation`),
  KEY `FK_reservation_idClient` (`idClient`),
  KEY `FK_reservation_IdChambre` (`IdChambre`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`idReservation`, `dateReservationSejour`, `dateDebutSejour`, `dateFinSejour`, `prixSejour`, `arrhesSejour`, `idClient`, `IdChambre`, `archive`, `debutModif`, `finModif`) VALUES
(3, '2019-04-20', '2019-05-07', '2019-05-09', 2400, 800, 1, 1, '', '2020-10-28 13:55:09', '2020-10-28 13:56:07'),
(4, '2019-11-04', '2019-11-13', '2019-11-17', 400, 50, 3, 1, '', '2020-10-28 13:55:09', NULL),
(5, '2020-01-11', '2020-02-12', '2020-02-18', 3400, 100, 2, 2, '', '2020-10-28 13:55:09', NULL),
(6, '2019-06-19', '2019-08-05', '2019-08-18', 7200, 180, 4, 2, '', '2020-10-28 13:55:09', NULL),
(7, '2019-04-02', '2019-04-29', '2019-05-03', 1400, 450, 5, 3, '', '2020-10-28 13:55:09', NULL),
(8, '2019-10-20', '2019-12-01', '2019-12-15', 2400, 780, 6, 4, '', '2020-10-28 13:55:09', NULL),
(9, '2019-02-27', '2019-03-31', '2019-04-04', 500, 80, 6, 4, '', '2020-10-28 13:55:09', NULL),
(10, '2019-07-21', '2019-08-16', '2019-08-16', 40, 0, 8, 4, '', '2020-10-28 13:55:09', NULL),
(11, '2019-10-12', '2019-11-23', '2019-11-29', 580, 58, 15, 8, '', '2020-10-28 13:55:09', NULL),
(12, '2019-12-22', '2020-01-27', '2020-01-30', 140, 14, 17, 9, '', '2020-10-28 13:55:09', NULL),
(13, '2019-07-21', '2019-08-18', '2019-08-21', 360, 36, 15, 8, '', '2020-10-28 13:55:09', NULL),
(14, '2019-01-10', '2019-02-20', '2019-03-01', 1380, 138, 20, 4, '', '2020-10-28 13:55:09', NULL),
(15, '2019-04-09', '2019-04-17', '2019-05-02', 420, 42, 16, 13, '', '2020-10-28 13:55:09', NULL),
(16, '2019-05-21', '2019-06-13', '2019-06-26', 360, 36, 16, 13, '', '2020-10-28 13:55:09', NULL),
(17, '2019-07-26', '2019-08-09', '2019-08-20', 680, 68, 1, 12, '', '2020-10-28 13:55:09', NULL),
(18, '2019-11-29', '2019-11-30', '2019-12-14', 1280, 128, 15, 21, '', '2020-10-28 13:55:09', NULL),
(19, '2019-03-12', '2019-04-06', '2019-04-09', 420, 42, 19, 14, '', '2020-10-28 13:55:09', NULL),
(20, '2019-01-17', '2019-01-24', '2019-01-28', 260, 26, 12, 24, '', '2020-10-28 13:55:09', NULL),
(21, '2020-01-02', '2020-02-15', '2020-02-24', 1380, 138, 9, 12, '', '2020-10-28 13:55:09', NULL),
(22, '2019-09-10', '2019-09-24', '2019-10-01', 1430, 143, 12, 4, '', '2020-10-28 13:55:09', NULL),
(23, '2019-05-11', '2019-06-10', '2019-06-14', 820, 82, 1, 23, '', '2020-10-28 13:55:09', NULL),
(24, '2019-10-21', '2019-10-24', '2019-10-31', 650, 65, 11, 10, '', '2020-10-28 13:55:09', NULL),
(25, '2020-01-12', '2020-03-04', '2020-03-09', 1290, 129, 14, 20, '', '2020-10-28 13:55:09', NULL),
(26, '2019-04-02', '2019-05-02', '2019-05-09', 1030, 103, 19, 15, '', '2020-10-28 13:55:09', NULL),
(27, '2019-01-04', '2019-02-15', '2019-02-25', 470, 47, 17, 17, '', '2020-10-28 13:55:09', NULL),
(28, '2019-05-17', '2019-05-31', '2019-06-03', 1460, 146, 16, 14, '', '2020-10-28 13:55:09', NULL),
(29, '2019-04-12', '2019-05-23', '2019-05-28', 1310, 131, 6, 21, '', '2020-10-28 13:55:09', NULL),
(30, '2019-06-26', '2019-07-15', '2019-07-21', 460, 46, 9, 20, '', '2020-10-28 13:55:09', NULL),
(31, '2019-04-09', '2019-05-23', '2019-05-27', 350, 35, 17, 18, '', '2020-10-28 13:55:09', NULL),
(32, '2019-06-14', '2019-08-02', '2019-08-04', 890, 89, 14, 23, '', '2020-10-28 13:55:09', NULL),
(33, '2019-03-06', '2019-03-23', '2019-03-31', 1440, 144, 14, 12, '', '2020-10-28 13:55:09', NULL),
(34, '2019-03-27', '2019-04-29', '2019-05-07', 1010, 101, 17, 19, '', '2020-10-28 13:55:09', NULL),
(35, '2019-02-11', '2019-03-08', '2019-03-22', 790, 79, 13, 16, '', '2020-10-28 13:55:09', NULL),
(36, '2019-04-15', '2019-04-23', '2019-05-04', 270, 27, 5, 2, '', '2020-10-28 13:55:09', NULL),
(37, '2019-03-25', '2019-05-02', '2019-05-16', 660, 66, 19, 19, '', '2020-10-28 13:55:09', NULL),
(38, '2019-05-01', '2019-06-14', '2019-06-18', 140, 14, 13, 4, '', '2020-10-28 13:55:09', NULL),
(39, '2020-01-10', '2020-02-24', '2020-02-29', 1460, 146, 14, 19, '', '2020-10-28 13:55:09', NULL),
(40, '2019-11-24', '2019-11-30', '2019-12-01', 790, 79, 6, 4, '', '2020-10-28 13:55:09', NULL),
(41, '2020-01-13', '2020-01-30', '2020-02-14', 390, 39, 15, 20, '', '2020-10-28 13:55:09', NULL);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `stationchambre`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `stationchambre`;
CREATE TABLE IF NOT EXISTS `stationchambre` (
`nomStation` varchar(25)
,`nomHotel` varchar(25)
,`numChambre` int(11)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `stationchambreleft`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `stationchambreleft`;
CREATE TABLE IF NOT EXISTS `stationchambreleft` (
`nomStation` varchar(25)
,`nomHotel` varchar(25)
,`numChambre` int(11)
);

-- --------------------------------------------------------

--
-- Structure de la table `stations`
--

DROP TABLE IF EXISTS `stations`;
CREATE TABLE IF NOT EXISTS `stations` (
  `idStation` int(11) NOT NULL AUTO_INCREMENT,
  `nomStation` varchar(25) NOT NULL,
  `altitudeStation` int(11) NOT NULL,
  PRIMARY KEY (`idStation`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `stations`
--

INSERT INTO `stations` (`idStation`, `nomStation`, `altitudeStation`) VALUES
(1, 'La Montagne', 2500),
(2, 'Le Sud', 200),
(3, 'La Plage', 10),
(4, 'Alpe d Huez', 1860),
(5, 'Areches', 1200),
(6, 'Beaufort', 1200),
(7, 'Aussois', 1500),
(8, 'Avoriaz', 1800);

-- --------------------------------------------------------

--
-- Structure de la vue `stationchambre`
--
DROP TABLE IF EXISTS `stationchambre`;

DROP VIEW IF EXISTS `stationchambre`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stationchambre`  AS  select `stations`.`nomStation` AS `nomStation`,`hotels`.`nomHotel` AS `nomHotel`,`chambres`.`numChambre` AS `numChambre` from ((`hotels` join `chambres` on((`chambres`.`idHotel` = `hotels`.`idHotel`))) join `stations` on((`hotels`.`idStation` = `stations`.`idStation`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `stationchambreleft`
--
DROP TABLE IF EXISTS `stationchambreleft`;

DROP VIEW IF EXISTS `stationchambreleft`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stationchambreleft`  AS  select `stations`.`nomStation` AS `nomStation`,`hotels`.`nomHotel` AS `nomHotel`,`chambres`.`numChambre` AS `numChambre` from ((`hotels` left join `chambres` on((`chambres`.`idHotel` = `hotels`.`idHotel`))) left join `stations` on((`hotels`.`idStation` = `stations`.`idStation`))) ;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chambres`
--
ALTER TABLE `chambres`
  ADD CONSTRAINT `FK_Chambres_idHotel` FOREIGN KEY (`idHotel`) REFERENCES `hotels` (`idHotel`);

--
-- Contraintes pour la table `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `FK_Hotels_idStation` FOREIGN KEY (`idStation`) REFERENCES `stations` (`idStation`);

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `FK_reservation_IdChambre` FOREIGN KEY (`IdChambre`) REFERENCES `chambres` (`IdChambre`),
  ADD CONSTRAINT `FK_reservation_idClient` FOREIGN KEY (`idClient`) REFERENCES `clients` (`idClient`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
