<?php

/**echo "liste des Matieres" . '<br>';
$tableau = MatieresManager::getList();
foreach ($tableau as $unProduit)
{
    echo $unProduit->toString() . '<br>';
}

echo "ajout d'un Matieres" . '<br>';
$cNew = new Matieres (["LibelleMatiere" => "eps"]);
MatieresManager  ::add($cNew);

// on teste la recherche par ID
echo 'recherche id = 3' . '<br>';
$p = MatieresManager::findById(3);
var_dump($p);

// on teste la mise à jour
echo "on met à jour l'id 2" . '<br>';
$pRecharge=MatieresManager::findById(2);
$pRecharge->setLibelleMatiere("Anglais");
var_dump($pRecharge);
MatieresManager::update($pRecharge);

// on teste la suppression
echo "on supprime un Matieres" . '<br>';
$pSuppr = MatieresManager ::findById(6);
MatieresManager ::delete($pSuppr);**/


/**echo "liste des Eleves" . '<br>';
$tableau = ElevesManager::getList();
foreach ($tableau as $unProduit)
{
    echo $unProduit->toString() . '<br>';
}

echo "ajout d'un Eleves" . '<br>';
$cNew = new Eleves (["NomEleve" => "Formant","PrenomEleve" => "Tati","Classe" => "4eme"]);
ElevesManager  ::add($cNew);

// on teste la recherche par ID
echo 'recherche id = 3' . '<br>';
$p = ElevesManager::findById(3);
var_dump($p);

// on teste la mise à jour
echo "on met à jour l'id 2" . '<br>';
$pRecharge=ElevesManager::findById(2);
$pRecharge->setNomEleve("Babouche");
var_dump($pRecharge);
ElevesManager::update($pRecharge);**/

// on teste la suppression
/**echo "on supprime un Matieres" . '<br>';
$pSuppr = ElevesManager ::findById(7);
ElevesManager ::delete($pSuppr);**/


/**echo "liste des Suivis" . '<br>';
$tableau = SuivisManager::getList();
foreach ($tableau as $unProduit)
{
    echo $unProduit->toString() . '<br>';
}

echo "ajout d'un Suivis" . '<br>';
$cNew = new Suivis (["IdMatiere" => 2,"IdEleve" => 3,"Note" => 9,"Coefficient" => 2]);
SuivisManager  ::add($cNew);

// on teste la recherche par ID
echo 'recherche id = 3' . '<br>';
$p = SuivisManager::findById(3);
var_dump($p);**/

// on teste la mise à jour
/**echo "on met à jour l'id 2" . '<br>';
$pRecharge=SuivisManager::findById(2);
$pRecharge->setIdMatiere(1);
var_dump($pRecharge);
SuivisManager::update($pRecharge);**/

// on teste la suppression
/**echo "on supprime un Matieres" . '<br>';
$pSuppr = SuivisManager::findById(12);
SuivisManager::delete($pSuppr);**/


/**echo "liste des utilisateurs" . '<br>';
$tableau = UtilisateursManager::getList();
foreach ($tableau as $unProduit)
{
    echo $unProduit->toString() . '<br>';
}

echo "ajout d'un Suivis" . '<br>';
$cNew = new Utilisateurs (["Login" => "toto59","NomUtilisateur" => "toto","PrenomUtilisateur" => "toto","MotDePasse" => "toto59","Role" => 2,"IdMatiere" => 1]);
UtilisateursManager::add($cNew);

// on teste la recherche par ID
echo 'recherche id = 3' . '<br>';
$p = UtilisateursManager::findById(3);
var_dump($p);

// on teste la mise à jour
echo "on met à jour l'id 2" . '<br>';
$pRecharge=UtilisateursManager::findById(2);
$pRecharge->setNomUtilisateur("Polichinel");
var_dump($pRecharge);
UtilisateursManager::update($pRecharge);**/

// on teste la suppression
/**echo "on supprime un Matieres" . '<br>';
$pSuppr = UtilisateursManager::findById(6);
UtilisateursManager::delete($pSuppr);**/