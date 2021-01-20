<?php

$mode = $_GET['mode'];

if (isset($_GET['id'])) // si l'id est renseigné
{

    $idRecu = $_GET['id'];
    if ($idRecu != false) {
        $idChoisi = SessionsFormationsManager::findById($idRecu);

    }
}
$session = new SessionsFormations($_POST);
$periode = new PeriodesStages($_POST);

switch ($mode) {
    case "ajout":{
            SessionsFormationsManager::add($session);
            $idSession = SessionsFormationsManager::getByNumOffre($_POST['numOffreFormation'])->getIdSessionFormation();
            header('location: Index.php?page=FormPeriode&mode=ajout&idSession='.$idSession);
            break;
        }
    case "modif":{
            SessionsFormationsManager::update($session);
            header("location: Index.php?page=ListeSessions");
            break;
        }
    case "delete":{
            SessionsFormationsManager::delete($session);
            header("location: Index.php?page=ListeSessions");
            break;
        }
        case "ajoutPer":{
            PeriodesStagesManager::add($periode);
            header("location: Index.php?page=ListeSessions");
            break;
        }

}

//SELECT `idSessionFormation`FROM `sessionsformations` WHERE `idSessionFormation` = (SELECT MAX(`idSessionFormation`) FROM `sessionsformations`);