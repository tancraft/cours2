<?php
include "PHP/VIEW/Head.php";
include "PHP/VIEW/Header.php";
include "PHP/VIEW/Accueil.php";

/**tester manager**/
// on teste la recherche par ID
echo 'recherche id = 1' . '<br>';
$p = ProduitsManager::findById(1);
var_dump($p);

echo 'recherche id = 2' . '<br>';
$c = ClientsManager::findById(1);
var_dump($c);

// on teste l'ajout
echo "ajout d'un produit" . '<br>';
$pNew = new Produits(["libelleProduit" => "cahier", "prix" => 5, "dateDePeremption" => '2020-12-31']);
ProduitsManager::add($pNew);

echo "ajout d'un client" . '<br>';
$cNew = new Clients(["nomClient" => "Virose", "prenomClient" => "Albert", "emailClient" => "virose@free.fr", "motDePasseClient"=>"titi222"]);
ClientsManager::add($cNew);

//on affiche la liste des produits
echo "Liste des articles" . '<br>';
$tableau = ProduitsManager::getList();
foreach ($tableau as $unProduit)
{
    echo $unProduit->toString() . '<br>';
}

echo "Liste des Clients" . '<br>';
$tableau = ClientsManager::getList();
foreach ($tableau as $unClient)
{
    echo $unClient->toString() . '<br>';
}

// on teste la mise à jour
echo "on met à jour l'id 1" . '<br>';
$p->setLibelleProduit($p->getLibelleProduit() . 'sss');
ProduitsManager::update($p);
$pRecharge = ProduitsManager::findById(1);
var_dump($pRecharge);

echo "on met à jour l'id 2" . '<br>';
$c->setNomClient($c->getNomClient() . 'vvv');
var_dump($c);
ClientsManager::update($c);
$cRecharge = ClientsManager::findById(2);
var_dump($cRecharge);

// on teste la suppression
// echo "on supprime un article" . '<br>';
$pSuppr = ProduitsManager::findById(3);
ProduitsManager::delete($pSuppr);

// echo "on supprime un client" . '<br>';
$cSuppr = ClientsManager::findById(3);
ClientsManager::delete($cSuppr);

//on affiche la liste des produits
echo "liste des articles" . '<br>';
$tableau = ProduitsManager::getList();
foreach ($tableau as $unProduit)
{
    echo $unProduit->toString() . '<br>';
}

echo "liste des clients" . '<br>';
$tableau = ClientsManager::getList();
foreach ($tableau as $unClient)
{
    echo $unClient->toString() . '<br>';
}

include "PHP/VIEW/Footer.php";