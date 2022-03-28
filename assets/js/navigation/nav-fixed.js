window.onscroll = function() {
    stickyToScroll();
}
var navbar = document.getElementById('navbar');
var navbarTop = document.getElementById('navbarTop');
var sticky = navbar.offsetTop;
function stickyToScroll() {
    if (window.pageYOffset > sticky ) {
        navbar.classList.add('fondu');
        navbar.classList.add('position-fixed');


    } 
    else {
        navbar.classList.remove('fondu');
        navbar.classList.remove('position-fixed');


    }
}