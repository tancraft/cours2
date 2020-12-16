<?php

class MatieresManager
{
	public static function add(Matieres $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO matieres (LibelleMatiere) VALUES (:LibelleMatiere)");
		$q->bindValue(":LibelleMatiere", $obj->getLibelleMatiere());
		$q->execute();
	}

	public static function update(Matieres $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE matieres SET IdMatiere=:IdMatiere,LibelleMatiere=:LibelleMatiere WHERE IdMatiere=:IdMatiere");
		$q->bindValue(":IdMatiere", $obj->getIdMatiere());
		$q->bindValue(":LibelleMatiere", $obj->getLibelleMatiere());
		$q->execute();
	}
	public static function delete(Matieres $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM matieres WHERE IdMatiere=" .$obj->getIdMatiere());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM matieres WHERE IdMatiere =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Matieres($results);
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
		$q = $db->query("SELECT * FROM matieres");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Matieres($donnees);
			}
		}
		return $liste;
    }
    

}