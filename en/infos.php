<!DOCTYPE html>

<html lang="français">
    <head>
        <meta charset="utf-8">
        <title>Memphis | Pratical Info</title>
        <link rel="icon" type="image/png" href="../assets/Header-Footer/pyramide.png">
        <link rel="stylesheet" href="../css/infos.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php
            include("../include/header.inc.php");
        ?>
        <main>
            <h2>Practical informations</h2>
            <hr>
            <div class="container">
                <a href="carte.php?lang=en" class="card lieux">
                    <div class="slide">
                        <img src="../assets/Img_Infos/lieux.jpg"></img>
                    </div>
                    <div class="text"> 
                        <i class="fa-solid fa-arrow-up" id="up-arrow"></i>
                        Locations 
                        <i class="fa-solid fa-arrow-right" id="arrow-horizontal"></i>
                    </div>
                </a>
                
                <a href="activites.php?lang=en#gastronomie" class="card gastronomie">
                    <div class="slide">
                        <img src="../assets/Img_Infos/gastronomie.jpg"></img>
                    </div>
                    <div class="text">
                        <i class="fa-solid fa-arrow-left" id="arrow-horizontal"></i>
                        <i class="fa-solid fa-arrow-up" id="up-arrow"></i>
                        Gastronomy 
                    </div>
                </a>

                <a href="activites.php?lang=en#parcours" class="card parcours">
                    <div class="slide">
                        <img src="../assets/Img_Infos/parcours.jpeg"></img>
                    </div>
                    <div class="text">
                        <i class="fa-solid fa-arrow-up" id="up-arrow"></i>
                        Routes 
                        <i class="fa-solid fa-arrow-right" id="arrow-horizontal"></i>
                    </div>
                </a>
                
                <a href="https://fr.hotels.com/de10514200/hotel-quartier-memphis-gizeh-egypte/" class="card loger" target="_blank">
                    <div class="slide">
                        <img src="../assets/Img_Infos/loger.jpg"></img>
                    </div>
                    <div class="text">
                        <i class="fa-solid fa-arrow-left" id="arrow-horizontal"></i>
                        <i class="fa-solid fa-arrow-up" id="up-arrow"></i>
                        Accommodation
                    </div>
                </a>

                <a href="https://www.cairotoptours.com/Egypt-Day-Tours-and-Excursions/Egypt-Wheelchair-Accessible-Day-Tours" target="_blank" class="card handicape">
                    <div class="slide">
                        <img src="../assets/Img_Infos/accès.jpeg"></img>
                    </div>
                    <div class="text">
                        <i class="fa-solid fa-arrow-up" id="up-arrow"></i>
                        Disabled access
                        <i class="fa-solid fa-arrow-right" id="arrow-horizontal"></i>
                    </div>
                </a>
            </div>
        </main>
            

        <?php
            include("../include/footer.inc.php");
        ?>
    </body>
</html>
