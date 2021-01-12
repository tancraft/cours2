<?php
$id = $_GET['id'];
$choix = ProduitsManager::findById($id);
?>

<form action="index.php?code=formModifierBDD" method="POST">
    <input name= "idProduit" value="<?php echo $choix->getIdProduit(); ?>" type= "hidden">
    <div>
        <label for="libelleProduit">Libelle : </label>
        <input name="libelleProduit" value="<?php echo $choix->getLibelleProduit(); ?>"/>
    </div>
    <div>
        <label for="prix">Prix : </label>
        <input name="prix" value="<?php echo $choix->getPrix(); ?>"/>
    </div>
    <div>
        <label for="dateDePeremption">Date de Peremption : </label>
        <input name="dateDePeremption" value="<?php echo $choix->getDateDePeremption(); ?>"/>
    </div>
    <button type="submit">Modifier</button>
<button><a href="index.php?code=liste">Annuler</a></button>
</form>