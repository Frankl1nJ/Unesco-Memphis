<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>孟非斯 | 我们是谁？</title>
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
        <h1>项目介绍</h1>
        <p>欢迎来到我们致力于孟菲斯及其墓地遗产的网站，这是一个与联合国教科文组织合作的项目。 
           我们的目标是通过提供信息丰富的互动平台来宣传和保护这一历史遗址。
           通过我们的网站探索孟菲斯的历史、文化和建筑奇观。</p>
    </section>

    <!-- Présentation de l'équipe -->
    <section id="equipe">
        <h1>我们的队伍</h1>
        <div class="profil-container">
            <div class="profil">
                <img src="../assets/Img_Qui_sommes_nous/alexistelle.png" alt="TELLE Alexis">
                <p><strong>泰乐(Telle) 亚历克西(Alexis)</strong><br>项目经理、后端开发人员</p>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/in/alexis-telle/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/Galaktik-hub" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://perso-etudiant.u-pem.fr/~alexis.telle/portfolio" target="_blank"><i class="fas fa-globe"></i></a>
                </div>
            </div>
            <div class="profil">
                <img src="../assets/Img_Qui_sommes_nous/julien.png" alt="SYNAEVE Julien">
                <p><strong>斯纳艾维(Synaeve) 朱利安(Julien)</strong><br>前端开发经理</p>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/in/julien-synaeve" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/JulienS-Code" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://juliens-code.github.io/Portfolio/" target="_blank"><i class="fas fa-globe"></i></a>
                </div>
            </div>
            <div class="profil">
                <img src="../assets/Img_Qui_sommes_nous/raphael.png" alt="DAVIOT Raphaël">
                <p><strong>大历欧(Daviot) 拉斐尔(Raphaël)</strong><br>网页设计师和前端开发人员</p>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/in/raphael-daviot" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/RaphaelDAV" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://etudiant.u-pem.fr/~raphael.daviot/" target="_blank"><i class="fas fa-globe"></i></a>
                </div>
            </div>
            <div class="profil">
                <img src="../assets/Img_Qui_sommes_nous/nathan.png" alt="SEBELON Nathan">
                <p><strong>色本龙(Sebelon) 内森(Nathan)</strong><br>前端开发人员</p>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/in/nathan-sebelon-956488269/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/Nathan-sbl" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://nathan-sbl.github.io/" target="_blank"><i class="fas fa-globe"></i></a>
                </div>
            </div>
        </div>
        <div class="traductrice">
            <p>特别提及邓婉妍(Deng Eliane)为她的中文翻译</p>
        </div>
    </section>
    
    <!-- Présentation des jurys -->
    <section id="jury">
        <h1>评审团介绍</h1>
        <div class="profil-container">
            <div class="profil">
                <img src="../assets/Img_Qui_sommes_nous/Ettayeb.jpg" alt="ETTAYEB Tewfik">
                <p><strong>艾塔耶本(Ettayeb) 图菲克(Tewfik)</strong><br>联合国教科文组织论坛经理<br></p>
            </div>
            <div class="profil">
                <img src="../assets/Img_Qui_sommes_nous/Cessy.jpg" alt="CESSY David">
                <p><strong>塞希(Cessy) 大卫(David)</strong><br>IUT IT 部门负责人<br></p>
            </div>
            <div class="profil">
                <img src="../assets/Img_Qui_sommes_nous/Reby.jpg" alt="REBY Yann">
                <p><strong>乐比(Reby) 扬恩(Yann)</strong><br>英语老师<br></p>
            </div>
        </div>
    </section>

    <!-- Section de contact -->
    <?php
        include("../cn/contact.php");
    ?>

</main>

<?php
    include("../include/footer.inc.php");
?>

</body>
</html>
