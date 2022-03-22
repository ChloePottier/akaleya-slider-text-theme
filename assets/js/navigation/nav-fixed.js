window.onscroll = function() {
    stickyToScroll();
}
var navbar = document.getElementById('navbar');
var navbarTop = document.getElementById('navbarTop');
var sticky = navbar.offsetTop;
function stickyToScroll() {
    if (window.pageYOffset > sticky ) {
        navbar.classList.add('fondu');

    } 
    else {
        navbar.classList.remove('fondu');

    }
}