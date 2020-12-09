<nav>
<?php

if (isset($_SESSION['utilisateur'])) {
    echo '<div>
            <button><a href="Index.php?codePage=actionConnect&mode=disconnect">Deconnexion</a></button>
		</div>';
    if ($_SESSION['utilisateur']->getIdRole() == 1) {
        echo '<div>
            <button><a href="Index.php?codePage=listes&mode=users">Utilisateurs</a></button>
			</div>';
	}
	echo '<div>
	<button><a href="Index.php?codePage=listes&mode=repres">representants</a></button>
	</div>
	<div>
	<button><a href="Index.php?codePage=listes&mode=clients">Clients</a></button>
	</div>
	<div>
	<button><a href="Index.php?codePage=listes&mode=produits">Produits</a></button>
	</div>
	<div>
	<button><a href="Index.php?codePage=listes&mode=ventes">Ventes</a></button>
	</div>';
} else {
    echo '<div>
        <button><a href="Index.php?codePage=formConnect">Connexion</a></button>
		</div>
		<div>
        <button><a href="Index.php?codePage=details">Inscription</a></button>
        </div>';
}

?>
</nav>
