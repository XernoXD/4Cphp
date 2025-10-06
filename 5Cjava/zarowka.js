const zarowa=document.getElementById('zarowka');
const button1 =document.getElementById('button1');
const button2 =document.getElementById('button2');
const radio1=document.getElementById('radio1');
const radio2=document.getElementById('radio2');
const check=document.getElementById('check');
const tekst=document.getElementById('tekst');

button1.addEventListener('click', function () {
    zarowa.src = "on.png";
    radio1.checked = true;
    check.checked = true;
    tekst.innerText = "włączona"
})
button2.addEventListener('click', function () {
    zarowa.src = "off.png";
    radio2.checked = true;
    check.checked = false;
    tekst.innerText = "włączona"
})
radio1.addEventListener('click', function () {
    zarowa.src = "on.png";
    check.checked = true;
    tekst.innerText = "włączona"
})
radio2.addEventListener('click', function () {
    zarowa.src = "off.png";
    check.checked = false;
    tekst.innerText = "włączona"
})
check.addEventListener('click', function () {
if (check.checked) {
    zarowa.src = "on.png";
    radio1.checked = true;
    tekst.innerText = "włączona" 
} 
else {
     zarowa.src = "off.png";
    radio2.checked = true;
    tekst.innerText = "wyłączona"
}
})