let x = 5;        // Deklaracja zmiennej
const y = 10;     // Zmienna stała
var z = 15;       // Zmienna o zasięgu funkcji

// Operacje arytmetyczne
let suma = x + y;
let różnica = x - y;
let iloczyn = x * y;
let iloraz = x / y;
let reszta = x % y; // Modulo





// Funkcja bez parametrów
function sayHello() {
    console.log("Hello, World!");
}

// Funkcja z parametrami
function add(a, b) {
    return a + b;
}

// Funkcja anonimowa (funkcja wyrażona)
const greet = function(name) {
    console.log("Hello, " + name);
};
greet("Alice");





// Tworzenie tablicy
let fruits = ["Apple", "Banana", "Orange"];

// Dodawanie elementów do tablicy
fruits.push("Grapes"); // Dodaje na koniec

// Usuwanie ostatniego elementu
fruits.pop();

// Iteracja po tablicy
for (let i = 0; i < fruits.length; i++) {
    console.log(fruits[i]);
}




// Tworzenie obiektu
let person = {
    name: "John",
    age: 30,
    greet: function() {
        console.log("Hello, " + this.name);
    }
};

// Dostęp do właściwości obiektu
console.log(person.name);  // John
person.greet();            // Hello, John





let age = 20;

// Warunek if-else
if (age >= 18) {
    console.log("Dorosły");
} else {
    console.log("Nieletni");
}

// Switch-case
let day = 3;
switch (day) {
    case 1:
        console.log("Poniedziałek");
        break;
    case 3:
        console.log("Środa");
        break;
    case 7:
        console.log("Niedziela");
        break;
    default:
        console.log("Nieznany dzień");
}







// Pętla for
for (let i = 0; i < 5; i++) {
    console.log(i);  // Wypisuje liczby od 0 do 4
}

// Pętla while
let j = 0;
while (j < 5) {
    console.log(j);
    j++;
}

// Pętla do-while
let k = 0;
do {
    console.log(k);
    k++;
} while (k < 5);









let numbers = [1, 2, 3, 4, 5];

// map - przekształcenie każdego elementu
let doubled = numbers.map(num => num * 2);
console.log(doubled);  // [2, 4, 6, 8, 10]

// filter - wybieranie elementów spełniających warunek
let evenNumbers = numbers.filter(num => num % 2 === 0);
console.log(evenNumbers);  // [2, 4]

// reduce - zredukowanie tablicy do jednej wartości
let sum = numbers.reduce((acc, num) => acc + num, 0);
console.log(sum);  // 15










// Przykład nasłuchu zdarzenia kliknięcia na przycisku
document.getElementById("myButton").addEventListener("click", function() {
    alert("Button clicked!");
});




// Promise
let promise = new Promise((resolve, reject) => {
    let success = true;
    if (success) {
        resolve("Operacja zakończona sukcesem!");
    } else {
        reject("Operacja nie powiodła się!");
    }
});

promise.then(result => {
    console.log(result);
}).catch(error => {
    console.log(error);
});

// async/await
async function fetchData() {
    let response = await fetch("https://jsonplaceholder.typicode.com/todos/1");
    let data = await response.json();
    console.log(data);
}
fetchData();





try {
    let result = someFunction();
} catch (error) {
    console.log("Wystąpił błąd:", error);
} finally {
    console.log("Zakończono operację.");
}





// Destrukturyzacja obiektu
let person = { name: "Alice", age: 25 };
let { name, age } = person;
console.log(name, age); // Alice 25

// Destrukturyzacja tablicy
let numbers = [10, 20, 30];
let [x, y, z] = numbers;
console.log(x, y, z); // 10 20 30






// Spread (rozkłada obiekt/tablicę)
let arr1 = [1, 2, 3];
let arr2 = [...arr1, 4, 5];
console.log(arr2); // [1, 2, 3, 4, 5]

// Rest (zbiera wartości do tablicy)
function sum(...numbers) {
    return numbers.reduce((a, b) => a + b, 0);
}
console.log(sum(1, 2, 3, 4)); // 10
//