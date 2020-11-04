<?php

class Rectangle
{

    //atributs
    private $_longueur;
    private $_largeur;

  //getters et setteurs

    public function getLongueur()
    {
        return $this->_longueur;
    }

    public function setLongueur($longueur)
    {
        $this->_longueur = $longueur;
    }

    public function getLargeur()
    {
        return $this->_largeur;
    }

    public function setLargeur($largeur)
    {
        $this->_largeur = $largeur;
    }

    //constructeurs

    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
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


    //autres methodes

    // fonction pour verifier si les objets sont egaux
    public function equalsTo(Rectangle $obj)
    {


        return ($this->_longueur == $obj->getLongueur() && 
        $this->_largeur == $obj->getLargeur());


    }

    //fonction pour comparer les valeurs des attributs
     
    public function compareTo($obj)
    {

        if ($this->getLongueur() > $obj->getLongueur() ) 
        {
            return 1;

        }
        else if($this->getLongueur() < $obj->getLongueur() )
        {
         
            return -1;

        }
        else
        {
            if ($this->getLargeur()>$obj->getLargeur())
            {
                return 1;
            }
            else if ($this->getLargeur()<$obj->getLargeur())
            {
                return -1;
            }
            else
            {   // égalité sur les personnes
                return 0;
            }
        }

    }


    //methodes pour les calsculs

    public function perimetre()
    {

      return ($this->getLongueur()+$this->getLargeur())*2;

    }

    public function aire()
    {

        return $this->getLongueur()*$this->getLargeur();

    }

    public function estCarre()
    {

        return ($this->getLongueur() == $this->getLargeur());


    }


    public function toString()
    { 
        return "\nLargeur: ".$this->getLargeur()."\nLongueur:".$this->getLongueur();
    }
    
    /**
    * Affiche les propriétés du rectangle
    *
    * @return void
    */
   public function AfficherRectangle()
   {   $aff="\t***\tRectangle\t***\n".$this->toString()."\nPerimetre: " .$this->perimetre()."\n "."Aire: ".$this->aire()."\n\n";// ne pas mettre \n directement devant un test
       $aff.= $this->estCarre()?"Il s'agit d'un carré \n\n":"Il ne s'agit pas d'un carré \n\n";
       echo $aff;
   }

}