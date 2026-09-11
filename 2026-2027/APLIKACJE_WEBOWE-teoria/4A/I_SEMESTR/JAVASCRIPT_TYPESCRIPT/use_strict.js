

 // "use strict";
 
// 1.  
// Bez "use strict" działa:
// W trybie "use strict" : ReferenceError: message2 is not defined
// message2 = "Witaj z TypeScript bez 'use strict'!"; 

// 2. 
// Bez "use strict" this wskazuje na obiekt globalny, np. window.
// W trybie "use strict" this jest undefined w funkcjach 
// function show() {
//     console.log(this);
// }

// show(); // undefined

// 3.
const person = {};

Object.defineProperty(person, "name", {
    value: "Jan",
    writable: true // false - wartość tylko do odczytu
});
console.log(person.name); 
// person.name = "Adam"; // W trybie "use strict" : TypeError: Cannot assign to read only property 'name' of object '#<Object>'
console.log(person.name); 

// 4. 
/*
function add(a, a) {
    console.log(a); // W trybie "use strict" : SyntaxError: Duplicate parameter name not allowed in this context
    return a;
}
  add(2,6); // W trybie "use strict" : SyntaxError: Duplicate parameter name not allowed in this context
*/
// 5.

let osoba = {
    imie: "Kasia"
};

with (osoba) {
    console.log(imie);
} // W trybie "use strict" : SyntaxError: Strict mode code may not include a with statement