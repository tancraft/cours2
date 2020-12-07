<?php

class UtilisateursManager
{
	public static function add(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Utilisateurs (NomUtilisateur,PrenomUtilisateur,PseudoUtilisateur,MotDePasseUtilisateur,IdRole) VALUES (:NomUtilisateur,:PrenomUtilisateur,:PseudoUtilisateur,:MotDePasseUtilisateur,:IdRole)");
		$q->bindValue(":NomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":PrenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->bindValue(":PseudoUtilisateur", $obj->getPseudoUtilisateur());
        $q->bindValue(":MotDePasseUtilisateur", $obj->getMotDePasseUtilisateur());
        $q->bindValue(":IdRole", $obj->getIdRole());
		$q->execute();
	}

	public static function update(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Utilisateurs SET IdUtilisateur=:IdUtilisateur,NomUtilisateur=:NomUtilisateur,PrenomUtilisateur=:PrenomUtilisateur,PseudoUtilisateur=:PseudoUtilisateur,IdRole=:IdRole WHERE IdUtilisateur=:IdUtilisateur");
		$q->bindValue(":IdUtilisateur", $obj->getIdUtilisateur());
		$q->bindValue(":NomUtilisateur", $obj->getNomUtilisateur());
		$q->bindValue(":PrenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->bindValue(":PseudoUtilisateur", $obj->getPseudoUtilisateur());
        $q->bindValue(":MotDePasseUtilisateur", $obj->getMotDePasseUtilisateur());
        $q->bindValue(":IdRole", $obj->getIdRole());
		$q->execute();
	}
	public static function delete(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Utilisateurs WHERE IdUtilisateur=" .$obj->getIdUtilisateur());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Utilisateurs WHERE IdUtilisateur =".$id);
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
		$q = $db->query("SELECT * FROM Utilisateurs");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Utilisateurs($donnees);
			}
		}
		return $liste;
	}

}