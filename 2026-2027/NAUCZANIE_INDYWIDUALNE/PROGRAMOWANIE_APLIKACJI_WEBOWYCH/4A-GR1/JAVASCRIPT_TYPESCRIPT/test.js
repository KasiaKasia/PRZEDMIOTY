"use strict";
let number = 0;
setInterval(() => {
    number++;
    console.log(number);
}, 1000);
const osoba1 = {
    imie: "Anna",
    przedstawSie: function () {
        console.log(this.imie); // Ania
    }
};
osoba1.przedstawSie(); // Tutaj this odnosi się do obiektu osoba.
const osoba2 = {
    imie: "Anna",
    przedstawSie: () => {
        console.log(this);
    }
};
osoba2.przedstawSie(); // {}
