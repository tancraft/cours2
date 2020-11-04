DELIMITER $$
CREATE  PROCEDURE `Maintenance`()
BEGIN
UPDATE etudiants SET `nomEtudiant` = UCASE(`nomEtudiant`) , prenomEtudiant=UCASE(prenomEtudiant);
update enseignants set nomEnseignant = UCASE(nomEnseignant), prenomEnseignant=UCASE(prenomEnseignant);
END $$
DELIMITER ;