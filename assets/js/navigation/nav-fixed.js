window.onscroll = function() {
    stickyToScroll();
}

let navbar = document.getElementById('navbar');
let navbarTop = document.getElementById('navbarTop');
let sticky = navbar.offsetTop;
let navHeader = document.querySelector('#menu-header-1');
let itemsMenu = document.querySelectorAll('li.menu-item-has-children');
let subMenu = document.querySelectorAll('ul.sub-menu');
function stickyToScroll() {
    if (window.pageYOffset > sticky ) {
        navbar.classList.add('fondu');
        navbar.classList.add('position-fixed');
    } else {
        navbar.classList.remove('fondu');
        navbar.classList.remove('position-fixed');
    }
}

if (window.matchMedia('(min-width: 992px)').matches) {
    for(let subMenuItems of subMenu){
        subMenuItems.classList.add('display-none');
        subMenuItems.classList.remove('display-block');
    }
    function eventMenuMouse(e){
        e.addEventListener('mouseenter', () =>{
            e.childNodes[2].classList.add('display-block');
            e.childNodes[2].classList.remove('display-none');
            if (window.pageYOffset > sticky ) {
                e.childNodes[2].classList.add('sub-menu-color');
            }
        });
        e.addEventListener('mouseleave', () =>{
            e.childNodes[2].classList.remove('display-block');
            e.childNodes[2].classList.add('display-none');
        });
    }
    itemsMenu.forEach(eventMenuMouse);
}