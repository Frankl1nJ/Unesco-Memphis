<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, width=device-width">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inknut Antiqua:wght@500&display=swap');
            @import url("https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap");

            :root {
                --primary: #181009;
                --background: #191919;
                --slider: rgba(252, 191, 80, 0.877);
                --navbar-height: 80px;
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            html, body {
                width: 100%;
                overflow-x: hidden;
            }

            /**** Header ****/

            header {
                position: fixed;
                width: 100%;
                top: 0;
                z-index: 1000;
            }

            nav {
                background-color: var(--primary);
                color: white;
                display: flex;
                justify-content: space-evenly;
                align-items: center;
                height: var(--navbar-height);
            }

            nav .titre {
                font-size: calc(0.8rem + 1vw);
                text-decoration: underline;
                font-family: "Inknut Antiqua";
                min-width: 200px;
            }

            nav .titre a {
                text-decoration: none;
                color: white;
            }

            /* Header - Menu */
            nav .menu a.page {
                color: white;
                border-bottom: 1px solid transparent;
                transition: all 0.3s ease;
                text-decoration: none;
                background-image: linear-gradient(to right,
                        var(--slider),
                        var(--slider) 50%,
                        white 50%);
                background-size: 200% 100%;
                background-position: -100%;
                display: inline-block;
                padding: 3px 5px;
                margin: 0 0.5em 0 0.5em;
                position: relative;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                transition: all 0.2s ease-in-out;
            }

            nav .menu a.page:before {
                content: '';
                background: var(--slider);
                display: block;
                position: absolute;
                bottom: 1px;
                left: 0;
                width: 0;
                height: 4%;
                transition: all 0.2s ease-in-out;
            }

            nav .menu a.page:hover {
                background-position: 0;
            }

            nav .menu a:hover::before {
                width: 100%;
            } 

            nav .menu {
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-family: "Inter";
                font-size: calc(0.5rem + 0.6vw);
            }

            nav .menu li {
                display: flex;
                list-style: none;
                font-weight: bold;
                justify-content: center;
                align-items: center;
            }

            nav .menu i {
                margin: 0 0.5em 0 0;
            }

            nav .line {
                width: 2px;
                height: 30px;
                border-radius: 50px;
                background-color: white;
                margin: 0 0.5em 0 0.5em;
            }

            /* Header - Langues */
            nav .flag {
                display: none;
            }

            nav .langue a, .flag {
                text-decoration: none;
            }

            nav .langue img, .flag img {
                width: calc(1rem + 1.5vw);
                margin: 5px;
                max-width: 100px;
                min-width: 40px;
            }

            #icons {
                cursor: pointer;
                display: none;
            }

            /* Header - Responsive */
            @media (max-width: 1100px) {
                * {
                    margin: 0;
                    padding: 0; 
                    box-sizing: border-box;
                }
                nav {
                    justify-content: space-between;
                    padding: 0 20px;
                }
                #icons {
                    display: block;
                }
                #icons:before {
                    content: "\2630";
                    font-size: calc(1.5rem + 4vw);
                }
                .active #icons:before {
                    content: "\2715";
                    font-size: calc(1.5rem + 2vw);
                }
                nav ul.menu {
                    position: fixed;
                    left: -150%;
                    top: var(--navbar-height);
                    padding: 5px 0 5px 0;
                    flex-direction: column;
                    width: 100%;
                    text-align: center;
                    transition: 0.5s;
                    background-color: var(--primary);
                    opacity: 0.9;
                }
                nav .flag {
                    margin: 0;
                    padding: 0;
                    display: flex;
                }
                nav li {
                    padding: 5px 0;
                    font-size: calc(0.8rem + 0.8vw);
                }
                nav .menu .flags-responsive {
                    margin: 0;
                    padding: 0;
                    display: flex;
                }
                nav .menu .flags-responsive li {
                    padding: 0 5px;
                }
                header .langue {
                    display: none;
                }
                header .line {
                    display: none;
                }
                nav.active ul {
                    left: 0;
                }
            }
        </style>
    </head>
    <body>
        <header>
            <nav id="nav" class="">
            <?php
                $lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
                $translations = [
                    'en' => [
                        'title' => 'MEMPHIS',
                        'architecture' => 'Architecture',
                        'history' => 'History',
                        'map' => 'Map',
                        'activities' => 'Activities',
                        'info' => 'Practical Info'
                    ],
                    'fr' => [
                        'title' => 'MEMPHIS',
                        'architecture' => 'Architecture',
                        'history' => 'Histoire',
                        'map' => 'Carte',
                        'activities' => 'Activités',
                        'info' => 'Infos pratiques'
                    ],
                    'cn' => [
                        'title' => '孟非斯',
                        'architecture' => '建筑',
                        'history' => '历史',
                        'map' => '地图',
                        'activities' => '活动',
                        'info' => '有用信息'
                    ]
                ];
                $t = $translations[$lang];
            ?>

            <div class="titre">
                <a href="accueil.php?lang=<?php echo $lang; ?>"><?php echo $t['title']; ?></a>
            </div>
            <ul class="menu">
                <ul class="flags-responsive">
                    <a href="?lang=fr<?php 
                        if (isset($_GET['id'])) {
                            echo "&id=".$_GET['id'];
                        }
                    ?>" class="flag" id="fr">
                        <li>
                            <img src="../assets/Header-Footer/Fr.png" alt="Drapeau Français">
                        </li>
                    </a>
                    <a href="?lang=en<?php 
                        if (isset($_GET['id'])) {
                            echo "&id=".$_GET['id'];
                        }
                    ?>" class="flag" id="en">
                        <li>
                            <img src="../assets/Header-Footer/En.png" alt="Drapeau Anglais">
                        </li>
                    </a>
                    <a href="?lang=cn<?php 
                        if (isset($_GET['id'])) {
                            echo "&id=".$_GET['id'];
                        }
                    ?>" class="flag" id="cn">
                        <li>
                            <img src="../assets/Header-Footer/Cn.png" alt="Drapeau Chinois">
                        </li>
                    </a>
                </ul>
                <a href="architecture.php?lang=<?php echo $lang; ?>" class="page">
                    <li class="menu-item">
                        <i class="fa-solid fa-monument"></i>
                        <p><?php echo $t['architecture']; ?></p>
                    </li>
                </a>
                <div class="line"></div>
                <a href="histoire.php?lang=<?php echo $lang; ?>" class="page">
                    <li class="menu-item">
                        <i class="fa-solid fa-landmark"></i>
                        <p><?php echo $t['history']; ?></p>
                    </li>
                </a>
                <div class="line"></div>
                <a href="carte.php?lang=<?php echo $lang; ?>" class="page">
                    <li class="menu-item">
                        <i class="fa-regular fa-map"></i>
                        <p><?php echo $t['map']; ?></p>
                    </li>
                </a>
                <div class="line"></div>
                <a href="activites.php?lang=<?php echo $lang; ?>" class="page">
                    <li class="menu-item">
                        <i class="fa-solid fa-person-walking"></i>
                        <p><?php echo $t['activities']; ?></p>
                    </li>
                </a>
                <div class="line"></div>
                <a href="infos.php?lang=<?php echo $lang; ?>" class="page">
                    <li class="menu-item">
                        <i class="fa-solid fa-info"></i>
                        <p><?php echo $t['info']; ?></p>
                    </li>
                </a>
            </ul>
                <div class="langue">
                    <a href="?lang=fr<?php 
                        if (isset($_GET['id'])) {
                            echo "&id=".$_GET['id'];
                        }
                    ?>" id="fr">
                        <img src="../assets/Header-Footer/Fr.png" alt="Drapeau Français">
                    </a>
                    <a href="?lang=en<?php 
                        if (isset($_GET['id'])) {
                            echo "&id=".$_GET['id'];
                        }
                    ?>" id="en">
                        <img src="../assets/Header-Footer/En.png" alt="Drapeau Anglais">
                    </a>
                    <a href="?lang=cn<?php 
                        if (isset($_GET['id'])) {
                            echo "&id=".$_GET['id'];
                        }
                    ?>" id="cn">
                        <img src="../assets/Header-Footer/Cn.png" alt="Drapeau Chinois">
                    </a>
                </div>
                <div id="icons"></div>
            </nav>
        </header>

    </body>
    <script>
        const links = document.querySelectorAll("nav li");
        const nav = document.getElementById("nav");
        const icons = document.getElementById("icons");


        icons.addEventListener("click", () => {
            nav.classList.toggle("active");
        });

        links.forEach((link) => {
            link.addEventListener("click", () => {
                nav.classList.remove("active");
            });
        });

        document.addEventListener("click", (event) => {
            const navArea = nav.contains(event.target); // Vérifie si le clic est à l'intérieur du menu
            const iconsArea = icons.contains(event.target); // Vérifie si le clic est sur l'icône de menu

            if (!navArea && !iconsArea) {
                // Si le clic n'est ni dans le menu ni sur l'icône de menu, fermer le menu
                nav.classList.remove("active");
            }
        });
    </script>
</html>