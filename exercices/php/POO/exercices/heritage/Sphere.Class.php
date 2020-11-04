<?php
class Sphere extends Cercle
{

    /*****************Attributs***************** */
    private $_hauteur;

    /*****************Accesseurs***************** */
    public function getHauteur()
    {
        return $this->_hauteur;
    }

    public function setHauteur($hauteur)
    {
        $this->_hauteur = $hauteur;
    }
    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        parent::__construct($options);

        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }

    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    /*****************Autres Méthodes***************** */


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
    

        
    public function rayon()
    {

         return $this->getDiametre()/2;

    }


    public function rayonTrois()
    {

         return pow($this->rayon(),3);

    }

    public function Volume()
    {

        return (4*pi()*$this->rayonTrois())/3;

    }

    public function AfficherSphere()
    {
        echo "\t***\tSphere\t***\n\n".$this->toString()."\nVolume: ".$this->Volume();
    }


}