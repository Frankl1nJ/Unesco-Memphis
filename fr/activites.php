<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Memphis | Activités</title>
        <link rel="icon" type="image/png" href="../assets/Header-Footer/pyramide.png">
        <link rel="stylesheet" href="../css/activites.css">        
    </head>
    <body>
        <?php
            include("../include/header.inc.php");
        ?>

        <main>
            <section id="img-intro">
                <p>Que faire durant votre <br> séjour ?</p>
            </section>
            
            <section id="activites">
                <h1>LES ACTIVITÉS AUTOUR DE MEMPHIS</h1>    
                <h2>Sites historiques et culturels</h2>
                <div class="carousel-container sites-historiques" id="sites-historiques">
                    <a href ="https://www.egipto.com/fr/monuments/memphis/" class="carousel-slide" target="_blank">
                        <img src="../assets/Img_Activites/histoire1.jpg" alt="Image 1">
                        <p>Visite des ruines de Memphis</p>
                    </a>
                    
                    <a href="https://www.mitrahinamuseum.com/" class="carousel-slide" target="_blank">
                            <img src="../assets/Img_Activites/histoire2.jpg" alt="Image 1">
                            <p>Exploration du Musée de Mit Rahina</p>
                    </a>
                    <a href="https://www.getyourguide.fr/saqqarah-l2297/excursions-a-la-journee-tc172/" class="carousel-slide" target="_blank">
                        <img src="../assets/Img_Activites/histoire3.jpg" alt="Image 1">
                        <p>Excursion à Saqqarah</p>
                    </a>
                    <a href="https://www.tripadvisor.fr/Attraction_Review-g294202-d317746-Reviews-Pyramids_of_Giza-Giza_Giza_Governorate.html" class="carousel-slide" target="_blank">
                        <img src="../assets/Img_Activites/histoire4.jpg" alt="Image 1">
                        <p>Balade dans la nécropole de Gizeh</p>
                    </a>
                    <a href="https://visit-gem.com/en/home" class="carousel-slide" target="_blank">
                        <img src="../assets/Img_Activites/histoire5.jpg" alt="Image 1">
                        <p>Visite du Grand musée égyptien de Memphis</p>
                    </a>                                
                </div>

                <h2>Loisirs et divertissements</h2>
                <div class="carousel-container loisirs-divertissements" id="loisirs">
                    <a href="https://www.tripadvisor.fr/AttractionProductReview-g294201-d11464748-Felucca_Sailing_trip_on_the_Nile_in_Cairo-Cairo_Cairo_Governorate.html" class="carousel-slide" target="_blank">
                        <img src="../assets/Img_Activites/loisir1.jpg" alt="Image 1">
                        <p>Balade en felouque sur le Nil</p>
                    </a>                    
                    <a href="https://www.tripadvisor.fr/AttractionProductReview-g294201-d12567195-Sound_and_Light_Show_at_Giza_Pyramids-Cairo_Cairo_Governorate.html" class="carousel-slide" target="_blank">
                            <img src="../assets/Img_Activites/loisir2.jpg" alt="Image 1">
                            <p>Spectacle de son et lumière aux pyramides de Gizeh</p>
                    </a>
                    <a href="https://www.tripadvisor.fr/AttractionProductReview-g294201-d13186925-VIP_Private_Tour_Giza_Pyramids_Sphinx_Camel_Ride_and_Quad_Bike-Cairo_Cairo_Governo.html" class="carousel-slide" target="_blank">
                        <img src="../assets/Img_Activites/loisir3.jpg" alt="Image 1">
                        <p>Excursion en quad dans le désert</p>
                    </a>
                    <a href="https://www.tripadvisor.fr/AttractionProductReview-g294201-d13186925-VIP_Private_Tour_Giza_Pyramids_Sphinx_Camel_Ride_and_Quad_Bike-Cairo_Cairo_Governo.html" class="carousel-slide" target="_blank">
                        <img src="../assets/Img_Activites/loisir4.jpg" alt="Image 1">
                        <p>Safari en chameau dans le désert</p>
                        
                    </a>
                    <a href="https://www.viator.com/fr-FR/tours/Luxor/Sunrise-VIP-Hot-air-Balloon-Ride-with-Sunset-Felucca-ride/d826-128688P14" class="carousel-slide" target="_blank">
                        <img src="../assets/Img_Activites/loisir5.jpg" alt="Image 1">
                        <p>Tour en montgolfière au-dessus des pyramides</p>
                    </a>
                    <a href="https://www.tripadvisor.com/AttractionProductReview-g294201-d15040591-Cairo_dinner_show_with_belly_dancer_show_on_Nile_river-Cairo_Cairo_Governorate.html" class="carousel-slide" target="_blank">
                        <img src="../assets/Img_Activites/loisir6.jpg" alt="Image 1">
                        <p>Spectacle de danse orientale traditionnelle</p>
                    </a>                                
                </div>

                <h2>Cuisine et gastronomie locales</h2>
                <div class="carousel-container gastronomie" id="gastronomie">
                    <a href="https://www.tripadvisor.fr/Restaurant_Review-g294201-d786134-Reviews-Felfela-Cairo_Cairo_Governorate.html" class="carousel-slide" target="_blank">
                        <img src="../assets/Img_Activites/cuisine2.jpeg" alt="Image 1">
                        <p><b>Felfela</b> <br>Spécialités: 'Mezze', 'Shawarma' et 'Molokhia'</p>
                    </a>
                    <a href="https://www.tripadvisor.fr/Restaurant_Review-g294201-d1944490-Reviews-Khan_El_Khalili_Restaurant_Naguib_Mahfouz_Cafe-Cairo_Cairo_Governorate.html" class="carousel-slide" target="_blank">
                        <img src="../assets/Img_Activites/cuisine3.jpg" alt="Image 1">
                        <p><b>Naguib Mahfouz Café</b> <br>Spécialités: 'Hawawshi', 'Fattah' et 'Mahshi'</p>
                    </a>
                    <a href="https://www.tripadvisor.fr/Restaurant_Review-g294201-d2727835-Reviews-Kazaz_Restaurant-Cairo_Cairo_Governorate.html" class="carousel-slide" target="_blank">
                        <img src="../assets/Img_Activites/cuisine4.jpeg" alt="Image 1">
                        <p><b>Kazaz</b> <br>Spécialités: 'Kofta', 'Wara'Enab' et 'Kebab'</p>
                        
                    </a>
                    <a href="https://www.tripadvisor.fr/Restaurant_Review-g294201-d3418985-Reviews-Abu_Shakra-Cairo_Cairo_Governorate.html" class="carousel-slide" target="_blank">
                        <img src="../assets/Img_Activites/cuisine1.jpg" alt="Image 1">
                        <p><b>Abu Shakra</b> <br>Spécialités: 'Foul', 'Tameya' et 'Koshari'</p>
                    </a>
                    <a href="https://www.tripadvisor.fr/Restaurant_Review-g294202-d15757754-Reviews-Andrea_El_Haram-Giza_Giza_Governorate.html" class="carousel-slide" target="_blank">
                        <img src="../assets/Img_Activites/cuisine5.jpg" alt="Image 1">
                        <p><b>Andrea el-Marei </b> <br>Spécialités: 'Feseekh', 'Sayadeyab' et 'Mulukhiyah'</p>
                    </a>
                    <a href="https://www.tripadvisor.fr/Restaurant_Review-g294201-d3398031-Reviews-Zooba-Cairo_Cairo_Governorate.html" class="carousel-slide" target="_blank">
                        <img src="../assets/Img_Activites/cuisine6.jpg" alt="Image 1">
                        <p><b>Zooba </b> <br>Spécialités: 'Ta'ameya', 'Basbousa' et 'Hawawshi'</p>
                    </a>                                
                </div>

                <h2>Artisanat et shopping</h2>
                <div class="carousel-container artisanat-shopping" id="artisanat">
                    <a href="https://www.tripadvisor.fr/Attraction_Review-g294201-d12268605-Reviews-Place_Des_Arts_art_center-Cairo_Cairo_Governorate.html" class="carousel-slide" target="_blank">
                        <img src="../assets/Img_Activites/shopping1.jpg" alt="Image 1">
                        <p>Cours de poterie traditionnelle</p>
                    </a>                        
                    <a href="https://www.tripadvisor.fr/Attraction_Review-g294201-d19745704-Reviews-Mamluk_Jewellery_and_Bazaar-Cairo_Cairo_Governorate.html" class="carousel-slide" target="_blank">
                            <img src="../assets/Img_Activites/shopping2.jpg" alt="Image 1">
                            <p>Fabrication de bijoux égyptiens</p>
                    </a>
                    <a href="https://www.tripadvisor.fr/Attraction_Review-g294201-d308884-Reviews-Khan_Al_Khalili-Cairo_Cairo_Governorate.html" class="carousel-slide" target="_blank">
                        <img src="../assets/Img_Activites/shopping3.jpg" alt="Image 1">
                        <p>Exploration des marchés aux épices et aux tissus</p>
                    </a>
                    <a href="https://www.tripadvisor.fr/AttractionProductReview-g294201-d13001531-Papyrus_Manufacturing_Tour_and_Papyrus_Making_Demonstration-Cairo_Cairo_Governorat.html" class="carousel-slide" target="_blank">
                        <img src="../assets/Img_Activites/shopping4.jpg" alt="Image 1">
                        <p>Visite d'une fabrique de papyrus</p>
                        
                    </a>
                    <a href="https://g.co/kgs/QgMVi2v" class="carousel-slide" target="_blank">
                        <img src="../assets/Img_Activites/shopping5.jpeg" alt="Image 1">
                        <p>Shopping de tapis et de tissus traditionnels</p>
                    </a>
                    <a href="https://www.tripadvisor.fr/Attraction_Review-g294201-d553197-Reviews-Perfume_Factory-Cairo_Cairo_Governorate.html" class="carousel-slide" target="_blank">
                        <img src="../assets/Img_Activites/shopping6.jpg" alt="Image 1">
                        <p>Achat de parfums égyptiens traditionnels</p>
                    </a>
                </div>
            </section>
            
            <section id="parcours">
                <section id="img-transition"></section>    
                <section id="activites2">
                    <h1>NOS PARCOURS</h1> 
                    <h2>Parcours à thèmes</h2>
                    <div class="carousel-container parcours" id="parcours">
                        <a href="article.php?lang=fr&id=8" class="carousel-slide2">
                            <img src="../assets/Img_Activites/parcours1.jpg">
                            <p>Parcours historique</p>
                        </a>
                        <a href="article.php?lang=fr&id=10" class="carousel-slide2">
                            <img src="../assets/Img_Activites/parcours2.jpeg">
                            <p>Parcours aventure</p>
                        </a>
                        <a href="article.php?lang=fr&id=11" class="carousel-slide2">
                            <img src="../assets/Img_Activites/parcours3.jpg">
                            <p>Parcours culinaire</p>
                        </a>
                        <a href="article.php?lang=fr&id=12" class="carousel-slide2">
                            <img src="../assets/Img_Activites/parcours4.jpeg">
                            <p>Parcours romantique</p>
                        </a>
                        <a href="article.php?lang=fr&id=13" class="carousel-slide2">
                            <img src="../assets/Img_Activites/parcours5.jpeg">
                            <p>Parcours familial</p>
                        </a>          
                    </div>

                    <h2>Parcours à durée</h2>
                    <div class="carousel-container3">
                        <a href="article.php?lang=fr&id=5" class="carousel-slide3"><img src="../assets/Img_Activites/parcours6.jpg"></img><p>Parcours d'<b>1</b> journée </p></a>
                        <a href="article.php?lang=fr&id=6" class="carousel-slide3"><img src="../assets/Img_Activites/parcours7.jpg"></img><p>Parcours de <b>2</b> jours</p> </a>
                        <a href="article.php?lang=fr&id=7" class="carousel-slide3"><img src="../assets/Img_Activites/parcours8.jpg"></img><p>Parcours de <b>3</b> jours</p></a>                 
                        <a href="article.php?lang=fr&id=4" class="carousel-slide3"><img src="../assets/Img_Activites/parcours9.jpg"></img><p>Parcours d'<b>1</b> semaine</p> </a>
                    </div>
                </section>
            </section>
        </main>    

        <?php
            include("../include/footer.inc.php");
        ?>
    </body>
</html>
