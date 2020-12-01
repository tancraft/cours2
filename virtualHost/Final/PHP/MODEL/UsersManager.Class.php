<?php

class UsersManager
{
    public static function add(Users $obj)
	{
        $db=DbConnect::getDb();
        $q=$db->prepare("INSERT INTO Users (nom,prenom,motDePasse,adresseMail,roleUser,pseudo) VALUES (:nom,:prenom,:motDePasse,:adresseMail,:roleUser,:pseudo)");
        $q->bindValue(":nom", $obj->getNom());
        $q->bindValue(":prenom", $obj->getPrenom());
        $q->bindValue(":motDePasse", $obj->getMotDePasse());
        $q->bindValue(":adresseMail", $obj->getAdresseMail());
        $q->bindValue(":roleUser", $obj->getRoleUser());
        $q->bindValue(":pseudo", $obj->getPseudo());
        $q->execute();
    }

    public static function update(Users $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Users SET nom=:nom,prenom=:prenom,motDePasse=:motDePasse,adresseMail=:adresseMail,roleUser=:roleUser,pseudo=:pseudo WHERE idUtilisateur=:idUtilisateur");
        $q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
        $q->bindValue(":nom", $obj->getNom());
        $q->bindValue(":prenom", $obj->getPrenom());
        $q->bindValue(":motDePasse", $obj->getMotDePasse());
        $q->bindValue(":adresseMail", $obj->getAdresseMail());
        $q->bindValue(":roleUser", $obj->getRoleUser());
        $q->bindValue(":pseudo", $obj->getPseudo());
        $q->execute();
    }
    public static function delete(Users $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Users WHERE idUtilisateur=" . $obj->getIdUtilisateur());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;  // on verifie que id est numerique, evite l'injection SQL
        $q = $db->query("SELECT * FROM Users WHERE idUtilisateur=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Users($results);
        }
        else
        {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Users");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Users($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Acteurs
    }

    public static function findByPseudo($pseudo)// recherche per pseudo utilisateur
    {
		$db = DbConnect::getDb();
        if (!in_array(";",str_split( $pseudo))) // s'il n'y a pas de ; , je lance la requete
        {
            $q = $db->query("SELECT * FROM users WHERE pseudo ='" . $pseudo . "'");
            $results = $q->fetch(PDO::FETCH_ASSOC);
            if ($results != false)
            {
                return new Users($results);
            }
            else
            {
                return false;
            }}
        else
        {
            return false;
        }
    }

}