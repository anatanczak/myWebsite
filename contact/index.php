<?php
// set the var to make active in navbarpossible
$pageName = "contact";
if (file_exists('../head.php')) {
  include '../head.php';
}
?>

<body class="body-contact">
  <div class="main-content-wrapper-contact">
    <?php if (file_exists('../header.php')) {
      include '../header.php';
    } ?>
    <img class="contact-background-img-desktop" src="../assets/images/contact-background-desktop.jpg" alt="background image with a phone handset">
    <img class="contact-background-img-tablet" src="../assets/images/contact-background-tablet.jpg" alt="background image with a phone handset">
    <img class="contact-background-img-mobile" src="../assets/images/contact-background-mobile.jpg" alt="background image with a phone handset">
    <form class="contact-form" action="#">

    </form>
    <div class="contact-info">
      <h1 class="contact-me-title">Me contacter.</h1>
      <div class="personal-info">
        <div class="personal-info-icon-wrapper">
          <img class="personal-info-icon" src="../assets/images/phone-icon.svg" alt="phone icon">
        </div>
        <p class="personal-info-p">+33 06 95 56 49 93</p>
      </div>
      <div class="personal-info">
        <div class="personal-info-icon-wrapper">
          <img class="personal-info-icon" src="../assets/images/email-icon.svg" alt="email icon">
        </div>
        <p class="personal-info-p">anatkachen@gmail.com</p>
      </div>
      <div class="personal-info">
        <div class="personal-info-icon-wrapper">
          <img class="personal-info-icon" src="../assets/images/github-icon.svg" alt="github icon">
        </div>
        <p class="personal-info-p">anaviktoriv</p>
      </div>
      <div class="personal-info">
        <div class="personal-info-icon-wrapper">
          <img class="personal-info-icon" src="../assets/images/linkedin-icon.svg" alt="linkedin icon">
        </div>
        <p class="personal-info-p">My linked in</p>
      </div>
    </div>

    <?php if (file_exists('../footer.php')) {
      include_once '../footer.php';
    } ?>