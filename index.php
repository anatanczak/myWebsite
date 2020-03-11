<?php
// set the var to make active in navbarpossible
$pageName = "homepage";
if (file_exists('head.php')) {
include 'head.php';
}
?>

<body class="body-accueil">
  <div class="content-wrapper">
    <img class="backgound-image" src="assets/images/background-homepage-2x.jpg" alt="background">
    <img class="background-image-tablet" src="assets/images/background-hp-tablet.jpg" alt="background">
    <!-- <a class="link-footer link-footer-right" id="footer-link-legal" href="mentions-legales/index.html">Mentions Légales</a> -->

    <?php if (file_exists('header.php')) {
    include 'header.php';
    } ?>

    <!-- main content -->

    <section class="main-content">
      <div class="title-wrapper">
        <h1 class="name">ANASTASIA TANCZAK</h1>
        <img class="decorative-line" src="assets/images/line.svg" alt="line-separator">
        <h2 class="job-title">développeur concepteur d'applications</h2>
      </div>

      <img class="img-my-photo-homepage-desktop" src="assets/images/my-photo-dt-homepage.png" alt="owner's photo">
      <img class="img-my-photo-homepage-mobile" src="assets/images/my-photo-hp-mobile.png" alt="owner's photo">
    </section>

    <?php if (file_exists('footer.php')) {
        include_once 'footer.php';
      } ?>
  <!-- </div>

  <script src="assets/js/script.js"></script>
</body>

</html> -->
