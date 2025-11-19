function firstThree(a1, r) {
    return [
        a1,
        a1 + r,
        a1 + 2*r
    ];
}
 
function lastThree(a1, r, n) {
    const last = a1 + (n - 1) * r;
    return [
        last - 2*r,
        last - r,
        last
    ];
}
 
// Przykład:
console.log(firstThree(4, 3));   // [4, 7, 10]
console.log(lastThree(4, 3, 10)); // [25, 28, 31]




function ciagArytmetyczny(a1, r) {

   let n = 10; // liczba elementów w ciągu

   let ciag = [];

   // tworzenie całego ciągu

   for (let i = 0; i < n; i++) {

       ciag.push(a1 + i * r);

   }

   // pierwsze 3 wyrazy

   let pierwsze3 = ciag.slice(0, 3);

   // ostatnie 3 wyrazy

   let ostatnie3 = ciag.slice(-3);

   return {

       calyCiag: ciag,

       pierwsze3: pierwsze3,

       ostatnie3: ostatnie3

   };

}

// przykład wywołania:

let wynik = ciagArytmetyczny(2, 5);

console.log("Cały ciąg:", wynik.calyCiag);

console.log("Pierwsze 3 wyrazy:", wynik.pierwsze3);

console.log("Ostatnie 3 wyrazy:", wynik.ostatnie3);
 
fieldset i legened potrzebne bedzie
 