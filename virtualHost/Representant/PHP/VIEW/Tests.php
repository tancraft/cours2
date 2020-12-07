<?php
/**echo "liste des clients" . '<br>';
$tableau = ClientsManager::getList();
foreach ($tableau as $unProduit)
{
    echo $unProduit->toString() . '<br>';
}**/

/**echo "ajout d'un Client" . '<br>';
$cNew = new Clients (["NomClient" => "toto","VilleClient"=>"Dunkerque"]);
ClientsManager  ::add($cNew);**/

// on teste la recherche par ID
/**echo 'recherche id = 6' . '<br>';
$p = ClientsManager::findById(6);
var_dump($p);**/

// on teste la mise à jour
/**echo "on met à jour l'id 2" . '<br>';
$pRecharge=ClientsManager::findById(2);
$pRecharge->setNomClient("tata");
var_dump($pRecharge);
ClientsManager::update($pRecharge);**/

// on teste la suppression
/**echo "on supprime un client" . '<br>';
$pSuppr = ClientsManager ::findById(6);
ClientsManager ::delete($pSuppr);**/

/**echo "liste des texte" . '<br>';
$tableau = TexteManager::getList();
foreach ($tableau as $unProduit)
{
    echo $unProduit->toString() . '<br>';
}**/

/**echo "ajout d'un texte" . '<br>';
$cNew = new Texte (["codeTexte" => "test","codeLangue"=>"RU","Texte"=>"ceci est un test"]);
TexteManager  ::add($cNew);**/

// on teste la recherche par ID
/**echo 'recherche id = 3' . '<br>';
$p = TexteManager::findById(3);
var_dump($p);**/

// on teste la mise à jour
/**echo "on met à jour l'id 2" . '<br>';
$pRecharge=TexteManager::findById(5);
$pRecharge->setTexte("super sa change");
var_dump($pRecharge);
TexteManager::update($pRecharge);**/

// on teste la suppression
/**echo "on supprime un texte" . '<br>';
$pSuppr = TexteManager ::findById(5);
TexteManager ::delete($pSuppr);**/

/**echo "liste des produits" . '<br>';
$tableau = ProduitsManager::getList();
foreach ($tableau as $unProduit)
{
    echo $unProduit->toString() . '<br>';
}**/

/**echo "ajout d'un produit" . '<br>';
$cNew = new Produits (["NomProduit" => "voiture","CouleurProduit"=>"Rose","PoidsProduit"=>200]);
ProduitsManager::add($cNew);**/

// on teste la recherche par ID
/**echo 'recherche id = 2' . '<br>';
$p = ProduitsManager::findById(2);
var_dump($p);**/

// on teste la mise à jour
/**echo "on met à jour l'id 2" . '<br>';
$pRecharge=ProduitsManager::findById(2);
$pRecharge->setNomProduit("stylo");
var_dump($pRecharge);
ProduitsManager::update($pRecharge);**/

// on teste la suppression
/**echo "on supprime un produit" . '<br>';
$pSuppr = ProduitsManager ::findById(5);
ProduitsManager ::delete($pSuppr);**/


/**echo "liste des representants" . '<br>';
$tableau = RepresentantsManager::getList();
foreach ($tableau as $unProduit)
{
    echo $unProduit->toString() . '<br>';
}**/

/**echo "ajout d'un Client" . '<br>';
$cNew = new Representants (["NomRepres" => "toto","VilleRepres"=>"Dunkerque"]);
RepresentantsManager::add($cNew);**/

// on teste la recherche par ID
/**echo 'recherche id = 4' . '<br>';
$p = RepresentantsManager::findById(4);
var_dump($p);**/

// on teste la mise à jour
/**echo "on met à jour l'id 6" . '<br>';
$pRecharge=RepresentantsManager::findById(6);
$pRecharge->setNomRepres("tata");
var_dump($pRecharge);
RepresentantsManager::update($pRecharge);**/

// on teste la suppression
/**echo "on supprime un representant" . '<br>';
$pSuppr = RepresentantsManager::findById(3);
var_dump($pSuppr);
RepresentantsManager::delete($pSuppr);**/


/**$liste= VentesManager::getVentesRepresentant(4);
var_dump($liste);**/

/**echo "liste des ventes" . '<br>';
$tableau = VentesManager::getList();
foreach ($tableau as $unProduit)
{
    echo $unProduit->toString() . '<br>';
}**/

/**echo "ajout d'une vente" . '<br>';
$cNew = new Ventes (["IdRepres" => 1,"IdProduit"=>3,"IdClient" => 2,"Quantite"=>10]);
VentesManager::add($cNew);**/

// on teste la recherche par ID
/**echo 'recherche id = 2' . '<br>';
$p = VentesManager::findById(2);
var_dump($p);**/

// on teste la mise à jour
/**echo "on met à jour l'id 13" . '<br>';
$pRecharge=VentesManager::findById(13);
$pRecharge->setIdRepres(4);
var_dump($pRecharge);
VentesManager::update($pRecharge);**/

// on teste la suppression
/**echo "on supprime une vente" . '<br>';
$pSuppr = VentesManager::findById(13);
VentesManager::delete($pSuppr);**/


/**echo "liste des Roles" . '<br>';
$tableau = RolesManager::getList();
foreach ($tableau as $unProduit)
{
    echo $unProduit->toString() . '<br>';
}

echo "ajout d'un Roles" . '<br>';
$cNew = new Roles (["LibelleRole" => "Noob"]);
RolesManager ::add($cNew);

// on teste la recherche par ID
echo 'recherche id = 1' . '<br>';
$p = RolesManager::findById(6);
var_dump($p);

// on teste la mise à jour
echo "on met à jour l'id 2" . '<br>';
$pRecharge=RolesManager::findById(2);
$pRecharge->setLibelleRole("esclave");
var_dump($pRecharge);
RolesManager::update($pRecharge);

// on teste la suppression
echo "on supprime un role" . '<br>';
$pSuppr = RolesManager ::findById(3);
RolesManager ::delete($pSuppr);**/

/**echo "liste d'utilisateurs" . '<br>';
$tableau = UtilisateursManager::getList();
foreach ($tableau as $unProduit)
{
    echo $unProduit->toString() . '<br>';
}

echo "ajout d'un utilisateur" . '<br>';
$cNew = new Utilisateurs (["NomUtilisateur" => "tata","PrenomUtilisateur" => "toto","PseudoUtilisateur"=>"toto25","MotDePasseUtilisateur"=>"toto25","IdRole"=>2]);
UtilisateursManager ::add($cNew);

// on teste la recherche par ID
echo 'recherche id = 1' . '<br>';
$p = UtilisateursManager::findById(1);
var_dump($p);

// on teste la mise à jour
echo "on met à jour l'id 2" . '<br>';
$pRecharge=UtilisateursManager::findById(2);
$pRecharge->setNomUtilisateur("lina");
var_dump($pRecharge);
UtilisateursManager::update($pRecharge);

// on teste la suppression
echo "on supprime un role" . '<br>';
$pSuppr = UtilisateursManager ::findById(4);
UtilisateursManager ::delete($pSuppr);**/

