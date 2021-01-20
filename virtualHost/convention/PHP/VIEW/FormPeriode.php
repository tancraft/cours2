<?php
$idSession = $_GET['idSession'];

echo '<div class="colonne info titreColonne" >
<form action="index.php?page=ActionSession&mode=ajoutPer" method="POST">
    <div>
    <input type="hidden" name="idSessionFormation" value="'.$idSession.'"/>
    <div class="colonne" >
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
    </div>
    </div>
    <button class="bouton" type="submit">Ajout de la periode</button>
</form>';
