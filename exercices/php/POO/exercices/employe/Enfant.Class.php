<?php
class Enfant
{

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_dateDeNaissance;

    /*****************Accesseurs***************** */
    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getDateDeNaissance()
    {
        return $this->_dateDeNaissance;
    }

    public function setDateDeNaissance(DateTime $dateDeNaissance)
    {
        $this->_dateDeNaissance = $dateDeNaissance;
    }
    
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

    /*****************Autres Méthodes***************** */
    
    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        return "\nNom: ".$this->getNom()."\nPrenom: ".$this->getPrenom()."\nAge: ".$this->ageEnfant()."\n\n";
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

    /**
     * calcul l'age de l'enfant
     * @return int retourne l'age de l'enfant
     */
    public function ageEnfant()
    {

        $date = new DateTime('now'); //creer l'objet date du jour actuel
        $age = $date->diff($this->getDateDeNaissance(), true); // ici nous faisont le calcul de la difference via la fonction diff en mettant la date actuelle avant et la date a deduire en parametre
        return ($age->format("%Y")) * 1; //on retourne l'age obtenu apres avoir formater la date en nombre d'années

    }

        /**
     * Détermine le cheque Noel auquel l'enfant à droit
     *
     * @return int montant du chèque
     */
    public function montantChequeNoel()
    {
        $a = $this->ageEnfant();
        if ($a >= 0 && $a < 11)
        {
            return 20;
        }
        else if ($a < 16)
        {
            return 30;
        }
        else if ($a < 19)
        {
            return 50;
        }
        else
        {
            return 0;
        }
    }

}