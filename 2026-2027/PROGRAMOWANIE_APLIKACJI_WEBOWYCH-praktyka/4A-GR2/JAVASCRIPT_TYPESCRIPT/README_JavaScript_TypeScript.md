# Podstawy JavaScript i TypeScript



## JavaScript i TypeScript 

### JavaScript

**JavaScript (JS)** to język programowania używany przede wszystkim do tworzenia interaktywnych stron i aplikacji webowych. Kod JavaScript może być wykonywany:

- w **przeglądarce internetowej** – np. do obsługi formularzy, zdarzeń, DOM i komunikacji z API,
- poza przeglądarką – np. w środowisku **Node.js**.

JavaScript jest językiem **dynamicznie typowanym**. Oznacza to, że typ zmiennej wynika z aktualnie przypisanej wartości i może się zmienić w czasie działania programu.

```JS
let wartosc = 10;      // number
wartosc = "tekst";    // dozwolone w JavaScript – teraz string
```

### TypeScript

**TypeScript (TS)** to język rozwijany przez Microsoft, który **rozszerza JavaScript o system typów statycznych i dodatkowe narzędzia pomocne podczas tworzenia większych aplikacji**.

Najważniejsze cechy TypeScript:

- pozwala określać typy zmiennych, parametrów funkcji i zwracanych wartości,
- potrafi wykryć wiele błędów **przed uruchomieniem programu**,
- obsługuje m.in. `interface`, aliasy typów, typy unii, generyki i modyfikatory dostępu,
- jest podstawowym językiem używanym w **Angularze**,
- może być również używany po stronie serwera, np. razem z **Node.js**.

```TS
let wartosc: number = 10;
wartosc = 20;          // ✅ poprawnie
// wartosc = "tekst"; // ❌ błąd TypeScript – string nie jest typem number
```

> **Ważne:** przeglądarka nie wykonuje TypeScriptu bezpośrednio. Kod `.ts` jest najpierw kompilowany/transpilowany do JavaScriptu `.js`, a dopiero JavaScript jest wykonywany przez przeglądarkę lub Node.js.

```text
TypeScript (.ts)  →  kompilator TypeScript  →  JavaScript (.js)  →  przeglądarka / Node.js
```

### JavaScript a TypeScript – najważniejsza różnica

| JavaScript | TypeScript |
|---|---|
| typowanie dynamiczne | typowanie statyczne na etapie tworzenia programu |
| typów zwykle nie zapisujemy przy zmiennych | możemy jawnie określać typy |
| część błędów ujawnia się dopiero podczas działania | wiele błędów wykrywa kompilator przed uruchomieniem |
| pliki `.js` | pliki `.ts` |
| wykonywany bezpośrednio przez przeglądarkę/Node.js | przed wykonaniem jest zamieniany na JavaScript |

**TypeScript nie zastępuje JavaScriptu.** Po kompilacji kod TypeScript staje się JavaScriptem. Typy TypeScript służą przede wszystkim programiście i **nie istnieją już w gotowym kodzie JavaScript**.

### Uruchomienie prostego pliku TypeScript?
Wcześniej musisz mieć zainstalowany Node.js i wykonać instrukcję:

`npm install -g typescript`

Przykładowy plik `app.ts`:

```TS
const message: string = "Witaj z TypeScript!";
console.log(message);
```

Po zainstalowaniu TypeScriptu można skompilować go poleceniem:

```bash
tsc app.ts
```

Powstanie plik `app.js`, który może zostać wykonany przez przeglądarkę lub Node.js.

W projekcie Angular kompilacją TypeScriptu zajmują się narzędzia Angulara, więc zwykle nie uruchamiamy ręcznie `tsc` dla każdego pliku.

### Uruchomienie pliku JavaScript
W katalogu skryptu wykonujesz polecenie 

```bash
node nazwa_skrypu_javascript.js
```
---

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



### Dołączanie TypeScript do HTML

W zwykłym dokumencie HTML **nie dołączamy bezpośrednio pliku `.ts`** w taki sposób:

```HTML
<!-- ❌ przeglądarka nie wykonuje bezpośrednio TypeScriptu -->
<script src="app.ts"></script>
```

Najpierw plik `app.ts` musi zostać zamieniony na JavaScript, np. `app.js`, a dopiero potem dołączamy wynik:

```HTML
<script src="app.js"></script>
```

W nowoczesnych projektach, np. Angular, cały ten proces wykonują automatycznie narzędzia budujące projekt.


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



### TypeScript – zmienne i typowanie

`let` i `var` działają w TypeScript pod względem zasięgu tak samo jak w JavaScript. Najważniejszą różnicą jest możliwość określenia **typu zmiennej**.

```TS
let liczba: number = 10;
let imie: string = "Anna";
let aktywny: boolean = true;
```

TypeScript często potrafi sam **wywnioskować typ** na podstawie przypisanej wartości. Nazywamy to **inferencją typu**.

```TS
let liczba = 10;       // TypeScript wnioskuje typ number
let imie = "Anna";    // TypeScript wnioskuje typ string

liczba = 25;           // ✅
// liczba = "tekst";  // ❌ Type 'string' is not assignable to type 'number'
```

W TypeScript, tak samo jak w nowoczesnym JavaScript, zaleca się używanie przede wszystkim `let` i `const`, a unikanie `var`.


## 2. **Definiowanie stałych**
🔹 `const` – stała (niezmienna wartość).  Działa tak samo jak w JavaScript. TypeScript dodatkowo kontroluje typ przypisanej wartości.

Używana, gdy wartość nie powinna się zmieniać po przypisaniu.
```JS
const pi = 3.14159;
console.log(pi); // 3.14159

// pi = 3.14; ❌ Błąd: nie można zmieniać wartości stałej 
```
```TS
const liczbaPi: number = 3.14159;
const school: string = "Technikum";
```

> `const` oznacza, że nie można przypisać do zmiennej **nowej wartości**. Nie oznacza jednak, że obiekt lub tablica stają się całkowicie niezmienne.

```TS
const user = { name: "Anna", age: 18 };
user.age = 19; // ✅ można zmienić właściwość obiektu

// user = { name: "Jan", age: 20 }; // ❌ nie można przypisać nowego obiektu
```

Cechy `const`:

