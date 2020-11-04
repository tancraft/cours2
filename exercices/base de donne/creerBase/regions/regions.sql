-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 20 oct. 2020 à 09:38
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
-- Base de données : `regions`
--
CREATE DATABASE IF NOT EXISTS `regions` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `regions`;

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

DROP TABLE IF EXISTS `departement`;
CREATE TABLE IF NOT EXISTS `departement` (
  `idDepartement` int(11) NOT NULL AUTO_INCREMENT,
  `numeroDepartement` int(11) NOT NULL,
  `nomDepartement` varchar(50) NOT NULL,
  `idRegion` int(11) NOT NULL,
  PRIMARY KEY (`idDepartement`),
  KEY `FK_region_departement` (`idRegion`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`idDepartement`, `numeroDepartement`, `nomDepartement`, `idRegion`) VALUES
(1, 1, 'Auvergne-Rhône-Alpes', 1),
(2, 2, 'Hauts-de-France', 7),
(3, 3, 'Auvergne-Rhône-Alpes', 1),
(4, 4, 'Provence-Alpes-Côte d\'Azur', 13),
(5, 5, 'Provence-Alpes-Côte d\'Azur', 13),
(6, 6, 'Provence-Alpes-Côte d\'Azur', 13),
(7, 7, 'Auvergne-Rhône-Alpes', 1),
(8, 8, 'Grand-Est', 6),
(9, 9, 'Occitanie', 11),
(10, 10, 'Grand-Est', 6),
(11, 11, 'Occitanie', 11),
(12, 12, 'Occitanie', 11),
(13, 13, 'Provence-Alpes-Côte d\'Azur', 13),
(14, 14, 'Normandie', 9),
(15, 15, 'Auvergne-Rhône-Alpes', 1),
(16, 16, 'Nouvelle-Aquitaine', 10),
(17, 17, 'Nouvelle-Aquitaine', 10),
(18, 18, 'Centre-Val de Loire', 4),
(19, 19, 'Nouvelle-Aquitaine', 10),
(20, 21, 'Bourgogne-Franche-Comté', 2),
(21, 22, 'Bretagne', 3),
(22, 23, 'Nouvelle-Aquitaine', 10),
(23, 24, 'Nouvelle-Aquitaine', 10),
(24, 25, 'Bourgogne-Franche-Comté', 2),
(25, 26, 'Auvergne-Rhône-Alpes', 1),
(26, 27, 'Normandie', 9),
(27, 28, 'Centre-Val de Loire', 4),
(28, 29, 'Bretagne', 3),
(29, 30, 'Occitanie', 11),
(30, 31, 'Occitanie', 11),
(31, 32, 'Occitanie', 11),
(32, 33, 'Nouvelle-Aquitaine', 10),
(33, 34, 'Occitanie', 11),
(34, 35, 'Bretagne', 3),
(35, 36, 'Centre-Val de Loire', 4),
(36, 37, 'Centre-Val de Loire', 4),
(37, 38, 'Auvergne-Rhône-Alpes', 1),
(38, 39, 'Bourgogne-Franche-Comté', 2),
(39, 40, 'Nouvelle-Aquitaine', 10),
(40, 41, 'Centre-Val de Loire', 4),
(41, 42, 'Auvergne-Rhône-Alpes', 1),
(42, 43, 'Auvergne-Rhône-Alpes', 1),
(43, 44, 'Pays de la Loire', 12),
(44, 45, 'Centre-Val de Loire', 4),
(45, 46, 'Occitanie', 11),
(46, 47, 'Nouvelle-Aquitaine', 10),
(47, 48, 'Occitanie', 11),
(48, 49, 'Pays de la Loire', 12),
(49, 50, 'Normandie', 9),
(50, 1, 'Auvergne-Rhône-Alpes', 1),
(51, 2, 'Hauts-de-France', 7),
(52, 3, 'Auvergne-Rhône-Alpes', 1),
(53, 4, 'Provence-Alpes-Côte d\'Azur', 13),
(54, 5, 'Provence-Alpes-Côte d\'Azur', 13),
(55, 6, 'Provence-Alpes-Côte d\'Azur', 13),
(56, 7, 'Auvergne-Rhône-Alpes', 1),
(57, 8, 'Grand-Est', 6),
(58, 9, 'Occitanie', 11),
(59, 10, 'Grand-Est', 6),
(60, 11, 'Occitanie', 11),
(61, 12, 'Occitanie', 11),
(62, 13, 'Provence-Alpes-Côte d\'Azur', 13),
(63, 14, 'Normandie', 9),
(64, 15, 'Auvergne-Rhône-Alpes', 1),
(65, 16, 'Nouvelle-Aquitaine', 10),
(66, 17, 'Nouvelle-Aquitaine', 10),
(67, 18, 'Centre-Val de Loire', 4),
(68, 19, 'Nouvelle-Aquitaine', 10),
(69, 21, 'Bourgogne-Franche-Comté', 2),
(70, 22, 'Bretagne', 3),
(71, 23, 'Nouvelle-Aquitaine', 10),
(72, 24, 'Nouvelle-Aquitaine', 10),
(73, 25, 'Bourgogne-Franche-Comté', 2),
(74, 26, 'Auvergne-Rhône-Alpes', 1),
(75, 27, 'Normandie', 9),
(76, 28, 'Centre-Val de Loire', 4),
(77, 29, 'Bretagne', 3),
(78, 2, 'Corse', 5),
(79, 2, 'Corse', 5),
(80, 30, 'Occitanie', 11),
(81, 31, 'Occitanie', 11),
(82, 32, 'Occitanie', 11),
(83, 33, 'Nouvelle-Aquitaine', 10),
(84, 34, 'Occitanie', 11),
(85, 35, 'Bretagne', 3),
(86, 36, 'Centre-Val de Loire', 4),
(87, 37, 'Centre-Val de Loire', 4),
(88, 38, 'Auvergne-Rhône-Alpes', 1),
(89, 39, 'Bourgogne-Franche-Comté', 2),
(90, 40, 'Nouvelle-Aquitaine', 10),
(91, 41, 'Centre-Val de Loire', 4),
(92, 42, 'Auvergne-Rhône-Alpes', 1),
(93, 43, 'Auvergne-Rhône-Alpes', 1),
(94, 44, 'Pays de la Loire', 12),
(95, 45, 'Centre-Val de Loire', 4),
(96, 46, 'Occitanie', 11),
(97, 47, 'Nouvelle-Aquitaine', 10),
(98, 48, 'Occitanie', 11),
(99, 49, 'Pays de la Loire', 12),
(100, 50, 'Normandie', 9),
(101, 51, 'Grand-Est', 6),
(102, 52, 'Grand-Est', 6),
(103, 53, 'Pays de la Loire', 12),
(104, 54, 'Grand-Est', 6),
(105, 55, 'Grand-Est', 6),
(106, 56, 'Bretagne', 3),
(107, 57, 'Grand-Est', 6),
(108, 58, 'Bourgogne-Franche-Comté', 2),
(109, 59, 'Hauts-de-France', 7),
(110, 60, 'Hauts-de-France', 7),
(111, 61, 'Normandie', 9),
(112, 62, 'Hauts-de-France', 7),
(113, 63, 'Auvergne-Rhône-Alpes', 1),
(114, 64, 'Nouvelle-Aquitaine', 10),
(115, 65, 'Occitanie', 11),
(116, 66, 'Occitanie', 11),
(117, 67, 'Grand-Est', 6),
(118, 68, 'Grand-Est', 6),
(119, 69, 'Auvergne-Rhône-Alpes', 1),
(120, 70, 'Bourgogne-Franche-Comté', 2),
(121, 71, 'Bourgogne-Franche-Comté', 2),
(122, 72, 'Pays de la Loire', 12),
(123, 73, 'Auvergne-Rhône-Alpes', 1),
(124, 74, 'Auvergne-Rhône-Alpes', 1),
(125, 75, 'Ile-de-France', 8),
(126, 76, 'Normandie', 9),
(127, 77, 'Ile-de-France', 8),
(128, 78, 'Ile-de-France', 8),
(129, 79, 'Nouvelle-Aquitaine', 10),
(130, 80, 'Hauts-de-France', 7),
(131, 81, 'Occitanie', 11),
(132, 82, 'Occitanie', 11),
(133, 83, 'Provence-Alpes-Côte d\'Azur', 13),
(134, 84, 'Provence-Alpes-Côte d\'Azur', 13),
(135, 85, 'Pays de la Loire', 12),
(136, 86, 'Nouvelle-Aquitaine', 10),
(137, 87, 'Nouvelle-Aquitaine', 10),
(138, 88, 'Grand-Est', 6),
(139, 89, 'Bourgogne-Franche-Comté', 2),
(140, 90, 'Bourgogne-Franche-Comté', 2),
(141, 91, 'Ile-de-France', 8),
(142, 92, 'Ile-de-France', 8),
(143, 93, 'Ile-de-France', 8),
(144, 94, 'Ile-de-France', 8),
(145, 95, 'Ile-de-France', 8),
(146, 971, 'DOM-TOM', 14),
(147, 972, 'DOM-TOM', 14),
(148, 973, 'DOM-TOM', 14),
(149, 974, 'DOM-TOM', 14),
(150, 975, 'DOM-TOM', 14),
(151, 976, 'DOM-TOM', 14),
(152, 977, 'DOM-TOM', 14),
(153, 978, 'DOM-TOM', 14),
(154, 984, 'DOM-TOM', 14),
(155, 986, 'DOM-TOM', 14),
(156, 987, 'DOM-TOM', 14),
(157, 988, 'DOM-TOM', 14),
(158, 989, 'DOM-TOM', 14);

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `idRegion` int(11) NOT NULL AUTO_INCREMENT,
  `nomRegion` varchar(50) NOT NULL,
  PRIMARY KEY (`idRegion`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`idRegion`, `nomRegion`) VALUES
(1, 'Auvergne-Rhône-Alpes'),
(2, 'Bourgogne-Franche-Comté'),
(3, 'Bretagne'),
(4, 'Centre-Val de Loire'),
(5, 'Corse'),
(6, 'Grand-Est'),
(7, 'Hauts-de-France'),
(8, 'Ile-de-France'),
(9, 'Normandie'),
(10, 'Nouvelle-Aquitaine'),
(11, 'Occitanie'),
(12, 'Pays de la Loire'),
(13, 'Provence-Alpes-Côte d\'Azur'),
(14, 'DOM-TOM');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `departement`
--
ALTER TABLE `departement`
  ADD CONSTRAINT `FK_region_departement` FOREIGN KEY (`idRegion`) REFERENCES `region` (`idRegion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
