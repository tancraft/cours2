<?php

class Representants
{
	/*****************Attributs***************** */
	private $_IdRepres;
	private $_NomRepres;
	private $_VilleRepres;
	/*****************Accesseurs***************** */
	public function getIdRepres()
	{
		return $this->_IdRepres;
	}

	public function setIdRepres($IdRepres)
	{
		return $this->_IdRepres = $IdRepres;
	}

	public function getNomRepres()
	{
		return $this->_NomRepres;
	}

	public function setNomRepres($NomRepres)
	{
		return $this->_NomRepres = $NomRepres;
	}

	public function getVilleRepres()
	{
		return $this->_VilleRepres;
	}

	public function setVilleRepres($VilleRepres)
	{
		return $this->_VilleRepres = $VilleRepres;
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
		return "IdRepres : ".$this->getIdRepres()."NomRepres : ".$this->getNomRepres()."VilleRepres : ".$this->getVilleRepres();	
}

}