- wartość musi być przypisana od razu,
- nie można zmienić ani ponownie zadeklarować tej samej stałej,
- zasięg działania – taki sam jak let (blokowy).

```JS
const imie = "Jan";
if (true) {
  const imie = "Adam";
  console.log(imie); // Adam
}
console.log(imie); // Jan
```
**Zasięg zmiennych**

```JS
if (true) {
  var x = 10;
  let y = 20;
  const z = 30;
}

console.log(x); // ✅ działa — 10
console.log(y); // ❌ błąd — y is not defined
console.log(z); // ❌ błąd — z is not defined

for (var i = 0; i < 3; i++) {
  // ...
}
console.log(i); // ✅ 3 — var "przeżył" poza pętlą

for (let j = 0; j < 3; j++) {
  // ...
}
console.log(j); // ❌ błąd — j is not defined

```


 

## 3.  **Instrukcje `if, else if, else`**

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


### TypeScript – instrukcje warunkowe

Składnia `if`, `else if`, `else` i operatora trójargumentowego jest w TypeScript **taka sama jak w JavaScript**.

TypeScript może dodatkowo zawężać typ zmiennej wewnątrz warunku (**type narrowing**):

```TS
function showValue(value: string | number): void {
  if (typeof value === "string") {
    console.log(value.toUpperCase()); // tutaj value jest string
  } else {
    console.log(value.toFixed(2));    // tutaj value jest number
  }
}
```


## 4. **switch**

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

### Porównuje wartości dwóch zmiennych

**🔸 == (operator porównania z konwersją typów)**

**Porównuje wartości dwóch zmiennych, ignorując ich typy.
Jeśli typy są różne, **JavaScript spróbuje je przekonwertować** (tzw. type coercion), **zanim porówna wartości**.

```JS
5 == "5"       // true   → bo "5" zostaje przekonwertowane na liczbę Jednak nie wszystko da sie skonwertować do liczby Number("true")-> NaN 
0 == false      // true   → false zostaje przekonwertowane na 0
null == undefined // true → są traktowane jako "równe" przy == 
```
**🔸 === (operator ścisłego porównania)**

Porównuje zarówno **wartość, jak i typ** danych.
Nie dokonuje żadnej konwersji — wszystko musi się dokładnie zgadzać.

```JS
5 === "5"      // false  → różne typy (number vs string)
0 === false     // false  → number vs boolean
null === undefined // false → różne typy
5 === 5         // true   → ten sam typ i wartość
```

```JS
null == undefined   // true  ✅ specjalny przypadek
null === undefined  // false ❌ różne typy
```

Trudniejsze porównania

```JS
"abc" == 0      // false → "abc" -> NaN → false
[1] == 1          // true → [1].toString() -> "1" -> 1
["1"] == "1"      // true
[] == 0           // true → [].toString() -> "" -> 0
[null] == 0       // true → [null].toString() -> "" -> 0
[1,2] == "1,2"    // true
"5" == true   // false → true -> 1, "5" -> 5 → 5 != 1
false == "0"  // true  → false -> 0, "0" -> 0
```

```JS
console.log('undefined === undefined', undefined === undefined) // true
console.log('undefined == undefined ', undefined ==  undefined) // true

console.log('null === null', null === null) // true
console.log('null == null ', null ==  null) // true

console.log('null === undefined', null ===  undefined) // false
console.log('null == undefined ', null ==   undefined) // true
 
console.log('NaN === NaN', NaN ===  NaN) // false
console.log('NaN == NaN ', NaN ==   NaN) // false

console.log(typeof null); // "object"
console.log(typeof undefined); // "undefined"
console.log(typeof NaN); // number
/*
output:
  + 'aa' => NaN
  - 'aa' => NaN

  + '2'  =>  2  
  - '2'  => -2
*/
console.log( 1 + '2' + '2');   // 122
console.log( 5 - + '2' + '2'); // 32
/*
+'2' → konwertuje string '2' na liczbę 2
→ 5 - 2 + '2'
→ 3 + '2' 
"32"
*/
console.log('A' + 'B' + '2');  // AB2
console.log('A' + 'B'  + 2);   // AB2
console.log('A' + - 'B' + 2);  // ANaN2
console.log('A' + - 'B' + - 2); // 'ANaN-2'
 
console.log(+'2' + +'3'); // '5'
console.log(-'2' + -'3'); // -5


console.log('0.1 + 0.2 === 0.3', 0.1 + 0.2 === 0.3); // false
/*
wynik 0.1 + 0.2 nie jest dokładnie równy 0.3 w pamięci komputera
liczby zmiennoprzecinkowe są przechowywane binarnie (w systemie dwójkowym), a nie dziesiętnie.
Nie każdą liczbę dziesiętną da się zapisać dokładnie w binarnym formacie.

Na przykład:

0.1 w systemie binarnym to liczba nieskończona:
0.0001100110011001100110011...(powtarzające się 0011)


0.2 to:
0.0011001100110011001100110...(powtarzające się 0011)


Komputer musi je zaokrąglić do ograniczonej liczby bitów (64 bity).
Więc faktycznie:

0.1 + 0.2  // ≈ 0.30000000000000004


Dlatego:
0.1 + 0.2 === 0.3  // false

bo porównujesz:
0.30000000000000004 === 0.3

🔹 Jak to sprawdzić:
console.log(0.1 + 0.2); 
// => 0.30000000000000004



*/
console.log('-"cos"' , -'cos'  ); // NaN
console.log('-+"cos"', -+'cos' ); // NaN
console.log('!"cos"' , !'cos'  ); // false
console.log('!!"cos"', !!'cos' ); // true
```




### TypeScript – `switch` i operatory porównania

`switch`, `==` i `===` działają w czasie wykonywania programu tak samo jak w JavaScript, ponieważ TypeScript jest ostatecznie zamieniany na JavaScript.

W TypeScript nadal zaleca się używanie przede wszystkim **`===` i `!==`**, ponieważ nie wykonują niejawnej konwersji typów.

Kompilator TypeScript może dodatkowo ostrzec o porównywaniu wartości o typach, które nie mają sensownego wspólnego zakresu:

```TS
const liczba: number = 5;
const tekst: string = "5";

// liczba === tekst; // ❌ TypeScript zgłosi problem: number i string to różne typy
```

