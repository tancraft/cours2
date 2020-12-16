INSERT INTO `eleves`(`IdEleve`, `NomEleve`, `PrenomEleve`, `Classe`) VALUES (NULL,"Dupond","toto","6eme");
INSERT INTO `eleves`(`IdEleve`, `NomEleve`, `PrenomEleve`, `Classe`) VALUES (NULL,"Durand","tata","5eme");
INSERT INTO `eleves`(`IdEleve`, `NomEleve`, `PrenomEleve`, `Classe`) VALUES (NULL,"Thomas","titi","5eme");
INSERT INTO `eleves`(`IdEleve`, `NomEleve`, `PrenomEleve`, `Classe`) VALUES (NULL,"Badiel","sophie","4eme");
INSERT INTO `eleves`(`IdEleve`, `NomEleve`, `PrenomEleve`, `Classe`) VALUES (NULL,"Orion","alfred","4eme");
INSERT INTO `eleves`(`IdEleve`, `NomEleve`, `PrenomEleve`, `Classe`) VALUES (NULL,"Bidule","julie","6eme");

INSERT INTO `matieres`(`IdMatiere`, `LibelleMatiere`) VALUES (NULL,"Proviseur");
INSERT INTO `matieres`(`IdMatiere`, `LibelleMatiere`) VALUES (NULL,"Francais");
INSERT INTO `matieres`(`IdMatiere`, `LibelleMatiere`) VALUES (NULL,"Anglais");
INSERT INTO `matieres`(`IdMatiere`, `LibelleMatiere`) VALUES (NULL,"Maths");
INSERT INTO `matieres`(`IdMatiere`, `LibelleMatiere`) VALUES (NULL,"Histoire");

INSERT INTO `utilisateurs`(`IdUtilisateur`, `Login`, `NomUtilisateur`, `PrenomUtilisateur`, `MotDePasse`, `Role`, `IdMatiere`) VALUES (NULL,"dumont59","Dumont","albert","bibou59",1,1);
INSERT INTO `utilisateurs`(`IdUtilisateur`, `Login`, `NomUtilisateur`, `PrenomUtilisateur`, `MotDePasse`, `Role`, `IdMatiere`) VALUES (NULL,"bibou59","Bibou","bruno","bibou59",2,2);
INSERT INTO `utilisateurs`(`IdUtilisateur`, `Login`, `NomUtilisateur`, `PrenomUtilisateur`, `MotDePasse`, `Role`, `IdMatiere`) VALUES (NULL,"babel59","Babel","franck","bibou59",2,3);
INSERT INTO `utilisateurs`(`IdUtilisateur`, `Login`, `NomUtilisateur`, `PrenomUtilisateur`, `MotDePasse`, `Role`, `IdMatiere`) VALUES (NULL,"defense59","Defense","juliette","bibou59",2,4);
INSERT INTO `utilisateurs`(`IdUtilisateur`, `Login`, `NomUtilisateur`, `PrenomUtilisateur`, `MotDePasse`, `Role`, `IdMatiere`) VALUES (NULL,"roux59","Roux","Anne","bibou59",2,5);


INSERT INTO `suivis`(`IdSuivi`, `IdMatiere`, `IdEleve`, `Note`, `Coefficient`) VALUES (NULL,2,1,10,1);
INSERT INTO `suivis`(`IdSuivi`, `IdMatiere`, `IdEleve`, `Note`, `Coefficient`) VALUES (NULL,4,2,15,2);
INSERT INTO `suivis`(`IdSuivi`, `IdMatiere`, `IdEleve`, `Note`, `Coefficient`) VALUES (NULL,5,1,9,3);
INSERT INTO `suivis`(`IdSuivi`, `IdMatiere`, `IdEleve`, `Note`, `Coefficient`) VALUES (NULL,3,4,19,3);
INSERT INTO `suivis`(`IdSuivi`, `IdMatiere`, `IdEleve`, `Note`, `Coefficient`) VALUES (NULL,2,4,6,2);
INSERT INTO `suivis`(`IdSuivi`, `IdMatiere`, `IdEleve`, `Note`, `Coefficient`) VALUES (NULL,4,3,11,2);
INSERT INTO `suivis`(`IdSuivi`, `IdMatiere`, `IdEleve`, `Note`, `Coefficient`) VALUES (NULL,5,3,14,1);
INSERT INTO `suivis`(`IdSuivi`, `IdMatiere`, `IdEleve`, `Note`, `Coefficient`) VALUES (NULL,3,6,2,2);
INSERT INTO `suivis`(`IdSuivi`, `IdMatiere`, `IdEleve`, `Note`, `Coefficient`) VALUES (NULL,2,3,17,2);
INSERT INTO `suivis`(`IdSuivi`, `IdMatiere`, `IdEleve`, `Note`, `Coefficient`) VALUES (NULL,4,5,18,3);
INSERT INTO `suivis`(`IdSuivi`, `IdMatiere`, `IdEleve`, `Note`, `Coefficient`) VALUES (NULL,5,2,13,2);