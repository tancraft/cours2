<?php

// Ce fichier sera inclus a chaque fois que l'on aura besoin d'acceder � la base de donn�es.
// Il permet d'ouvrir la connection a la base de donnees
class DbConnect {
	private static $db;
	
	public static function getDb() {
		return DbConnect::$db;
	}

	public static function init() 
	{
        try {
            // On se connecte a MySQL
            //self::$db= new PDO ( 'mysql:host=localhost;dbname=baseProduits;charset=utf8', 'produitsApp', 'produitsApp');
			self::$db = new PDO('mysql:host=' . Parametre::getHost() . ';port=' . Parametre::getPort() . ';dbname=' . Parametre::getDbname() . ';charset=utf8', Parametre::getLogin(), Parametre::getPwd());
			//echo "connexion réussie";
        }
		catch ( Exception $e ) 
		{
			// En cas d'erreur, on affiche un message et on arrete tout
			die ( 'Erreur : ' . $e->getMessage () );
		}
		
	}
}

