<?php
include "personnes.Class.php";
try {   // execute les instructions et rpère les erreurs
    $db = new PDO('mysql:host=localhost;dbname=employes;charset=utf8', 'root', '');
}
catch (Exception $e) // si une erreur est levée, on agit en conséquence
{
    if ($e->getCode()==1049)
    {
        echo "Base de données indisponible";
        die();  // permet d'arrêter l'execution
    }
    else if ($e->getCode()==1045)   // erreur identification
    {
        echo "La connexion a échouée";
        die();
    }
    else{
        die('Erreur : ' . $e->getMessage());
    }
}

$requete=$db->query("SELECT `idPersonne`, `nom`, `prenom`, `age` FROM `employe` WHERE 1");  // $requete est un objet de type PDO_Statement
$reponse = $requete->fetch(PDO::FETCH_ASSOC);// demande a PDO de creer un objet de type personne
$pers = new Personne($reponse);// creation de l objet avec les infos recuperer par fetch
$pers->affichage();// utilisation de la fonction affichage