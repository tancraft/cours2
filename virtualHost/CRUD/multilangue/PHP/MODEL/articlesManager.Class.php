<?php

class ArticlesManager 
{
	public static function add(Articles $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO articles (codeTexte,codeLangue,Texte) VALUES (:codeTexte,:codeLangue,:Texte)");
		$q->bindValue(":codeTexte", $obj->getCodeTexte());
		$q->bindValue(":codeLangue", $obj->getCodeLangue());
		$q->bindValue(":Texte", $obj->getTexte());
		$q->execute();
	}

	public static function update(Articles $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE articles SET idTexte=:idTexte,codeTexte=:codeTexte,codeLangue=:codeLangue,Texte=:Texte WHERE idTexte=:idTexte");
		$q->bindValue(":idTexte", $obj->getIdTexte());
		$q->bindValue(":codeTexte", $obj->getCodeTexte());
		$q->bindValue(":codeLangue", $obj->getCodeLangue());
		$q->bindValue(":Texte", $obj->getTexte());
		$q->execute();
	}
	public static function delete(Articles $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM articles WHERE idTexte=" .$obj->getIdTexte());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM articles WHERE idTexte =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Articles($results);
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
		$q = $db->query("SELECT * FROM articles");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Articles($donnees);
			}
		}
		return $liste;
	}

	public static function findByCodes($codeLangue,$codeTexte)
	{
		$db=DbConnect::getDb();
		$q=$db->prepare("SELECT texte FROM articles WHERE codeTexte =:codeTexte and codeLangue = :codeLangue");
		$q->bindValue(":codeTexte", $codeTexte,PDO::PARAM_STR);
		$q->bindValue(":codeLangue", $codeLangue,PDO::PARAM_STR);
		$q->execute();
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			
			return $results['texte'];  // on ne retourne que le texte, pas un objet
		}
		else
		{
			return false;
		}
	}


}