# Podstawy JavaScript

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


## 8. Wyszukiwanie elementów w dokumencie

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

## 🎨 5. Wybrane właściwości obiektu style

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

## 🧩 Tworzenie tablicy w JavaScript

W JavaScript tablica (ang. array) to specjalny typ **obiektu**, który może przechowywać **wiele wartości** w jednej zmiennej

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