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
            case ('eleves'):
                {
                    $idRecu = $_GET['id'];
                    if ($idRecu != false) {
                        $idChoisi = ElevesManager::findById($idRecu);
                    }
                    break;
                }
            case ('notes'):
                {
                    $idRecu = $_GET['id'];
                    if ($idRecu != false) {
                        $idChoisi = SuivisManager::findById($idRecu);
                    }
                    break;
                }
            case ('matieres'):
                {
                    $idRecu = $_GET['id'];
                    if ($idRecu != false) {
                        $idChoisi = MatieresManager::findById($idRecu);
                    }
                    break;
                }
        }
    }

    switch ($categorie) {
        case ('users'):
            {             
                    switch ($mode) {
                        case "add":{
                                echo '<form action="index.php?codePage=actions&categorie=users&mode=add" method="POST">';
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
                ?>
            <div>
                <label for="NomUtilisateur">Nom</label>
                <input name="NomUtilisateur" <?php if ($mode != "add") {echo 'value="' . $idChoisi->getNomUtilisateur() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?>/>
            </div>
            <div class="espace"></div>
             <div>
             <label for="PrenomUtilisateur">Prenom</label>
             <input name="PrenomUtilisateur"  <?php if ($mode != "add") {echo 'value="' . $idChoisi->getPrenomUtilisateur() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?> />
             </div>
             <div class="espace"></div>
             <div>
                 <label for="PseudoUtilisateur">Pseudo</label>
                 <input name="PseudoUtilisateur" <?php if ($mode != "add") {echo 'value="' . $idChoisi->getLogin() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?> />
             </div>
             <div class="espace"></div>
             <div>
                 <label for="EmailUtilisateur">E-mail</label>
                 <input name="EmailUtilisateur" <?php if ($mode != "add") {echo 'value="' . $idChoisi->getEmailUtilisateur() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?>  />
             </div>
             <div>
                <label for="MotDePasseUtilisateur">Mot de passe</label>
                <input type="password" name="MotDePasseUtilisateur" <?php if ($mode != "add") {echo 'value="' . $idChoisi->getMotDePasseUtilisateur() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?>  />
             </div>
             <div>
                <label for="IdRole">Role</label>
                <input name="IdRole" <?php if ($mode != "add") {echo 'value="' . $idChoisi->getIdRole() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?>  />
             </div>
             <div></div>

             <?php
switch ($mode) {
                    case "add":
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
        case ('eleves'):
            {
                switch ($mode) {
                    case "add":{
                            echo '<form action="index.php?codePage=actions&categorie=repres&mode=add" method="POST">';
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
                <input name="NomRepres" <?php if ($mode != "add") {echo 'value="' . $idChoisi->getNomRepres() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?>/>
            </div>
            <div class="espace"></div>
             <div>
             <label for="VilleRepres">Ville</label>
             <input name="VilleRepres"  <?php if ($mode != "add") {echo 'value="' . $idChoisi->getVilleRepres() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?> />
             </div>
             <div></div>

             <?php
switch ($mode) {
                    case "add":
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
        case ('notes'):
            {
                switch ($mode) {
                    case "add":{
                            echo '<form action="index.php?codePage=actions&categorie=clients&mode=add" method="POST">';
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
                <input name="NomClient" <?php if ($mode != "add") {echo 'value="' . $idChoisi->getNomClient() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?>/>
            </div>
            <div class="espace"></div>
             <div>
             <label for="VilleClient">Prenom</label>
             <input name="VilleClient"  <?php if ($mode != "add") {echo 'value="' . $idChoisi->getVilleClient() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?> />
             </div>
             <div></div>

             <?php
switch ($mode) {
                    case "add":
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
        case ('matieres'):
            {
                switch ($mode) {
                    case "add":{
                            echo '<form action="index.php?codePage=actions&categorie=produits&mode=add" method="POST">';
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
                    <input name="NomProduit" <?php if ($mode != "add") {echo 'value="' . $idChoisi->getNomProduit() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?>/>
                </div>
                <div class="espace"></div>
                 <div>
                 <label for="CouleurProduit">Couleur</label>
                 <input name="CouleurProduit"  <?php if ($mode != "add") {echo 'value="' . $idChoisi->getCouleurProduit() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?> />
                 </div>
                 <div>
                 <label for="PoidsProduit">Poids</label>
                 <input name="PoidsProduit"  <?php if ($mode != "add") {echo 'value="' . $idChoisi->getPoidsProduit() . '"';}if ($mode == "delete" || $mode == "detail") {
                    echo 'disabled';
                }
                ?> />
                 </div>
                 <div></div>

                 <?php
switch ($mode) {
                    case "add":
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

    }

}
