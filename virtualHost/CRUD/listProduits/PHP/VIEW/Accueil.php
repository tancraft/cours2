<?php
$titre= "Accueil";


echo '<h2>Liste des articles</h2>';
echo '<div class = "liste colonne">';
$tableau = ProduitsManager::getList();
foreach ($tableau as $unProduit)
{
    echo '<div class="ligneProduit">'.$unProduit->toString().'<div class = "bouton"><a href = "./PHP/VIEW/detail.php?id='.$unProduit->getIdProduit().'">Detail</a></div>';
}
echo '</div>';