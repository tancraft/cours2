<?PHP

include 'PHP/Outils.php';

//on recupere les paramètres de l'application
Parametre::init();
//on active la connexion à la base de données
DbConnect::init();
session_start(); // initialise la variable de Session'

/* création d'un tableau de redirection, en fonction du code, on choisit la page à afficher */
$routes = [
	"default" => ["PHP/VIEW/", "Accueil", "Accueil"],
	"accueil" => ["PHP/VIEW/", "Accueil", "Accueil"],

	"formConnect" => ["PHP/VIEW/", "FormConnect", "connections"],
	"actionConnect" => ["PHP/VIEW/", "ActionConnect", "actions de connection"],

	"interface" => ["PHP/VIEW/", "Interface", "Menu"],
	"listes" => ["PHP/VIEW/", "Listes", "listes"],

	"tests" => ["PHP/VIEW/", "Tests", "Tests"]



];

if (isset($_GET["codePage"]))
{

	$code = $_GET["codePage"];

	//Si cette route existe dans le tableau des routes
	if (isset($routes[$code]))
	{
		//Afficher la page correspondante
		AfficherPage($routes[$code]);
	}
	else
	{
		//Sinon afficher la page par defaut
		AfficherPage($routes["default"]);
	}

}
else
{
	//Sinon afficher la page par defaut
	AfficherPage($routes["default"]);

}