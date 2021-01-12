<?php


$np = new Produits(["libelleProduit" => $_POST["libelleProduit"], "prix" =>intval($_POST["prix"]), "dateDePeremption" => $_POST["dateDePeremption"]]);
/* on peut simplifier l'écriture car $_POST est un tableau associatif. Les clés sont les name du formulaire. */
// $p = new Produits($_POST);
ProduitsManager::add($np);

header("location: index.php?code=liste");

?>
