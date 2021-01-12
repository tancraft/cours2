
<header>
<div class="logo">
	<img src="MEDIA/IMG/icone.jpg" alt="">
</div>
<div class="titreDuSite colonne">
<div class="centrer">
	<h1>Gestion des notes</h1>
</div>
<div class="centrer">
	<h3>Gestion des notes</h3>
</div>
</div>

<div class="colonne">
<?php
if (isset($_SESSION['utilisateur'])) {
    $idMat = $_SESSION['utilisateur']->getIdMatiere();
    $matiere = MatieresManager::findById($idMat);

    if ($_SESSION['utilisateur']->getRole() == 2) {
        echo '<div>'.$_SESSION['utilisateur']->getNomUtilisateur() . ' ' . $_SESSION['utilisateur']->getPreNomUtilisateur().
        '</div><div>'. $matiere->getLibelleMatiere() . '</div>';
    } else {
        echo '<div>'.$matiere->getLibelleMatiere() . '</div>';
    }
    echo '<div>
        <button><a href="Index.php?codePage=actionConnect&mode=disconnect">Déconnectez vous</a></button>
        </div>';
} else {
    echo '<div>
        <button><a href="Index.php?codePage=accueil">Connectez vous</a></button>
		</div>';
}
?>
</div>

</header>