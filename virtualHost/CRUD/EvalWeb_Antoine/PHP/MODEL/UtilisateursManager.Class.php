<?php

class UtilisateursManager
{
	public static function add(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO utilisateurs (Login,NomUtilisateur,PrenomUtilisateur,MotDePasse,Role,IdMatiere) VALUES (:Login,:NomUtilisateur,:PrenomUtilisateur,:MotDePasse,:Role,:IdMatiere)");
		$q->bindValue(":Login", $obj->getLogin());
        $q->bindValue(":NomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":PrenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->bindValue(":MotDePasse", $obj->getMotDePasse());
        $q->bindValue(":Role", $obj->getRole());
        $q->bindValue(":IdMatiere", $obj->getIdMatiere());
		$q->execute();
	}

	public static function update(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE utilisateurs SET IdUtilisateur=:IdUtilisateur,Login=:Login,NomUtilisateur=:NomUtilisateur,PrenomUtilisateur=:PrenomUtilisateur,MotDePasse=:MotDePasse,Role=:Role,IdMatiere=:IdMatiere WHERE IdUtilisateur=:IdUtilisateur");
		$q->bindValue(":IdUtilisateur", $obj->getIdUtilisateur());
		$q->bindValue(":Login", $obj->getLogin());
        $q->bindValue(":NomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":PrenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->bindValue(":MotDePasse", $obj->getMotDePasse());
        $q->bindValue(":Role", $obj->getRole());
        $q->bindValue(":IdMatiere", $obj->getIdMatiere());
		$q->execute();
	}
	public static function delete(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM utilisateurs WHERE IdUtilisateur=" .$obj->getIdUtilisateur());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM utilisateurs WHERE IdUtilisateur=".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Utilisateurs($results);
		}
		else
		{
			return false;
		}
	}
	public static function getList()
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM utilisateurs");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Utilisateurs($donnees);
			}
		}
		return $liste;
    }
    
	public static function findPseudo($Login)
	{
		 $db=DbConnect::getDb();
		 if (!in_array(";",str_split( $Login))) 
		 {
			 $q = $db->query("SELECT * FROM utilisateurs WHERE Login ='" . $Login . "'");
			 $results = $q->fetch(PDO::FETCH_ASSOC);
			 if ($results != false)
			 {
				 return new Utilisateurs($results);
			 }
			 else
			 {
				 return false;
			 }}
		 else
		 {
			 return false;
		 }
	}
}