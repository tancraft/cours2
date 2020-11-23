<?php
$nom = "Detail";

echo '<div class = "colonne">';
echo '<h2>Liste des articles</h2>';
echo '<div class = "liste colonne">';
$idRecherche = $_GET['id'];

if ($unProduit->getIdProduit() == $idRecherche) 
{
    echo '<div class="ligneProduit">' . $unProduit->toString();
    echo '</div>';
}
echo '<div class = "bouton">';
echo '<a href="Liste.php">Retour</a></div>';
echo '</div>';
