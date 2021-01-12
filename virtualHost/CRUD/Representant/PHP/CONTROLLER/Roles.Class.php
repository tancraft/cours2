<?php

class Roles
{
	/*****************Attributs***************** */
	private $_IdRole;
	private $_LibelleRole;
	/*****************Accesseurs***************** */
	public function getIdRole()
	{
		return $this->_IdRole;
	}

	public function setIdRole($IdRole)
	{
		return $this->_IdRole = $IdRole;
	}

	public function getLibelleRole()
	{
		return $this->_LibelleRole;
	}

	public function setLibelleRole($LibelleRole)
	{
		return $this->_LibelleRole = $LibelleRole;
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
		return "IdRole : ".$this->getIdRole()."LibelleRole : ".$this->getLibelleRole();	
}

}