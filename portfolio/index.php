<?php
// set the var to make active in navbarpossible
$pageName = "portfolio";
if (file_exists('../head.php')) {
include '../head.php';
}
?>

<body class="body-accueil">
  <div class="main-content-wrapper-portfolio">
<div class="hero-image-and-title-wrapper-portfolio">
  <img class="hero-img-portfolio-desktop" src="../assets/images/hero-img-portfolio-desktop.jpg" alt="decorative hero image">
  <img class="hero-img-portfolio-tablet" src="../assets/images/hero-img-portfolio-ipad-vertical.jpg" alt="decorative hero image">
  <img class="hero-img-portfolio-mobile" src="../assets/images/hero-img-portfolio-mobile.jpg" alt="decorative hero image">
  <?php if (file_exists('../header.php')) {
  include '../header.php';
  } ?>
  </div>
<script src="../assets/js/script.js"></script>
</div>
</body>

</html>
