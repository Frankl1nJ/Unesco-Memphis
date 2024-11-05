<?php
    if (isset($_GET['lang'])) {
        if ($_GET['lang'] == 'fr') {
            include("../fr/infos.php");
        } elseif ($_GET['lang'] == 'cn') {
            include("../cn/infos.php");
        } else {
            include("../en/infos.php");
        }
    } else {
        include("../en/infos.php");
    }
?>