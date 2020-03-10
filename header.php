

<header>
  <div class="logo-and-nav-bar-wrapper" id="logo-and-nav-bar-wrapper-id">
    <a class="logo" href="../index.php">
      <img class="logo-image"src="<?php if (isset($pageName)) { if ($pageName == "homepage"){echo "assets/images/logo.svg";}else{echo "../assets/images/logo.svg";}}?>" alt="logo">
              <!-- add an if statement in php to make this logo available only for homepage -->
      <img class="logo-image-mobile-hp"src="<?php if (isset($pageName)) { if ($pageName == "homepage"){echo "assets/images/logo-mobile-hp.svg";}else{echo "../assets/images/logo-mobile-hp.svg";}}?>" alt="logo"></a>

    <nav class="menu-wrap">
      <!-- this checkbox is used to use it's pseudo class checked to make the menu appear -->
      <input type="checkbox" class="toggler" id="checkbox-menu-toggler">
      <div class="hamburger">
        <!-- this div vill be used to create lines for the humburger -->
        <div></div>
      </div>

      <div class="menu" >
        <div>
          <div>

            <ul class="nav-bar" >

              <li><a class="link <?php if (isset($pageName)) { if ($pageName == "homepage"){echo "active";}}?>" href="<?php if (isset($pageName)) { if ($pageName == "homepage"){echo "index.php";}else{echo "../index.php";}}?>">Accueil</a></li>

              <li><a class="link <?php if (isset($pageName)) { if ($pageName == "aboutMe"){echo "active";}}?> " href="<?php if (isset($pageName)) { if ($pageName == "homepage"){echo "me-connaitre/index.php";}else{echo "../me-connaitre/index.php";}}?>">Me connaître</a></li>

              <li><a class="link <?php if (isset($pageName)) { if ($pageName == "cv"){echo "active";}}  ?> " href="<?php if (isset($pageName)) { if ($pageName == "homepage"){echo "cv/index.php";}else{echo "../cv/index.php";}}?>">CV</a></li>

              <li><a class="link <?php if (isset($pageName)) { if ($pageName == "portfolio"){echo "active";}}  ?> " href="<?php if (isset($pageName)) { if ($pageName == "homepage"){echo "portfolio/index.php";}else{echo "../portfolio/index.php";}}?>">Portfolio</a></li>

              <li><a class="link <?php if (isset($pageName)) { if ($pageName == "contact"){echo "active";}}  ?> " href="<?php if (isset($pageName)) { if ($pageName == "homepage"){echo "contact/index.php";}else{echo "../contact/index.php";}}?>">Contact</a></li>
              <li id="menu-id"></li>
            </ul>

          </div>
        </div>
      </div>

    </nav>
  </div>
</header>
