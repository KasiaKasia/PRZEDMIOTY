# HTML

**HTML** **(HyperText Markup Language)** to **język znaczników używany do tworzenia struktury stron** internetowych. **Nie jest językiem programowania** — opisuje, co znajduje się na stronie: nagłówki, tekst, obrazy, linki, formularze, tabele itd.

## Podstawowa budowa dokumentu HTML

```html
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Moja pierwsza strona</title>
</head>

<body>

    <h1>Moja pierwsza strona HTML</h1>

    <p>Uczę się języka HTML.</p>

</body>

</html>
```

| Znacznik          | Znaczenie                                                                                                                                     |
| ----------------- | ----------------------------------------------------------------------------------------------------------------------------------------------|
| `<!DOCTYPE html>` | informuje przeglądarkę, że dokument jest napisany w HTML5. Dzięki temu przeglądarka wie, jak poprawnie interpretować i wyświetlać stronę.     |
| `<html>`          | główny element całej strony                                                                                                                   |
| `<head>`          | informacje o stronie niewidoczne bezpośrednio na stronie                                                                                      |
| `<meta>`          | dodatkowe informacje o dokumencie                                                                                                             |
| `<title>`         | tytuł widoczny na karcie przeglądarki                                                                                                         |
| `<body>`          | zawartość strony widoczna dla użytkownika                                                                                                     |


## Podstawowe znaczniki HTML

### Nagłówki

HTML posiada 6 poziomów nagłówków:
```html
<h1>Nagłówek poziomu 1</h1>
<h2>Nagłówek poziomu 2</h2>
<h3>Nagłówek poziomu 3</h3>
<h4>Nagłówek poziomu 4</h4>
<h5>Nagłówek poziomu 5</h5>
<h6>Nagłówek poziomu 6</h6>
```
`<h1>` jest najważniejszym nagłówkiem, a `<h6>` najmniej ważnym.
Na stronie zwykle mamy jeden główny `<h1>`.

### Akapit

Do tworzenia akapitów służy:
```html
<p>To jest pierwszy akapit tekstu.</p>

<p>To jest drugi akapit tekstu.</p>
```
`<p>` pochodzi od angielskiego paragraph.

### Przejście do nowej linii
```html
Jan Kowalski<br>
ul. Kwiatowa 10<br>
00-001 Warszawa
```
`<br>` oznacza line break, czyli złamanie linii.

Nie wymaga znacznika zamykającego.

### Linia pozioma
```html
<p>Pierwsza część strony</p>
<hr>
<p>Druga część strony</p>
```
`<hr>` tworzy poziomą linię oddzielającą treść.

### Pogrubienie tekstu

Najczęściej:
```html
<strong>Ważna informacja</strong>
```
Można również spotkać:
```html
<b>Pogrubiony tekst</b>
```
Różnica jest semantyczna. `<strong>` oznacza, że tekst jest ważny, natomiast `<b>` przede wszystkim wyróżnia go wizualnie.

### Kursywa
```html
<em>Ten tekst jest zaakcentowany.</em>
```
lub:
```html
<i>Ten tekst jest zapisany kursywą.</i>
```
`<em>` oznacza zaakcentowanie lub podkreślenie znaczenia tekstu. Ma znaczenie semantyczne, a wiec oznacza, że znacznik przekazuje informację o znaczeniu treści, a nie tylko o jej wyglądzie.
`<i>` oznacza głównie wyróżnienie tekstu stylistycznie, np. termin, obce słowo lub nazwę, bez sugerowania szczególnego nacisku.

### Podkreślenie
```html
<u>Podkreślony tekst</u>
```
### Indeks górny

Przydatny np. w matematyce:
```html
2<sup>3</sup> = 8
```
Rezultat: 2³ = 8

### Indeks dolny

Przydatny np. w chemii:
```html
H<sub>2</sub>O
```
Rezultat: H₂O

### Linki

Do tworzenia linków służy znacznik `<a>`:
```html
<a href="https://github.com/KasiaKasia">Kasia</a>
```
Najczęściej używane atrybuty znacznika `<a>`:

