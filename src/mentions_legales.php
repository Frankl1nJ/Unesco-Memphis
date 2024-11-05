<?php
    if (isset($_GET['lang'])) {
        if ($_GET['lang'] == 'fr') {
            include("../fr/mentions_legales.php");
        }  else {
            include("../en/mentions_legales.php");
        }
    } else {
        include("../en/mentions_legales.php");
    }
?>