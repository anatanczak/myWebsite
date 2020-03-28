<?php
// set the var to make active in navbarpossible
$pageName = "portfolio";
if (file_exists('../head.php')) {
    include '../head.php';
}
?>

<body class="body-portfolio">
    <div class="main-content-wrapper-portfolio">
        <div class="hero-image-and-title-wrapper-portfolio">
            <img class="hero-img-portfolio-desktop" src="../assets/images/hero-img-portfolio-desktop.jpg" alt="decorative hero image">
            <img class="hero-img-portfolio-tablet" src="../assets/images/hero-img-portfolio-ipad-vertical.jpg" alt="decorative hero image">
            <img class="hero-img-portfolio-mobile" src="../assets/images/hero-img-portfolio-mobile.jpg" alt="decorative hero image">
            <?php if (file_exists('../header.php')) {
                include '../header.php';
            } ?>
            <div class="h1-wrapper-portfolio">
                <h1 class="portfolio-h1">Bienvenue dans mon portfolio.</h1>
            </div>
        </div>

        <section class="section-meslistes">
            <div class="text-and-title-meslistes-wrapper">
                <h2 class="portfolio-title-h2">MESLISTES<span class="colored-dot-for-titles">.</span></h2>
                <p class="portfolio-p  meslistes-p">
                    MESLISTES c’est plus qu'une simple to-do list, c’est une application indispensable pour ceux qui ont du mal à rester organisés. On peut y créer plusieurs listes : les courses, les choses à faire, les films à regarder, les lieux à visiter ou encore les choses à ne pas oublier quand on part en voyage. Vous pouvez également prendre des photos d’objets et les ajouter à votre liste.
                    Il n’est pas nécessaire d'être un pro du smartphone pour utiliser cette application, elle très intuitive et facile à utiliser.</p>
                <p class="portfolio-p  meslistes-p">J’ai créé cette application avec Swift, le langage natif de la programmation iOS.</p>
                <p class="portfolio-p  meslistes-p">Vous pouvez télécharger cette application gratuitement sur l‘App Store.</p>
            </div>
            <div class="meslistes-img-darkmode-wrapper">
                <img class="meslistes-img-darkmode-deskt" src="../assets/images/meslistes-img-dm.jpg">
                <img class="meslistes-img-darkmode-tablet" srcset="../assets/images/meslistes-img-dm-tablet.jpg">
                <img class="meslistes-img-darkmode-mobile" src="../assets/images/meslistes-img-dm-mobile.jpg" alt="image of the app meslistes">
            </div>
            <div class="meslistes-video-wrapper">
                <video class="meslistes-video" controls>
                    <source src="../assets/videos/meslistes-video-dm.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="meslistes-dm-iphone-and-button-wrapper">
                <img class="meslistes-iphone-dm" src="../assets/images/meslistes-iphone-dm.jpg" alt="screenshot of the app meslistes">
                <img class="meslistes-iphone-dm-mobile" src="../assets/images/meslistes-iphone-dm-mobile.jpg" alt="screenshot of the app meslistes">
                <button class="meslistes-download-btn" onclick="window.location.href='https://apps.apple.com/us/app/meslistes-a-checklist-app/id1458475140'">MESLISTES IN App Store</button>
            </div>
            <div class="meslistes-lm-phones-wrapper">
                <img class="meslistes-iphones-lm-desktop" src="../assets/images/meslistes-iphones-lm-desktop.jpg" alt="Image of meslistes app in light mode">
                <img class="meslistes-iphones-lm-mobile" src="../assets/images/meslistes-lm-iphone-mobile.jpg" alt="Image of meslistes app in light mode">
            </div>
            <div class="meslistes-lm-wallpaper-wrapper">
                <img class="meslistes-wallpaper-lm-desktop" src="../assets/images/meslistes-wallpaper-lm-desktop.jpg" alt="Image of meslistes app in light mode">
                <img class="meslistes-wallpaper-lm-mobile" src="../assets/images/meslistes-wallpaper-lm-mobile.jpg" alt="Image of meslistes app in light mode">
            </div>
        </section>

        <section class="landing-page">
            <h2 class="portfolio-title-h2 portfolio-title-h2-landing-page">Blue Snail Landing Page<span class="colored-dot-for-titles">.</span></h2>
            <p class="portfolio-p portfolio-p-landing-page">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc varius ultricies metus, ac semper nulla iaculis non. In hac habitasse platea dictumst. Ut facilisis blandit interdum. Curabitur tempor urna vitae sapien luctus, vitae vulputate quam porttitor. Nulla venenatis arcu malesuada, euismod urna vitae, tristique mauris. Etiam ante nunc, scelerisque nec turpis sit amet, mollis blandit mi. In hac habitasse platea dictumst. Nam et efficitur risus. Curabitur vitae semper quam. Aenean id hendrerit augue. Curabitur dignissim varius eros finibus eleifend. Proin id pellentesque mauris, non posuere ligula. <a class="landing-page-link" href="https://bluesnailapp.com/landingpage/">Voir Blue Snail Landing Page <img class="landing-page-link-icon" src="../assets/images/link-icon-orange.svg" alt=""> </a> </p>
            <img class="landing-page-img-desktop" src="../assets/images/landing-page-desktop.jpg" alt="photo of Blue Snail landing page">
            <img class="landing-page-img-mobile" src="../assets/images/landing-page-mobile.jpg" alt="photo of Blue Snail landing page">
        </section>

        <section class="success-builder">
            <div class="succes-builder-img-and-text-wrapper">
                <div class="buddha-img-wrapper">
                    <img class="buddha-img" src="../assets/images/buddha.jpg" alt="photo of a flower and buddha">
                </div>

                <div class="success-builder-h2-p-wrapper">
                    <h2 class="portfolio-title-h2">Success Builder<span class="colored-dot-for-titles">.</span></h2>
                    <p class="portfolio-p">Success Builder est un projet d’application en cours de développement. Cette application est pour celles et ceux qui veulent changer leur manière de penser grâce à la répétition des affirmations positives - mantras.
                    </p>
                    <p class="portfolio-p">J’ai conçu Success Builder car je crois vivement que c’est en changeant nos pensées que l’on peut transformer nos vies.</p>
                    <p class="portfolio-p">Je travaille sur ce projet avec un ami qui débute en programmation iOS. Mon rôle dans le projet est le suivant : </p>
                    <ul class="portfolio-ul">
                        <li class="portfolio-p">Conception de l’application,</li>
                        <li class="portfolio-p">UI design,</li>
                        <li class="portfolio-p">Suivi du développement et du testing.</li>
                    </ul>
                    <img class="success-builder-phones-desktop-img" src="../assets/images/success-builder-phones-desktop.jpg" alt="images of sucess builder mockup">
                    <img class="success-builder-phones-mobile-img" src="../assets/images/success-builder-phones-mobile.jpg" alt="images of sucess builder mockup">
                </div>
            </div>
            <img class="success-builder-wallpaper-desktop-img" src="../assets/images/success-builder-wallpaper-desktop.jpg" alt="success-builder-wallpaper">
            <img class="success-builder-wallpaper-mobile-img" src="../assets/images/success-builder-wallpaper-mobile.jpg" alt="success-builder-wallpaper">

        </section>

        <?php if (file_exists('../footer.php')) {
            include_once '../footer.php';
        } ?>