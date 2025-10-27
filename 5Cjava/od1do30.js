document.getElementById('generate').addEventListener('click', function () {
    const min = 2;
    const max = 29;
    const value = Math.floor(Math.random() * (max - min + 1)) + min;


    const first = document.getElementById('first');
    first.innerText = `Wylosowana liczba to: ${value}`;
    first.style.color = 'darkorchid';

    const second = document.getElementById('second');
    if (value >= 20) {
        second.innerText = 'Wylosowana liczba jest większa lub równa 20';
    } else {
        second.innerText = '';
    }
    second.style.color = 'magenta';


    const third = document.getElementById('third');
    if (value % 2 === 0) {
        third.innerText = 'Liczba jest parzysta';
    } else {
        third.innerText = 'Liczba jest nieparzysta';
    }
    third.style.color = 'navy';

 
    const fourth = document.getElementById('fourth');
    if (value >= 1 && value <= 10) {
        fourth.innerText = 'Należy do pierwszej dziesiątki';
    } else if (value >= 11 && value <= 20) {
        fourth.innerText = 'Należy do drugiej dziesiątki';
    } else {
        fourth.innerText = 'Należy do trzeciej dziesiątki';
    }
    fourth.style.color = 'deeppink';
});
