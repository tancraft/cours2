#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS historien;
CREATE DATABASE historien;
USE historien;

#------------------------------------------------------------
# Table: Blessures
#------------------------------------------------------------

CREATE TABLE historien.Blessures(
        idBlessure   Int  Auto_increment  NOT NULL PRIMARY KEY,
        typeBlessure Varchar (50) NOT NULL ,
        daterecu     Date NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: grades
#------------------------------------------------------------

CREATE TABLE historien.grades(
        idGrade       Int  Auto_increment  NOT NULL PRIMARY KEY,
        NomGrade      Varchar (50) NOT NULL ,
        dateObtention Date NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Unites
#------------------------------------------------------------

CREATE TABLE historien.Unites(
        idUnite    Int  Auto_increment  NOT NULL PRIMARY KEY,
        typeUnite  Varchar (50) NOT NULL ,
        nom        Varchar (50) NOT NULL ,
        dateEntree Date NOT NULL ,
        dateSortie Date NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Soldats
#------------------------------------------------------------

CREATE TABLEhistorien. Soldats(
        idSoldat     Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomSoldat    Varchar (50) NOT NULL ,
        prenomSoldat Varchar (50) NOT NULL ,
        dateDeces    Date NOT NULL ,
        idUnite      Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Batailles
#------------------------------------------------------------

CREATE TABLE historien.Batailles(
        idBataille   Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomBataille  Varchar (50) NOT NULL ,
        lieuBataille Varchar (50) NOT NULL ,
        dateDebut    Date NOT NULL ,
        dateFin      Date NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: combat
#------------------------------------------------------------

CREATE TABLE historien.combats(
        idCombat INT(11) Auto_Increment NOT NULL PRIMARY KEY,
        idBataille Int NOT NULL ,
        idSoldat   Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: participe
#------------------------------------------------------------

CREATE TABLE historien.participe(
        idParticipe INT(11) Auto_Increment NOT NULL PRIMARY KEY,
        idBataille Int NOT NULL ,
        idUnite    Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: recoit
#------------------------------------------------------------

CREATE TABLE historien.recoit(
        idRecoit INT(11) Auto_Increment NOT NULL PRIMARY KEY,
        idSoldat Int NOT NULL ,
        idGrade  Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: recu
#------------------------------------------------------------

CREATE TABLE historien.recu(
        idrecu INT(11) Auto_Increment NOT NULL PRIMARY KEY,
        idSoldat   Int NOT NULL ,
        idBlessure Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: faite
#------------------------------------------------------------

CREATE TABLE historien.faite(
        idFaite INT(11) Auto_Increment NOT NULL PRIMARY KEY,
        idBlessure Int NOT NULL ,
        idBataille Int NOT NULL
)ENGINE=InnoDB;

#------------------------------------------------------------
# contraintes
#------------------------------------------------------------

ALTER TABLE historien.soldats ADD CONSTRAINT Soldats_Unites_FK FOREIGN KEY (idUnite) REFERENCES Unites(idUnite);

ALTER TABLE historien.combats ADD CONSTRAINT combats_Batailles_FK FOREIGN KEY (idBataille) REFERENCES Batailles(idBataille);
ALTER TABLE historien.combats ADD CONSTRAINT combats_Soldats0_FK FOREIGN KEY (idSoldat) REFERENCES Soldats(idSoldat);

ALTER TABLE historien.participe ADD CONSTRAINT participe_Batailles_FK FOREIGN KEY (idBataille) REFERENCES Batailles(idBataille);
ALTER TABLE historien.participe ADD CONSTRAINT participe_Unites_FK FOREIGN KEY (idUnite) REFERENCES Unites(idUnite);

ALTER TABLE historien.recoit ADD CONSTRAINT recoit_Soldats_FK FOREIGN KEY (idSoldat) REFERENCES Soldats(idSoldat);
ALTER TABLE historien.recoit ADD CONSTRAINT recoit_grades0_FK FOREIGN KEY (idGrade) REFERENCES grades(idGrade);

ALTER TABLE historien.recu ADD CONSTRAINT recu_Soldats_FK FOREIGN KEY (idSoldat) REFERENCES Soldats(idSoldat);
ALTER TABLE historien.recu ADD CONSTRAINT recu_Blessures0_FK FOREIGN KEY (idBlessure) REFERENCES Blessures(idBlessure);

ALTER TABLE historien.faite ADD CONSTRAINT faite_Blessures_FK FOREIGN KEY (idBlessure) REFERENCES Blessures(idBlessure);
ALTER TABLE historien.faite ADD CONSTRAINT faite_Batailles0_FK FOREIGN KEY (idBataille) REFERENCES Batailles(idBataille);
