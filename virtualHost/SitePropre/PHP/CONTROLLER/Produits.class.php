<?php
class Produits
{
    /*****************Attributs***************** */
    private $_idProduit;
    private $_libelleProduit;
    private $_prix;
    private $_dateDePeremption;
    /*****************Accesseurs***************** */
    public function getIdProduit()
    {
        return $this->_idProduit;
    }
    public function setIdProduit($_idProduit)
    {
        return $this->_idProduit = $_idProduit;
    }
    public function getLibelleProduit()
    {
        return $this->_libelleProduit;
    }
    public function setLibelleProduit($_libelleProduit)
    {
        return $this->_libelleProduit = $_libelleProduit;
    }
    public function getPrix()
    {
        return $this->_prix;
    }
    public function setPrix($_prix)
    {
        return $this->_prix = $_prix;
    }
    public function getDateDePeremption()
    {
        return $this->_dateDePeremption;
    }
    public function setDateDePeremption($_dateDePeremption)
    {
        return $this->_dateDePeremption = $_dateDePeremption;
    }
        
	/*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        if (!empty($options))
        {
            $this->hydrate($options);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value)
        {
            $methode = "set" . ucfirst($key);
            if (is_callable(([$this, $methode])))
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
        return $this->getLibelleProduit().' : '.$this->getPrix().' € périme le ' .$this->getDateDePeremption();
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
