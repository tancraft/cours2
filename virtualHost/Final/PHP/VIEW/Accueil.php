<?php
//on vérifie qu"'il s'agit bien d'un administrateur et pas d'une surcharge URL

if (isset($_SESSION['utilisateur'])) {
    if ($_SESSION['utilisateur']->getRoleUser() == 1) {
        echo '<h1>'.texte('homeAdmin').'</h1>';
    } else {
        echo '<h1>'.texte('homeUser').'</h1>';
    }
} else {
    echo '<h1>'.texte('homeInvit').'</h1>';

}
