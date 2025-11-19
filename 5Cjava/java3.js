const a1 = 7;
const a2 = 10;

const n = Number(prompt("Podaj n:")); // w Node.js zamień na np. stałą liczbę

// różnica ciągu
const d = a2 - a1;

// trzy pierwsze wyrazy
const pierwsze = [];
for (let i = 0; i < 3; i++) {
    pierwsze.push(a1 + i * d);
}

// trzy ostatnie wyrazy
const ostatnie = [];
for (let i = n - 3; i < n; i++) {
    ostatnie.push(a1 + i * d);
}

// n-ty wyraz
const an = a1 + (n - 1) * d;

// suma ciągu
const Sn = ((a1 + an) * n) / 2;

console.log("3 pierwsze wyrazy:", pierwsze);
console.log("3 ostatnie wyrazy:", ostatnie);
console.log("Suma ciągu:", Sn);
