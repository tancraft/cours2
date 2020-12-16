<?php

class Eleves
{
	/*****************Attributs***************** */
	private $_IdEleve;
	private $_NomEleve;
	private $_PrenomEleve;
	private $_Classe;
	/*****************Accesseurs***************** */
	public function getIdEleve()
	{
		return $this->_IdEleve;
	}

	public function setIdEleve($IdEleve)
	{
		return $this->_IdEleve = $IdEleve;
	}

	public function getNomEleve()
	{
		return $this->_NomEleve;
	}

	public function setNomEleve($NomEleve)
	{
		return $this->_NomEleve = $NomEleve;
	}

	public function getPrenomEleve()
	{
		return $this->_PrenomEleve;
	}

	public function setPrenomEleve($PrenomEleve)
	{
		return $this->_PrenomEleve = $PrenomEleve;
	}

	public function getClasse()
	{
		return $this->_Classe;
	}

	public function setClasse($Classe)
	{
		return $this->_Classe = $Classe;
	}

	/*****************Constructeur***************** */

	 public function __construct(array $options = [])
	{		if (!empty($options)) // empty : renvoi vrai si le tableau est vide
		{
			$this->hydrate($options);
		 }
	}
	public function hydrate($data)
	{
		foreach ($data as $key => $value)
		{
			$methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
			if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
			{
				$this->$methode($value);
			}
		}
	}

	/*****************Autres Méthodes***************** */
	/**
	* Transforme l objet en chaine de caractères
	*
	* @return String
	*/
	public function toString()
	{
		return "IdEleve : ".$this->getIdEleve()."NomEleve : ".$this->getNomEleve()."PrenomEleve : ".$this->getPrenomEleve()."Classe : ".$this->getClasse();	
}

}