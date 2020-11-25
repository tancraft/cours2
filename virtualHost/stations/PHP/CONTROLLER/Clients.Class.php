<?php

class Clients
{
	/*****************Attributs***************** */
	private $_idClient;
	private $_nomClient;
	private $_prenomClient;
	private $_emailClient;
	private $_motDePasseClient;
	/*****************Accesseurs***************** */
	public function getIdClient()
	{
		return $this->_idClient;
	}

	public function setIdClient($idClient)
	{
		return $this->_idClient = $idClient;
	}

	public function getNomClient()
	{
		return $this->_nomClient;
	}

	public function setNomClient($nomClient)
	{
		return $this->_nomClient = $nomClient;
	}

	public function getPrenomClient()
	{
		return $this->_prenomClient;
	}

	public function setPrenomClient($prenomClient)
	{
		return $this->_prenomClient = $prenomClient;
	}

	public function getEmailClient()
	{
		return $this->_emailClient;
	}

	public function setEmailClient($emailClient)
	{
		return $this->_emailClient = $emailClient;
	}

	public function getMotDePasseClient()
	{
		return $this->_motDePasseClient;
	}

	public function setMotDePasseClient($motDePasseClient)
	{
		return $this->_motDePasseClient = $motDePasseClient;
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
		 return $this->getNomClient().' : '.$this->getPrenomClient().' : ' .$this->getEmailClient();
	}

	/**
	* Renvoi vrai si l objet en paramètre est égal à l objet appelant
	*
	* @param [type] $obj
	* @return bool
	*/
	public function equalsTo($obj)
	{
		 return true;
	}

	/**
	* Compare 2 objets
	* Renvoi 1 si le 1er est >
	* 0 si ils sont égaux
	* -1 si le 1er est <
	*
	* @param [type] $obj1
	* @param [type] $obj2
	* @return void
	*/
	public static function compareTo($obj1, $obj2)
	{
		return 0;
	}

}