TypeScript nie zmienia jednak zasad JavaScript dotyczących `NaN`, liczb zmiennoprzecinkowych czy konwersji typów w czasie działania programu.


## 5. **Pętle**
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



### TypeScript – pętle

`for`, `while`, `do...while`, `for...of` i `for...in` mają w TypeScript taką samą składnię jak w JavaScript.

Różnica polega na tym, że iterowane dane mogą mieć określone typy:

```TS
const fruits: string[] = ["jabłko", "banan", "gruszka"];

for (const fruit of fruits) {
  console.log(fruit.toUpperCase()); // fruit ma typ string
}
```

Przy iteracji po obiekcie trzeba pamiętać, że `for...in` zwraca **klucze** obiektu, a nie jego wartości.


## 6. **Przerywanie i pomijanie iteracji**
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
## 7. **Inkrementacja i Dekrementacja**

1. **Inkrementacja**

To zwiększenie wartości zmiennej o 1.

● preinkrementacja ++x – najpierw zwiększa, potem używa wartości,

● postinkrementacja x++ – najpierw używa wartości, potem zwiększa.

2. **Dekrementacja**

To zmniejszenie wartości zmiennej o 1

● predekrementacja --x,

● postdekrementacja x--.
```javascript
let x = 5;
let y = ++x;

console.log(x); // 6
console.log(y); // 6

let z = 5;
let a = z++;

console.log(z); // 6
console.log(a); // 5
a = a+1;
cosole.log(a)
```

### TypeScript – `break`, `continue`, inkrementacja i dekrementacja

Te instrukcje i operatory działają **identycznie jak w JavaScript**. TypeScript kontroluje jedynie, czy operacja jest wykonywana na odpowiednim typie danych.

```TS
let counter: number = 0;
counter++;
counter--;

// let text: string = "1";
// text++; // nie należy stosować operacji arytmetycznych do wartości, która ma być tekstem
```


## 8. Wyszukiwanie elementów w dokumencie

document to część tzw. DOM (Document Object Model) — czyli „drzewo” reprezentujące całą stronę.

HTML = struktura strony
document = interfejs JS do tej struktury

1) `document.getElementById(id)`

**Zwraca jeden element** o konkretnym identyfikatorze (atrybut `id`).
Jeśli element nie istnieje — zwraca `null`.

```HTML
<p id="opis">To jest akapit.</p>

<script>
const akapit = document.getElementById("opis");
akapit.style.color = "blue"; // zmiana koloru tekstu
</script>
```

2) `document.getElementsByTagName(tagName)`

**Zwraca kolekcję (HTMLCollection)** wszystkich elementów o danym znaczniku.

```HTML
<p>Tekst 1</p>
<p>Tekst 2</p>

<script>
const akapity = document.getElementsByTagName("p");
console.log(akapity.length); // 2
akapity[0].style.fontWeight = "bold";
</script>
```

3) `document.getElementsByClassName(className)`

**Zwraca kolekcję (HTMLCollectio)** wszystkich elementów mających określoną klasę CSS.

```HTML
<div class="sekcja">Sekcja 1</div>
<div class="sekcja">Sekcja 2</div>

<script>
const sekcje = document.getElementsByClassName("sekcja");
sekcje[1].style.backgroundColor = "lightgreen";
</script>
```

4) `document.getElementsByName(elementName)`

**Zwraca kolekcję (NodeList)** elementów o danym atrybucie `name` (np. w formularzach).

```HTML
<input type="radio" name="gender" value="M"> Mężczyzna
<input type="radio" name="gender" value="K"> Kobieta

<script>
const genders = document.getElementsByName("gender");
genders[1].checked = true; // zaznacza "Kobieta"
</script>

```
5) `document.querySelector(CSSselector)`

**Zwraca pierwszy pasujący element** do podanego selektora CSS.

```HTML
<p class="text">Pierwszy akapit</p>
<p class="text">Drugi akapit</p> 


<script>
const el = document.querySelector('.text');
console.log(el.textContent); // ➜ "Pierwszy akapit"
</script>
```

6) `document.querySelectorAll(CSSselector)`

**Zwraca wszystkie pasujące elementy (NodeList)** do podanego selektora CSS.

```HTML
<ul>
  <li class="item">A</li>
  <li class="item">B</li>
</ul>

<script>
const items = document.querySelectorAll(".item");
items.forEach(el => el.style.color = "red");
</script>
```

7) `element.closest(selector)`

**Zwraca najbliższego przodka** (lub samego siebie), który pasuje do selektora.

```HTML
<div class="card">
  <p><span id="tekst">Kliknij mnie</span></p>
</div>

<script>
const span = document.getElementById("tekst");
const card = span.closest(".card");
card.style.border = "1px solid blue";
</script>
```

8) `element.parentElement` / `element.children`

**Dostęp do rodzica lub dzieci** konkretnego elementu.

```HTML
<div id="blok">
  <p>Jeden</p>
  <p>Dwa</p>
</div>

<script>
const blok = document.getElementById("blok");
console.log(blok.children.length); // 2
</script>
```
9) `element.querySelector()` / `element.querySelectorAll()`

Te same metody co w `document`, ale **ograniczone do danego elementu**.

```HTML
<div id="menu">
  <a href="#">Start</a>
  <a href="#">Kontakt</a>
</div>

<script>
const menu = document.getElementById("menu");
const kontakt = menu.querySelector("a:last-child");
kontakt.style.color = "green";
</script>
```



### TypeScript – wyszukiwanie elementów DOM

Metody DOM są takie same jak w JavaScript, ale TypeScript zna typy elementów HTML i zwraca uwagę na możliwość otrzymania `null`.

```TS
const paragraph = document.getElementById("opis");
// typ: HTMLElement | null

if (paragraph !== null) {
  paragraph.textContent = "Nowy tekst";
}
```

Można też skorzystać z **optional chaining** `?.`:

```TS
document.getElementById("opis")?.classList.add("active");
```

Dla konkretnych elementów formularza często określamy dokładniejszy typ:

```TS
const email = document.querySelector<HTMLInputElement>("#email");

if (email) {
  console.log(email.value);
}
```

Lub stosujemy **asercję typu** (`as`), gdy wiemy, jakiego elementu oczekujemy:

