<?php
session_start();
include("../include/connexion.inc.php");

if (isset($_POST['login'])) {
    $req = $cnx->prepare("SELECT COUNT(*) AS correct FROM login WHERE mdp=:mdp");
    $req->bindParam(':mdp', $_POST['login']);
    $req->execute();
    $ligne = $req->fetch(PDO::FETCH_OBJ);
    if ($ligne->correct == 1) {
        $_SESSION['connected'] = 1;
        header("location: panel.php");
        exit();
    } else {
        echo "Mot de passe incorrect";
    }
}

include("../include/header.inc.php");
?>
<!DOCTYPE html>
<html lang="français">
<head>
    <meta charset="utf-8">
    <title>Memphis | Login administrateur</title>
    <link rel="icon" type="image/png" href="../assets/Header-Footer/pyramide.png">
    <link rel="stylesheet" href="../css/article.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="bg-article">
        <div class="article">
            <form action="login.php" method="post">
                <label for="login">Mot de passe</label>
                <input type="password" name="login" required/>
                <input type="submit" class="button" name="submit" value="Valider" />
            </form>
        </div>
    </section>

    <?php
        include("../include/footer.inc.php");
    ?>
</body>
</html>
