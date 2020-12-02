<?php

require "fonctions/fonctions.php";
require "fonctions/arborescense.php";
require "fonctions/creaCss.php";
require "fonctions/creaPhp.php";
require "fonctions/creaSql.php";


$nomSite=nomDeSite();

arborescence($nomSite);

creationIndex($nomSite);
creationCssBase($nomSite);

creationPhp($nomSite);

creationSql($nomSite);