| Atrybut    | Przykładowa wartość        | Znaczenie                                                                                      |
| ---------- | -------------------------- | ---------------------------------------------------------------------------------------------- |
| `href`     | `"https://www.google.com"` | Określa adres, do którego prowadzi link.                                                       |
| `target`   | `"_blank"`                 | Określa, gdzie ma zostać otwarty link.                                                         |
| `rel`      | `"noopener noreferrer"`    | Określa relację między bieżącą stroną a stroną docelową; często stosowany z `target="_blank"`. |
| `title`    | `"Przejdź do Google"`      | Dodatkowa informacja o linku, zwykle widoczna po najechaniu kursorem.                          |
| `download` | `"plik.pdf"`               | Powoduje pobranie wskazanego pliku zamiast jego otwarcia.                                      |
| `hreflang` | `"en"`                     | Informuje, w jakim języku jest strona, do której prowadzi link.                                |
| `type`     | `"application/pdf"`        | Informuje o typie zasobu, do którego prowadzi link.                                            |

Atrybut `target`
Najczęściej używane wartości:

| Wartość   | Znaczenie                                                    |
| --------- | ------------------------------------------------------------ |
| `_self`   | Otwiera link w tej samej karcie — wartość domyślna.          |
| `_blank`  | Otwiera link w nowej karcie lub oknie.                       |
| `_parent` | Otwiera link w kontekście nadrzędnym, np. przy użyciu ramek. |
| `_top`    | Otwiera link w najwyższym kontekście przeglądania.           |

Wyobraź sobie taką strukturę:
```text
Strona główna
└── iframe
    └── strona.html
```


Jeśli link znajduje się wewnątrz strona.html, to:

| Wartość   | Co robi                                                                       |
| --------- | ----------------------------------------------------------------------------- |
| `_parent` | Otwiera link w **elemencie nadrzędnym**, czyli w stronie zawierającej iframe. |
| `_top`    | Otwiera link w **najwyższej stronie**, czyli usuwa wszystkie poziomy iframe.  |

Przykład _parent
```html
<a href="kontakt.html" target="_parent">Kontakt</a>
```
Jeżeli link znajduje się w iframe, kontakt.html zostanie otwarty **zamiast strony, która bezpośrednio zawiera ten iframe**.

Przykład _top
```html
<a href="kontakt.html" target="_top">Kontakt</a>
```

kontakt.html zostanie otwarty w **całym oknie przeglądarki**, nawet gdy link znajduje się w iframe zagnieżdżonym w innym iframe.



Atrybut `rel` **określa relację między bieżącą stroną a stroną lub zasobem, do którego prowadzi link**. Może zawierać kilka wartości jednocześnie, oddzielonych spacjami.

Najczęściej używane wartości `rel`

| Wartość                 | Znaczenie                                                                                                                                        |
| ----------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------ |
| `"noopener"`            | Zapobiega uzyskaniu przez otwartą stronę dostępu do strony, z której użytkownik przeszedł. Często stosowany z `target="_blank"`.                 |
| `"noreferrer"`          | Powoduje, że strona docelowa nie otrzymuje informacji o adresie strony, z której użytkownik przeszedł. Dodatkowo działa podobnie jak `noopener`. |
| `"noopener noreferrer"` | Łączy działanie obu powyższych wartości.                                                                                                         |
| `"nofollow"`            | Informuje wyszukiwarki, że nie powinny traktować linku jako rekomendacji strony docelowej.                                                       |
| `"sponsored"`           | Oznacza link reklamowy, sponsorowany lub płatny.                                                                                                 |
| `"ugc"`                 | Oznacza link pochodzący z treści utworzonej przez użytkownika, np. komentarza lub forum.                                                         |
| `"external"`            | Informuje, że link prowadzi do zewnętrznej strony lub zasobu.                                                                                    |
| `"author"`              | Wskazuje stronę dotyczącą autora dokumentu lub artykułu.                                                                                         |
| `"help"`                | Wskazuje link prowadzący do pomocy lub dokumentacji.                                                                                             |
| `"license"`             | Informuje, że link prowadzi do informacji o licencji.                                                                                            |
| `"next"`                | Wskazuje następną stronę w serii dokumentów.                                                                                                     |
| `"prev"`                | Wskazuje poprzednią stronę w serii dokumentów.                                                                                                   |