```TS
const input = document.getElementById("name") as HTMLInputElement | null;
console.log(input?.value);
```


## 9. Zmiana treści i właściwości elementów HTML w JavaScript

1. `element.innerHTML = "wartość"`

• Zmienia zawartość HTML elementu.

```JS
var paragraf = document.getElementById("par1");
paragraf.innerHTML = "Nowa treść paragrafu";
```

2. `element.attribute_name = "wartość"`

• Zmiana wartości atrybutu bezpośrednio.

```JS
var obraz = document.getElementById("obrazek");
obraz.src = "nowy_obraz.jpg";
```

3. `element.setAttribute(atrybut, wartosc)`

• Ustawienie lub zmiana dowolnego atrybutu elementu.

```JS
obraz.setAttribute("alt", "Opis obrazka");
```



### TypeScript – zmiana właściwości elementów HTML

Operacje na DOM są takie same, ale TypeScript sprawdza, czy dana właściwość istnieje dla określonego typu elementu.

```TS
const image = document.getElementById("obrazek") as HTMLImageElement | null;

if (image) {
  image.src = "nowy_obraz.jpg";
  image.alt = "Opis obrazka";
}
```

W TypeScript szczególnie warto używać `textContent`, gdy chcemy wstawić zwykły tekst. `innerHTML` powinno być używane ostrożnie, zwłaszcza gdy treść pochodzi od użytkownika.


## 🖱️ Zdarzenia myszy w JavaScript

🔹 1. `onclick` – kliknięcie myszką

Występuje, gdy użytkownik **kliknie na dany element** (naciśnięcie i puszczenie lewego przycisku myszy).

```HTML
<button onclick="alert('Kliknięto przycisk!')">Kliknij mnie</button>
```

Zastosowanie:
– do wywołania funkcji po kliknięciu,
– otwierania linków,
– wysyłania formularzy,
– pokazywania lub ukrywania elementów.

🔹 2. `ondblclick` – podwójne kliknięcie

Reaguje na dwukrotne **szybkie kliknięcie w ten sam element**.

```HTML
<p ondblclick="this.style.color='red'">Kliknij mnie dwa razy, by zmienić kolor</p>
```

Zastosowanie:
– do uruchamiania innej akcji niż pojedynczy klik (np. edycja tekstu, otwarcie szczegółów).

🔹 3. `onmouseover` – najechanie kursorem

Zdarzenie występuje, gdy **kursor myszy najedzie na element**.

```HTML
<div onmouseover="this.style.backgroundColor='lightgreen'">Najedź na mnie</div>
```

Zastosowanie:
– podświetlanie przycisków,
– pokazywanie podpowiedzi (tooltipów),
– animacje po najechaniu.

🔹 4. `onmouseout` – opuszczenie kursora

Zdarzenie występuje, gdy **kursor myszy opuści element, na który wcześniej najechał**.

```HTML
<div onmouseout="this.style.backgroundColor='white'">Opuść mnie</div>
```

Zastosowanie:
– przywracanie wyglądu po onmouseover,
– ukrywanie dodatkowych informacji,
– zatrzymywanie animacji.

🔹 5. `onmousedown` – naciśnięcie przycisku myszy

Wywołuje się w momencie **naciśnięcia przycisku myszy** (jeszcze przed jego puszczeniem).

```HTML
<button onmousedown="this.style.backgroundColor='yellow'">Naciśnij i przytrzymaj</button>
```

Zastosowanie:
– efekt „wciśniętego” przycisku,
– rozpoczęcie przeciągania elementu.

🔹 6. `onmouseup` – puszczenie przycisku myszy

Występuje, gdy użytkownik **puści przycisk myszy po wcześniejszym wciśnięciu**.

```HTML
<button onmouseup="this.style.backgroundColor='lightblue'">Puść przycisk</button>
```

Zastosowanie:
– zakończenie przeciągania,
– rejestrowanie akcji po zakończeniu kliknięcia.



### TypeScript – zdarzenia myszy

W TypeScript możemy określić typ obiektu zdarzenia, np. `MouseEvent`:

```TS
const button = document.querySelector<HTMLButtonElement>("#btn");

button?.addEventListener("click", (event: MouseEvent) => {
  console.log("Kliknięto:", event.clientX, event.clientY);
});
```

W nowoczesnym JavaScript i TypeScript zamiast atrybutów HTML takich jak `onclick` często stosuje się `addEventListener()`.


## ⌨️ Zdarzenia klawiatury (keyboard events)

🔹 1. `onkeydown` – wciśnięcie klawisza
 
Występuje w momencie **naciśnięcia dowolnego klawisza** (zanim zostanie on puszczony).

```HTML
<input type="text" onkeydown="console.log('Wciśnięto klawisz')" placeholder="Napisz coś">
```

Zastosowanie:
– walidacja danych w czasie rzeczywistym,
– skróty klawiaturowe (np. Ctrl + S).

🔹 2. `onkeypress` – wciśnięcie klawisza (starsze)

Podobne do onkeydown, ale działa tylko dla klawiszy, które generują znaki (np. litery, cyfry).
Uwaga – w nowoczesnych projektach jest zastępowane przez keydown i keyup.

```HTML
<input type="text" onkeypress="console.log('Naciśnięto znak')" placeholder="Wpisz znak">
```

Zastosowanie:
– w prostych skryptach obsługujących wpisywanie tekstu (np. liczenie znaków).

🔹 3. `onkeyup` – puszczenie klawisza

Uruchamia się, gdy użytkownik **puści wciśnięty wcześniej klawisz**.

```HTML
<input type="text" onkeyup="console.log('Puszczono klawisz')" placeholder="Puść klawisz">
```

Zastosowanie:
– aktualizacja podpowiedzi po zakończeniu wpisywania,
– wyszukiwanie po wpisaniu pełnego słowa.
 
🔹 4. `oninput`

**Reaguje**, gdy **zawartość pola tekstowego się zmienia** (nawet przez wklejenie).

```HTML
<input type="text" oninput="console.log('Wpisano lub wklejono tekst')">
```

🔹 5. `onchange`

**Uruchamia się po zatwierdzeniu zmiany** (np. po opuszczeniu pola tekstowego lub zmianie wyboru w select).

