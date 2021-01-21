<section class = "colonne">
<?php

$mode = $_GET['mode'];
$idSession = $_GET['idSession'];

var_dump($_GET);
echo '<div class = "case centre noborder">
<h2>Ajouter une Periode</h2>
    </div>
    <div class="colonne info" >';
switch ($mode) {
    case "ajout":{

            echo '<form  action="index.php?page=ActionSession&mode=fini" method="POST">';
            break;
        }
    case "modif":{
            echo '<form  action="index.php?page=ActionSession&mode=fini&id=' . $idSession . '" method="POST">';
            break;
        }
}

echo '            <div>
<input type="hidden" name="idSessionFormation" value="' . $idSession . '"/>
<div class = "colonne">
    <label for="dateDebutPAE">Date de début de stage: </label>
    <input type="date" name="dateDebutPAE" />
    </div>
    <div class="colonne" >
    <label for="dateFinPAE">Date de fin de stage: </label>
    <input type="date" name="dateFinPAE" />
    </div>
    </div>
    <div class="colonne" >
    <label for="dateRapportSuivi">Date Rapport de suivi: </label>
    <input type="date" name="dateRapportSuivi" />
    </div>
    <div class="colonne" >
    <label for="objectifPAE">Objectif de stage: </label>
    <input type="textarea" name="objectifPAE" />
    </div>';

    echo '<div>
    <button class="bouton" type="submit">Fini</button>
    </div>
    </form>
    <button id="ajout1p" class="bouton" type="submit"><i class="fas fa-edit"></i> Ajout Periode</button>';
?>
</div>
<div class="mini"></div>
<div class="info"><a href="Index.php?page=ListeSessions"><button class="bouton">Retour</button></a></div>
<div class="mini"></div>
</section>

<script type="text/javascript">
var ajoutP = document.querySelector('#ajout1p');

ajoutP.addEventListener('click', function(){
var form = document.querySelector('form');

form.action +='&perSup=ok'
});
</script>