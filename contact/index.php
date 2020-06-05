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

        <form class="contact-form" action="script.php" method="post">
            <h2 class="form-title">Une question ?</h2>
            <p class="error-message"> <?php if (isset($nameError)) {echo $nameError;} ?></p>
            <input class="form-input form-input-small" type="text" name="name" placeholder="Nom et prénom*" value="<?php if (isset($name)) {echo $name;} ?>" required>
            <p class="error-message"> <?php if (isset($emailError)) {echo $emailError;} ?></p>
            <input class="form-input form-input-small" type="email" name="email" placeholder="Email*" value="<?php if (isset($email)) {echo $email;} ?>" required>
            <p class="error-message"> <?php if (isset($messageError)) {echo $messageError;} ?></p>
            <textarea class="form-input form-input-textarea" name="message" id="" rows="10" placeholder="Message*" required><?php if (isset($message)) {echo $message;} ?></textarea>
            
            <input class="form-submit" type="submit" value="ENVOYER">
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
                <p class="personal-info-p"> <a class="personal-info-link" href="https://github.com/anaviktoriv">anaviktoriv <span class="link-icon-span">&rArr; </span></a></p>
            </div>
            <div class="personal-info">
                <div class="personal-info-icon-wrapper">
                    <img class="personal-info-icon" src="../assets/images/linkedin-icon.svg" alt="linkedin icon">
                </div>
                <p class="personal-info-p"> <a class="personal-info-link" href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile&lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_self_edit_top_card%3BeS3RKzpAQqCiYsLeb0Wo7A%3D%3D">Anastasia Tanczak <span class="link-icon-span">&rArr; </span></a></p>
            </div>
        </div>

        <?php if (file_exists('../footer.php')) {
            include_once '../footer.php';
        } ?>