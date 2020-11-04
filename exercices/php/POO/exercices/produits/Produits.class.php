<?php
class Produit
{

    /*****************Attributs***************** */
    private $_numero;
    private $_designation;
    private $_couleur;
    private $_dateValidite;
    private $_categorie;
    private $_lieuDeStockage;
    private static $_compteur = 0;
    private $_prixHt;
    private $_toto;

    /*****************Accesseurs***************** */
    public function getNumero()
    {
        return $this->_numero;
    }

    public function setNumero($numero)
    {
        $this->_numero = $numero;
    }

    public function getDesignation()
    {
        return $this->_designation;
    }

    public function setDesignation($designation)
    {
        $this->_designation = $designation;
    }

    public function getCouleur()
    {
        return $this->_couleur;
    }

    public function setCouleur($couleur)
    {
        $this->_couleur = $couleur;
    }

    public function getDateValidite()
    {
        return $this->_dateValidite;
    }

    public function setDateValidite(DateTime $dateValidite)
    {
        $this->_dateValidite = $dateValidite;
    }

    public function getCategorie()
    {
        return $this->_categorie;
    }

    public function setCategorie($categorie)
    {
        $this->_categorie = $categorie;
    }

    public function getLieuDeStockage()
    {
        return $this->_lieuDeStockage;
    }

    public function setLieuDeStockage($lieuDeStockage)
    {
        $this->_lieuDeStockage = $lieuDeStockage;
    }

    public static function getCompteur()
    {
        return self::$_compteur;
    }

    public static function setCompteur($compteur)
    {
        self ::$_compteur = $compteur;
    }

    public function getPrixHt()
    {
        return $this->_prixHt;
    }

    public function setPrixHt( $prixHt)
    {
        $this->_prixHt = $prixHt;
    }
    
    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
            self::getCompteur(self::getCompteur() + 1); //on increment le compteur
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
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        $aff = "------------------------------------------";
        $aff.= "\t****\tPRODUIT\t****\n";
        $aff.= "\tNumero du produit: ".$this->getNumero()."\n";
        $aff.= "\tDesignation: ".$this->getDesignation()."\n";
        $aff.= "\tcouleur: ".$this->getCouleur()."\n";
        $aff.= "\tDate de Validitée: ".$this->getDateValidite()."\n";
        $aff.= "Catégorie: ".$this->getCategorie()."\n";
        $aff.="\tLieu de stockage: ".$this->getLieuDeStockage()."\n";
        $aff.="\tPrix HT: ".$this->getPrixHt()."\n";
        return $aff;

    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
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
     *        0 si ils sont égaux
     *        -1 si le 1er est <
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