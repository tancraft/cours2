<?php

$mode = $_GET['mode'];
if (isset($_GET['id'])) // si l'id est renseigné
{
    $idRecu = $_GET['id'];
    if ($idRecu != false) {
        $idChoisi = SessionformationManager::findById($idRecu);
    }
}

switch ($mode) {
    case "ajout":{
            echo '<form action="index.php?codePage=actions&mode=ajout" method="POST">';
            break;
        }
    case "modif":{
            echo '<form action="index.php?codePage=actions&mode=modif&id=' . $idChoisi->getIdSessionFormation() . '" method="POST">
    <input name="idSessionFormation"  value="' . $idChoisi->getIdSessionFormation() . '" type="hidden" />';
            break;
        }
    case "delete":{
            echo '<form action="index.php?codePage=actions&mode=delete&id=' . $idChoisi->getIdSessionFormation() . '" method="POST">
    <input name="idSessionFormation"  value="' . $idChoisi->getIdSessionFormation() . '" type="hidden" />';
            break;
        }
    case "detail":{
            echo '<form >
<input name="idSessionFormation"  value="' . $idChoisi->getIdSessionFormation() . '" type="hidden" />';
            break;
        }
}

?>
            <div>
                <label for="NomUtilisateur">Nom</label>
                <input name="NomUtilisateur" <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getNomUtilisateur() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?>/>
            </div>
            <div class="espace"></div>
             <div>
             <label for="PrenomUtilisateur">Prenom</label>
             <input name="PrenomUtilisateur"  <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getPrenomUtilisateur() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?> />
             </div>
             <div class="espace"></div>
             <div>
                 <label for="PseudoUtilisateur">Pseudo</label>
                 <input name="PseudoUtilisateur" <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getPseudoUtilisateur() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?> />
             </div>
             <div class="espace"></div>
             <div>
                 <label for="EmailUtilisateur">E-mail</label>
                 <input name="EmailUtilisateur" <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getEmailUtilisateur() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?>  />
             </div>
             <div>
                <label for="MotDePasseUtilisateur">Mot de passe</label>
                <input type="password" name="MotDePasseUtilisateur" <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getMotDePasseUtilisateur() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?>  />
             </div>
             <div>
                <label for="IdRole">Role</label>
                <input name="IdRole" <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getIdRole() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?>  />
             </div>
             <div></div>
<?php
switch ($mode) {
    case "ajout":
        {
            echo '    <button type="submit">Ajouter un utilisateur</button>';
            break;
        }
    case "modif":
        {
            echo '    <button type="submit">Modifier l\'utilisateur</button>';
            break;
        }
    case "delete":
        {
            echo '    <button type="submit">Supprimer l\'utilisateur</button>';
            break;
        }
}
echo '<button><a href="Index.php?codePage=listeSession&mode=users">Retour</a></button>
</form>';
