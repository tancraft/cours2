<?php
if (isset($_SESSION['utilisateur'])) {
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

    switch ($categorie) {
        case ('users'):
            {
                if ($_SESSION['utilisateur']->getIdRole() == 1 && $categorie == 'users') {
                    switch ($mode) {
                        case "ajout":{
                                echo '<form action="index.php?codePage=actions&categorie=users&mode=ajout" method="POST">';
                                break;
                            }
                        case "modif":{
                                echo '<form action="index.php?codePage=actions&categorie=users&mode=modif&id=' . $idChoisi->getIdUtilisateur() . '" method="POST">
                        <input name="IdUtilisateur"  value="' . $idChoisi->getIdUtilisateur() . '" type="hidden" />';
                                break;
                            }
                        case "delete":{
                                echo '<form action="index.php?codePage=actions&categorie=users&mode=delete&id=' . $idChoisi->getIdUtilisateur() . '" method="POST">
                        <input name="IdUtilisateur"  value="' . $idChoisi->getIdUtilisateur() . '" type="hidden" />';
                                break;
                            }
                        case "detail":{
                                echo '<form >
                    <input name="IdUtilisateur"  value="' . $idChoisi->getIdUtilisateur() . '" type="hidden" />';
                                break;
                            }
                    }
                } else {
                    echo '<h1>Vou n\'avez rien a faire ici</h1>';
                }
                ?>
            <div>
                <label for="NomUtilisateur">Nom</label>
                <input name="NomUtilisateur" <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getNomUtilisateur() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?>/>
            </div>
            <div class="espace"></div>
             <div>
             <label for="PrenomUtilisateur">Prenom</label>
             <input name="PrenomUtilisateur"  <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getPrenomUtilisateur() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?> />
             </div>
             <div class="espace"></div>
             <div>
                 <label for="PseudoUtilisateur">Pseudo</label>
                 <input name="PseudoUtilisateur" <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getPseudoUtilisateur() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?> />
             </div>
             <div class="espace"></div>
             <div>
                 <label for="EmailUtilisateur">E-mail</label>
                 <input name="EmailUtilisateur" <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getEmailUtilisateur() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?>  />
             </div>
             <div>
                <label for="MotDePasseUtilisateur">Mot de passe</label>
                <input type="password" name="MotDePasseUtilisateur" <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getMotDePasseUtilisateur() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?>  />
             </div>
             <div>
                <label for="IdRole">Role</label>
                <input name="IdRole" <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getIdRole() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?>  />
             </div>
             <div></div>

             <?php
switch ($mode) {
                    case "ajout":
                        {
                            echo '    <button type="submit">Ajouter un utilisateur</button>';
                            break;
                        }
                    case "modif":
                        {
                            echo '    <button type="submit">Modifier l\'utilisateur</button>';
                            break;
                        }
                    case "delete":
                        {
                            echo '    <button type="submit">Supprimer l\'utilisateur</button>';
                            break;
                        }
                }
                echo '<button><a href="Index.php?codePage=listes&mode=users">Retour</a></button>
             </form>';
                break;
            }
        case ('repres'):
            {
                switch ($mode) {
                    case "ajout":{
                            echo '<form action="index.php?codePage=actions&categorie=repres&mode=ajout" method="POST">';
                            break;
                        }
                    case "modif":{
                            echo '<form action="index.php?codePage=actions&categorie=repres&mode=modif&id=' . $idChoisi->getIdRepres() . '" method="POST">
                    <input name="IdRepres"  value="' . $idChoisi->getIdRepres() . '" type="hidden" />';
                            break;
                        }
                    case "delete":{
                            echo '<form action="index.php?codePage=actions&categorie=repres&mode=delete&id=' . $idChoisi->getIdRepres() . '" method="POST">
                    <input name="IdRepres"  value="' . $idChoisi->getIdRepres() . '" type="hidden" />';
                            break;
                        }
                    case "detail":{
                            echo '<form >
                <input name="IdRepres"  value="' . $idChoisi->getIdRepres() . '" type="hidden" />';
                            break;
                        }
                }
                ?>
            <div>
                <label for="NomRepres">Nom</label>
                <input name="NomRepres" <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getNomRepres() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?>/>
            </div>
            <div class="espace"></div>
             <div>
             <label for="VilleRepres">Ville</label>
             <input name="VilleRepres"  <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getVilleRepres() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?> />
             </div>
             <div></div>

             <?php
switch ($mode) {
                    case "ajout":
                        {
                            echo '    <button type="submit">Ajouter un représentant</button>';
                            break;
                        }
                    case "modif":
                        {
                            echo '    <button type="submit">Modifier le représentant</button>';
                            break;
                        }
                    case "delete":
                        {
                            echo '    <button type="submit">Supprimer le représentant</button>';
                            break;
                        }
                }
                echo '<button><a href="Index.php?codePage=listes&mode=repres">Retour</a></button>
                      </form>';
                break;
            }
        case ('clients'):
            {
                switch ($mode) {
                    case "ajout":{
                            echo '<form action="index.php?codePage=actions&categorie=clients&mode=ajout" method="POST">';
                            break;
                        }
                    case "modif":{
                            echo '<form action="index.php?codePage=actions&categorie=clients&mode=modif&id=' . $idChoisi->getIdClient() . '" method="POST">
                    <input name="IdClient"  value="' . $idChoisi->getIdClient() . '" type="hidden" />';
                            break;
                        }
                    case "delete":{
                            echo '<form action="index.php?codePage=actions&categorie=clients&mode=delete&id=' . $idChoisi->getIdClient() . '" method="POST">
                    <input name="IdClient"  value="' . $idChoisi->getIdClient() . '" type="hidden" />';
                            break;
                        }
                    case "detail":{
                            echo '<form >
                <input name="IdClient"  value="' . $idChoisi->getIdClient() . '" type="hidden" />';
                            break;
                        }
                }
                ?>
            <div>
                <label for="NomClient">Nom</label>
                <input name="NomClient" <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getNomClient() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?>/>
            </div>
            <div class="espace"></div>
             <div>
             <label for="VilleClient">Prenom</label>
             <input name="VilleClient"  <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getVilleClient() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?> />
             </div>
             <div></div>

             <?php
switch ($mode) {
                    case "ajout":
                        {
                            echo '    <button type="submit">Ajouter un client</button>';
                            break;
                        }
                    case "modif":
                        {
                            echo '    <button type="submit">Modifier le client</button>';
                            break;
                        }
                    case "delete":
                        {
                            echo '    <button type="submit">Supprimer le client</button>';
                            break;
                        }
                }
                echo '<button><a href="Index.php?codePage=listes&mode=clients">Retour</a></button>
                          </form>';
                break;
            }
        case ('produits'):
            {
                switch ($mode) {
                    case "ajout":{
                            echo '<form action="index.php?codePage=actions&categorie=produits&mode=ajout" method="POST">';
                            break;
                        }
                    case "modif":{
                            echo '<form action="index.php?codePage=actions&categorie=produits&mode=modif&id=' . $idChoisi->getIdProduit() . '" method="POST">
                    <input name="IdProduit"  value="' . $idChoisi->getIdProduit() . '" type="hidden" />';
                            break;
                        }
                    case "delete":{
                            echo '<form action="index.php?codePage=actions&categorie=produits&mode=delete&id=' . $idChoisi->getIdProduit() . '" method="POST">
                    <input name="IdProduit"  value="' . $idChoisi->getIdProduit() . '" type="hidden" />';
                            break;
                        }
                    case "detail":{
                            echo '<form >
                <input name="IdProduit"  value="' . $idChoisi->getIdProduit() . '" type="hidden" />';
                            break;
                        }
                }
                ?>
                <div>
                    <label for="NomProduit">Nom du produit</label>
                    <input name="NomProduit" <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getNomProduit() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?>/>
                </div>
                <div class="espace"></div>
                 <div>
                 <label for="CouleurProduit">Couleur</label>
                 <input name="CouleurProduit"  <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getCouleurProduit() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?> />
                 </div>
                 <div>
                 <label for="PoidsProduit">Poids</label>
                 <input name="PoidsProduit"  <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getPoidsProduit() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?> />
                 </div>
                 <div></div>

                 <?php
switch ($mode) {
                    case "ajout":
                        {
                            echo '    <button type="submit">Ajouter un produit</button>';
                            break;
                        }
                    case "modif":
                        {
                            echo '    <button type="submit">Modifier le produit</button>';
                            break;
                        }
                    case "delete":
                        {
                            echo '    <button type="submit">Supprimer le produit</button>';
                            break;
                        }
                }
                echo '<button><a href="Index.php?codePage=listes&mode=produits">Retour</a></button>
                                      </form>';
                break;
            }
        case ('ventes'):
            {
                switch ($mode) {
                    case "ajout":{
                            echo '<form action="index.php?codePage=actions&categorie=ventes&mode=ajout" method="POST">';
                            break;
                        }
                    case "modif":{
                            echo '<form action="index.php?codePage=actions&categorie=ventes&mode=modif&id=' . $idChoisi->getIdVente() . '" method="POST">
                    <input name="IdVente"  value="' . $idChoisi->getIdVente() . '" type="hidden" />';
                            break;
                        }
                    case "delete":{
                            echo '<form action="index.php?codePage=actions&categorie=ventes&mode=delete&id=' . $idChoisi->getIdVente() . '" method="POST">
                    <input name="IdVente"  value="' . $idChoisi->getIdVente() . '" type="hidden" />';
                            break;
                        }
                    case "detail":{
                            echo '<form >
                <input name="IdVente"  value="' . $idChoisi->getIdVente() . '" type="hidden" />';
                            break;
                        }
                }
                ?>
                <div>
                    <label for="IdRepres">Id du representant</label>
                    <input name="IdRepres" <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getIdRepres() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?>/>
                </div>
                <div class="espace"></div>
                 <div>
                 <label for="IdProduit">Id du produit</label>
                 <input name="IdProduit"  <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getIdProduit() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?> />
                 </div>
                 <div>
                 <label for="IdClient">Id du client</label>
                 <input name="IdClient"  <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getIdClient() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?> />
                 </div>
                 <div>
                 <label for="Quantite">Quantité</label>
                 <input name="Quantite"  <?php if ($mode != "ajout") {echo 'value="' . $idChoisi->getQuantite() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?> />
                 </div>
                 <div></div>

                 <?php
switch ($mode) {
                    case "ajout":
                        {
                            echo '    <button type="submit">Ajouter une vente</button>';
                            break;
                        }
                    case "modif":
                        {
                            echo '    <button type="submit">Modifier la vente</button>';
                            break;
                        }
                    case "delete":
                        {
                            echo '    <button type="submit">Supprimer la vente</button>';
                            break;
                        }
                }
                echo '<button><a href="Index.php?codePage=listes&mode=ventes">Retour</a></button>
                                                      </form>';
                break;
            }

    }

} else {

    ?>
<form action="index.php?codePage=actions&categorie=new&mode=inscript" method="POST">
<div>
    <label for="NomUtilisateur">Nom</label>
    <input type="text"  name="NomUtilisateur" required />
</div>
<div>
    <label for="PrenomUtilisateur">Prenom</label>
    <input type="text" name="PrenomUtilisateur" required />
</div>
<div>
    <label for="PseudoUtilisateur">Pseudo</label>
    <input type="text" name="PseudoUtilisateur" required />
</div>
<div>
    <label for="EmailUtilisateur">E mail</label>
    <input type="text" name="EmailUtilisateur" required />
</div>
<div>
    <label for="MotDePasseUtilisateur">mot De Passe</label>
    <input type="password" name="MotDePasseUtilisateur" required />
</div>
<div>
    <label for="confirmation">Confirmation du mot de passe</label>
    <input type="password" name="confirmation" required />
</div>
<div>
    <input name="IdRole" value="2" type="hidden" />
</div>
<button type="submit">Valider</button>
<button><a href="index.php?codePage=accueil">Accueil</a></button>
</form>
    <?php
}

?>
