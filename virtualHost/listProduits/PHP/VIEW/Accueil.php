<?php
$titre= "Accueil";


echo '<h2>Liste des articles</h2>';
echo '<div class = "liste colonne">';
$tableau = ProduitsManager::getList();
foreach ($tableau as $unProduit)
{
    echo '<div class="ligneProduit">'.$unProduit->toString().'</div> <input type = "button" value "'.$p = ProduitsManager::findById($unProduit->getIdProduit()).'">';
}
echo '</div>';