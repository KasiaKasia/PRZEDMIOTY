### Podstawy JavaScript

**W JavaScript możemy umieścić kod na kilka sposobów:**

a) Wewnątrz <script> w dokumencie HTML:

```HTML
<!DOCTYPE html>
<html>
<head>
  <title>Przykład</title>
</head>
<body>
  <h1>Witaj!</h1>
  <script>
  alert("To jest komunikat z JavaScript!");
  </script>
</body>
</html>
```

b) Zewnętrzny plik .js:

HTML:
`<script src="skrypt.js"></script>`

skrypt.js:
`alert("Witaj z zewnętrznego pliku!");`

## **1. Definiowanie zmiennych**

🔹 `let` – nowoczesny sposób (zalecany)
Używamy go, gdy **wartość zmiennej może się zmieniać** w trakcie działania programu.

```JS
let liczba = 10;
console.log(liczba); // 10

liczba = 25; // zmiana wartości
console.log(liczba); // 25

// let liczba = 25; //  SyntaxError: Identifier 'liczba' has already been declared
```

Cechy `let`:

- działa w zasięgu blokowym (czyli tylko wewnątrz { }),
- można zmieniać wartość,
- nie można deklarować ponownie tej samej zmiennej w tym samym zakresie.

🔹 `var` – stary sposób (niezalecany)

Używany w starszych wersjach JavaScriptu.
Działa w zasięgu funkcji, a nie bloku — co często prowadzi do błędów.

```JS
var liczba = 5;
var liczba = 7; // można ponownie zadeklarować
console.log(liczba); // 7
```
Cechy `var`:

- działa w zasięgu funkcji, nie bloku,
- można ponownie deklarować tę samą zmienną,
- może prowadzić do błędów przez tzw. hoisting (przesuwanie deklaracji na początek).

```JS
console.log(x); // undefined (zamiast błędu)
var x = 10;
```

## 2. **Definiowanie stałych**
🔹 `const` – stała (niezmienna wartość)

Używana, gdy wartość nie powinna się zmieniać po przypisaniu.
```JS
const pi = 3.14159;
console.log(pi); // 3.14159

// pi = 3.14; ❌ Błąd: nie można zmieniać wartości stałej
```

✅ Cechy const:

wartość musi być przypisana od razu,

nie można zmienić ani ponownie zadeklarować tej samej stałej,

zasięg działania – taki sam jak let (blokowy).

Przykład:

const imie = "Jan";
if (true) {
  const imie = "Adam";
  console.log(imie); // Adam
}
console.log(imie); // Jan

3.  **Instrukcje `if, else if, else`**

```JS
let age = 18;

if (age < 18) {
  console.log("Niepełnoletni");
} else if (age === 18) {
  console.log("Dokładnie 18 lat");
} else {
  console.log("Pełnoletni");
}
```

- Skrócona forma if — operator trójargumentowy (?:)

```JS
let age = 20;
let message = age >= 18 ? "Pełnoletni" : "Niepełnoletni";
console.log(message);
```
4. **switch**

```JS
let color = "zielony";

switch (color) {
  case "czerwony":
    console.log("Stop!");
    break;
  case "żółty":
    console.log("Uwaga!");
    break;
  case "zielony":
    console.log("Jedź!");
    break;
  default:
    console.log("Nieznany kolor");
}
```
- switch sprawdza kolejne case za pomocą operatora **ścisłego porównania (===)**.
- **break** zatrzymuje wykonywanie kolejnych przypadków (bez niego przejdzie dalej).
- **default** — wykona się, jeśli żaden case nie pasuje


5. **Pętle**
a) **for — klasyczna pętla**

```JS
for (let i = 0; i < 5; i++) {
  console.log("Iteracja nr:", i);
}
``` 
➡️ Wykona się 5 razy: dla i = 0, 1, 2, 3, 4

b) **while — pętla z warunkiem na początku**

Używana, gdy nie wiadomo z góry, ile razy pętla się wykona.

```JS
let i = 0;

while (i < 3) {
  console.log("Licznik:", i);
  i++;
}
```
 
c) **do...while — pętla z warunkiem na końcu**

Różni się od while tym, że wykona się co najmniej raz, nawet jeśli warunek jest fałszywy.
```JS
let i = 5;

do {
  console.log("Wartość:", i);
  i++;
} while (i < 5);
```

➡️ W tym przykładzie kod wykona się raz, mimo że i < 5 jest false.

d) **for...of — iteracja po elementach tablicy (lub innej kolekcji)**
Idealna do tablic, stringów, Setów, Map itd.

```JS
const fruits = ["jabłko", "banan", "gruszka"];

for (const fruit of fruits) {
  console.log(fruit);
}
```
 

e)  **for...in — iteracja po kluczach obiektu**

Używana do obiektów (nie tablic!).
```JS
const person = { name: "Anna", age: 25, city: "Warszawa" };

for (const key in person) {
  console.log(key + ":", person[key]);
}
```

📘 Wynik:

name: Anna
age: 25
city: Warszawa

6. **Przerywanie i pomijanie iteracji**
- **break** — przerywa działanie pętli

```JS
for (let i = 0; i < 10; i++) {
  if (i === 5) break;
  console.log(i);
}
```

➡️ Wypisze liczby 0–4 i zakończy pętlę.

- **continue** — pomija bieżącą iterację

```JS
for (let i = 0; i < 5; i++) {
  if (i === 2) continue;
  console.log(i);
}
```