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
<div class="logo">
	<img src="MEDIA/IMG/Logo.jpg" alt="">
</div>
<div class="titreDuSite">
	nom de l'application
</div>
<div>
<?php
if (isset($_SESSION['utilisateur'])) {
    echo '<div>Bonjour ' . $_SESSION['utilisateur']->getPseudoUtilisateur().'</div>';

} else {
    echo '<div>Bonjour Invité</div>';
}
?>
</div>

</header>