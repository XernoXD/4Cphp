const min = 1;
const max = 12;
const miesiac = Math.floor(Math.random() * (max - min + 1)) + min;

const el = document.getElementById('miesiac');
if (el) {
    el.textContent = miesiac;
}

const kwartalEl = document.getElementById('kwartal');
let kwartalTekst = '';

switch (miesiac) {
    case 1:
    case 2:
    case 3:
        kwartalTekst = 'I kwartał';
        break;
    case 4:
    case 5:
    case 6:
        kwartalTekst = 'II kwartał';
        break;
    case 7:
    case 8:
    case 9:
        kwartalTekst = 'III kwartał';
        break;
    case 10:
    case 11:
    case 12:
        kwartalTekst = 'IV kwartał';
        break;
    default:
        kwartalTekst = 'Błędny numer miesiąca';
}

if (kwartalEl) kwartalEl.textContent = kwartalTekst; 