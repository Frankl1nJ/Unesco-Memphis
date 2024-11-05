<?php
    if (isset($_GET['lang'])) {
        if ($_GET['lang'] == 'fr') {
            include("../fr/histoire.php");
        } elseif ($_GET['lang'] == 'cn') {
            include("../cn/histoire.php");
        } else {
            include("../en/histoire.php");
        }
    } else {
        include("../en/histoire.php");
    }
?>