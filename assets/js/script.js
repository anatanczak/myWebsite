//jshint esversion: 6
var checkbox = document.getElementById("checkbox-menu-toggler");
var footerLink = document.getElementById("footer-link-legal");

checkbox.addEventListener("click", makeLinkAppear);

function makeLinkAppear(){


  if (checkbox.checked === true){
setTimeout(()=> {footerLink.classList.add("link-footer-mobile");}, 2000);

  } else {
      footerLink.classList.remove("link-footer-mobile");
  }
}

function removeElement(id) {
    var elem = document.getElementById(id);
    return elem.parentNode.removeChild(elem);
}
