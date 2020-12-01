<?php



/* construction de l'url en fonction de l'uri existante  */
// var_dump($_SERVER);
$uri = $_SERVER['REQUEST_URI'];
if (substr($uri, strlen($uri) - 1) == "/") // se termine par /
{
    $uri .= "index.php?";
}
else if (in_array("?", str_split($uri))) // si l'uri contient deja un ?
{
    $uri .= "&";
}
else
{
    $uri .= "?";
}

?>

<header>

<div class="logo"><img src="MEDIA/IMG/Blasonlft.jpg" alt=""></div>
 <div class="titre"><?php echo $titre ?></div>
 <div class="lang">
        <div>
            <a href="<?php echo $uri; ?>lang=EN">
                <img src="MEDIA/IMG/EN.jpg" alt="drapeaux anglais">
            </a>
        </div>
        <div></div>
        <div>
            <a href="<?php echo $uri; ?>lang=FR">
                <img src="MEDIA/IMG/FR.jpg" alt="drapeaux francais">
            </a>
        </div>
        <div></div>
    </div>
 <div class="connect">
<?php

if (isset($_SESSION['utilisateur'])) {
    echo '<div>Bonjour ' . $_SESSION['utilisateur']->getNom() . '</div>';
    echo '<div><a href="Index.php?codePage=actionDeconnection">Déconnecter</a></div>';
} else {
    echo '<a href="Index.php?codePage=formConnect">Connecter</a>';
    echo '<a href="Index.php?codePage=formInscription">S\'inscrire</a>';
}
?>

 </div>
</header>