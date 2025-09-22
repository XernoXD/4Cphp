const header = document.querySelector("header");
header.style.backgroundColor = "yellow";
const h1 = document.querySelector("h1");
h1.style.fontFamily = "Arial Black";
h1.textContent = "preambuła";
const section = document.querySelectorAll("section");
section.forEach(sec => {
    sec.style.border = "2px solid brown";
});