### Obrazy
```html
<img src="kot.jpg" alt="Zdjęcie kota">
```
Najważniejsze atrybuty:

| Atrybut   | Znaczenie                                                                                                                              |
| --------- | -------------------------------------------------------------------------------------------------------------------------------------- |
| `src`     | Adres lub nazwa pliku obrazu.                                                                                                          |
| `alt`     | Tekst alternatywny opisujący obraz.                                                                                                    |
| `width`   | Szerokość obrazu, np. `width="300"`.                                                                                                   |
| `height`  | Wysokość obrazu, np. `height="200"`.                                                                                                   |
| `title`   | Dodatkowa informacja o obrazie, często wyświetlana po najechaniu kursorem.                                                             |
| `loading` | `loading="lazy"` - obraz jest ładowany z opóźnieniem — dopiero gdy użytkownik zbliża się do miejsca, w którym obraz będzie widoczny |
|           | `loading="eager"`- Obraz ma zostać załadowany od razu, nawet jeśli znajduje się niżej na stronie.|                      
 

 
### Lista nieuporządkowana

Lista z punktami:
```html
<ul>
 <li>Coffee</li>
 <li>Tea</li>
 <li>Milk</li>
</ul> 
```

Rezultat:
● Coffee
● Tea
● Milk

`ul` = lista nieuporządkowana
`li` = element listy

### Lista uporządkowana

Lista numerowana:
```html
<ol>
 <li>Coffee</li>
 <li>Tea</li>
 <li>Milk</li>
</ol>
```

Rezultat:
1. Coffee
2. Tea
3. Milk

`ol` = lista uporządkowana

| Atrybut            |   Znaczenie                                                                                    |
| ------------------ | ---------------------------------------------------------------------------------------------: | 
| type               | Typ numeracji                                                                                  |
| ------------------ | ---------------------------------------------------------------------------------------------: | 
|                    | "1" (domyślnie),                                                                               |
|                    | "A" (wielkie litery),                                                                          |
|                    | "a" (małe litery),                                                                             |
|                    | "I" (wielkie rzymskie),                                                                        |
|                    | "i" (małe rzymskie).                                                                           | 
| ------------------ | ---------------------------------------------------------------------------------------------: | 
| start              | Numer, od którego zaczyna się lista (np. start="5" → pierwszy element ma numer 5).             |
| ------------------ | ---------------------------------------------------------------------------------------------: | 
| reversed           |   Odwraca kolejność numeracji (np. ostatni element będzie 1).                                  |

### Inne listy
```html
<dl>
 <dt>Coffee</dt>
 <dd>- black hot drink</dd>
 <dt>Milk</dt>
 <dd>- white cold drink</dd>
</dl>
```
Rezultat
Coffee
 - black hot drink
 Milk
 - white cold drink


### Znaczniki liniowe i blokowe

**Znaczniki blokowe (display: block)**
> ● Definicja: Elementy blokowe zajmują całą dostępną szerokość swojego kontenera nadrzędnego, tworząc "blok", który zaczyna się od nowej linii i rozciąga się na całą szerokość. Każdy kolejny element blokowy pojawia się poniżej poprzedniego.
> ● Cechy:
    > ○ Zajmują 100% szerokości rodzica (chyba że zmieniono to np. przez width).
    > ○ Zawsze zaczynają się od nowej linii.
    > ○ Mogą mieć ustawione właściwości takie jak width, height, margin, padding w sposób pełny.
    > ○ Przykłady domyślnych elementów blokowych: <div>, <p>, <h1>–<h6>, <ul>, <li>, <section>, <article>, <form>.


