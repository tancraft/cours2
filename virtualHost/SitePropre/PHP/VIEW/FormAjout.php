

<?php

echo '<form action="index.php?code=ajoutBDD" method="post">
    <div>
        <label for="nom">Libelle : </label> 
        <input name="libelleProduit">
    </div>
    <div>
        <label for="nom">Prix : </label> 
        <input name="prix">
    </div>
    <div>
        <label for="nom">Date de Peremption : </label> 
        <input name="dateDePeremption">
    </div>
    <div> 
        <button type="submit">Ajouter</button>
        <button type="reset"><a href="index.php">Annuler</a></button>
    </div>';
    ?>