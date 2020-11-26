<?php

echo '<div class = "colonne">
<h2>Liste des Acteurs</h2>
<div class = "liste colonne">';
echo '<a href ="index.php?codePage=formActeur&mode=ajout">Ajouter</a>';
$films = ActeursManager::getList();
foreach ($films as $unFilm)
{
    echo '<div>'.$unFilm->getNomActeur()." ".$unFilm->getPrenomActeur().'</div>';
    echo '<div><a href = "index.php?codePage=formActeur&mode=edit&id='.$unFilm->getIdActeur().'">Detail</a></div>';
    echo '<div><a href = "index.php?codePage=formActeur&mode=modif&id='.$unFilm->getIdActeur().'">Modifier</a></div>';
    echo '<div><a href = "index.php?codePage=formActeur&mode=delete&id='.$unFilm->getIdActeur().'">Supprimer</a></div>';

}
echo '</div>';