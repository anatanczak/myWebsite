//jshint esversion: 6
// makes the submenu with cv appear and disappear
document.getElementById("cv-link").addEventListener("click", ()=> {
document.getElementById("dropdown-submenu").classList.toggle("submenu-arrow-pressed");
document.getElementById("arrow-submenu").classList.toggle("arrow-rotate");

});
