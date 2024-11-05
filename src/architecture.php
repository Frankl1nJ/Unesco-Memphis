<?php
    if (isset($_GET['lang'])) {
        if ($_GET['lang'] == 'fr') {
            include("../fr/architecture.php");
        } elseif ($_GET['lang'] == 'cn') {
            include("../cn/architecture.php");
        } else {
            include("../en/architecture.php");
        }
    } else {
        include("../en/architecture.php");
    }
?>
