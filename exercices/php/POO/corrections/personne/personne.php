<?php

Class Personne// toujours maj en premier sur le nom de la classe
{
    //Attributs
    private $_nom;// on ecrit la variable $_ d abord
    private $_prenom;

    //Constructeur
    public function __construct()
    {

    }

    //Assesseurs

    //GETTER
    public function getNom()//dans les assesseurs on ecrit une majquand on change de mot 
    {
        return $this->_nom;//toujours 2 underscores
    }
    public function getPrenom()
    {
        return $this->_prenom;
    }

    // SETTER
    public function setNom($n)
    {
        $this->_nom = $n;
    }
    public function setPrenom($p)
    {
        $this->_prenom = $p;
    }
}


$p1=new Personne();

$p1->setNom("boboze");

echo $p1->getNom();