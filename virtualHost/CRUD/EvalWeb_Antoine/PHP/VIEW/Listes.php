<?php

$mode = $_GET['mode'];

if (isset($_SESSION['utilisateur'])) 
{
    $idMat = $_SESSION['utilisateur']->getIdMatiere();
    $matiere = MatieresManager::findById($idMat);

    switch ($mode) 
    {
        case ('eleves'):
            {
                echo '<div class="colonne">
                <div class="bouton"><a href="Index.php?codePage=details&categorie=eleves&mode=add">Ajouter un élève</a></div>';
                $tableau = ElevesManager::getList();
                foreach ($tableau as $unEleve) {
                    echo '<div>'.$unEleve->getNomEleve().' '.$unEleve->getPreNomEleve().' '.$unEleve->getClasse().
                    '<div class="bouton"><a href="Index.php?codePage=details&categorie=eleves&mode=modif&id='.$unEleve->getIdEleve().'">Modifier</a></div>
                    <div class="bouton"><a href="Index.php?codePage=details&categorie=eleves&mode=delete&id='.$unEleve->getIdEleve().'">Supprimer</a></div></div>';
                }
                break;
            }
        case ('users'):
            {
                echo '<div class="colonne">
                <div class="bouton"><a href="Index.php?codePage=details&categorie=users&mode=add">Ajouter un enseignant</a></div>';
                $tableau = UtilisateursManager::getList();
                foreach ($tableau as $unProf) {
                    $prof= MatieresManager::findById($unProf->getIdMatiere());
                    echo '<div>'.$prof->getLibelleMatiere(). $unProf->getLogin().' '. $unProf->getNomUtilisateur().' '.$unProf->getPrenomUtilisateur(). 
                    '<div class="bouton"><a href="Index.php?codePage=details&categorie=users&mode=modif&id='.$unProf->getIdUtilisateur().'">Modifier</a></div>
                    <div class="bouton"><a href="Index.php?codePage=details&categorie=users&mode=delete&id='.$unProf->getIdUtilisateur().'">Supprimer</a></div></div>';
                }
                break;
            }
        case ('notes'):
            {
                echo '<div class="colonne">
                <div class="bouton"><a href="Index.php?codePage=details&categorie=suivis&mode=add">Ajouter</a></div>';
                $tableau = SuivisManager::getList();
                foreach ($tableau as $unsuivi) {
                    $eleve = ElevesManager::findById($unsuivi->getIdEleve());
                    echo '<div>'.$eleve->getNomEleve().' '.$eleve->getPrenomEleve().' '. $unsuivi->getNote().
                    '<div class="bouton"><a href="Index.php?codePage=details&categorie=suivis&mode=modif&id='.$unsuivi->getIdSuivi().'">Modifier</a></div>
                    <div class="bouton"><a href="Index.php?codePage=details&categorie=suivis&mode=delete&id='.$unsuivi->getIdSuivi().'">Supprimer</a></div></div>';
                }
                break;
            }
            case ('matieres'):
                {
                    echo '<div class="colonne">
                        <div class="bouton"><a href="Index.php?codePage=details&categorie=matieres&mode=add">Ajouter</a></div>';
                    $tableau = MatieresManager::getList();
                    foreach ($tableau as $uneMatiere) {
                        echo '<div>' .$uneMatiere->getLibelleMatiere().
                        '<div class="bouton"><a href="Index.php?codePage=details&categorie=matieres&mode=modif&id='.$uneMatiere->getIdMatiere().'">Modifier</a></div>
                        <div class="bouton"><a href="Index.php?codePage=details&categorie=matieres&mode=delete&id='.$uneMatiere->getIdMatiere().'">Supprimer</a></div></div>';
                    }
                    break;
                }

    }
    echo '<button><a href="Index.php?codePage=interface">Retour</a></button>';
}
else
{
    $sousTitre = '<h3>Au revoir</h3>';
    echo 'comment etes vous arrivez ici ??';
    header("refresh:3;url=Index.php?codePage=accueil");
}