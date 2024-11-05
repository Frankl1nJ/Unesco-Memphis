<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Memphis | Accueil</title>
        <link rel="icon" type="image/png" href="../assets/Header-Footer/pyramide.png">
        <link rel="stylesheet" href="../css/accueil.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script type="text/javascript" src="../js/accueil.js" defer></script>
    </head>
    <body>

        <?php
            include("../include/header.inc.php");
        ?>

        <section id="title">
            <article>
                <p>MEMPHIS : PREMIERE <br> CAPITALE D'ÉGYPTE</p>
                <a href="activites.php?lang=fr#parcours">
                <div class="bouton">
                    <button type="button"> Découvrez nos parcours</button>
                </div>
                </a>
            </article>
        </section>
        
        <section id="carrousel">
            <div id="title-map">
                <p>Découvrir</p>
            </div>
            <div class="slide-container">
                <div class="custom-slider fade">
                    <a href="architecture.php?lang=fr">
                        <img class="slide-img" src="../assets/Img_Accueil/Caroussel_sphinx.jpg">
                    </a>
                    <div class="slide-text">
                        <h2>Sphinx d'Albâtre</h2>
                        Plongez dans l'histoire ancienne en explorant l'imposant Sphinx d'Albâtre, gardien silencieux des mystères de l'Égypte.
                    </div>
                </div>
                <div class="custom-slider fade">
                    <a href="activites.php?lang=fr#gastronomie">
                        <img class="slide-img" src="../assets/Img_Accueil/Caroussel_gastronomie.jpg">
                    </a>
                    <div class="slide-text">
                        <h2>Gastronomie</h2>
                        Éveillez vos papilles avec les saveurs authentiques de la gastronomie égyptienne, une aventure culinaire inoubliable.
                    </div>
                </div>
                <div class="custom-slider fade">
                    <a href="activites.php?lang=fr#parcours">
                        <img class="slide-img" src="../assets/Img_Accueil/Caroussel_chameau.jpg">
                    </a>
                    <div class="slide-text">
                        <h2>Parcours</h2>
                        Partez à l'aventure et découvrez des balades à dos de chameaux, une expérience unique au cœur des paysages égyptiens.
                    </div>
                </div>
                <div class="navigation">
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <div class="slide-dot">
                        <span class="dot" onclick="currentSlide(1)"></span> 
                        <span class="dot" onclick="currentSlide(2)"></span> 
                        <span class="dot" onclick="currentSlide(3)"></span> 
                    </div>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>                    
            </div>
        </section>

        <section id="map">
            <div id="google-map">
                <article id="title-google-map">
                    <h3>VUE SATELLITE DE MEMPHIS</h3>
                </article>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16074.360607992454!2d31.125267624909775!3d29.977201721068788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14584f7de239bbcd%3A0xca7474355a6e368b!2sPyramides%20de%20Gizeh!5e1!3m2!1sfr!2sfr!4v1702293492986!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <article id="descriptif">
                <h3>LA VILLE DE MEMPHIS</h3>
                <p>
                   Memphis (en arabe منف) était la capitale du premier nome de <b>Basse-Égypte</b>,
                   le nome de la Muraille blanche. Ses vestiges se situent près des villes 
                   de <b>Mit-Rahineh</b> et <b>d'Helwan</b>, au sud du <b>Caire</b>. La légende, rapportée par 
                   Manéthon, raconte que Memphis fut fondée par le roi Ménès vers -3000. 
                   Capitale de l’Égypte durant tout l’Ancien Empire, elle est restée une 
                   cité importante tout au long de l'histoire égyptienne, placée sous la 
                   protection du dieu Ptah.
                </p>
            </article>
        </section>
        <section id="img-transition">
        </section>
        <section id="CoeurCite">
            <article id="title-coeurcite">
                <div class="container">
                    <p>AU COEUR DE LA CITÉ</p>
                    <div class="line"></div>
                </div>
            </article>
                
            </div>

            <article id="set-images">
                <a href="architecture.php?lang=fr">
                <button type="button">En voir plus</button>
                </a>
            </article>
        </section>

        <section id="infos-pratiques">
                <div class="container">
                    <p>Informations pratiques</p>
                    <div class="line"></div>
                </div>
            <div id="container-infos-pratiques">
                <table id="menu-liste" cellpadding="20" cellspacing="20">
                    <tr>
                        <td><a href="carte.php?lang=fr">Les lieux <i class="fa-solid fa-arrow-right"></i></a></td>
                        <td><a href="https://fr.hotels.com/de10514200/hotel-quartier-memphis-gizeh-egypte/" class="card loger" target="_blank">Se loger <i class="fa-solid fa-arrow-right"></i></a></td>
                        
                    </tr>
                    <tr>
                        <td><a href="activites.php?lang=fr#gastronomie">Gastronomie <i class="fa-solid fa-arrow-right"></i></a></td>
                        <td><a href="https://www.cairotoptours.com/fr/Forfaits-voyage-en-Egypte/Circuits-accessibles-en-fauteuil-roulant-en-Egypte" target="_blank">Accès handicapés <i class="fa-solid fa-arrow-right"></i></a></td>
                    </tr>
                    <tr>
                        <td><a href="activites.php?lang=fr#parcours">Parcours <i class="fa-solid fa-arrow-right"></i></a></td>
                    </tr>
                </table>
                <img src="../assets/Img_Accueil/Infos_pratiques.jpg" alt="Image de touristes">
            </div>
        </section>

        <?php
            include("../include/footer.inc.php");
        ?>
    </body>
</html>
