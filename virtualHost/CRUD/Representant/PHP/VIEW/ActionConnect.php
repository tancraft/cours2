<?php
$utilisateur=UtilisateursManager::findByEmail($_POST['EmailUtilisateur']);
var_dump($utilisateur);
switch($_GET['mode'])
{

    case ("connect"):
        if ($utilisateur!=FALSE)
        {
            if ($utilisateur->getPseudoUtilisateur()==$_POST['MotDePasseUtilisateur'])
            {
                $_SESSION['utilisateur']=$utilisateur;
                header("Location:Index.php?codePage=accueil");
            }
            else{
                echo '<h2>Le mot de passe est invalide</h2>';
                header("refresh:10;url=Index.php?codePage=formConnect");
            }
        }
        else
        {
            echo '<h2>L\'adresse e-mail n\'existe pas</h2>';
            header("refresh:10;url=Index.php?codePage=formConnect");
        }
    break;

    //deconnexion
    case ("disconnect"):
        session_destroy();
        header("Location:index.php?codePage=accueil");
    break;
}