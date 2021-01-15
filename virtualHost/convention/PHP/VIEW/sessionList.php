<?php

                    echo '<section class = "colonne"><h2>Liste des sessions</h2>
                    <div><button class="bouton"><i class="fas fa-plus-circle"></i><a href="Index.php?codePage=details&categorie=repres&mode=ajout"> Ajouter</a></div><div></div>';
                    $tableau = SessionformationManager::getList();
                    foreach ($tableau as $uneSession) {
                        $formation = FormationsManager::findById($uneSession->getIdFormation());
                        echo '<div class="list"><div class="case"> '.$uneSession->getObjectifPAE().'</div><div class="case"> '.$uneSession->getDateRapportSuivi().'</div><div> '.substr($formation->getLibelleFormation(),0,-12).'</div>'.
                        '<div><button class="bouton"><i class="fas fa-edit"></i><a href="Index.php?codePage=details&categorie=repres&mode=modif&id='.$uneSession->getIdSessionFormation().'"> Modifier</a></button>
                        <button class="bouton"><i class="fas fa-info-circle"></i><a href="Index.php?codePage=details&categorie=repres&mode=detail&id='.$uneSession->getIdSessionFormation().'"> Détail</a></button>
                        <button class="bouton"><i class="fas fa-trash-alt"></i><a href="Index.php?codePage=details&categorie=repres&mode=delete&id='.$uneSession->getIdSessionFormation().'"> Supprimer</a></button></div></div>';
                    }
                    echo '</section>';