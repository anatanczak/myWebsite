    <?php


function connectToDB () {
    $dbHost =  'localhost';
    $dbUser = 'anat';
    $dbPassword = 'Fuck1921*Blad';
    $dbname = 'ana_tanc_db';

    // Set DSN
    $dsn = 'mysql:host='. $dbHost .';dbname='. $dbname;

    try {
   $dbConnection = new PDO($dsn, $dbUser, $dbPassword);
   $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   return $dbConnection;
} catch (Exception $e) {
    //TODO: set an email system to get the errors that occure on the front end to get to the back end
    echo 'Erreur : ' . $e->getMessage() . '<br />';
    echo 'N° : ' . $e->getCode();
    die('Fin du script');
}
}


