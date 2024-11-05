<!DOCTYPE html>

<html lang="français">
    <head>
        <meta charset="utf-8">
        <title>Memphis | Architecture</title>
        <link rel="icon" type="image/png" href="../assets/Header-Footer/pyramide.png">
        <link rel="stylesheet" href="../css/architecture.css">
        
    </head>
    <body>
        <?php
            include("../include/header.inc.php");
        ?>

        <div class="section_monument">
            <div class="container">
                <div class="titre1"><p>MONUMENTS</p></div>
                <div class="line"></div>
            </div>

            <div class="row_monument">
                <div class="monument">                    
                    <div class="monument-content" data-text="The Great Pyramid of Cheops is the oldest of the Seven Wonders of the World and the only one to have survived almost intact.">
                        <img src="../assets/Img_Architecture/archi1.png" alt="Pyramides de Gizeh">
                        <div class="monument-title">Pyramids of Giza</div>
                    </div>
                    <div class="monument-description">
                        The Pyramids of Giza, among the Seven Wonders of the Ancient World, remain the most famous structures in Memphis. Built to house the tombs of the pharaohs Khufu, Khafren and Mykerinos, they are masterpieces of ancient Egyptian architecture.
                    </div>                
                </div>

                <div class="monument">                    
                    <div class="monument-content" data-text="A legend tells that the Sphinx poses an enigma to all those who wish to enter the necropolis, and only those who answer correctly can pass.">
                        <img src="../assets/Img_Architecture/archi2.png" alt="Sphinx de Gizeh">
                        <div class="monument-title">Sphinx of Giza</div>
                    </div>
                    <div class="monument-description">
                        The Sphinx of Giza, an imposing sculpture with the body of a lion and the head of a pharaoh, is one of the most emblematic symbols of ancient Egypt. The silent guardian of the Giza pyramids, it measures 73 metres long and 20 metres high.
                    </div>
                </div>
            </div>

            <div class="row_monument">
                <div class="monument">                    
                    <div class="monument-content" data-text="The Temple of Ptah was once surrounded by lush gardens and sacred pools, where priests performed purification rituals.">
                        <img src="../assets/Img_Architecture/archi3.png" alt="Temple de Ptah">
                        <div class="monument-title">Temple of Ptah</div>
                    </div>
                    <div class="monument-description">
                        The Temple of Ptah, dedicated to the creator god, is another Memphis treasure. Built in the heart of the city, it symbolizes the religious devotion and political power of ancient Egypt.
                    </div>                
                </div>

                <div class="monument">            
                    <div class="monument-content" data-text="The Serapeum was discovered by Egyptologist Auguste Mariette in 1850, after he followed a lead found in ancient texts.">
                        <img src="../assets/Img_Architecture/archi4.png" alt="Serapeum de Saqqarah">
                        <div class="monument-title">Saqqara Serapeum</div>
                    </div>
                    <div class="monument-description">
                        The Serapeum at Saqqara is an underground complex that housed the sacred tombs of the Apis bulls, worshipped as manifestations of the god Ptah. The vast galleries feature monumental granite sarcophagi.
                    </div>
                </div>
            </div>

            <div class="row_monument">
                <div class="monument">                
                    <div class="monument-content" data-text="This 10-metre-high statue was moved in 1955 from the Temple of Ptah to the Memphis Museum to protect it from flooding.">
                        <img src="../assets/Img_Architecture/archi5.png" alt="Colossus of Ramses II">
                        <div class="monument-title">Colossus of Ramses II</div>
                    </div>
                    <div class="monument-description">
                        The Colossus of Ramses II, a huge statue of the pharaoh, once stood at the entrance to the Temple of Ptah. It embodies the power and authority of the pharaoh.
                    </div>                    
                </div>

                <div class="monument">            
                    <div class="monument-content" data-text="The enclosures feature stone reproductions of the reed pavilions and wooden structures previously used, symbolizing the transition to more sustainable architecture.">
                        <img src="../assets/Img_Architecture/archi6.png" alt="Enceintes de Djoser">
                        <div class="monument-title">Djoser's enclosures</div>
                    </div>
                    <div class="monument-description">
                        The Djoser Enclosures are a complex of walls and buildings built around the Step Pyramid of Djoser. They represent one of the earliest examples of monumental stone architecture.
                    </div>
                </div>
            </div>
        </div>
        
        <section id="img-transition"></section>

        <section class="urbanism">
            <div class="container">
                <div class="titre"><p>URBANISM AND <br> HERITAGE</p></div>
                <div class="line"></div>
            </div>
            
            <div class="cadre">
                <div class="texte">
                    <p>
                    In Memphis, Egypt, urban planning and heritage intertwine in a timeless dance, reflecting the millennia of history that have shaped this ancient city. 
                    </p>
                    <p id="moreText2">
                        <br>Founded over 4,000 years ago, Memphis was the capital of ancient Egypt, the cradle of Pharaonic civilization. 
                        Today, its ruins and archaeological remains bear witness to its glorious past. 
                        Urban planning in Memphis can be seen in the remains of the great temple of Ptah, dedicated to the creator god, and in the majestic alignment of sphinxes that once lined the entrance to the city. 
                        <br><br> These imposing structures tell the story of the planned urbanism and architectural ingenuity that characterized ancient Egypt. 
                        The heritage of Memphis is palpable in the open-air museum that has become the archaeological site, housing colossal statues, engraved stelae and royal tombs. 
                        Every stone, every hieroglyph evokes the past grandeur of Memphis as a political, religious and cultural center. 
                        Memphis' urban planning and heritage combine to offer visitors a captivating plunge into the roots of Egyptian civilization.
                    </p> 
                    <div id="lirePlusBtnContainer">
                        <button class="lirePlusBtn" id="lirePlusBtn2" onclick="afficherTexteCompletEn()">Read more</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="A_lire">
            <div class="container">
                <div class="titre2"><p>ALSO READ</p></div>
                <div class="line"></div>
            </div>
            <div id="title-map">
                <div class="slide-container">
                    <?php
                        include("../include/connexion.inc.php");
                        global $cnx;
                        $req = $cnx->query("SELECT id FROM article_fr");
                        $id_array = [];
                        // Récupération de tous les ids d'articles dispos
                        while ($ligne = $req->fetch(PDO::FETCH_OBJ)) {
                            $id_array[] = $ligne->id;
                        }
                        // On en prend trois au pif
                        $random_ids = array_rand($id_array, 3);
                        $article1 = $id_array[$random_ids[0]];
                        $article2 = $id_array[$random_ids[1]];
                        $article3 = $id_array[$random_ids[2]];

                        // On récupère les titres des articles
                        $req = $cnx->query("SELECT titre FROM article_en WHERE id=$article1");
                        $ligne = $req->fetch(PDO::FETCH_OBJ);
                        $titre1 = $ligne->titre;

                        $req = $cnx->query("SELECT titre FROM article_en WHERE id=$article2");
                        $ligne = $req->fetch(PDO::FETCH_OBJ);
                        $titre2 = $ligne->titre;

                        $req = $cnx->query("SELECT titre FROM article_en WHERE id=$article3");
                        $ligne = $req->fetch(PDO::FETCH_OBJ);
                        $titre3 = $ligne->titre;
                    ?>
                    <div class="custom-slider fade">
                        <a href="article.php?lang=en&id=<?php echo $article1;?>">
                            <img class="slide-img" src="../assets/Img_Article/<?php echo $article1;?>.jpg">
                        </a>
                        <div class="slide-text">
                            <h2><?php echo $titre1;?></h2>
                        </div>
                    </div>

                    <div class="custom-slider fade">
                        <a href="article.php?lang=en&id=<?php echo $article2;?>">
                            <img class="slide-img" src="../assets/Img_Article/<?php echo $article2;?>.jpg">
                        </a>
                        <div class="slide-text">
                            <h2><?php echo $titre2;?></h2>
                        </div>
                    </div>

                    <div class="custom-slider fade">
                        <a href="article.php?lang=en&id=<?php echo $article3;?>">
                            <img class="slide-img" src="../assets/Img_Article/<?php echo $article3;?>.jpg">
                        </a>
                        <div class="slide-text">
                            <h2><?php echo $titre3;?></h2>
                        </div>
                    </div>
                    <div class="custom-slider fade">
                        <a href="https://www.nationalgeographic.fr/histoire/2023/02/une-deuxieme-momie-couverte-dor-decouverte-dans-la-necropole-de-saqqarah#:~:text=Deux%20momies%20ont%20%C3%A9t%C3%A9%20d%C3%A9couvertes,d'environ%204%20300%20ans.&text=La%20n%C3%A9cropole%20de%20Saqqarah%20a,ans%20par%20la%20civilisation%20%C3%A9gyptienne." target="_blank">
                            <img class="slide-img" src="../assets/Img_Histoire/article1.jpg">
                        </a>
                        <div class="slide-text">
                            <div>Archeology</div>
                            <p>Discovery of a 4,300-year-old mummy wrapped in gold</p>
                        </div>
                    </div>
                    <div class="custom-slider fade">
                    <a href="https://www.geo.fr/histoire/des-scientifiques-egyptiens-deballent-numeriquement-la-momie-du-pharaon-amenhotep-ier-pour-la-premiere-fois-en-3-000-ans-207649#:~:text=Pour%20la%20premi%C3%A8re%20fois%20en%20trois%20mill%C3%A9naires%2C%20des%20scientifiques%20%C3%A9gyptiens,2021%20dans%20Frontiers%20in%20Medicine." target="_blank">                            <img class="slide-img" src="../assets/Img_Histoire/article2.jpg">
                        </a>
                        <div class="slide-text">
                            <div>Research</div>
                            <p>Scientists digitally "unpack" the mummy of Amenhotep I for the first time in 3,000 years</p>
                        </div>
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <div class="slide-dot">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                </div>
            </div>
        </section>         

        <?php
            include("../include/footer.inc.php");
        ?>

        <script src="../js/architecture.js"></script>
    </body>
</html>
