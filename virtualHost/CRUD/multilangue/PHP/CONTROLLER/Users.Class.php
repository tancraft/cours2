<?php

class Users
{
    /*****************Attributs***************** */
    private $_idUtilisateur;
    private $_nom;
    private $_prenom;
    private $_motDePasse;
    private $_adresseMail;
    private $_roleUser;
    private $_pseudo;
    /*****************Accesseurs***************** */
    public function getIdUtilisateur()
    {
        return $this->_idUtilisateur;
    }

    public function setIdUtilisateur($idUtilisateur)
    {
        return $this->_idUtilisateur = $idUtilisateur;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        return $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        return $this->_prenom = $prenom;
    }

    public function getMotDePasse()
    {
        return $this->_motDePasse;
    }

    public function setMotDePasse($motDePasse)
    {
        return $this->_motDePasse = $motDePasse;
    }

    public function getAdresseMail()
    {
        return $this->_adresseMail;
    }

    public function setAdresseMail($adresseMail)
    {
        return $this->_adresseMail = $adresseMail;
    }

    public function getRoleUser()
    {
        return $this->_roleUser;
    }

    public function setRoleUser($roleUser)
    {
        $this->_roleUser = $roleUser;

        return $this;
    }
    public function getPseudo()
    {
        return $this->_pseudo;
    }

    public function setPseudo($pseudo)
    {
        return $this->_pseudo = $pseudo;
    }

    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {if (!empty($options)) // empty : renvoi vrai si le tableau est vide
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
     * Transforme l objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        return "id : " . $this->getIdUtilisateur() . "nom: " . $this->getNom() . "prenom: " . $this->getPrenom() . "mot de passe: " . $this->getMotDePasse() . "E-mail: " . $this->getAdresseMail() . "role: " . $this->getRoleUser() . "pseudo: " . $this->getPseudo();
    }

}
