const form = document.getElementById("formularz");
for (let i = 1; i <= 100; i++) {
    const input = document.createElement("input");
    input.id = `element_${i}`; 
    input.name = `nazwa_${i}`;
    input.placeholder = `Element numer ${i}`;
    input.style.margin = "10px";
    input.style.boxShadow = "5px 5px lightblue";
    form.appendChild(input);
}