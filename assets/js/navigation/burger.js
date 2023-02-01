let burger = document.getElementById('burger');
let navigation = document.getElementById('navigation');
let burger1 = document.getElementById('burger1');
let burger2 = document.getElementById('burger2');
let burger3 = document.getElementById('burger3');
    burger.addEventListener('click', function () {
        navigation.classList.toggle('display-flex');
        navigation.classList.toggle('display-none');
        navigation.classList.add('fondu');
        burger.classList.toggle('isopen');
        burger1.classList.toggle('isopen-burger1');
        burger2.classList.toggle('isopen-burger2');
        burger3.classList.toggle('isopen-burger3');
});
