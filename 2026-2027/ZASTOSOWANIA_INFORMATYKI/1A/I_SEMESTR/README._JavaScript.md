## Wyszukiwanie elementów w dokumencie

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