```HTML
<select onchange="alert('Wybrano nową opcję')">
  <option>Polska</option>
  <option>Niemcy</option>
  <option>Francja</option>
</select>
```



### TypeScript – zdarzenia klawiatury i formularzy

```TS
const field = document.querySelector<HTMLInputElement>("#search");

field?.addEventListener("keydown", (event: KeyboardEvent) => {
  console.log("Klawisz:", event.key);
});
```

Dla zdarzenia `input` można użyć typu `Event`, a następnie określić typ `event.target`:

```TS
field?.addEventListener("input", (event: Event) => {
  const target = event.target as HTMLInputElement;
  console.log(target.value);
});
```

> `keypress` jest zdarzeniem przestarzałym. W nowych aplikacjach lepiej stosować `keydown` lub `keyup`.


## 🌍 Zdarzenia obiektów i dokumentu

🔹 1. `onload` – po załadowaniu strony

Uruchamia się, gdy cała strona (łącznie z obrazkami i stylami) zostanie załadowana.

```HTML
<body onload="alert('Strona została załadowana!')">
```

Zastosowanie:
– inicjalizacja skryptów,
– ładowanie danych po starcie strony.

🔹 2. `onresize` – po zmianie rozmiaru okna
 
Wywoływane, gdy użytkownik **zmieni rozmiar okna przeglądarki**.

```HTML
<script>
window.onresize = () => console.log("Zmieniono rozmiar okna");
</script>
```

Zastosowanie:
– dynamiczne dopasowanie układu strony,
– reagowanie na zmianę orientacji w urządzeniach mobilnych.

🔹 3. `onfocusin` – obiekt zyskał fokus

Uruchamia się, gdy element **zostanie zaznaczony** (np. pole formularza kliknięte).
 
```HTML
<input type="text" onfocusin="this.style.backgroundColor='lightyellow'">
```

Zastosowanie:
– podświetlanie aktywnych pól formularzy,
– pokazywanie podpowiedzi.

🔹 4. `onfocusout` – obiekt stracił fokus

Uruchamia się, gdy element **straci fokus** (użytkownik kliknie gdzie indziej).
 
```HTML
<input type="text" onfocusout="this.style.backgroundColor='white'">
```

Zastosowanie:
– walidacja pola po jego opuszczeniu,
– ukrywanie podpowiedzi.

 
🔹 5. `onscroll`
 
**Uruchamia się**, gdy użytkownik **przewija stronę** lub inny element z paskiem przewijania.
 
```HTML
<div onscroll="console.log('Przewijanie elementu')" style="height:100px; overflow:auto;">
  <p>Treść do przewinięcia...</p><p>Treść...</p><p>Jeszcze treść...</p>
</div>
```
🔹 6. `onerror`
 
Reaguje, gdy wystąpi **błąd wczytywania** (np. obrazka, skryptu).
 
```HTML
<img src="nieistnieje.jpg" onerror="this.src='domyslny.jpg'">
```



### TypeScript – zdarzenia `window` i dokumentu

Zasada jest taka sama jak w JavaScript. TypeScript udostępnia jednak typy dla obiektów `window`, `document` i zdarzeń.

```TS
window.addEventListener("resize", (event: UIEvent) => {
  console.log(window.innerWidth);
});
```


## Operacje na elementach dokumentu (DOM)
🔹 1. **Tworzenie elementu**

```JS
var nowyDiv = document.createElement("div");
nowyDiv.innerHTML = "Jestem nowym divem";
```

Wyjaśnienie:
Tworzy nowy element HTML (tutaj `<div>` ) w pamięci — jeszcze nie jest widoczny w dokumencie, dopóki nie zostanie dodany do jakiegoś rodzica (appendChild).
Ustawiamy mu zawartość poprzez innerHTML.

Zastosowanie:
– dynamiczne dodawanie treści, kart produktów, wiadomości, itd.

🔹 2. **Usuwanie elementu**

```JS
var rodzic = document.getElementById("kontener");
var dziecko = document.getElementById("usun");
rodzic.removeChild(dziecko);
```

Wyjaśnienie:
Usuwa konkretny element potomny (dziecko) z elementu nadrzędnego (rodzic).
Jeśli chcesz usunąć sam element bez znajomości rodzica, można też użyć metody .remove().

Zastosowanie:
– usuwanie starych komunikatów, elementów listy, kart itp.

🔹 3. **Dodawanie elementu**

```JS
rodzic.appendChild(nowyDiv);
```

Wyjaśnienie:
Dodaje nowo utworzony element (nowyDiv) na końcu listy dzieci elementu nadrzędnego (rodzic).

Zastosowanie:
– dodawanie nowych wierszy do tabeli, elementów listy, sekcji strony, komentarzy użytkowników itp.

🔹 4. **Zamiana elementu**

```JS
var staryDiv = document.getElementById("stary");
rodzic.replaceChild(nowyDiv, staryDiv);
```

Wyjaśnienie:
Zastępuje istniejący element (staryDiv) nowym (nowyDiv) w tym samym miejscu w strukturze DOM.

Zastosowanie:
– aktualizowanie widoku (np. zamiana formularza logowania na panel użytkownika).

🔹 5. **Pisanie bezpośrednio do dokumentu**

```JS
document.write("Witaj w dokumencie!");
```

Wyjaśnienie:
Wstawia tekst (lub HTML) bezpośrednio do dokumentu podczas jego ładowania.
Jeśli zostanie użyte po załadowaniu strony, może nadpisać całą zawartość strony, więc dziś raczej się tego unika.

Zastosowanie:
– dawniej używane do prostych testów lub dynamicznych komunikatów.
(Obecnie lepiej używać innerHTML lub appendChild.)

 ⚠️ **2. Problem** – gdy użyjesz document.write() po załadowaniu strony

```HTML
 <!DOCTYPE html>
<html>
<body>
  <h1>To jest moja strona</h1>
  <button onclick="addText()">Kliknij mnie</button>

  <script>
    function addText() {
      document.write("Nowy tekst!");
    }
  </script>
</body>
</html>
```

👉 Po kliknięciu przycisku:

Cała zawartość strony (nagłówek, przycisk, wszystko!) znika. Zzostaje tylko tekst „Nowy tekst!”.


