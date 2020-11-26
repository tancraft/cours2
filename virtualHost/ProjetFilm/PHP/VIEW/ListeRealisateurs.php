<?php

echo '<div class = "colonne">
<h2>Liste des realisateurs</h2>
<div class = "liste colonne">';
echo '<a href ="index.php?codePage=formRealisateur&mode=ajout">Ajouter</a>';
$realisateurs = RealisateursManager::getList();
foreach ($realisateurs as $realisateur)
{
    echo '<div>'.$realisateur->getNomRealisateur()." ".$realisateur->getPrenomRealisateur().'</div>';
    echo '<div><a href = "index.php?codePage=formRealisateur&mode=edit&id='.$realisateur->getIdRealisateur().'">Detail</a></div>';
    echo '<div><a href = "index.php?codePage=formRealisateur&mode=modif&id='.$realisateur->getIdRealisateur().'">Modifier</a></div>';
    echo '<div><a href = "index.php?codePage=formRealisateur&mode=delete&id='.$realisateur->getIdRealisateur().'">Supprimer</a></div>';

}
echo '</div>';