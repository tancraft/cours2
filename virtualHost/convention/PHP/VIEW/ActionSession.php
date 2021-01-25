<?php

$mode = $_GET['mode'];
if (isset($_POST['idSessionFormation'])) // si l'id est renseigné
{
    $idRecu = $_POST['idSessionFormation'];
}

switch ($mode)
{
    case "ajoutSes":    {
            $session = new SessionsFormations($_POST);
            SessionsFormationsManager::add($session);
            $idSession = SessionsFormationsManager::getByNumOffre($_POST['numOffreFormation'])->getIdSessionFormation();
            header('location: Index.php?page=FormPeriodes&mode=ajout&id=' . $idSession);
            break;
        }
    case "modif":    {
            $session = new SessionsFormations($_POST);
            SessionsFormationsManager::update($session);
            for ($i = 0; $i < $_POST['nbPae']; $i++)
            {
                $periode = new PeriodesStages(['idPeriode' => $_POST['idPeriode' . $i], 'idSessionFormation' => $_POST['idSessionFormation'], 'dateDebutPAE' => $_POST['dateDebutPAE' . $i], 'dateFinPAE' => $_POST['dateFinPAE' . $i], 'dateRapportSuivi' => $_POST['dateRapportSuivi' . $i], 'objectifPAE' => $_POST['objectifPAE' . $i]]);
                PeriodesStagesManager::update($periode);
            }
            if (isset($_GET['perSup']))
            {
                header('location: Index.php?page=FormPeriodes&mode=ajout&id=' . $idRecu. '&perSup=ok');
            }
            else
            {
                header("location: Index.php?page=ListeSessions");
            }
            break;
        }
    case "delete":    {
        $session = new SessionsFormations($_POST);
            for ($i = 0; $i < $_POST['nbPae']; $i++)
            {
                $periode = new PeriodesStages(['idPeriode' => $_POST['idPeriode' . $i], 'idSessionFormation' => $_POST['idSessionFormation'], 'dateDebutPAE' => $_POST['dateDebutPAE' . $i], 'dateFinPAE' => $_POST['dateFinPAE' . $i], 'dateRapportSuivi' => $_POST['dateRapportSuivi' . $i], 'objectifPAE' => $_POST['objectifPAE' . $i]]);
                PeriodesStagesManager::delete($periode);
                
            }
            
            SessionsFormationsManager::delete($session);
            header("location: Index.php?page=ListeSessions");
            break;
        }
    case "ajoutPer":    {
            $periode = new PeriodesStages($_POST);
            PeriodesStagesManager::add($periode);
            if (isset($_GET['perSup']))
            {
                header('location: Index.php?page=FormPeriodes&mode=ajout&id=' . $idRecu . '&perSup=ok');
            }
            else
            {
                header('location: Index.php?page=FormSessions&mode=modif&id=' . $idRecu);
            }
        }
}