👉 Co zamiast document.write()?

```JS
const p = document.createElement("p");
p.textContent = "Nowy tekst";
document.body.appendChild(p); // ➡️ Ta metoda dodaje elementy bez usuwania zawartości strony.
```

🔹 6. **Klonowanie elementu**

```JS
var oryginal = document.getElementById("karta");
var kopia = oryginal.cloneNode(true);
document.body.appendChild(kopia);
```

Wyjaśnienie:
Tworzy kopię istniejącego elementu.
Argument true oznacza, że klonowane są też wszystkie jego potomne elementy (tzw. głębokie klonowanie).

Zastosowanie:
– powielanie szablonów (np. kart produktów, pól formularza).

🔹 7. **Wstawianie elementu w określone miejsce (insertBefore)**

```JS
var nowy = document.createElement("p");
nowy.textContent = "Nowy akapit przed przyciskiem!";
var przycisk = document.getElementById("btn");
document.body.insertBefore(nowy, przycisk);
```

Wyjaśnienie:
Wstawia element przed wskazanym węzłem (przycisk) w ramach tego samego rodzica (document.body).

Zastosowanie:
– dodawanie powiadomień lub komunikatów przed konkretnym elementem na stronie.



### TypeScript – tworzenie i modyfikowanie elementów DOM

`document.createElement()` potrafi w TypeScript określić typ tworzonego elementu:

```TS
const button = document.createElement("button");
// typ button: HTMLButtonElement

button.textContent = "Zapisz";
button.disabled = false;
document.body.appendChild(button);
```

To pozwala edytorowi podpowiadać właściwości dostępne dla konkretnego elementu i wykrywać część błędów jeszcze przed uruchomieniem aplikacji.


## 🎨 10. Wybrane właściwości obiektu `style`

Za pomocą obiektu style możemy dynamicznie zmieniać wygląd elementów HTML bez potrzeby modyfikowania arkusza CSS.
Każda właściwość w JavaScript odpowiada właściwości CSS, ale w **notacji camelCase** (np. background-color → backgroundColor).

```JS
var element = document.getElementById("box");
element.style.backgroundColor = "blue";   // kolor tła
element.style.color = "white";            // kolor tekstu
element.style.fontSize = "20px";          // rozmiar czcionki
element.style.fontStyle = "italic";       // styl czcionki (pochyła)
element.style.fontWeight = "bold";        // pogrubienie tekstu
element.style.listStyleType = "circle";   // styl listy (dla <ul>)

element.style.border = "3px solid red"; // jedno polecenie dla całej ramki
// lub bardziej szczegółowo:
element.style.borderWidth = "3px";
element.style.borderStyle = "dashed";
element.style.borderColor = "green";

element.style.margin = "20px";      // zewnętrzny odstęp
element.style.padding = "10px";     // wewnętrzny odstęp
```

## 🧩 11. Tworzenie tablicy w JavaScript i TypeScript

W JavaScript tablica (ang. array) to specjalny typ **obiektu** , który może przechowywać **wiele wartości** w jednej zmiennej


🔹 **Przykład 1 – utworzenie tablicy za pomocą nawiasów kwadratowych:**

```JS
let owoce = ["jabłko", "banan", "gruszka"];
```

🔹 **Przykład 2 – z użyciem konstruktora Array():**

```JS 
let kolory = new Array("czerwony", "zielony", "niebieski");
```

🧩 **2️⃣ Dodawanie elementu na końcu tablicy – push()**

```JS 
let owoce = ["jabłko", "banan"];
owoce.push("gruszka");

console.log(owoce); // ["jabłko", "banan", "gruszka"]
owoce.push("kiwi", "pomarańcza");
console.log(owoce); // ["jabłko", "banan", "gruszka", "kiwi", "pomarańcza"]
```

🧩 **3️⃣ Usuwanie elementu z końca tablicy – pop()**

```JS 
let owoce = ["jabłko", "banan", "gruszka"];
let usuniety = owoce.pop();

console.log(owoce);   // ["jabłko", "banan"]
console.log(usuniety); // "gruszka"
```

📘 Warto wiedzieć:

`pop()` i `push()` zmieniają długość tablicy (`length`).

🧩 **4️⃣ Dodawanie elementu na początku tablicy – unshift()**

Metoda unshift() **dodaje jeden lub więcej elementów na początek tablicy**

```JS 
let owoce = ["banan", "gruszka"];
owoce.unshift("jabłko");

console.log(owoce); // ["jabłko", "banan", "gruszka"]
owoce.unshift("kiwi", "śliwka");
console.log(owoce); // ["kiwi", "śliwka", "jabłko", "banan", "gruszka"]
```

🧩 **5️⃣ Usuwanie elementu z początku tablicy – shift()**
Metoda shift() **usuwa pierwszy element tablicy i zwraca jego wartość**

```JS
let owoce = ["jabłko", "banan", "gruszka"];
let usuniety = owoce.shift();

console.log(owoce);   // ["banan", "gruszka"]
console.log(usuniety); // "jabłko"
```

### Tablice w TypeScript

W JavaScript tablica nie ma z góry określonego typu elementów. W TypeScript możemy określić, jakie wartości wolno w niej przechowywać.

```TS
const fruits: string[] = ["jabłko", "banan", "gruszka"];
const numbers: number[] = [1, 2, 3, 4];

fruits.push("kiwi"); // ✅
// fruits.push(10);  // ❌ number nie jest stringiem
```

Drugi zapis typu tablicy:

```TS
const names: Array<string> = ["Anna", "Jan"];
```

Metody `push()`, `pop()`, `shift()` i `unshift()` działają tak samo jak w JavaScript, ale TypeScript pilnuje typu elementów.

---

# TypeScript – najważniejsze dodatkowe zagadnienia przydatne w Angularze

Poniższe zagadnienia są szczególnie ważne przed rozpoczęciem pracy z **Angularem**.

## 1. Podstawowe typy w TypeScript

Najczęściej używane typy:

```TS
let age: number = 18;
let firstName: string = "Anna";
let isActive: boolean = true;
let empty: null = null;
let notAssigned: undefined = undefined;
```

W TypeScript zwykle używamy nazw typów zapisanych małą literą: `string`, `number`, `boolean`.

### Inferencja typu

