<?php

class RolesManager
{
	public static function add(Roles $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Roles (LibelleRole) VALUES (:LibelleRole)");
		$q->bindValue(":LibelleRole", $obj->getLibelleRole());
		$q->execute();
	}

	public static function update(Roles $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Roles SET IdRole=:IdRole,LibelleRole=:LibelleRole WHERE IdRole=:IdRole");
		$q->bindValue(":IdRole", $obj->getIdRole());
		$q->bindValue(":LibelleRole", $obj->getLibelleRole());
		$q->execute();
	}
	public static function delete(Roles $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Roles WHERE IdRole=" .$obj->getIdRole());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Roles WHERE IdRole =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Roles($results);
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
		$q = $db->query("SELECT * FROM Roles");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Roles($donnees);
			}
		}
		return $liste;
	}

}