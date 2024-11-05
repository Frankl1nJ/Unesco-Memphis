<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Memphis | Qui sommes-nous</title>
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
        <h1>Présentation du Projet</h1>
        <p>Bienvenue sur notre site dédié au patrimoine de Memphis et sa nécropole, un projet en partenariat avec l'UNESCO. 
           Notre objectif est de promouvoir et de préserver ce site historique en offrant une plateforme informative et interactive.
           Découvrez l'histoire, la culture et les merveilles architecturales de Memphis à travers notre site.</p>
    </section>

    <!-- Présentation de l'équipe -->
    <section id="equipe">
        <h1>Notre Équipe</h1>
        <div class="profil-container">
            <div class="profil">
                <img src="../assets/Img_Qui_sommes_nous/alexistelle.png" alt="TELLE Alexis">
                <p><strong>TELLE Alexis</strong><br>Chef de projet, développeur back-end</p>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/in/alexis-telle/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/Galaktik-hub" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://perso-etudiant.u-pem.fr/~alexis.telle/portfolio" target="_blank"><i class="fas fa-globe"></i></a>
                </div>
            </div>
            <div class="profil">
                <img src="../assets/Img_Qui_sommes_nous/julien.png" alt="SYNAEVE Julien">
                <p><strong>SYNAEVE Julien</strong><br>Chef de développement Front End</p>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/in/julien-synaeve" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/JulienS-Code" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://juliens-code.github.io/Portfolio/" target="_blank"><i class="fas fa-globe"></i></a>
                </div>
            </div>
            <div class="profil">
                <img src="../assets/Img_Qui_sommes_nous/raphael.png" alt="DAVIOT Raphaël">
                <p><strong>DAVIOT Raphaël</strong><br>Web designer, développeur front-end</p>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/in/raphael-daviot" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/RaphaelDAV" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://etudiant.u-pem.fr/~raphael.daviot/" target="_blank"><i class="fas fa-globe"></i></a>
                </div>
            </div>
            <div class="profil">
                <img src="../assets/Img_Qui_sommes_nous/nathan.png" alt="SEBELON Nathan">
                <p><strong>SEBELON Nathan</strong><br>Développeur front-end</p>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/in/nathan-sebelon-956488269/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/Nathan-sbl" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://nathan-sbl.github.io/" target="_blank"><i class="fas fa-globe"></i></a>
                </div>
            </div>
        </div>
        <div class="traductrice">
            <p>Mention spéciale à DENG Eliane pour son aide avec la traduction chinoise.</p>
        </div>
    </section>
    
    <!-- Présentation des jurys -->
    <section id="jury">
        <h1>Présentation des Jurys</h1>
        <div class="profil-container">
            <div class="profil">
                <img src="../assets/Img_Qui_sommes_nous/Ettayeb.jpg" alt="ETTAYEB Tewfik">
                <p><strong>ETTAYEB Tewfik</strong><br>RESPONSABLE DU FORUM UNESCO<br></p>
            </div>
            <div class="profil">
                <img src="../assets/Img_Qui_sommes_nous/Cessy.jpg" alt="CESSY David">
                <p><strong>CESSY David</strong><br>CHEF DU DÉPARTEMENT INFORMATIQUE DE L'IUT<br></p>
            </div>
            <div class="profil">
                <img src="../assets/Img_Qui_sommes_nous/Reby.jpg" alt="REBY Yann">
                <p><strong>REBY Yann</strong><br>ENSEIGNANT EN ANGLAIS<br></p>
            </div>
        </div>
    </section>

    <!-- Section de contact -->
    <?php
        include("../fr/contact.php");
    ?>

</main>

<?php
    include("../include/footer.inc.php");
?>

</body>
</html>
