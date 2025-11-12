
const numer = document.getElementById("numer");
const pokaz = document.getElementById("pokaz");
pokaz.addEventListener("change", function() {
if (this.checked) {
numer.classList.remove("blur");
} else {
numer.classList.add("blur");
}
});
 