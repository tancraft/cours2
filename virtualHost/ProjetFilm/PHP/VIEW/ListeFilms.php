<?php

echo '<div class = "colonne">
<h2>Liste des Films</h2>
<div class = "liste colonne">';
echo '<a href ="index.php?codePage=formFilm&mode=ajout">Ajouter</a>';
$films = FilmsManager::getList();
foreach ($films as $unFilm)
{
    echo '<div>'.$unFilm->getNomFilm().'</div>';
    echo '<div><a href = "index.php?codePage=formFilm&mode=edit&id='.$unFilm->getIdFilm().'">Detail</a></div>';
    echo '<div><a href = "index.php?codePage=formFilm&mode=modif&id='.$unFilm->getIdFilm().'">Modifier</a></div>';
    echo '<div><a href = "index.php?codePage=formFilm&mode=delete&id='.$unFilm->getIdFilm().'">Supprimer</a></div>';

}
echo '</div>';