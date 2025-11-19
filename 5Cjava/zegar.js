const hours   = document.getElementById("hours");
const minutes = document.getElementById("minutes");
const godzina = document.getElementById("godzina");
const minuta  = document.getElementById("minuta");
const wynik   = document.getElementById("miarakata");

function obliczKat() {
    let h = Number(hours.value);
    let m = Number(minutes.value);

    godzina.textContent = h;
    minuta.textContent = m;

    let kat = Math.abs(30*h - (11/2)*m);
    if (kat > 180) kat = 360 - kat;

    wynik.textContent = kat + "°";
}

hours.oninput = obliczKat;
minutes.oninput = obliczKat;
obliczKat();