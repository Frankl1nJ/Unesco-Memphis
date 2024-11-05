<?php
    if (isset($_GET['lang'])) {
        if ($_GET['lang'] == 'fr') {
            include("../fr/article.php");
        } elseif ($_GET['lang'] == 'cn') {
            include("../cn/article.php");
        } else {
            include("../en/article.php");
        }
    } else {
        include("../en/article.php");
    }
?>
