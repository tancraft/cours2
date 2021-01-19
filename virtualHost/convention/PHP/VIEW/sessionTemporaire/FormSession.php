<?php

$mode = $_GET['mode'];
if (isset($_GET['id'])) // si l'id est renseigné
{
    $idRecu = $_GET['id'];
    if ($idRecu != false) {
        $idChoisi = SessionsFormationsManager::findById($idRecu);
        $idForma = FormationsManager::findById($idChoisi->getIdFormation());
    }
}
?>
<section class = "colonne">
<?php
switch ($mode) {
    case "ajout":{
            echo '<div class = "case centre noborder">
                    <h2>Ajouter une Session</h2>
                </div>
            <form  class="centre" action="index.php?page=ActionSession&mode=ajout" method="POST">';
            break;
        }
    case "modif":{
            echo '<div class = "case centre noborder">
                    <h2>Modifier une Session</h2>
                </div>
            <form class="centre" action="index.php?page=ActionSession&mode=modif&id=' . $idChoisi->getIdSessionFormation() . '" method="POST">
    <input name="idSessionFormation"  value="' . $idChoisi->getIdSessionFormation() . '" type="hidden" />';
            break;
        }
    case "delete":{
            echo '<div class = "case centre noborder">
                    <h2>Supprimer une Session</h2>
                    </div>
            <form class="centre" action="index.php?page=ActionSession&mode=delete&id=' . $idChoisi->getIdSessionFormation() . '" method="POST">
    <input name="idSessionFormation"  value="' . $idChoisi->getIdSessionFormation() . '" type="hidden" />';
            break;
        }
    case "detail":{
            echo '<div class = "case centre noborder">
                    <h2>Détail d\'une Session</h2>
                </div>
            <form class="centre">
<input name="idSessionFormation"  value="' . $idChoisi->getIdSessionFormation() . '" type="hidden" />';
            break;
        }
}

?>
            <div class = "colonne">
                <label for="numOffreFormation">Numéro d'offre: </label>
                <input name="numOffreFormation" <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getNumOffreFormation() . '"';}if ($mode == "delete" || $mode == "detail") {
    echo 'disabled';
}
?>/>
            </div>
<div class = "colonne">
             <label for="idFormation">formation: </label>
        <?php $formations = FormationsManager::getList();
if ($mode === "ajout") {
    echo '<select name="idFormation">
            <option selected="selected">----Choisissez une Formation----</option>';
    foreach ($formations as $uneFormation) {
        echo '<option value="' . $uneFormation->getIdFormation() . '">' . $uneFormation->getLibelleFormation() . '</option>';
    }
    echo '</select>';
} else {
    if ($mode == "delete" || $mode == "detail") {
        echo '<div class="case">' . $idForma->getLibelleFormation() . '</div>';
    } else {
        echo '<select name="idFormation">
                <option value="' . $idForma->getIdFormation() . '">' . $idForma->getLibelleFormation() . '</option>';
        foreach ($formations as $uneFormation) {
            echo '<option value="' . $uneFormation->getIdFormation() . '">' . $uneFormation->getLibelleFormation() . '</option>';
        }
        echo '</select>';
    }

}

?>

</div>
<div>
<?php
switch ($mode) {
    case "ajout":
        {
            echo '<div class="mini">
            </div><button class="bouton" type="submit"><i class="fas fa-plus-circle"></i> Ajouter une session</button>';
            break;
        }
    case "modif":
        {
            echo '<div class="mini">
            </div><button class="bouton" type="submit"><i class="fas fa-edit"></i> Modifier la session</button>';
            break;
        }
    case "delete":
        {
            echo '<div class="mini"></div>
            <button class="bouton" type="submit"><i class="fas fa-trash-alt"></i> Supprimer la session</button>';
            break;
        }
}
echo '<div class="mini">
</div><a href="Index.php?page=ListeSessions"><button class="bouton">Retour</button></a>
<div class="mini"></div>
</form>';
?>
</div>
</section>
