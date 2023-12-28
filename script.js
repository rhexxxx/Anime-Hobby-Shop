const bar = document.getElementById('bar');
const nav = document.getElementById('navbar');
const close = document.getElementById('close');


if(bar){
    bar.addEventListener('click', () =>{
        nav.classList.add('active');
    })
}

if(close){
    close.addEventListener('click', () =>{
        nav.classList.remove('active');
    })
}

function onButtonClick(){
    document.location.href = 'shop.php';
}

const button = document.getElementsByClassName('main-hero-button');
button.addEventListener('click', onButtonClick);