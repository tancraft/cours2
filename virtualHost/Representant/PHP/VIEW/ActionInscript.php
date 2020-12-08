<?php

if ($_POST['MotDePasseUtilisateur'] == $_POST['confirmation'])
{
    // recherche si le pseudo existe
    $uti = UtilisateursManager::findByEmail($_POST['EmailUtilisateur']);
    if ($uti == false)
    {
        $u = new Utilisateurs($_POST);
        $u->setMotDePasseUtilisateur($u->getMotDePasseUtilisateur());
        UtilisateursManager::add($u);
        header("Location:index.php?codePage=accueil");
    }
    else
    {
        echo "l'adresse E-mail existe deja";
        header("refresh:10;url=Index.php?codePage=formInscript");
    }
}
else
{
    echo "la confirmation ne correspond pas au mot de passe";
    header("refresh:10;url=Index.php?codePage=formInscript");
}