<?php
$mode = $_GET['mode'];

switch ($mode){
case "ajout" :
    {
        echo '<form action="index.php?code=actionProduit&mode=ajoutProduit" method="POST">';
        break;
    }
case "edit" :
    {
        echo '<form method="POST" >';
        break;
    }
case "modif" :
    {
        echo '<form action="index.php?code=actionProduit&mode=modifProduit" method="POST">';
    break;
    }
case "delete" :
    {
        echo '<form action="index.php?code=actionProduit&mode=delProduit" method="POST">';
    break;
    }

}

if (isset($_GET['id']))
{
$choix = ProduitsManager::findById($_GET['id']);
var_dump($choix);
}
?>


    <input name= "idProduit" value="<?php if($mode != "ajout") echo $choix->getIdProduit(); ?>" type= "hidden">
    <div>
        <label for="libelleProduit">Libelle : </label>
        <input name="libelleProduit" <?php if($mode != "ajout") echo 'value= "'.$choix->getLibelleProduit().'"';if($mode=="edit" || $mode=="delete") echo '" disabled'; ?>/>
    </div>
    <div>
        <label for="prix">Prix : </label>
        <input name="prix" <?php if($mode != "ajout") echo 'value= "'.$choix->getPrix().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled'; ?>/>
    </div>
    <div>
        <label for="dateDePeremption">Date de Peremption : </label>
        <input name="dateDePeremption" <?php if($mode != "ajout") echo 'value= "'. $choix->getDateDePeremption().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled' ; ?>/>
    </div>
<?php 
// en fonction du mode, on affiche les boutons utils
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
    <button><a href="index.php?code=listeProduits">Annuler</a></button>
</div>

</form>
</form>