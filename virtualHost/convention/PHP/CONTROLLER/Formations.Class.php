<?php

class Formations 
{

	/*****************Attributs***************** */

	private $_idFormation;
	private $_libelleFormation;
	private $_grn;
	private $_finaliteFormation;

	/***************** Accesseurs ***************** */


	public function getIdFormation()
	{
		return $this->_idFormation;
	}

	public function setIdFormation($idFormation)
	{
		$this->_idFormation=$idFormation;
	}

	public function getLibelleFormation()
	{
		return $this->_libelleFormation;
	}

	public function setLibelleFormation($libelleFormation)
	{
		$this->_libelleFormation=$libelleFormation;
	}

	public function getGrn()
	{
		return $this->_grn;
	}

	public function setGrn($grn)
	{
		$this->_grn = $grn;
	}

	public function getFinaliteFormation()
	{
		return $this->_finaliteFormation;
	}

	public function setFinaliteFormation($finaliteFormation)
	{
		$this->_finaliteFormation = $finaliteFormation;
	}

	/*****************Constructeur***************** */

	public function __construct(array $options = [])
	{
 		if (!empty($options)) // empty : renvoi vrai si le tableau est vide
		{
			$this->hydrate($options);
		}
	}
	public function hydrate($data)
	{
 		foreach ($data as $key => $value)
		{
 			$methode = "set".ucfirst($key); //ucfirst met la 1ere lettre en majuscule
			if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
			{
				$this->$methode($value);
			}
		}
	}

	/*****************Autres Méthodes***************** */

	/**
	* Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function toString()
	{
		return "IdFormation : ".$this->getIdFormation()."LibelleFormation : ".$this->getLibelleFormation()."\n";
	}


	
	/* Renvoit Vrai si lobjet en paramètre est égal 
	* à l'objet appelant
	*
	* @param [type] $obj
	* @return bool
	*/
	public function equalsTo($obj)
	{
		return;
	}


	/**
	* Compare l'objet à un autre
	* Renvoi 1 si le 1er est >
	*        0 si ils sont égaux
	*      - 1 si le 1er est <
	*
	* @param [type] $obj1
	* @param [type] $obj2
	* @return Integer
	*/
	public function compareTo($obj)
	{
		return;
	}

}