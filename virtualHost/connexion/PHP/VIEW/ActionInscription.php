<?php
var_dump($_POST);
if ($_POST['motDePasse'] == $_POST['confirmation'])
{
    // recherche si le pseudo existe
    $uti = UsersManager::findByPseudo($_POST['pseudo']);
    if ($uti == false)
    {
        $u = new Users($_POST);
        //encodage du mot de passe
        $u->setMotDePasse(md5($u->getMotDePasse()));
        UsersManager::add($u);
    }
    else
    {
        echo "le pseudo existe deja";
    }
}
else
{
    echo "la confirmation ne correspond pas au mot de passe";
}
