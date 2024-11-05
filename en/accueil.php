<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Memphis | Home</title>
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
                <p>MEMPHIS : EGYPT'S <br> FIRST CAPITAL CITY</p>
                <a href="activites.php?lang=en#parcours">
                <div class="bouton">
                    <button type="button">Discover our routes</button>
                </div>
                </a>
            </article>
        </section>
        
        <section id="carrousel">
            <div id="title-map">
                <p>Discover</p>
            </div>
            <div class="slide-container">
                <div class="custom-slider fade">
                    <a href="architecture.php?lang=en">
                        <img class="slide-img" src="../assets/Img_Accueil/Caroussel_sphinx.jpg">
                    </a>
                    <div class="slide-text">
                        <h2>Albatre sphinx</h2>
                        Immerse yourself in ancient history as you explore the imposing Sphinx d'Albatre, silent guardian of Egypt's mysteries.
                    </div>
                </div>
                <div class="custom-slider fade">
                    <a href="activites.php?lang=en#gastronomie">
                        <img class="slide-img" src="../assets/Img_Accueil/Caroussel_gastronomie.jpg">
                    </a>
                    <div class="slide-text">
                        <h2>Gastronomy</h2>
                        Awaken your taste buds with the authentic flavours of Egyptian gastronomy, an unforgettable culinary adventure.
                    </div>
                </div>
                <div class="custom-slider fade">
                    <a href="activites.php?lang=en#parcours">
                        <img class="slide-img" src="../assets/Img_Accueil/Caroussel_chameau.jpg">
                    </a>
                    <div class="slide-text">
                        <h2>Routes</h2>
                        Go on an adventure and discover camel rides, a unique experience in the heart of the Egyptian landscape.
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
                    <h3>SATELLITE VIEW OF MEMPHIS</h3>
                </article>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16074.360607992454!2d31.125267624909775!3d29.977201721068788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14584f7de239bbcd%3A0xca7474355a6e368b!2sPyramides%20de%20Gizeh!5e1!3m2!1sfr!2sfr!4v1702293492986!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <article id="descriptif">
                <h3>THE CITY OF MEMPHIS</h3>
                <p>
                   Memphis (in arabic منف) was the first ever nome's capital of <b>Lower Egypt</b>,
                   the Inebu-hedj. Its remains are located near the cities of
                   <b>Mit-Rahineh</b> and <b>Helwan</b>, in the South of <b>Caire</b>. The legend, told by 
                   Manetho, says that Memphis was founded by the king Menes around -3000. 
                   Capital city of Egypt during the Ancient Empire, she remained an important city all throughout
                   the long Egyptian history, placed under the protection of the god Ptah.
                </p>
            </article>
        </section>
        <section id="img-transition">
        </section>
        <section id="CoeurCite">
            <article id="title-coeurcite">
                <div class="container">
                    <p>WITHIN THE CITY</p>
                    <div class="line"></div>
                </div>
            </article>
            <article id="set-images">
                <a href="architecture.php?lang=en">
                <button type="button">See more</button>
                </a>
            </article>
        </section>

            

        <section id="infos-pratiques">
            <p>Useful Informations</p>
            <div id="container-infos-pratiques">
                <table id="menu-liste" cellpadding="20" cellspacing="20">
                    <tr>
                        <td><a href="carte.php?lang=en">The spots <i class="fa-solid fa-arrow-right"></i></a></td>
                        <td><a href="https://fr.hotels.com/de10514200/hotel-quartier-memphis-gizeh-egypte/" class="card loger" target="_blank">Renting <i class="fa-solid fa-arrow-right"></i></a></td>
                        
                    </tr>
                    <tr>
                        <td><a href="activites.php?lang=en#gastronomie">Gastronomy <i class="fa-solid fa-arrow-right"></i></a></td>
                        <td><a href="https://www.cairotoptours.com/Egypt-Day-Tours-and-Excursions/Egypt-Wheelchair-Accessible-Day-Tours" target="_blank">Reduced mobility access <i class="fa-solid fa-arrow-right"></i></a></td>
                    </tr>
                    <tr>
                        <td><a href="activites.php?lang=en#parcours">Routes <i class="fa-solid fa-arrow-right"></i></a></td>
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
