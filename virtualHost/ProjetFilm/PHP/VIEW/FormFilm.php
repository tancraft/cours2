<?php
$mode = $_GET['mode'];

switch ($mode) 
{
    case "ajout":
        {
            echo '<form action="index.php?codePage=actionsFilms&mode=ajoutFilm" method="POST">';
            break;
        }
    case "edit":
        {
            echo '<form method="POST" >';
            break;
        }
    case "modif":
        {
            echo '<form action="index.php?codePage=actionsFilms&mode=modifFilm" method="POST">';
            break;
        }
    case "delete":
        {
            echo '<form action="index.php?codePage=actionsFilms&mode=delFilm" method="POST">';
            break;
        }

}

if (isset($_GET['id'])) 
{
    $choix = FilmsManager::findById($_GET['id']);    
}

function valeurStudio($mode)
{
    $choix = FilmsManager::findById($_GET['id']); 
    if (isset($_GET['id'])) 
    {
        $studio = StudiosManager::findById($choix->getIdGenre());
        $aff = '<select name="idStudio" id="idStudio"'; 
        if ($mode == "edit" || $mode == "delete") 
        {
            $aff .=' disabled><option value="' . $studio->getIdStudio() . '"' .$studio->getNomStudio() .'</option>';
        }
        else
        {
            $aff .= '>'.$studio->getNomStudio() .'</option>';
        }
        $aff .= '</select>';
    } 
    else 
    {
        $studios = StudiosManager::getList();
        foreach ($studios as $unStudio) 
        {
            $aff = '<select name="idStudio" value="' . $unStudio->getIdStudio() . '">' . $unStudio->getNomStudio() . '</option>';
        }
        $aff .= '</select>';
    }
    return $aff;
}

function valeurGenre($mode)
{
    $choix = FilmsManager::findById($_GET['id']); 
    if (isset($_GET['id'])) 
    {
        $genre = GenresManager::findById($choix->getIdGenre());
        $aff = '<select name="idGenre" id="idGenre"'; 
        if ($mode == "edit" || $mode == "delete") 
        {
            $aff .=' disabled><option value="' . $genre->getIdGenre() . '"' .$genre->getLibelleGenre() .'</option>';
        }
        else
        {
            $aff .= '>'.$genre->getLibelleGenre() .'</option>';
        }
        $aff .= '</select>';
    } 
    else 
    {
        $genres = GenresManager::getList();
        foreach ($genres as $unGenre) 
        {
            $aff = '<select name="idGenre"><option value="' . $unGenre->getIdGenre() . '">' . $unGenre->getLibelleGenre() . '</option></select>';
        }
    }
    return $aff;
}

?>


    <?php if ($mode != "ajout") 
    {
    echo '<input name= "idFilm" value="' . $choix->getIdFilm() . '"type= "hidden">';
    }
?>
    <div>
        <label for="nomFilm">Nom : </label>
        <input name="nomFilm" <?php if ($mode != "ajout") {
    echo 'value= "' . $choix->getNomFilm() . '"';
}
if ($mode == "edit" || $mode == "delete") 
{
    echo '" disabled';
}
?>/>
    </div>
    <div>
        <label for="dateFilm">Date du film : </label>
        <input type="date" name="dateFilm" <?php if ($mode != "ajout") {
    echo 'value= "' . $choix->getDateFilm() . '"';
}
if ($mode == "edit" || $mode == "delete") {
    echo '" disabled';
}
?>/>
    </div>
    <div>
        <label for="coutFilm">Cout du film : </label>
        <input name="coutFilm" <?php if ($mode != "ajout") {
    echo 'value= "' . $choix->getCoutFilm() . '"';
}
if ($mode == "edit" || $mode == "delete") {
    echo '" disabled';
}
?>/>
    </div>
    <div>
        <label for="dureeFilm">Duree du film (en minutes) : </label>
        <input name="dureeFilm" <?php if ($mode != "ajout") {
    echo 'value= "' . $choix->getDureeFilm() . '"';
}
if ($mode == "edit" || $mode == "delete") {
    echo '" disabled';
}
?>/>
    </div>
    <div>
        <label for="synopFilm">Synopsis du film : </label>
        <input name="synopFilm" <?php if ($mode != "ajout") {
    echo 'value= "' . $choix->getSynopFilm() . '"';
}
if ($mode == "edit" || $mode == "delete") {
    echo '" disabled';
}
?>/>
    </div>
    <div>
        <label for="idStudio">Studio du film : </label>
        <?php echo valeurStudio($mode); ?>
    </div>

    <div>
        <label for="idGenre">Genre du film : </label>
        <?php echo valeurGenre($mode); ?>
    </div>

<?php
// en fonction du mode, on affiche les boutons utiles
switch ($mode) {
    case "ajout":
        {
            echo '<div><button type="submit" value="Ajouter">Ajouter</button>';
            break;
        }
    case "modif":
        {
            echo '<div><button type="submit" value="Modifier">Modifier</button>';
            break;
        }
    case "delete":
        {
            echo '<div><button type="submit" value="Supprimer">Effacer</button>';
            break;
        }

    default:
        {
            echo '<div>';
        }
}
// dans tous les cas, on met le bouton annuler
?>
    <button><a href="index.php?codePage=listeActeurs">Annuler</a></button>
</div>

</form>
