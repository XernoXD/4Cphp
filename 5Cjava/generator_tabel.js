document.getElementById("generuj").addEventListener("click", function() {
const wiersze = parseInt(document.getElementById("wiersze").value);
const kolumny = parseInt(document.getElementById("kolumny").value);
const tabela = document.getElementById("tabela");
tabela.innerHTML = ""; 
for (let w = 1; w <= wiersze; w++) {
const tr = document.createElement("tr");
for (let k = 1; k <= kolumny; k++) {
const td = document.createElement("td");
td.textContent = `${w}/${k}`;
tr.appendChild(td);
}
tabela.appendChild(tr);
}
});
