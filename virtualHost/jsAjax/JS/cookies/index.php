<?php

if (file_exists("./php/head.php")) {
    include("./php/head.php");
} else {
    echo "erreur";
}

if (file_exists("./php/header.php")) {
    include("./php/header.php");
} else {
    echo "erreur";
}

if (file_exists("./php/nav.php")) {
    include("./php/nav.php");
} else {
    echo "erreur";
}

if (file_exists("./php/corps.php")) {
    include("./php/corps.php");
} else {
    echo "erreur";
}

if (file_exists("./php/footer.php")) {
    include("./php/footer.php");
} else {
    echo "erreur";
}