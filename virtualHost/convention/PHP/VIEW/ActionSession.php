<?php

$mode = $_GET['mode'];

var_dump($_GET);

if (isset($_GET['id'])) // si l'id est renseigné
{

    $idRecu = $_GET['id'];
    if ($idRecu != false) {
        $idChoisi = SessionsFormationsManager::findById($idRecu);

    }
}

switch ($mode) {
    case "ajoutSes":{
            $session = new SessionsFormations($_POST);
            SessionsFormationsManager::add($session);
            $idSession = SessionsFormationsManager::getByNumOffre($_POST['numOffreFormation'])->getIdSessionFormation();
            header('location: Index.php?page=FormPeriode&mode=ajout&idSession=' . $idSession);
            break;
        }
    case "modif":{
        var_dump($_GET);
        var_dump($_GET['id']);
            $session = new SessionsFormations($_POST);
            SessionsFormationsManager::update($session);
            for ($i = 0; $i < $_POST['nbPae']; $i++) {
                $periode = new PeriodesStages(['idPeriode' => $_POST['idPeriode' . $i], 'idSessionFormation' => $_POST['idSessionFormation'], 'dateDebutPAE' => $_POST['dateDebutPAE' . $i], 'dateFinPAE' => $_POST['dateFinPAE' . $i], 'dateRapportSuivi' => $_POST['dateRapportSuivi' . $i], 'objectifPAE' => $_POST['objectifPAE' . $i]]);
                PeriodesStagesManager::update($periode);                
            }

            if(isset($_GET['perSup']))
            {
                if($_GET['perSup']=='ok')
                {
                header('location: Index.php?page=FormPeriode&mode=modif$&idSession='.$_GET['id'].'&perSup=ok');
                
                }
            }
            else
            {
                header("location: Index.php?page=ListeSessions");
            }
            break;
        }
    case "delete":{
            for ($i = 0; $i < $_POST['nbPae']; $i++) {
                $periode = new PeriodesStages(['idPeriode' => $_POST['idPeriode' . $i], 'idSessionFormation' => $_POST['idSessionFormation'], 'dateDebutPAE' => $_POST['dateDebutPAE' . $i], 'dateFinPAE' => $_POST['dateFinPAE' . $i], 'dateRapportSuivi' => $_POST['dateRapportSuivi' . $i], 'objectifPAE' => $_POST['objectifPAE' . $i]]);
                PeriodesStagesManager::delete($periode);
                header("location: Index.php?page=ListeSessions");
            }
            $session = new SessionsFormations($_POST);
            SessionsFormationsManager::delete($session);
            break;
        }
    case "fini":{
            $periode = new PeriodesStages($_POST);
            PeriodesStagesManager::add($periode);
            if(isset($_GET['perSup']))
            {
                if($_GET['perSup']=='ok')
                {
                header('location: Index.php?page=FormPeriode&mode=modif&perSup=ok$&idSession='.$_GET['idSession'].'&perSup=ok');
                }
            }
            else
            {
                header("location: Index.php?page=ListeSessions");
            }
            break;
        }

}
