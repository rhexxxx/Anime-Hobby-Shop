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

const heroButtons = document.getElementsByClassName('main-hero-button');
for (const button of heroButtons) {
    button.addEventListener('click', () => {
        document.location.href = 'shop.php';
    });
}

var see = document.getElementById('see');
var unsee = document.getElementById('unsee');


function passSeeker() {
    var see = document.getElementById('see');
    var unsee = document.getElementById('unsee');
    var input = document.getElementById("typePasswordX");
    if (input.type === "password") {
        input.type = "text";
        see.style.display = 'inline';
        unsee.style.display = 'none';
    } else {
        input.type = "password";
        see.style.display = 'none';
        unsee.style.display = 'inline';
        
    }

}

function passSeeker2() {
    var see1 = document.getElementById('see1');
    var unsee1 = document.getElementById('unsee1');
    var input1 = document.getElementById("typePasswordX2");
    if (input1.type === "password") {
        input1.type = "text";
        see1.style.display = 'inline';
        unsee1.style.display = 'none';
    } else {
        input1.type = "password";
        see1.style.display = 'none';
        unsee1.style.display = 'inline';
        
    }
}
console.log(totalItems)
function createCounters(totalItems) {
    for (let i = 1; i <= totalItems; i++) {
        createCounter(`counter-value-${i}`, `increment-btn-${i}`, `decrement-btn-${i}`, `subtotal-${i}`, `price-${i}`);
    }
}



function createCounter(counterId, incrementBtnId, decrementBtnId, subtotal, price) {
    let counter = 0;
    let subtotalCount =0;
    const counterValue = document.getElementById(counterId);
    const incrementBtn = document.getElementById(incrementBtnId);
    const decrementBtn = document.getElementById(decrementBtnId);
    var subtotalElement = document.getElementById(subtotal);
    var priceElement = document.getElementById(price);


    if (incrementBtn && decrementBtn) {
        incrementBtn.addEventListener('click', () => {
            counter++;
            counterValue.innerHTML = counter;
            updateSubtotal();
        });

        decrementBtn.addEventListener('click', () => {
            if (counter > 1) {
                counter--;
                counterValue.innerHTML = counter;
                updateSubtotal();
            }
        });
    }

    function updateSubtotal() {
        const itemPrice = parseFloat(subtotalElement.textContent.replace('IDR', '').replace(',', ''));
        subtotalCount = itemPrice * counter;
        if (counter > 1) {
            subtotalCount /= counter;
        }
        subtotalElement.innerHTML = 'IDR ' + numberWithCommas(subtotalCount.toFixed(3));
    }
    

    function numberWithCommas(x){
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

}

// Assuming totalItems is defined before this script
createCounters(totalItems);

function selects(){
    var chk = document.getElementByName('chk');
    for(var i = 0; i<chk.length;i++){
        if(chk[i].type=='checkbox'){
            chk[i].checked =true;
        }
    }
    updateSubtotal();

}

function deselects(){
    var chk = document.getElementByName('chk');
    for(var i = 0; i<chk.length;i++){
        if(chk[i].type=='checkbox'){
            chk[i].checked =false;
        }
    }

}

function toggleCheckboxes() {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    
    checkboxes.forEach(function (checkbox) {
        checkbox.checked = !checkbox.checked;
    });
}


    
