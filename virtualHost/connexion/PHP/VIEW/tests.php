<?php

/**tester manager**/
// on teste la recherche par ID
echo 'recherche id = 1' . '<br>';
$u = UsersManager::findById(1);
var_dump($u);


// on teste l'ajout
echo "ajout d'un produit" . '<br>';
$uNew = new Users(["nom" => "virule", "prenom" => "alfred", "motDePasse" => "prout412", "adresseMail" => "gg@gmail.com", "roleUser" => "auteur", "pseudo" => "boboze55"]);
UsersManager::add($uNew);


//on affiche la liste des produits
echo "Liste des articles" . '<br>';
$tableau = UsersManager::getList();
foreach ($tableau as $unUser)
{
    echo $unUser->toString() . '<br>';
}


// on teste la mise à jour
echo "on met à jour l'id 1" . '<br>';
$u->setNom($u->getNom() . 'ttt');
UsersManager::update($u);
$uRecharge = UsersManager::findById(1);
var_dump($uRecharge);


// on teste la suppression
// echo "on supprime un article" . '<br>';
$uSuppr = UsersManager::findById(3);
UsersManager::delete($uSuppr);


//on affiche la liste des produits
echo "liste des articles" . '<br>';
$tableau = UsersManager::getList();
foreach ($tableau as $unUser)
{
    echo $unUser->toString() . '<br>';
}
