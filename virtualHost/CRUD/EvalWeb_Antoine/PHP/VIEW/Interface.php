<?php

$sousTitre = '<h3>Accueil de gestion</h3>';
if (isset($_SESSION['utilisateur'])) 
{
    if ($_SESSION['utilisateur']->getRole() == 1) 
    {
        echo '<div>
                <button><a href="Index.php?codePage=listes&mode=eleves">Gérer les élèves</a></button>
            </div>
            <div>
                <button><a href="Index.php?codePage=listes&mode=users">Gérer les enseignants</a></button>
            </div>
            <div>
                <button><a href="Index.php?codePage=listes&mode=notes">Gérer les notes</a></button>
            </div>
            <div>
                <button><a href="Index.php?codePage=listes&mode=matieres">Gérer les matières</a></button>
            </div>';
    }
    else
    {
        echo '<div>
                    <button><a href="Index.php?codePage=listes&mode=notes">Gérer les notes</a></button>
                </div>';
    }
}
else
{
    $sousTitre = '<h3>Au revoir</h3>';
    echo '<h1>Merci de vous connectez</1>';
    header("refresh:3;url=Index.php?codePage=accueil");
}