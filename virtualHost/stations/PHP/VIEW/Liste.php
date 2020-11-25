<?php

echo '<div class = "colonne">
<h2>Liste des articles</h2>
<div class = "liste colonne">';
echo '<a href ="index.php?code=formAjout">Ajouter</a>';
$produits = ProduitsManager::getList();
foreach ($produits as $unProduit)
{
    echo '<div>'.$unProduit->getLibelleProduit().'</div><div><a href = "index.php?code=detail&id='.$unProduit->getIdProduit().'">Detail</a></div>';
    echo '<div><a href = "index.php?code=formModifier&id='.$unProduit->getIdProduit().'">Modifier</a></div>';
    echo '<div><a href = "index.php?code=formDelete&id='.$unProduit->getIdProduit().'">Supprimer</a></div>';

}
echo '</div>';