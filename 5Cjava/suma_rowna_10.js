(function () {
    const fieldset = document.querySelector('fieldset');
    if (!fieldset) return;

    const parts = [];
    let count = 0;


    for (let n = 100; n <= 999; n++) {
        const digits = String(n).split('').map(d => Number(d));
        const sum = digits[0] + digits[1] + digits[2];

        if (sum === 10) {
            parts.push(`<span style="color:red;font-weight:700;">${n}</span>`);
            count++;
        } else {
            parts.push(String(n));
        }
    }

    fieldset.innerHTML = parts.join(', ') + '.';


    let h3 = document.getElementById('countSuma10');
    if (!h3) {
        h3 = document.createElement('h3');
        h3.id = 'countSuma10';
        fieldset.parentNode.insertBefore(h3, fieldset.nextSibling);
    }
    h3.textContent = `Liczb trzycyfrowych których suma cyfr = 10 jest ${count}`;
})();