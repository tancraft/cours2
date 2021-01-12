<?php

if (file_exists("./head.php")) {
    include("./head.php");
} else {
    echo "erreur";
}


if (file_exists("./tableau.php")) {
    include("./tableau.php");
} else {
    echo "erreur";
}

if (file_exists("./footer.php")) {
    include("./footer.php");
} else {
    echo "erreur";
}
?>