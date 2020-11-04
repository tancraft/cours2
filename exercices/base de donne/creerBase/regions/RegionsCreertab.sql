#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS regions;
CREATE DATABASE regions;
USE regions;

#------------------------------------------------------------
# Table: region
#------------------------------------------------------------

CREATE TABLE regions.region(
        idRegion  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomRegion Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: departement
#------------------------------------------------------------

CREATE TABLE regions.departement(
        idDepartement  Int  Auto_increment  NOT NULL PRIMARY KEY,
        numeroDepartement int NOT NULL,
        nomDepartement Varchar (50) NOT NULL,
        idRegion  Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# foreign keys
#------------------------------------------------------------

ALTER TABLE regions.departement ADD CONSTRAINT FK_region_departement FOREIGN KEY (idRegion) REFERENCES region(idRegion);