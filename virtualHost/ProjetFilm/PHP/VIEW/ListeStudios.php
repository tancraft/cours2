<?php

echo '<div class = "colonne">
<h2>Liste des Studios</h2>
<div class = "liste colonne">';
echo '<a href ="index.php?codePage=formStudio&mode=ajout">Ajouter</a>';
$studios = StudiosManager::getList();
foreach ($studios as $unstudio)
{
    echo '<div>'.$unstudio->getNomStudio().'</div>';
    echo '<div><a href = "index.php?codePage=formStudio&mode=edit&id='.$unstudio->getIdStudio().'">Detail</a></div>';
    echo '<div><a href = "index.php?codePage=formStudio&mode=modif&id='.$unstudio->getIdStudio().'">Modifier</a></div>';
    echo '<div><a href = "index.php?codePage=formStudio&mode=delete&id='.$unstudio->getIdStudio().'">Supprimer</a></div>';

}
echo '</div>';