**Znaczniki liniowe (display: inline)**
> ● Definicja: Elementy liniowe zajmują tylko tyle miejsca, ile jest potrzebne do wyświetlenia ich zawartości, i nie zaczynają się od nowej linii. Są ułożone obok siebie w tej samej linii, o ile pozwala na to przestrzeń.
> ● Cechy:
    > ○ Nie można ustawić dla nich pełnych właściwości width i height (rozmiar zależy od zawartości).
    > ○ Marginesy (margin) i wypełnienia (padding) działają tylko w poziomie (lewo/prawo), nie w pionie.
    > ○ Przykłady domyślnych elementów liniowych: <span>, <a>, <strong>, <em>, <img>, <b>, <i>.


Przykład:
```html
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Div i span</title>

    <style>
        div {
            border: 2px solid black;
            margin: 10px 0;
            padding: 10px;
        }

        span {
            background-color: yellow;
        }
    </style>
</head>

<body>

    <h1>Przykład div i span</h1>

    <div>Blok 1</div>
    <div>Blok 2</div>


    <p>
        To jest zwykły tekst, a
        <span>ten fragment znajduje się w span</span>
        i tekst dalej jest w tej samej linii.
    </p>
    <span>Tekst 1</span>
    <span>Tekst 2</span>
</body>

</html>
```
**Efekt**: Oba `<div>` pojawią się jeden pod drugim, każdy zajmując całą szerokość kontenera.

**Efekt**: Oba `<span>` pojawią się w tej samej linii, obok siebie, z tłem obejmującym tylko ich zawartość.


### Znaczniki semantyczne

**W HTML5 znaczniki semantyczne służą do opisywania struktury i znaczenia treści na stronie** w sposób bardziej czytelny dla przeglądarek, wyszukiwarek i programistów.

Lista najczęściej używanych znaczników semantycznych w HTML5:

1. `<header>` – Definiuje nagłówek strony, sekcji lub artykułu, zazwyczaj zawierający logo, menu nawigacyjne lub tytuły.
2. `<nav>` – Określa sekcję nawigacyjną, zawierającą linki do innych stron lub części dokumentu.
3. `<main>` – Reprezentuje główną treść dokumentu, unikalną dla danej strony (powinna występować tylko raz).
4. `<article>` – Oznacza niezależną, samodzielną treść, taką jak wpis na blogu, artykuł czy post.
5. `<section>` – Grupuje powiązane tematycznie treści, zwykle z nagłówkiem (np. `<h2>`).
6. `<aside>` – Zawiera treści poboczne, takie jak panele boczne, reklamy czy dodatkowe informacje.
7. `<footer>` – Definiuje stopkę strony lub sekcji, zawierającą np. informacje kontaktowe, prawa autorskie.
8. `<figure>` – Służy do grupowania multimediów (np. obrazów, diagramów) z opcjonalnym podpisem.
9. `<figcaption>` – Podpis dla elementu `<figure>`, opisujący zawartośćmulti medialną.
10. `<details>` – Tworzy interaktywny element, który można rozwinąć/zwinąć, aby pokazać dodatkowe informacje.
11. `<summary>` – Definiuje nagłówek dla elementu `<details>`, widoczny przed rozwinięciem.
12. `<mark>` – Wyróżnia tekst, który jest istotny w danym kontekście (np. wyniki wyszukiwania).
13. `<time>` – Oznacza datę, godzinę lub zakres czasowy, z opcjonalnym atrybutem `datetime`.
14. `<address>` – Służy do oznaczania informacji kontaktowych, np. adresu e-mail, telefonu czy lokalizacji.
15. `<progress>` – Reprezentuje pasek postępu, np. dla ładowania lub wypełnienia formularza.
16. `<meter>` – Wskazuje wartość w określonym zakresie, np. poziom naładowania baterii.
17. `<dialog>` – Definiuje okno dialogowe lub modalne, np. do wyświetlania alertów.
18. `<picture>` – Umożliwia definiowanie różnych źródeł obrazów dla różnych urządzeń lub rozdzielczości.
19. `<template>` – Przechowuje treść, która nie jest wyświetlana od razu, ale może być użyta przez JavaScript