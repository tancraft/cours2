<?php

echo '<div class = "colonne">
<h2>Liste des Genres</h2>
<div class = "liste colonne">';
echo '<a href ="index.php?codePage=formGenre&mode=ajout">Ajouter</a>';
$genres = GenresManager::getList();
foreach ($genres as $genre)
{
    echo '<div>'.$genre->getLibelleGenre().'</div>';
    echo '<div><a href = "index.php?codePage=formGenre&mode=edit&id='.$genre->getIdGenre().'">Detail</a></div>';
    echo '<div><a href = "index.php?codePage=formGenre&mode=modif&id='.$genre->getIdGenre().'">Modifier</a></div>';
    echo '<div><a href = "index.php?codePage=formGenre&mode=delete&id='.$genre->getIdGenre().'">Supprimer</a></div>';

}
echo '</div>';