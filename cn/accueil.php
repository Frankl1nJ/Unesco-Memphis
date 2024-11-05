<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>孟非斯 | 首页</title>
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
                <p>孟非斯 ：第一个<br> 埃及的首都</p>
                <a href="activites.php?lang=cn#parcours">
                <div class="bouton">
                    <button type="button"> 探索行程线路</button>
                </div>
                </a>
            </article>
        </section>
        
        <section id="carrousel">
        <div id="title-map">
                <p>发现</p>
            </div>
            <div class="slide-container">
                <div class="custom-slider fade">
                    <a href="architecture.php?lang=cn">
                        <img class="slide-img" src="../assets/Img_Accueil/Caroussel_sphinx.jpg">
                    </a>
                    <div class="slide-text">
                        <h2>阿尔巴特雷狮身人面像</h2>
                            探索雄伟的狮身人面像--埃及神秘的无声守护者时，沉浸在古老的历史中。
                    </div>
                </div>
                <div class="custom-slider fade">
                    <a href="activites.php?lang=cn#gastronomie">
                        <img class="slide-img" src="../assets/Img_Accueil/Caroussel_gastronomie.jpg">
                    </a>
                    <div class="slide-text">
                        <h2>美食</h2>
                            埃及美食唤醒您的味蕾，这是一次难忘的美食之旅。
                    </div>
                </div>
                <div class="custom-slider fade">
                    <a href="activites.php?lang=cn#parcours">
                        <img class="slide-img" src="../assets/Img_Accueil/Caroussel_chameau.jpg">
                    </a>
                    <div class="slide-text">
                        <h2>行程路线</h2>
                        踏上探险之旅，体验骑骆驼的乐趣，在埃及风景的中心地带感受独一无二的体验。
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
                    <h3>孟菲斯卫星视图</h3>
                </article>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16074.360607992454!2d31.125267624909775!3d29.977201721068788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14584f7de239bbcd%3A0xca7474355a6e368b!2sPyramides%20de%20Gizeh!5e1!3m2!1sfr!2sfr!4v1702293492986!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <article id="descriptif">
                <h3>孟菲斯市</h3>
                <p>
                孟菲斯（阿拉伯语 منف）是<b>下埃及</b>第一个行政区划（白墙行政区划）
                的首都。它的遗骸位于<b>米特拉希纳</b>和<b>赫勒万</b>，<b>开罗</b>南边，附近。
                据曼内托报道，传说孟菲斯是由美尼斯国王于公元前 3000 年左右建立的。
                它是整个古王国时期埃及的首都，在埃及历史上一直是一座重要的城市，受到普塔神的保护。
                </p>
            </article>
        </section>
        <section id="img-transition">
        </section>
        <section id="CoeurCite">
            <article id="title-coeurcite">
                <div class="container">
                    <p>城市中心</p>
                    <div class="line"></div>
                </div>
            </article>
            <article id="set-images">
                <a href="architecture.php?lang=cn">
                <button type="button">了解更多</button>
                </a>
            </article>
        </section>

        <section id="infos-pratiques">
            <p>有用信息</p>
            <div id="container-infos-pratiques">
                <table id="menu-liste" cellpadding="20" cellspacing="20">
                    <tr>
                        <td><a href="carte.php?lang=cn">景点 <i class="fa-solid fa-arrow-right"></i></a></td>
                        <td><a href="https://fr.hotels.com/de10514200/hotel-quartier-memphis-gizeh-egypte/" class="card loger" target="_blank"">住房 <i class="fa-solid fa-arrow-right"></i></a></td>
                        
                    </tr>
                    <tr>
                        <td><a href="activites.php?lang=cn#gastronomie">美食 <i class="fa-solid fa-arrow-right"></i></a></td>
                        <td><a href="https://www.cairotoptours.com/Egypt-Day-Tours-and-Excursions/Egypt-Wheelchair-Accessible-Day-Tours" target="_blank">残疾人通道 <i class="fa-solid fa-arrow-right"></i></a></td>
                    </tr>
                    <tr>
                        <td><a href="activites.php?lang=cn#parcours">行程路线 <i class="fa-solid fa-arrow-right"></i></a></td>
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
