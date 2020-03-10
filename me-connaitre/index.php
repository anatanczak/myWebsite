<?php
// set the var to make active in navbarpossible
$pageName = "aboutMe";
if (file_exists('../head.php')) {
  include_once '../head.php';
}
?>

<body class="body-about-me">
  <div class="main-content-wrapper-about-me">
    <div class="section-one-and-navbar-wprapper">
      <img class="background-desktop-about-me" src="../assets/images/background-desktop-aboutme.jpg" alt="background">
      <img class="background-about-me-tablet" src="../assets/images/background-aboutme-tablet.jpg" alt="background">
      <?php if (file_exists('../header.php')) {
        include_once '../header.php';
      } ?>
      <section class="section-one-about-me">
        <img class="my-photo-about-me" src="../assets/images/meme.png" alt="my photo">
        <div class="title-and-paragraph-wrapper-about-me">
          <h1 class="h1-about-me">Bonjour<span class="colored-dot-about-me">.</span></h1>
          <p class="text-about-me">Mon parcours en tant que développeuse a commencé il y 3 ans quand j'ai décidé de suivre le MOOC d’initiation à la programmation de l’Université d’Harvard. N’ayant aucune expérience dans le développement j'ai trouvé
            ce cours passionnant et très stimulant : j'ai été complètement conquise par le monde de la programmation.</p>
          <p class="text-about-me">Après ce MOOC, je me suis lancée dans le développement iOS, ce qui est devenu mon hobby en parallèle de mon activité professionnelle d’enseignante d’anglais pour l’Éducation Nationale.</p>
          <p class="text-about-me">La sortie de ma première application MESLISTES sur l'App Store a marqué une étape importante dans ma vie car c'est à ce moment que je me suis rendu compte que je souhaiterais transformer mon hobby en métier.</p>
          <p class="text-about-me">En plus du développement mobile iOS, je me suis beaucoup intéressée au développement web en suivant différents cours en ligne. Cependant, afin de compléter mes compétences techniques, j'ai décidé de m’inscrire à une
            formation professionnalisante de l’AFPA.</p>
          <p class="text-about-me">Je suis donc actuellement en formation Concepteur Développeur d’Applications et à la recherche d’un stage qui me permettrait d’exercer mes savoir-faire.</p>
        </div>
    </div>

    <!--------------------- SECTION 2 PROGRAMMING LANGUAGES--------------------- -->
    <section class="section-two-about-me">
      <div class="two-prog-lang-group-wrapper">
        <div class="two-prog-lang-group">
          <div class="prog-lang-group">
            <p class="prog-lang">HTML5</p>
            <div class="level-of-masterty">
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
            </div>
          </div>
          <div class="prog-lang-group">
            <p class="prog-lang">CSS5</p>
            <div class="level-of-masterty">
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
            </div>
          </div>
        </div>
        <div class="two-prog-lang-group">
          <div class="prog-lang-group">
            <p class="prog-lang">JavaScript ES6</p>
            <div class="level-of-masterty">
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
            </div>
          </div>
          <div class="prog-lang-group">
            <p class="prog-lang">PHP</p>
            <div class="level-of-masterty">
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="two-prog-lang-group-wrapper">
        <div class="two-prog-lang-group">
          <div class="prog-lang-group">
            <p class="prog-lang">MySQL</p>
            <div class="level-of-masterty">
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
            </div>
          </div>
          <div class="prog-lang-group">
            <p class="prog-lang">Node.js</p>
            <div class="level-of-masterty">
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
            </div>
          </div>
        </div>
        <div class="two-prog-lang-group">
          <div class="prog-lang-group">
            <p class="prog-lang">Swift</p>
            <div class="level-of-masterty">
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
            </div>
          </div>
          <div class="prog-lang-group">
            <p class="prog-lang">C</p>
            <div class="level-of-masterty">
              <span class="dot-mastery"></span>
              <span class="dot-mastery"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
              <span class="dot-mastery dot-mastery-transparent"></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- --------------------------SECTION 3--------------------------- -->
    <section class="section-three-about-me">
      <img class="background-aboutme-section3" src="../assets/images/cocrete-background-aboutme-section3.jpg" alt="background">
      <img class="background-aboutme-section3-tablet" src="../assets/images/cocrete-background-tablet.jpg" alt="background">
      <div class="circle-skill-wrapper-all">
        <div class="circle-skill-wrapper">
          <img class="circle-skill" src="../assets/images/terminal-icon.svg" alt="terminal icon">
        </div>
        <div class="circle-skill-wrapper">
        <img class="circle-skill" src="../assets/images/git-icon.svg" alt="git icon">
        </div>
        <div class="circle-skill-wrapper">
        <img class="circle-skill" src="../assets/images/msoffice-icon.svg" alt="ms office icon">
        </div>
        <div class="circle-skill-wrapper">
        <img class="circle-skill" src="../assets/images/xcode-icon.svg" alt="xcode icon">
        </div>
        <div class="circle-skill-wrapper">
        <img class="circle-skill" src="../assets/images/cocoapods-icon.svg" alt="cocoapods icon">
        </div>
        <div class="circle-skill-wrapper">
        <img class="circle-skill" src="../assets/images/xd-icon.svg" alt="xd icon">
        </div>
        <div class="circle-skill-wrapper">
        <img class="circle-skill" src="../assets/images/vscode-icon.svg" alt="vscode icon">
        </div>
        <div class="circle-skill-wrapper">
        <img class="circle-skill" src="../assets/images/npm-icon.svg" alt="npm-icon">
        </div>
        <div class="circle-skill-wrapper">
        <img class="circle-skill" src="../assets/images/ai-icon.svg" alt="ai icon">
        </div>
      </div>
    </section>
    <?php if (file_exists('../footer.php')) {
        include_once '../footer.php';
      } ?>