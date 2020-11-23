<?php
$nom= "Liste";

echo '<div class = "colonne">
<h2>Liste des articles</h2>
<div class = "liste colonne">';
echo '<a href ="index.php?code=formAjout">Ajouter</a>';
$produits = ProduitsManager::getList();
foreach ($produits as $unProduit)
{
    echo '<div class="ligneProduit">'.$unProduit->getLibelleProduit().'<div class = "bouton"><a href = "index.php?code=detail&id='.$unProduit->getIdProduit().'">Detail</a></div>';
    echo '</div>';
}
echo '</div>';