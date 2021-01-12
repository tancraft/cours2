<?php

class Suivis
{
	/*****************Attributs***************** */
	private $_IdSuivi;
	private $_IdMatiere;
	private $_IdEleve;
	private $_Note;
	private $_Coefficient;
	/*****************Accesseurs***************** */
	public function getIdSuivi()
	{
		return $this->_IdSuivi;
	}

	public function setIdSuivi($IdSuivi)
	{
		return $this->_IdSuivi = $IdSuivi;
	}

	public function getIdMatiere()
	{
		return $this->_IdMatiere;
	}

	public function setIdMatiere($IdMatiere)
	{
		return $this->_IdMatiere = $IdMatiere;
	}

	public function getIdEleve()
	{
		return $this->_IdEleve;
	}

	public function setIdEleve($IdEleve)
	{
		return $this->_IdEleve = $IdEleve;
	}

	public function getNote()
	{
		return $this->_Note;
	}

	public function setNote($Note)
	{
		return $this->_Note = $Note;
	}

	public function getCoefficient()
	{
		return $this->_Coefficient;
	}

	public function setCoefficient($Coefficient)
	{
		return $this->_Coefficient = $Coefficient;
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
		return "IdSuivi : ".$this->getIdSuivi()."IdMatiere : ".$this->getIdMatiere()."IdEleve : ".$this->getIdEleve()."Note : ".$this->getNote()."Coefficient : ".$this->getCoefficient();	
}

}