Nie zawsze trzeba zapisywać typ jawnie:

```TS
let age = 18;          // number
let firstName = "Jan"; // string
```

TypeScript sam wywnioskuje typ na podstawie wartości początkowej.

## 2. `any`, `unknown`, `void` i `never`

### `any`

`any` wyłącza kontrolę typu dla danej wartości.

```TS
let value: any = 10;
value = "tekst";
value = true;
```

`any` należy stosować oszczędnie, ponieważ tracimy wtedy jedną z głównych zalet TypeScriptu.

### `unknown`

`unknown` oznacza, że nie znamy jeszcze typu wartości, ale przed użyciem musimy go sprawdzić.

```TS
let value: unknown = "tekst";

if (typeof value === "string") {
  console.log(value.toUpperCase());
}
```

`unknown` jest bezpieczniejszy niż `any`.

### `void`

Najczęściej oznacza funkcję, która nie zwraca użytecznej wartości.

```TS
function showMessage(message: string): void {
  console.log(message);
}
```

### `never`

Oznacza sytuację, w której funkcja nigdy normalnie nie kończy działania, np. zawsze zgłasza wyjątek.

```TS
function throwError(message: string): never {
  throw new Error(message);
}
```

## 3. Funkcje z typami parametrów i wartości zwracanej

W JavaScript:

```JS
function add(a, b) {
  return a + b;
}
```

W TypeScript:

```TS
function add(a: number, b: number): number {
  return a + b;
}
```

TypeScript sprawdzi argumenty:

```TS
add(2, 3);      // ✅ 5
// add("2", 3); // ❌ string nie jest number
```

### Parametr opcjonalny

```TS
function greet(name: string, title?: string): string {
  return title ? `${title} ${name}` : name;
}
```

### Wartość domyślna

```TS
function greet(name: string = "Gość"): string {
  return `Witaj ${name}`;
}
```

### Parametry rest

```TS
function sum(...numbers: number[]): number {
  return numbers.reduce((result, value) => result + value, 0);
}
```

### Arrow functions

Arrow functions działają w TypeScript tak samo jak w JavaScript, ale ich parametry i wynik mogą mieć określone typy.

```TS
const add = (a: number, b: number): number => a + b;

const showUser = (name: string): void => {
  console.log(name);
};
```

## 4. Typy obiektów

JavaScript:

```JS
const user = {
  id: 1,
  name: "Anna"
};
```

TypeScript:

```TS
const user: { id: number; name: string } = {
  id: 1,
  name: "Anna"
};
```

Przy większych obiektach wygodniej użyć `interface` lub `type`.

## 5. `interface`

`interface` opisuje strukturę obiektu.

```TS
interface User {
  id: number;
  name: string;
  email: string;
  active?: boolean;
}

const user: User = {
  id: 1,
  name: "Anna",
  email: "anna@example.com"
};
```

`?` oznacza właściwość opcjonalną.

### `readonly`

```TS
interface Product {
  readonly id: number;
  name: string;
  price: number;
}

const product: Product = {
  id: 1,
  name: "Laptop",
  price: 3500
};

// product.id = 2; // ❌ właściwość readonly
```

Interfejsy są bardzo często używane w Angularze do opisywania danych otrzymywanych np. z API.

## 6. Alias typu – `type`

```TS
type UserId = number;
type Status = "new" | "active" | "blocked";

let id: UserId = 10;
let userStatus: Status = "active";
```

`type` może opisywać zarówno obiekty, jak i typy unii czy typy literalne.

```TS
type User = {
  id: number;
  name: string;
};
```

## 7. Typy unii – `|`

Typ unii oznacza, że wartość może mieć jeden z kilku typów.

```TS
let id: number | string;

id = 10;      // ✅
id = "A10";   // ✅
// id = true; // ❌
```

Przed wykonaniem operacji właściwej dla konkretnego typu należy go zawęzić:

```TS
function printId(id: number | string): void {
  if (typeof id === "string") {
    console.log(id.toUpperCase());
  } else {
    console.log(id.toFixed(0));
  }
}
```

## 8. Typy literalne

Możemy ograniczyć wartość do konkretnych napisów lub liczb:

```TS
type Theme = "light" | "dark";

let theme: Theme = "light";
theme = "dark";
// theme = "blue"; // ❌
```

Takie typy są bardzo użyteczne dla statusów, trybów działania i konfiguracji.

## 9. Krotki – `tuple`

Krotka przypomina tablicę, ale określa liczbę elementów i typ każdego miejsca.

```TS
let person: [string, number] = ["Anna", 20];
```

```TS
const coordinates: [number, number] = [52.2297, 21.0122];
```

## 10. `enum`

`enum` pozwala zdefiniować zestaw nazwanych wartości.

```TS
enum Role {
  Admin,
  Teacher,
  Student
}

const role: Role = Role.Teacher;
```

W nowych projektach często stosuje się również typy literalne zamiast `enum`:

```TS
type Role = "admin" | "teacher" | "student";
```

## 11. Klasy w TypeScript

JavaScript ma klasy, ale TypeScript dodaje możliwość typowania pól i parametrów oraz modyfikatory dostępu.

```TS
class User {
  id: number;
  name: string;

  constructor(id: number, name: string) {
    this.id = id;
    this.name = name;
  }

  getDescription(): string {
    return `${this.id}: ${this.name}`;
  }
}
```

### Modyfikatory dostępu

- `public` – dostęp z każdego miejsca; domyślny,
- `private` – dostęp tylko wewnątrz klasy,
- `protected` – dostęp w klasie i klasach dziedziczących,
- `readonly` – wartość pola nie może zostać później zmieniona.

```TS
class Account {
  constructor(
    public id: number,
    public name: string,
    private password: string,
    readonly createdAt: Date
  ) {}

  checkPassword(value: string): boolean {
    return this.password === value;
  }
}
```

Taki skrócony zapis parametrów konstruktora automatycznie tworzy pola klasy.

## 12. Dziedziczenie

```TS
class Person {
  constructor(public name: string) {}
}

class Student extends Person {
  constructor(name: string, public className: string) {
    super(name);
  }
}
```

## 13. Generyki – `<T>`

Generyki pozwalają tworzyć kod działający z różnymi typami przy zachowaniu kontroli typów.

