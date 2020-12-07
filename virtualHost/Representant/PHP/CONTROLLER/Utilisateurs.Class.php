<?php

class Utilisateurs
{
	/*****************Attributs***************** */
	private $_IdUtilisateur;
	private $_NomUtilisateur;
	private $_PrenomUtilisateur;
	private $_PseudoUtilisateur;
	private $_MotDePasseUtilisateur;
	private $_IdRole;
	/*****************Accesseurs***************** */
	public function getIdUtilisateur()
	{
		return $this->_IdUtilisateur;
	}

	public function setIdUtilisateur($IdUtilisateur)
	{
		return $this->_IdUtilisateur = $IdUtilisateur;
	}

	public function getNomUtilisateur()
	{
		return $this->_NomUtilisateur;
	}

	public function setNomUtilisateur($NomUtilisateur)
	{
		return $this->_NomUtilisateur = $NomUtilisateur;
	}

	public function getPrenomUtilisateur()
	{
		return $this->_PrenomUtilisateur;
	}

	public function setPrenomUtilisateur($PrenomUtilisateur)
	{
		return $this->_PrenomUtilisateur = $PrenomUtilisateur;
	}

	public function getPseudoUtilisateur()
	{
		return $this->_PseudoUtilisateur;
	}

	public function setPseudoUtilisateur($PseudoUtilisateur)
	{
		return $this->_PseudoUtilisateur = $PseudoUtilisateur;
	}

	public function getMotDePasseUtilisateur()
	{
		return $this->_MotDePasseUtilisateur;
	}

	public function setMotDePasseUtilisateur($MotDePasseUtilisateur)
	{
		return $this->_MotDePasseUtilisateur = $MotDePasseUtilisateur;
	}

	public function getIdRole()
	{
		return $this->_IdRole;
	}

	public function setIdRole($IdRole)
	{
		return $this->_IdRole = $IdRole;
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
		return "IdUtilisateur : ".$this->getIdUtilisateur()."NomUtilisateur : ".$this->getNomUtilisateur()."PrenomUtilisateur : ".$this->getPrenomUtilisateur()."PseudoUtilisateur : ".$this->getPseudoUtilisateur()."MotDePasseUtilisateur : ".$this->getMotDePasseUtilisateur()."IdRole : ".$this->getIdRole();	
}

}