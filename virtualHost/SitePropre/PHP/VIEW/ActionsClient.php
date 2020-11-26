<?php
switch ($_GET['mode']) {
    case "ajoutProduit":
        {
            $p = new Clients(["nomClient" => $_POST["nomClient"], "prenomClient" => $_POST["prenomClient"], "emailClient" => $_POST["emailClient"], "motDePasseClient" => $_POST["motDePasseClient"]]);
            /* on peut simplifier l'écriture car $_POST est un tableau associatif. Les clés sont les name du formulaire. */
            // $p = new Clients($_POST);
            ClientsManager::add($p);
            break;
        }
    case "modifProduit":
        {
            $p = new Clients($_POST);
            ClientsManager::update($p);
            break;
        }
    case "delProduit":
        {
            $p = new Clients($_POST);
            ClientsManager::delete($p);
            break;
        }
}

header("location:index.php?action=listeClients");