```TS
function first<T>(items: T[]): T | undefined {
  return items[0];
}

const firstNumber = first<number>([10, 20, 30]);
const firstName = first<string>(["Anna", "Jan"]);
```

Często TypeScript sam rozpoznaje `T`:

```TS
const value = first([1, 2, 3]); // T = number
```

Generyki są bardzo często spotykane w Angularze, RxJS i podczas komunikacji z API.

## 14. Asercja typu – `as`

Asercja typu informuje kompilator, że programista wie więcej o konkretnym typie wartości.

```TS
const input = document.getElementById("email") as HTMLInputElement | null;

if (input) {
  console.log(input.value);
}
```

Asercja **nie zmienia wartości w czasie działania programu** i nie wykonuje konwersji danych.

```TS
const value = "123" as string;
```

Nie należy nadużywać `as` tylko po to, aby wyciszyć błędy TypeScriptu.

## 15. `null`, `undefined` i optional chaining `?.`

W projektach z włączonym `strictNullChecks` TypeScript wymaga obsługi sytuacji, w której wartość może być `null` lub `undefined`.

```TS
const element = document.getElementById("title");

if (element) {
  element.textContent = "Nowy tytuł";
}
```

Skrócona forma:

```TS
element?.classList.add("active");
```

## 16. Operator `??` – nullish coalescing

Operator `??` wybiera wartość po prawej stronie tylko wtedy, gdy lewa strona jest `null` lub `undefined`.

```TS
const name: string | null = null;
const displayedName = name ?? "Brak nazwy";
```

Nie należy go mylić z `||`, który traktuje również `0`, `false` i pusty string jako wartości fałszywe.

## 17. Moduły – `export` i `import`

Nowoczesne aplikacje dzielimy na wiele plików.

`user.ts`:

```TS
export interface User {
  id: number;
  name: string;
}

export function formatUser(user: User): string {
  return `${user.id} - ${user.name}`;
}
```

`app.ts`:

```TS
import { User, formatUser } from "./user";

const user: User = { id: 1, name: "Anna" };
console.log(formatUser(user));
```

`import` i `export` są bardzo często używane w Angularze.

## 18. Promise i `async/await` z typami

TypeScript pozwala określić typ wartości zwracanej przez `Promise`.

```TS
interface User {
  id: number;
  name: string;
}

async function getUsers(): Promise<User[]> {
  const response = await fetch("/api/users");
  return response.json() as Promise<User[]>;
}
```

Przy pracy z rzeczywistym API dane powinny być również walidowane w czasie działania programu – sam typ TypeScript nie sprawdza zawartości odpowiedzi z serwera.

## 19. `tsconfig.json` – konfiguracja TypeScriptu

Projekt TypeScript może zawierać plik `tsconfig.json`, który określa sposób sprawdzania i kompilowania kodu.

Przykładowe ustawienia:

```JSON
{
  "compilerOptions": {
    "target": "ES2022",
    "strict": true
  }
}
```

Szczególnie ważne jest ustawienie `strict`, które włącza dokładniejszą kontrolę typów. Projekty Angular posiadają własne pliki konfiguracji TypeScript i korzystają z nich automatycznie podczas budowania aplikacji.

## 20. TypeScript i Angular – co trzeba znać?

Angular jest tworzony przede wszystkim w TypeScript. Przed rozpoczęciem Angulara warto dobrze znać:

1. `let` i `const`,
2. typy `string`, `number`, `boolean`,
3. tablice i obiekty,
4. funkcje i arrow functions,
5. `interface` i `type`,
6. typy unii,
7. klasy i konstruktory,
8. `public`, `private`, `protected`, `readonly`,
9. generyki,
10. `import` i `export`,
11. `Promise` i podstawy kodu asynchronicznego,
12. obsługę `null` i `undefined`,
13. DOM i typy zdarzeń,
14. dekoratory.

### Prosty przykład klasy komponentu Angular

```TS
import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  template: `<h1>{{ title }}</h1>`
})
export class AppComponent {
  title: string = 'Moja aplikacja';
}
```

W przykładzie:

- `import` pobiera potrzebny element z biblioteki,
- `@Component(...)` jest **dekoratorem** opisującym komponent Angulara,
- `AppComponent` jest klasą TypeScript,
- `title: string` jest polem o określonym typie.

## 21. Dekoratory – podstawowa idea

Dekorator dodaje metadane do klasy, pola, metody lub parametru. W Angularze spotkamy m.in.:

- `@Component`,
- `@Injectable`,
- `@Input`,
- `@Output`.

Na początku wystarczy wiedzieć, że dekoratory są wykorzystywane przez Angular do określenia **roli i konfiguracji danego elementu aplikacji**.

```TS
@Component({
  selector: 'app-user',
  templateUrl: './user.component.html'
})
export class UserComponent {}
```

---

# JavaScript → TypeScript – szybkie porównanie

| JavaScript | TypeScript |
|---|---|
| `let age = 18;` | `let age: number = 18;` |
| `let firstName = "Anna";` | `let firstName: string = "Anna";` |
| `function add(a, b) { ... }` | `function add(a: number, b: number): number { ... }` |
| `const users = [];` | `const users: User[] = [];` |
| zwykły obiekt | obiekt może być opisany `interface` lub `type` |
| typ wartości może zmienić się w trakcie działania | kompilator pilnuje zadeklarowanego/wywnioskowanego typu |
| `document.getElementById()` – programista sam pilnuje typu | wynik ma typ `HTMLElement | null` |
| zdarzenie bez jawnego typu | można użyć `MouseEvent`, `KeyboardEvent`, `Event` itd. |
| brak typów generycznych | `Array<T>`, `Promise<T>`, własne `<T>` |
| klasy bez modyfikatorów TS | `public`, `private`, `protected`, `readonly` |
| plik `.js` | plik `.ts`, który jest kompilowany do `.js` |

## Najważniejsza zasada

**Kod wykonywany po uruchomieniu aplikacji nadal zachowuje się zgodnie z zasadami JavaScriptu. TypeScript pomaga przede wszystkim podczas pisania i kompilowania kodu.**

Dlatego ucząc się Angulara warto rozumieć zarówno **JavaScript**, jak i dodatkowe mechanizmy **TypeScriptu**.
