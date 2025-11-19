document.getElementById(button).addEventListener("click"), 
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

let n = 10;
let ciag = [];

   for (let i = 0; i < n; i++) {

       ciag.push(a1 + i * r);

   }

   let pierwsze3 = ciag.slice(0, 3);

   let ostatnie3 = ciag.slice(-3);

   return {

       calyCiag: ciag,

       pierwsze3: pierwsze3,

       ostatnie3: ostatnie3

   };