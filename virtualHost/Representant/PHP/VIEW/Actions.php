<?php

$categorie = $_GET['categorie'];
$mode = $_GET['mode'];

if (isset($_GET['id'])) // si l'id est renseigné
{
    switch ($categorie) {
        case ('users'):
            {
                $idRecu = $_GET['id'];
                if ($idRecu != false) {
                    $idChoisi = UtilisateursManager::findById($idRecu);
                }
                break;
            }
        case ('repres'):
            {
                $idRecu = $_GET['id'];
                if ($idRecu != false) {
                    $idChoisi = RepresentantsManager::findById($idRecu);
                }
                break;
            }
        case ('clients'):
            {
                $idRecu = $_GET['id'];
                if ($idRecu != false) {
                    $idChoisi = ClientsManager::findById($idRecu);
                }
                break;
            }
        case ('produits'):
            {
                $idRecu = $_GET['id'];
                if ($idRecu != false) {
                    $idChoisi = ProduitsManager::findById($idRecu);
                }
                break;
            }
        case ('ventes'):
            {
                $idRecu = $_GET['id'];
                if ($idRecu != false) {
                    $idChoisi = VentesManager::findById($idRecu);
                }
                break;
            }
    }
}

if (isset($_SESSION['utilisateur'])) {
    switch ($categorie) {
        case ('users'):
            {
                $users = new Utilisateurs($_POST);
                if ($_SESSION['utilisateur']->getIdRole() == 1 && $categorie == 'users') {
                    switch ($mode) {
                        case "ajout":{
                                UtilisateursManager::add($users);
                                break;
                            }
                        case "modif":{
                                UtilisateursManager::update($users);
                                break;
                            }
                        case "delete":{
                                UtilisateursManager::delete($users);
                                break;
                            }

                    }
                } else {
                    echo '<h1>Vou n\'avez rien a faire ici</h1>';
                }
                header("location: Index.php?codePage=listes&mode=users");
                break;
            }
        case ('repres'):
            {
                $repres = new Representants($_POST);
                switch ($mode) {
                    case "ajout":{
                            RepresentantsManager::add($repres);
                            break;
                        }
                    case "modif":{
                            RepresentantsManager::update($repres);
                            break;
                        }
                    case "delete":{
                            RepresentantsManager::delete($repres);
                            break;
                        }

                }
                header("location: Index.php?codePage=listes&mode=repres");
                break;
            }
        case ('clients'):
            {
                $clients = new Clients($_POST);
                switch ($mode) {
                    case "ajout":{
                            ClientsManager::add($clients);
                            break;
                        }
                    case "modif":{
                            ClientsManager::update($clients);
                            break;
                        }
                    case "delete":{
                            ClientsManager::delete($clients);
                            break;
                        }

                }
                header("location: Index.php?codePage=listes&mode=clients");
                break;
            }
        case ('produits'):
            {
                $produits = new Produits($_POST);
                switch ($mode) {
                    case "ajout":{
                            ProduitsManager::add($produits);
                            break;
                        }
                    case "modif":{
                            ProduitsManager::update($produits);
                            break;
                        }
                    case "delete":{
                            ProduitsManager::delete($produits);
                            break;
                        }

                }
                header("location: Index.php?codePage=listes&mode=produits");
                break;
            }
        case ('ventes'):
            {
                $ventes = new Ventes($_POST);
                switch ($mode) {
                    case "ajout":{
                            VentesManager::add($ventes);
                            break;
                        }
                    case "modif":{
                            VentesManager::update($ventes);
                            break;
                        }
                    case "delete":{
                            VentesManager::delete($ventes);
                            break;
                        }

                }
                header("location: Index.php?codePage=listes&mode=ventes");
                break;

            }

    }

} else {
    echo '<h1>Vous n\'avez rien a faire ici</h1>';
}
