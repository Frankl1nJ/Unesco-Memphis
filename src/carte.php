<?php
    if (isset($_GET['lang'])) {
        if ($_GET['lang'] == 'fr') {
            include("../fr/carte.php");
        } elseif ($_GET['lang'] == 'cn') {
            include("../cn/carte.php");
        } else {
            include("../en/carte.php");
        }
    } else {
        include("../en/carte.php");
    }
?>
