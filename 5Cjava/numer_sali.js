 document.getElementById("lol").addEventListener("click", function(){
const sala = prompt("Wpisz numer sali:");
if(sala === null || sala === ""){
    alert("Anulowano akcje, a okno prompt zwróciło ," + sala);
}
 });