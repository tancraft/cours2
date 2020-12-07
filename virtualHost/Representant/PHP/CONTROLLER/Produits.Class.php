<?php

class Produits
{
	/*****************Attributs***************** */
	private $_IdProduit;
	private $_NomProduit;
	private $_CouleurProduit;
	private $_PoidsProduit;
	/*****************Accesseurs***************** */
	public function getIdProduit()
	{
		return $this->_IdProduit;
	}

	public function setIdProduit($IdProduit)
	{
		return $this->_IdProduit = $IdProduit;
	}

	public function getNomProduit()
	{
		return $this->_NomProduit;
	}

	public function setNomProduit($NomProduit)
	{
		return $this->_NomProduit = $NomProduit;
	}

	public function getCouleurProduit()
	{
		return $this->_CouleurProduit;
	}

	public function setCouleurProduit($CouleurProduit)
	{
		return $this->_CouleurProduit = $CouleurProduit;
	}

	public function getPoidsProduit()
	{
		return $this->_PoidsProduit;
	}

	public function setPoidsProduit($PoidsProduit)
	{
		return $this->_PoidsProduit = $PoidsProduit;
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
		return "IdProduit : ".$this->getIdProduit()."NomProduit : ".$this->getNomProduit()."CouleurProduit : ".$this->getCouleurProduit()."PoidsProduit : ".$this->getPoidsProduit();	
}

}