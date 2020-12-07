<?php

class Ventes
{
	/*****************Attributs***************** */
	private $_IdVente;
	private $_IdRepres;
	private $_IdProduit;
	private $_IdClient;
	private $_Quantite;
	/*****************Accesseurs***************** */
	public function getIdVente()
	{
		return $this->_IdVente;
	}

	public function setIdVente($IdVente)
	{
		return $this->_IdVente = $IdVente;
	}

	public function getIdRepres()
	{
		return $this->_IdRepres;
	}

	public function setIdRepres($IdRepres)
	{
		return $this->_IdRepres = $IdRepres;
	}

	public function getIdProduit()
	{
		return $this->_IdProduit;
	}

	public function setIdProduit($IdProduit)
	{
		return $this->_IdProduit = $IdProduit;
	}

	public function getIdClient()
	{
		return $this->_IdClient;
	}

	public function setIdClient($IdClient)
	{
		return $this->_IdClient = $IdClient;
	}

	public function getQuantite()
	{
		return $this->_Quantite;
	}

	public function setQuantite($Quantite)
	{
		return $this->_Quantite = $Quantite;
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
		return "IdVente : ".$this->getIdVente()."IdRepres : ".$this->getIdRepres()."IdProduit : ".$this->getIdProduit()."IdClient : ".$this->getIdClient()."Quantite : ".$this->getQuantite();	
}

}