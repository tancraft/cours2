<?php
class Pave extends Rectangle
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
        parent::__construct($options);// a ajouter dans classe enfant

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

    public function perimetrePave()
    {

      return (($this->perimetre()*2))+($this->getHauteur())*4;

    }

    public function Volume()
    {

        return $this->aire()*$this->getHauteur();

    }

    public function AfficherPave()
    {
        $aff = "\t***\tPave\t***\n ". $this->toString()."\nHauteur: ".$this->getHauteur();
        $aff.="\n"."Perimetre: " .$this->perimetrePave()."\n"."Volume: ".$this->Volume()."\n\n" ;
        echo $aff;
    }


}
