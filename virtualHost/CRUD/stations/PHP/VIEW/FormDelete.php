<?php
$id = $_GET['id'];
$suppr = ProduitsManager::findById($id);
?>

<form action="index.php?code=formDeleteBDD" method="POST">
    <input name= "idProduit" value="<?php echo $suppr->getIdProduit(); ?>" type= "hidden">
    <div>
        <label for="libelleProduit">Libelle : </label>
        <input name="libelleProduit" value="<?php echo $suppr->getLibelleProduit(); ?>"/>
    </div>
    <div>
        <label for="prix">Prix : </label>
        <input name="prix" value="<?php echo $suppr->getPrix(); ?>"/>
    </div>
    <div>
        <label for="dateDePeremption">Date de Peremption : </label>
        <input name="dateDePeremption" value="<?php echo $suppr->getDateDePeremption(); ?>"/>
    </div>
    <button type="submit">Supprimer</button>
<button><a href="index.php?code=liste">Annuler</a></button>
</form>