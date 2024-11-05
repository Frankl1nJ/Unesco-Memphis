<?php
    if (isset($_GET['lang'])) {
        if ($_GET['lang'] == 'fr') {
            include("../fr/qui_sommes_nous.php");
        } elseif ($_GET['lang'] == 'cn') {
            include("../cn/qui_sommes_nous.php");
        } else {
            include("../en/qui_sommes_nous.php");
        }
    } else {
        include("../en/qui_sommes_nous.php");
    }
?>