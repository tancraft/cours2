<?php

echo '<div class = "colonne">
<h2>Liste des articles</h2>
<div class = "liste colonne">';
echo '<a href ="index.php?code=formProduit&mode=ajout">Ajouter</a>';
$produits = ProduitsManager::getList();
foreach ($produits as $unProduit)
{
    echo '<div>'.$unProduit->getLibelleProduit().'</div>';
    echo '<div><a href = "index.php?code=formProduit&mode=edit&id='.$unProduit->getIdProduit().'">Detail</a></div>';
    echo '<div><a href = "index.php?code=formProduit&mode=modif&id='.$unProduit->getIdProduit().'">Modifier</a></div>';
    echo '<div><a href = "index.php?code=formProduit&mode=delete&id='.$unProduit->getIdProduit().'">Supprimer</a></div>';

}
echo '</div>';