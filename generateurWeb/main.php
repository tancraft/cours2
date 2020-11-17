<?php

require "fonctions/fonctions.php";
require "fonctions/arborescense.php";
require "fonctions/creaCss.php";

$nomSite=nomDeSite();

arborescence($nomSite);

creationIndex($nomSite);
creationCssBase($nomSite);



