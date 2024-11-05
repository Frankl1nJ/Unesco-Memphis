    <?php
    if (isset($_GET['lang'])) {
        if ($_GET['lang'] == 'fr') {
            include("../fr/activites.php");
        } elseif ($_GET['lang'] == 'cn') {
            include("../cn/activites.php");
        } else {
            include("../en/activites.php");
        }
    } else {
        include("../en/activites.php");
    }
?>
