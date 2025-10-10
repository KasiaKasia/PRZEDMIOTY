let liczba = 10;
console.log(liczba); // 10

 liczba = 25; // zmiana wartości
console.log(liczba); // 25

// let liczba = 25; //  SyntaxError: Identifier 'liczba' has already been declared
console.log(x); // undefined (zamiast błędu)
var x = 10;

console.log("var x = " + x); // var x = 10;
var i = 5;
console.log("var i = "+i); //var i = 5   
var i = 15; // var pozwala na ponowną deklarację zmiennej
console.log("var i = "+i); //var i = 15


const pi = 3.14159;
console.log(pi); // 3.14159

//  pi = 3.14; // TypeError: Assignment to constant variable. ❌ Błąd: nie można zmieniać wartości stałej