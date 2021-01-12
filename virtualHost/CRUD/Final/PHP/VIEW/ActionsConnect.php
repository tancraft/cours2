<?php
$uti = UsersManager::findByPseudo($_POST['pseudo']);
if ($uti != false)
{
    if (cryptage($_POST['motDePasse']) == $uti->getMotDePasse())
    {
        echo texte('connectOk');
        $_SESSION['utilisateur']=$uti;
        header("refresh:3;url=Index.php?codePage=accueil");
    }
    else
    {
        echo texte('incPwd');
        header("refresh:3;url=Index.php?codePage=formConnect");
    }
}
else
{
    echo texte('inExist');
    header("refresh:3;url=Index.php?codePage=formConnect");
}