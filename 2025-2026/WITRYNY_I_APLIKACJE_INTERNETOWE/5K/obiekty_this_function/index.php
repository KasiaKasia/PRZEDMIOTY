<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Prosty skrypt JavaScript</title>
</head>
<body>
    <h1>Test JavaScript</h1>
    <div id="output1"></div>
    <div id="output2"></div>
    <div id="output3"></div>

    <script>
 		
	//	"use strict"; // Włączenie trybu ścisłego
		let person = {
		firstName: "Jan",
		lastName: "Nowak",
		hello1: function () {
           console.log('this', this); // W kontekście metody this odnosi się do obiektu person
		    return this.firstName + " " + this.lastName			
		},
		hello2() {  
			 return this.firstName + " " + this.lastName 
		},
		hello3: () => { 
            console.log(this); // W kontekście funkcji strzałkowej this odnosi się do obiektu globalnego (window w przeglądarce)
			//  console.log(person.firstName); // Dostęp do właściwości obiektu person
            return this.firstName + " " + this.lastName;
		} 
};
          
document.getElementById("output1").innerText = person.hello1(); 
//document.getElementById("output2").innerText = person.hello2(); 
document.getElementById("output3").innerText = person.hello3();
 

/*
„kontekst” to obiekt, na którym funkcja jest wykonywana lub z którym jest związana w momencie wywołania.


Funkcje strzałkowe (=>) nie mają własnego this. Zamiast tego dziedziczą this z otaczającego zakresu leksykalnego (lexical scope), 
czyli z kontekstu, w którym funkcja została zdefiniowana.
*/
    </script>
	
</body>
</html>