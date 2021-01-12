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
$choix = ClientsManager::findById($_GET['id']);
var_dump($choix);
}
?>


    <input name= "idClient" value="<?php if($mode != "ajout") echo $choix->getIdClient(); ?>" type= "hidden">
    <div>
        <label for="nomClient">Nom : </label>
        <input name="nomClient" <?php if($mode != "ajout") echo 'value= "'.$choix->getNomClient().'"';if($mode=="edit" || $mode=="delete") echo '" disabled'; ?>/>
    </div>
    <div>
        <label for="prenomClient">Prenom : </label>
        <input name="prenomClient" <?php if($mode != "ajout") echo 'value= "'.$choix->getPrenomClient().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled'; ?>/>
    </div>
    <div>
        <label for="emailClient">E mail : </label>
        <input name="emailClient" <?php if($mode != "ajout") echo 'value= "'. $choix->getEmailClient().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled' ; ?>/>
    </div>
    <div>
        <label for="motDePasseClient">Mot de passe : </label>
        <input name="motDePasseClient" <?php if($mode != "ajout") echo 'value= "'. $choix->getMotDePasseClient().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled' ; ?>/>
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
    <button><a href="index.php?code=listeClients">Annuler</a></button>
</div>

</form>
</form>