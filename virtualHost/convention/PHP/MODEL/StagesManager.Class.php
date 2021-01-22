<?php

class StagesManager
{
    public static function add(Stages $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Stages (etape,dateVisite,nomVisiteur,lieuRealisation,deplacement,frequenceDeplacement,modeDeplacement,attFormReglement,libelleAttFormReg,visiteMedical,travauxDang,dateDeclarationDerog,sujetStage,travauxRealises,objectifPAE,dateDebut,dateFin,idTuteur,idStagiaire,idPeriode) VALUES (:etape,:dateVisite,:nomVisiteur,:lieuRealisation,:deplacement,:frequenceDeplacement,:modeDeplacement,:attFormReglement,:libelleAttFormReg,:visiteMedical,:travauxDang,:dateDeclarationDerog,:sujetStage,:travauxRealises,:objectifPAE,:dateDebut,:dateFin,:idTuteur,:idStagiaire,:idPeriode)");
        $q->bindValue(":etape", $obj->getEtape());
        $q->bindValue(":dateVisite", $obj->getDateVisite());
        $q->bindValue(":nomVisiteur", $obj->getNomVisiteur());
        $q->bindValue(":lieuRealisation", $obj->getLieuRealisation());
        $q->bindValue(":deplacement", $obj->getDeplacement());
        $q->bindValue(":frequenceDeplacement", $obj->getFrequenceDeplacement());
        $q->bindValue(":modeDeplacement", $obj->getModeDeplacement());
        $q->bindValue(":attFormReglement", $obj->getAttFormReglement());
        $q->bindValue(":libelleAttFormReg", $obj->getLibelleAttFormReg());
        $q->bindValue(":visiteMedical", $obj->getVisiteMedical());
        $q->bindValue(":travauxDang", $obj->getTravauxDang());
        $q->bindValue(":dateDeclarationDerog", $obj->getDateDeclarationDerog());
        $q->bindValue(":sujetStage", $obj->getSujetStage());
        $q->bindValue(":travauxRealises", $obj->getTravauxRealises());
        $q->bindValue(":objectifPAE", $obj->getObjectifPAE());
        $q->bindValue(":dateDebut", $obj->getDateDebut());
        $q->bindValue(":dateFin", $obj->getDateFin());
        $q->bindValue(":idTuteur", $obj->getIdTuteur());
        $q->bindValue(":idStagiaire", $obj->getIdStagiaire());
        $q->bindValue(":idPeriode", $obj->getIdPeriode());
        $q->execute();
    }

    public static function update(Stages $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Stages SET idStage=:idStage,etape=:etape,dateVisite=:dateVisite,nomVisiteur=:nomVisiteur,lieuRealisation=:lieuRealisation,deplacement=:deplacement,frequenceDeplacement=:frequenceDeplacement,modeDeplacement=:modeDeplacement,attFormReglement=:attFormReglement,libelleAttFormReg=:libelleAttFormReg,visiteMedical=:visiteMedical,travauxDang=:travauxDang,dateDeclarationDerog=:dateDeclarationDerog,sujetStage=:sujetStage,travauxRealises=:travauxRealises,objectifPAE=:objectifPAE,dateDebut=:dateDebut,dateFin=:dateFin,idTuteur=:idTuteur,idStagiaire=:idStagiaire,idPeriode=:idPeriode WHERE idStage=:idStage");
        $q->bindValue(":idStage", $obj->getIdStage());
        $q->bindValue(":etape", $obj->getEtape());
        $q->bindValue(":dateVisite", $obj->getDateVisite());
        $q->bindValue(":nomVisiteur", $obj->getNomVisiteur());
        $q->bindValue(":lieuRealisation", $obj->getLieuRealisation());
        $q->bindValue(":deplacement", $obj->getDeplacement());
        $q->bindValue(":frequenceDeplacement", $obj->getFrequenceDeplacement());
        $q->bindValue(":modeDeplacement", $obj->getModeDeplacement());
        $q->bindValue(":attFormReglement", $obj->getAttFormReglement());
        $q->bindValue(":libelleAttFormReg", $obj->getLibelleAttFormReg());
        $q->bindValue(":visiteMedical", $obj->getVisiteMedical());
        $q->bindValue(":travauxDang", $obj->getTravauxDang());
        $q->bindValue(":dateDeclarationDerog", $obj->getDateDeclarationDerog());
        $q->bindValue(":sujetStage", $obj->getSujetStage());
        $q->bindValue(":travauxRealises", $obj->getTravauxRealises());
        $q->bindValue(":objectifPAE", $obj->getObjectifPAE());
        $q->bindValue(":dateDebut", $obj->getDateDebut());
        $q->bindValue(":dateFin", $obj->getDateFin());
        $q->bindValue(":idTuteur", $obj->getIdTuteur());
        $q->bindValue(":idStagiaire", $obj->getIdStagiaire());
        $q->bindValue(":idPeriode", $obj->getIdPeriode());
        $q->execute();
    }
    public static function delete(Stages $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Stages WHERE idStage=" . $obj->getIdStage());
    }
    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM Stages WHERE idStage =" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Stages($results);
        }
        else
        {
            return false;
        }
    }
    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Stages");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Stages($donnees);
            }
        }
        return $liste;
    }
    /***
     * Recherche par stagiaire
     * idStagiaire obligatoire
     * idPeriode facultatif
     */
    public static function getByStagiaire($idStagiaire, $idPeriode)
    {
        $db = DbConnect::getDb();
        $idStagiaire = (int) $idStagiaire;
        $idPeriode = (int) $idPeriode;
        $liste = [];
        if ($idPeriode == null)
        {
            $queryString = "SELECT * FROM Stages where idStagiaire=" . $idStagiaire;
        }
        else
        {
            $queryString = "SELECT * FROM Stages where idStagiaire=" . $idStagiaire . ' and idPeriode = ' . $idPeriode;
        }
        $q = $db->query($queryString);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Stages($donnees);
            }
        }
        return $liste;
    }
    public static function getByTuteur($idTuteur)
    {
        $db = DbConnect::getDb();
        $idTuteur = (int) $idTuteur;
        $liste = [];
        $q = $db->query("SELECT * FROM Stages where idTuteur=$idTuteur");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Stages($donnees);
            }
        }return $liste;

    }
}
