<?php

$mode = $_GET['mode'];
if (isset($_SESSION['utilisateur'])) {
    if ($_SESSION['utilisateur']->getIdRole() == 1 && $mode == 'users') 
    {
        echo '<h2>Liste des utilisateurs</h2>';
        echo '<div class = "colonne">
        <div><div class="bouton"><a href="Index.php?codePage=details&categorie=users&mode=ajout">Ajouter</a></div>';
        $tableau = UtilisateursManager::getList();
        foreach ($tableau as $unUser) {
            echo '<div>' . $unUser->getPseudoUtilisateur() . 
            '<div class="bouton"><a href="Index.php?codePage=details&categorie=users&mode=modif&id='.$unUser->getIdUtilisateur().'">Modifier</a></div>
            <div class="bouton"><a href="Index.php?codePage=details&categorie=users&mode=detail&id='.$unUser->getIdUtilisateur().'">Détail</a></div></div></div>
            <div class="bouton"><a href="Index.php?codePage=details&categorie=users&mode=delete&id='.$unUser->getIdUtilisateur().'">Supprimer</a></div></div></div>';
        }
    } 
    else 
    {
        switch ($mode) 
        {
            case ('repres'):
                {
                    echo '<h2>Liste des représentants</h2>';
                    echo '<div class = "colonne">
                    <div><div class="bouton"><a href="Index.php?codePage=details&categorie=repres&mode=ajout">Ajouter</a></div>';
                    $tableau = RepresentantsManager::getList();
                    foreach ($tableau as $unRepres) {
                        echo '<div>' . $unRepres->getNomRepres() . 
                        '<div class="bouton"><a href="Index.php?codePage=details&categorie=repres&mode=modif&id='.$unRepres->getIdRepres().'">Modifier</a></div>
                        <div class="bouton"><a href="Index.php?codePage=details&categorie=repres&mode=detail&id='.$unRepres->getIdRepres().'">Détail</a></div></div></div>
                        <div class="bouton"><a href="Index.php?codePage=details&categorie=repres&mode=delete&id='.$unRepres->getIdRepres().'">Supprimer</a></div></div></div>';
                    }
                    break;
                }
            case ('clients'):
                {
                    echo '<h2>Liste des Clients</h2>';
                    echo '<div class = "colonne">
                    <div><div class="bouton"><a href="Index.php?codePage=details&categorie=clients&mode=ajout">Ajouter</a></div>';
                    $tableau = ClientsManager::getList();
                    foreach ($tableau as $unClient) {
                        echo '<div>' . $unClient->getNomClient() . 
                        '<div class="bouton"><a href="Index.php?codePage=details&categorie=clients&mode=modif&id='.$unClient->getIdClient().'">Modifier</a></div>
                        <div class="bouton"><a href="Index.php?codePage=details&categorie=clients&mode=detail&id='.$unClient->getIdClient().'">Détail</a></div></div></div>
                        <div class="bouton"><a href="Index.php?codePage=details&categorie=clients&mode=delete&id='.$unClient->getIdClient().'">Supprimer</a></div></div></div>';
                    }
                    break;
                }
            case ('produits'):
                {
                    echo '<h2>Liste des produits</h2>';
                    echo '<div class = "colonne">
                    <div><div class="bouton"><a href="Index.php?codePage=details&categorie=produits&mode=ajout">Ajouter</a></div>';
                    $tableau = ProduitsManager::getList();
                    foreach ($tableau as $unProduit) {
                        echo '<div>' . $unProduit->getNomProduit().
                        '<div class="bouton"><a href="Index.php?codePage=details&categorie=produits&mode=modif&id='.$unProduit->getIdProduit().'">Modifier</a></div>
                        <div class="bouton"><a href="Index.php?codePage=details&categorie=produits&mode=detail&id='.$unProduit->getIdProduit().'">Détail</a></div></div></div>
                        <div class="bouton"><a href="Index.php?codePage=details&categorie=produits&mode=delete&id='.$unProduit->getIdProduit().'">Supprimer</a></div></div></div>';
                    }
                    break;
                }
                case ('ventes'):
                    {
                        echo '<h2>Liste des Ventes</h2>';
                        echo '<div class = "colonne">
                        <div><div class="bouton"><a href="Index.php?codePage=details&categorie=ventes&mode=ajout">Ajouter</a></div>';
                        $tableau = VentesManager::getList();
                        foreach ($tableau as $uneVente) {
                            echo '<div>' . $uneVente->getIdVente().
                            '<div class="bouton"><a href="Index.php?codePage=details&categorie=ventes&mode=modif&id='.$uneVente->getIdVente().'">Modifier</a></div>
                            <div class="bouton"><a href="Index.php?codePage=details&categorie=ventes&mode=detail&id='.$uneVente->getIdVente().'">Détail</a></div></div></div>
                            <div class="bouton"><a href="Index.php?codePage=details&categorie=ventes&mode=delete&id='.$uneVente->getIdVente().'">Supprimer</a></div></div></div>';
                        }
                        break;
                    }

        }
    }

    echo '</div>';
}
else
{
    echo '<h1>Merci de Vous connectez ou vous inscrire pour acceder à cette partie du site';
}
