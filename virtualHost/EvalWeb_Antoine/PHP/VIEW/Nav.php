<?php

if (isset($_SESSION['utilisateur']))
{
	if ($_SESSION['utilisateur']->getRole() == 1)
	{
		echo '<button><a href="index.php?codePage=admin">proviseur</a></button>';
	}
	echo '<button><a href="index.php?codePage=user">enseignant</a></button>';
}

