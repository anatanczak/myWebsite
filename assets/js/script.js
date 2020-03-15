const body = document.body;
let lastScroll = 0;
var navbar = document.getElementById('logo-and-nav-bar-wrapper-id');
window.addEventListener('scroll', () => {

    const currentScroll = window.pageYOffset;
    if (currentScroll == 0 || currentScroll < 10) {
        //TO DO see if we can toggle class with classList.toggle
        navbar.classList.remove("scrolled-menu");
        return;
    } else {
        navbar.classList.add("scrolled-menu");
    }
});