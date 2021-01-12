<?php
$utilisateur=UtilisateursManager::findPseudo($_POST['Login']);
switch($_GET['mode'])
{

    case ("connect"):
        if ($utilisateur!=FALSE)
        {
            if ($utilisateur->getMotDePasse()==$_POST['MotDePasse'])
            {
                $_SESSION['utilisateur']=$utilisateur;
                header("Location:Index.php?codePage=interface");
            }
            else{
                echo '<h2>Le mot de passe est invalide</h2>';
                header("refresh:10;url=Index.php?codePage=accueil");
            }
        }
        else
        {
            echo '<h2>L\'adresse e-mail n\'existe pas</h2>';
            header("refresh:10;url=Index.php?codePage=accueil");
        }
    break;

    //deconnexion
    case ("disconnect"):
        session_destroy();
        header("Location:index.php?codePage=accueil");
    break;
}
