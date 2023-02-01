let prev = document.querySelector('.slider-prev');
let next = document.querySelector('.slider-next');
let sliderWrapper = document.querySelector('.slider-wrapper');
let slide = document.querySelectorAll('.slider-items');
let sliderLength = slide.length;
let counter = 0;
if (typeof slide[counter] !== 'undefined') {
    slide[counter].classList.add('active');
    let delay = setInterval(sliding, 4000);
    next.addEventListener('click', function () {
        clearInterval(delay);
        slide[counter].classList.remove('active');
        counter++;
        if (counter >= sliderLength) {
            counter = 0;
        }
        slide[counter].classList.add('active');
    });
    prev.addEventListener('click', function () {
        clearInterval(delay);
        slide[counter].classList.remove('active');
        counter--;
        if (counter < 0) {
            counter = sliderLength - 1;
        }
        slide[counter].classList.add('active');
    });
    sliderWrapper.addEventListener('mouseenter', () => {
        clearInterval(delay);
    });
    sliderWrapper.addEventListener('mouseleave', () => {
        delay = setInterval(sliding, 4000);
    });
    function sliding() {
        slide[counter].classList.remove('active');
        counter++;
        if (counter >= sliderLength) {
            counter = 0;
        }
        slide[counter].classList.add('active');
    }

} else {
    prev.classList.add('display-none');
    next.classList.add('display-none');
}

