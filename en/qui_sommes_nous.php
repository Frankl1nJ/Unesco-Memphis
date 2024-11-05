<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Memphis | Who we are</title>
    <link rel="icon" type="image/png" href="../assets/Header-Footer/pyramide.png">
    <link rel="stylesheet" href="../css/qui_sommes_nous.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<?php
    include("../include/header.inc.php");
?>

<main>
    <!-- Présentation du projet -->
    <section id="projet">
        <h1>Project presentation</h1>
        <p>Welcome to our website dedicated to the heritage of Memphis and its necropolis, a project in partnership with UNESCO. 
           Our mission is to promote and preserve this historic site by providing an informative and interactive platform.
           Discover the history, culture and architectural wonders of Memphis through our site.</p>
    </section>

    <!-- Présentation de l'équipe -->
    <section id="equipe">
        <h1>Our team</h1>
        <div class="profil-container">
            <div class="profil">
                <img src="../assets/Img_Qui_sommes_nous/alexistelle.png" alt="TELLE Alexis">
                <p><strong>TELLE Alexis</strong><br>Project leader, back-end developer</p>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/in/alexis-telle/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/Galaktik-hub" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://perso-etudiant.u-pem.fr/~alexis.telle/portfolio" target="_blank"><i class="fas fa-globe"></i></a>
                </div>
            </div>
            <div class="profil">
                <img src="../assets/Img_Qui_sommes_nous/julien.png" alt="SYNAEVE Julien">
                <p><strong>SYNAEVE Julien</strong><br>Front End Development Manager</p>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/in/julien-synaeve" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/JulienS-Code" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://juliens-code.github.io/Portfolio/" target="_blank"><i class="fas fa-globe"></i></a>
                </div>
            </div>
            <div class="profil">
                <img src="../assets/Img_Qui_sommes_nous/raphael.png" alt="DAVIOT Raphaël">
                <p><strong>DAVIOT Raphaël</strong><br>Web designer, front-end developer</p>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/in/raphael-daviot" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/RaphaelDAV" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://etudiant.u-pem.fr/~raphael.daviot/" target="_blank"><i class="fas fa-globe"></i></a>
                </div>
            </div>
            <div class="profil">
                <img src="../assets/Img_Qui_sommes_nous/nathan.png" alt="SEBELON Nathan">
                <p><strong>SEBELON Nathan</strong><br>Front-end developer</p>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/in/nathan-sebelon-956488269/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/Nathan-sbl" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://nathan-sbl.github.io/" target="_blank"><i class="fas fa-globe"></i></a>
                </div>
            </div>
        </div>
        <div class="traductrice">
            <p>Special mention to DENG Eliane for her help with the Chinese translation.</p>
        </div>
    </section>
    
    <!-- Présentation des jurys -->
    <section id="jury">
        <h1>Presentation of the Juries</h1>
        <div class="profil-container">
            <div class="profil">
                <img src="../assets/Img_Qui_sommes_nous/Ettayeb.jpg" alt="ETTAYEB Tewfik">
                <p><strong>ETTAYEB Tewfik</strong><br>UNESCO FORUM COORDINATOR<br></p>
            </div>
            <div class="profil">
                <img src="../assets/Img_Qui_sommes_nous/Cessy.jpg" alt="CESSY David">
                <p><strong>CESSY David</strong><br>HEAD OF THE IUT'S IT DEPARTMENT<br></p>
            </div>
            <div class="profil">
                <img src="../assets/Img_Qui_sommes_nous/Reby.jpg" alt="REBY Yann">
                <p><strong>REBY Yann</strong><br>ENGLISH TEACHER<br></p>
            </div>
        </div>
    </section>

    <!-- Section de contact -->
    <?php
        include("../en/contact.php");
    ?>

</main>

<?php
    include("../include/footer.inc.php");
?>

</body>
</html>
