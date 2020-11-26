<?php
$mode = $_GET['mode'];

switch ($mode){
case "ajout" :
    {
        echo '<form action="index.php?CodePage=actionsGenres&mode=ajoutGenre" method="POST">';
        break;
    }
case "edit" :
    {
        echo '<form method="POST" >';
        break;
    }
case "modif" :
    {
        echo '<form action="index.php?CodePage=actionsGenres&mode=modifGenre" method="POST">';
    break;
    }
case "delete" :
    {
        echo '<form action="index.php?CodePage=actionsGenres&mode=delGenre" method="POST">';
    break;
    }

}

if (isset($_GET['id']))
{
$choix = GenresManager::findById($_GET['id']);
}
?>


    <?php if($mode != "ajout") echo  '<input name= "idRealisateur" value="'.$choix->getIdGenre().'"type= "hidden">';?>
    <div>
        <label for="libelleGenre">Nom : </label>
        <input name="libelleGenre" <?php if($mode != "ajout") echo 'value= "'.$choix->getLibelleGenre().'"';if($mode=="edit" || $mode=="delete") echo '" disabled'; ?>/>
    </div>
    <div>
        <label for="descGenre">E mail : </label>
        <input name="descGenre" <?php if($mode != "ajout") echo 'value= "'. $choix->getDescGenre().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled' ; ?>/>
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
    <button><a href="index.php?CodePage=listeGenres">Annuler</a></button>
</div>

</form>