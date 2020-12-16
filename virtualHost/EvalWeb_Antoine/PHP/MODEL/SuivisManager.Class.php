<?php

class SuivisManager
{
	public static function add(Suivis $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO suivis (IdMatiere,IdEleve,Note,Coefficient) VALUES (:IdMatiere,:IdEleve,:Note,:Coefficient)");
		$q->bindValue(":IdMatiere", $obj->getIdMatiere());
        $q->bindValue(":IdEleve", $obj->getIdEleve());
        $q->bindValue(":Note", $obj->getNote());
        $q->bindValue(":Coefficient", $obj->getCoefficient());
		$q->execute();
	}

	public static function update(Suivis $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE suivis SET IdSuivi=:IdSuivi,IdMatiere=:IdMatiere,IdEleve=:IdEleve,Note=:Note,Coefficient=:Coefficient WHERE IdSuivi=:IdSuivi");
		$q->bindValue(":IdSuivi", $obj->getIdSuivi());
		$q->bindValue(":IdMatiere", $obj->getIdMatiere());
        $q->bindValue(":IdEleve", $obj->getIdEleve());
        $q->bindValue(":Note", $obj->getNote());
        $q->bindValue(":Coefficient", $obj->getCoefficient());
		$q->execute();
	}
	public static function delete(Suivis $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM suivis WHERE IdSuivi=" .$obj->getIdSuivi());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM suivis WHERE IdSuivi =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Suivis($results);
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
		$q = $db->query("SELECT * FROM suivis");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Suivis($donnees);
			}
		}
		return $liste;
    }
    
    public static function getSuivisEleves($IdEleve)
	{
        $IdEleve=(int) $IdEleve;
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM suivis WHERE IdEleve = $IdEleve");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Eleves($donnees);
			}
		}
		return $liste;
    }
    
    public static function getSuivisMatieres($IdMatiere)
	{
        $IdMatiere=(int) $IdMatiere;
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM suivis WHERE IdMatiere = $IdMatiere");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Eleves($donnees);
			}
		}
		return $liste;
	}

}