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
        <h2 class="meslistes-title">MESLISTES.</h2>
        <p class="meslistes-p">
          MESLISTES c’est plus qu'une simple to-do list, c’est une application indispensable pour ceux qui ont du mal à rester organisés. On peut y créer plusieurs listes : les courses, les choses à faire, les films à regarder, les lieux à visiter ou encore les choses à ne pas oublier quand on part en voyage. Vous pouvez également prendre des photos d’objets et les ajouter à votre liste.
          Il n’est pas nécessaire d'être un pro du smartphone pour utiliser cette application, elle très intuitive et facile à utiliser.</p>
        <p class="meslistes-p">J’ai créé cette application avec Swift, le langage natif de la programmation iOS.</p>
        <p class="meslistes-p">Vous pouvez télécharger cette application gratuitement sur l‘App Store.</p>
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

    <?php if (file_exists('../footer.php')) {
      include_once '../footer.php';
    } ?>