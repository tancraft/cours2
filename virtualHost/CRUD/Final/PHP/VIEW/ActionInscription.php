<?php

if ($_POST['motDePasse'] == $_POST['confirmation']) {
    // recherche si le pseudo existe
    $uti = UsersManager::findByPseudo($_POST['pseudo']);
    if ($uti == false) {
        $u = new Users($_POST);
        //encodage du mot de passe
        $u->setMotDePasse(cryptage($u->getMotDePasse()));
        UsersManager::add($u);
        header("location:Index.php?codePage=accueil");
    } else {
        echo texte('exist');
        header("refresh:3;url=Index.php?codePage=formInscription");
    }
} else {
    echo texte('match');
    header("refresh:3;url=Index.php?codePage=formInscription");
}
