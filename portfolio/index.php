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
          Meslistes is an elegant to-do list app that will make your life easier. The Intuitive interface brings simplicity into the process of creating checklists.
          No signup is required so you can start to organize your life right away. Just create your lists and add items to them. With an add-a-reminder feature, you will never forget your errands or shopping lists. For those of you who love having everything in the calendar don't worry there is this option for you, too.</p>
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
        <img src="../assets/images/meslistes-iphone-dm.jpg" alt="screenshot of the app meslistes">
        <button class="meslistes-download-btn">MESLISTES IN App Store</button>
      </div>
    </section>
    <?php if (file_exists('footer.php')) {
      include_once 'footer.php';
    } ?>