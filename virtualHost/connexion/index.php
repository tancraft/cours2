<?PHP
/* Autoload permet de charger toutes les classes necessaires */
function ChargerClasse($classe)
{
    if (file_exists("PHP/CONTROLLER/" . $classe . ".Class.php"))
    {
        require "PHP/CONTROLLER/" . $classe . ".Class.php";
    }
    if (file_exists("PHP/MODEL/" . $classe . ".Class.php"))
    {	
        require "PHP/MODEL/" . $classe . ".Class.php";
    }
}
spl_autoload_register("ChargerClasse");

/**
 * Méthode qui permet d'affichre une page en fonction de ces paramètres
 * $page tableau contenant 3 valeurs    le chemein d'acces à la page
 *                                      le nom de la page
 *                                      le titre à afficher sur la page
 */
function AfficherPage($page)
{
    $chemin = $page[0];
    $nom = $page[1];
    $titre = $page[2];

    include 'PHP/VIEW/Head.php';
    include 'PHP/VIEW/Header.php';
    include $chemin . $nom . '.php'; //Chargement de la page en fonction du chemin et du nom
    include 'PHP/VIEW/Footer.php';
}

/**
 * fonctions pour crypter le mot d epasse
 * 
 */
function cryptage($mot)
{

    return md5(md5(md5($mot).strlen($mot))."m6");

}

//on active la connexion à la base de données
DbConnect::init();
session_start();  // initialise la variable de Session

/* création d'u tableau de redirection, en fonction du code, on choisit la page à afficher */
$routes = [
    "default" => ["PHP/VIEW/", "Accueil", "Accueil"],

    "accueil" => ["PHP/VIEW/", "Accueil", "Accueil"],

    "listeUsers" => ["PHP/VIEW/", "ListeUsers", "Liste d'utilisteurs"],
    "formUsers" => ["PHP/VIEW/", "FormUsers", "Formulaire de connection"],
    "actionsConnect" => ["PHP/VIEW/", "ActionsConnect", "action d'utilisteur"],

    "inscription" => ["PHP/VIEW/", "FormInscription", "Formulaire d'inscription"],
    "actionInscription" => ["PHP/VIEW/", "ActionInscription", "xx"],

    "deconnection" => ["PHP/VIEW/", "Actiondeconnection", "xx"]
    
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