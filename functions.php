<?php

declare(strict_types=1);

function getLinkOfCurrentPage () {
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
         $url = "https://";
    else
         $url = "http://";
    // Append the host(domain name, ip) to the URL.
    $url.= $_SERVER['HTTP_HOST'];

    // Append the requested resource location to the URL
    $url.= $_SERVER['REQUEST_URI'];

    return $url;
}

function getNameOfCurrentPage () {
   $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
   return $curPageName;
}

function setTitleForPage(string $named){
switch($named) {
     case "portfolio": 
          return "Portfolio";
     case "homepage": 
          return "Accueil";
     case "aboutMe": 
          return "Me Conaître";
     case "contact": 
          return "Contact";
    case "mentions":
          return "Mentions légales";
}
}

 ?>
