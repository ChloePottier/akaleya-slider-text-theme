window.onscroll = function() {
    stickyToScroll();
}
var navbar = document.getElementById('navbar');
var navbarTop = document.getElementById('navbarTop');
var sticky = navbar.offsetTop;
function stickyToScroll() {
    if (window.pageYOffset > sticky ) {
        navbar.classList.add('sticky');
        navbar.classList.add('dis-block');
        navbar.classList.remove('dis-none');
        navbar.classList.add('fondu');
        // navbarTop.classList.remove('text-shadow');

    } 
    else {
        navbar.classList.remove('sticky');
        navbar.classList.remove('dis-block');
        navbar.classList.add('dis-none');        
        // navbarTop.classList.add('text-shadow');

    }
}