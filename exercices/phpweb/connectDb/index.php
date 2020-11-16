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

// $requete=$db->query("select `idpersonne`, `nom`, `prenom`, `age` from `employe` where 1");  // $requete est un objet de type pdo_statement
// $reponse = $requete->fetch(pdo::fetch_assoc);// demande a pdo de creer un objet de type personne
// $pers = new personne($reponse);// creation de l objet avec les infos recuperer par fetch
// $pers->affichage();// utilisation de la fonction affichage


// // $requete est la variable pour notre requete $db signifie base de donnees utiliser $personnes est le nom de la table
// $requete = $db->query("SELECT idPersonne, nom, prenom, age FROM employe"); // $requete est un objet de type PDO_Statement
// while ($donnees = $requete->fetch(PDO::FETCH_ASSOC)) // le while permet de boucler sur les enregistrements
// // il s'arrete quand fetch renvoi false
// {
//     var_dump($donnees);
//     $personnes[] = new Personne($donnees);
// }

// var_dump($personnes);

// $q = $db->exec('INSERT INTO employe(nom, prenom, age) VALUES("Durand","Thibault",20)');
// //$q contient le nombre de ligne impactée ou false si la requete a echouée
// var_dump($q);

//on crée un objet
$perso = new Personne(["nom"=>"Dupond","prenom"=>"Gilles","age"=>21]);

//on prepare la requete
// :nom est une variable SQL
$q = $db->prepare('INSERT INTO employe(nom, prenom, age) VALUES(:nom, :prenom, :age)');

// Assignation des valeurs pour le nom, le pr�nom.
$q->bindValue(':nom', $perso->getNom());
$q->bindValue(':prenom', $perso->getPrenom());
$q->bindValue(':age', $perso->getAge());

// Execution de la requete.
$reponse = $q->execute();
var_dump($reponse);