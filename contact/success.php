<?php
// set the var to make active in navbarpossible
$pageName = "success";
if (file_exists('../head.php')) {
    include '../head.php';
}
?>

<body>
    <div class="popup">
        <div class="popup-text-and-button-wrapper">
            <img class="popup-check-icon" src="../assets/images/check-icon.svg" alt="check icon">
            <h1 class="h1-success">Votre demande a bien été enregistrée.</h1>
            <button class="popup-ok-btn" onclick="window.location.href='index.php'">OK</button>
        </div>
    </div>
</body>

</html>