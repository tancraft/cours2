--
-- Base de données :  siteMarchand
--
DROP DATABASE IF EXISTS siteMarchand;
CREATE DATABASE siteMarchand;
USE siteMarchand;

--
--table produits
--

DROP TABLE IF EXISTS produits;
CREATE TABLE IF NOT EXISTS produits (
  idProduit int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  libelleProduit varchar(50) NOT NULL,
  prix int(11) NOT NULL,
  dateDePeremption date NOT NULL
) ENGINE=InnoDB, CHARSET=UTF8;

--
--table clients
--

DROP TABLE IF EXISTS clients;
CREATE TABLE IF NOT EXISTS clients (
  idClient int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nomClient varchar(50) NOT NULL,
  prenomClient varchar(50) NOT NULL,
  emailClient varchar(50) NOT NULL,
  motDePasseClient varchar(50) NOT NULL
) ENGINE=InnoDB, CHARSET=UTF8;