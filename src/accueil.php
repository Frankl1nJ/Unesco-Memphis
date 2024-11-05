<?php
    if (isset($_GET['lang'])) {
        if ($_GET['lang'] == 'fr') {
            include("../fr/accueil.php");
        } elseif ($_GET['lang'] == 'cn') {
            include("../cn/accueil.php");
        } else {
            include("../en/accueil.php");
        }
    } else {
        include("../en/accueil.php");
    }
?>
