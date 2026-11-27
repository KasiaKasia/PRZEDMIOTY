# CSS (Cascading Style Sheets)

**CSS (Cascading Style Sheets)**, czyli kaskadowe arkusze stylów, to język służący do określania wyglądu elementów na stronach internetowych.

**Za pomocą CSS możemy zmieniać między innymi:**
- kolor tekstu i tła,
- rodzaj, rozmiar i grubość czcionki,
- szerokość i wysokość elementów,
- odstępy pomiędzy elementami,
- obramowania i zaokrąglenia,
- rozmieszczenie elementów na stronie.

## **Budowa reguły CSS**

**Reguła CSS składa się z selektora, właściwości oraz wartości.**

```CSS
p {
    color: blue;
    font-size: 20px;
}
```

## **Trzy sposoby stosowania CSS**
Style CSS można dołączyć do dokumentu HTML na trzy podstawowe sposoby.


### **Style lokalne (inline)**

Zapisywane bezpośrednio w znaczniku HTML za pomocą atrybutu style.


### **Style wewnętrzne (internal)**

Zapisywane w znaczniku `<style>`, zazwyczaj wewnątrz sekcji <head>.


### **Style zewnętrzne (external)**

Zapisywane w osobnym pliku z rozszerzeniem .css, dołączanym do dokumentu HTML.


## **Style lokalne – inline CSS**

**Style lokalne zapisujemy bezpośrednio wewnątrz znacznika HTML, wykorzystując atrybut style.**

Przykład 1 – zmiana koloru i rozmiaru tekstu
```HTML
<p style="color: red; font-size: 20px;">
    Witaj na stronie!
</p>
```

**Zalety**: Szybkie zastosowanie stylu do pojedynczego elementu.

**Wady**: Trudniejsze zarządzanie wyglądem większej strony; powtarzające się style trzeba zapisywać w wielu znacznikach.


## **Style wewnętrzne – internal CSS**
Style wewnętrzne umieszczamy w dokumencie HTML, wewnątrz znacznika <style>, który zazwyczaj znajduje się w sekcji <head>.
Przykład – stylizowanie strony szkolnej

```HTML

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Style wewnętrzne</title>

    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #205782;
            text-align: center;
        }

        p {
            color: green;
            font-size: 18px;
        }
    </style>

</head>
<body>

    <h1>Portal szkolny</h1>

    <p>Witamy na naszej stronie.</p>

    <p>Zapraszamy do udziału w konkursie.</p>

</body>
</html>
```

**Zalety**: Można łatwo stylizować wiele elementów w jednym dokumencie HTML.

**Wady**: Style są dostępne tylko w tym dokumencie; trudniej współdzielić je pomiędzy wieloma podstronami.

## **Style zewnętrzne – external CSS**
Style zewnętrzne przechowujemy w osobnym pliku o rozszerzeniu .css.

**Dokument HTML łączy się z plikiem CSS za pomocą znacznika <link> umieszczonego w sekcji <head>.**

Przykład – dwa osobne pliki

mojastrona/

*    index.html struktura strony

*    style.css  wygląd strony



Plik 1: index.html
```HTML
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Style zewnętrzne</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

    <h1>Portal szkolny</h1>

    <p>Witaj na stronie szkoły.</p>

    <p>Zapraszamy na wydarzenia szkolne.</p>

</body>
</html>
```


Plik 2: style.css
```CSS
body {
    background-color: #f0f8ff;
    font-family: Arial, sans-serif;
}

h1 {
    color: #205782;
    text-align: center;
}

p {
    color: green;
    font-size: 18px;
}
```



**Połączenie plików**
<link rel="stylesheet" href="style.css">


* <link> – znacznik łączący dokument HTML z zewnętrznym zasobem.
* rel="stylesheet" – informuje, że dołączony plik jest arkuszem stylów.
* href="style.css" – określa ścieżkę do pliku CSS.

**Ważne**: Jeśli plik CSS znajduje się w folderze css, ścieżka powinna wyglądać tak:

`<link rel="stylesheet" href="css/style.css">`

## Podstawowe właściwości CSS – formatowanie tekstu

| Właściwość CSS    | Przykład                     | Działanie                 |
|-------------------|------------------------------|---------------------------|
| `color`           | `color: red;`                | Ustawia kolor tekstu.     |
| `font-size`       | `font-size: 20px;`           | Ustawia rozmiar czcionki. |
| `font-family`     | `font-family: Arial;`        | Ustawia rodzaj czcionki.  |
| `font-weight`     | `font-weight: bold;`         | Pogrubia tekst.           |
| `font-style`      | `font-style: italic;`        | Pochyla tekst.            |
| `text-align`      | `text-align: left;`          | Wyrównuje tekst do lewej strony. |
| `text-decoration` | `text-decoration: none;`     | Usuwa dekorację tekstu, np. podkreślenie. |
| `text-transform`  | `text-transform: uppercase;` | Wyświetla tekst wielkimi literami. |
| `white-space`     | `white-space: nowrap;`       | Zapobiega automatycznemu zawijaniu tekstu. |


**Przykład zastosowania stylów wewnętrznych CSS**

```HTML
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Formatowanie tekstu CSS</title>

    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #205782;
            text-align: center;
        }

        .kolor {
            color: red;
        }

        .rozmiar {
            font-size: 24px;
        }

        .czcionka {
            font-family: Georgia, serif;
        }

        .pogrubienie {
            font-weight: bold;
        }

        .pochylenie {
            font-style: italic;
        }

        .wyrownanie {
            text-align: right;
        }

        .podkreslenie {
            text-decoration: underline;
        }

        .wielkie-litery {
            text-transform: uppercase;
        }

        .bez-zawijania {
            width: 200px;
            white-space: nowrap;
        }
    </style>

</head>
<body>

    <h1>Portal szkolny</h1>

    <p class="kolor">
        Tekst w kolorze czerwonym.
    </p>

    <p class="rozmiar">
        Tekst o rozmiarze 24px.
    </p>

    <p class="czcionka">
        Tekst zapisany czcionką Georgia.
    </p>

    <p class="pogrubienie">
        Tekst pogrubiony.
    </p>

    <p class="pochylenie">
        Tekst pochylony.
    </p>

    <p class="wyrownanie">
        Tekst wyrównany do prawej strony.
    </p>

    <p class="podkreslenie">
        Tekst podkreślony.
    </p>

    <p class="wielkie-litery">
        Tekst wyświetlany wielkimi literami.
    </p>

    <p class="bez-zawijania">
        Ten tekst nie zostanie zawinięty do kolejnego wiersza.
    </p>

</body>
</html>
```

## Najczęściej stosowane wartości właściwości CSS

| Właściwość      | Wartość      | Działanie                    |
|-----------------|--------------|------------------------------|
| `text-align`    | `left`       | Wyrównanie do lewej strony.  |
| `text-align`    | `right`      | Wyrównanie do prawej strony. |
| `text-align`    | `center`     | Wyśrodkowanie tekstu.        |
| `text-align`    | `justify`    | Wyrównanie tekstu do obu krawędzi. |
| `font-weight`   | `normal`     | Normalna grubość czcionki.  |
| `font-weight`   | `bold`       | Pogrubienie tekstu.         |
| `font-style`    | `normal`     | Zwykły tekst.               |
| `font-style`    | `italic`     | Pochylenie tekstu.          |
| `text-decoration` | `none`      | Brak dekoracji tekstu.     |
| `text-decoration` | `underline` | Podkreślenie tekstu.       |
| `text-decoration` | `overline`  | Linia nad tekstem.         |
| `text-decoration` | `line-through` | Przekreślenie tekstu.   |
| `text-transform`  | `uppercase`    | Wielkie litery.         |
| `text-transform`  | `lowercase`    | Małe litery.            |
| `text-transform`  | `capitalize`   | Pierwsza litera każdego słowa jest wielka. |
| `white-space`     | `normal` | Automatyczne zawijanie tekstu. |
| `white-space`     | `nowrap` | Brak automatycznego zawijania tekstu. |


**Przykład zastosowania kilku właściwości jednocześnie**
```CSS
p {
    color: darkblue;
    font-size: 20px;
    font-family: Arial, sans-serif;
    font-weight: bold;
    font-style: italic;
    text-align: center;
    text-decoration: underline;
    text-transform: uppercase;
}
```

## Podstawowe właściwości CSS – tło i obramowanie

| Właściwość CSS     | Przykład                        | Działanie                     |
|--------------------|---------------------------------|-------------------------------|
| `background-color` | `background-color: lightblue;`  | Ustawia kolor tła elementu.   |
| `border`           | `border: 1px solid black;`      | Ustawia obramowanie elementu. |
| `border-radius`    | `border-radius: 10px;`          | Zaokrągla rogi elementu.      |
| `box-shadow`       | `box-shadow: 2px 2px 5px gray;` | Dodaje cień do elementu.      |
| `opacity`          | `opacity: 0.5;`                 | Ustawia stopień przezroczystości elementu. |

**Przykład zastosowania stylów wewnętrznych CSS**

```HTML
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Tło i obramowanie CSS</title>

    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #205782;
            text-align: center;
        }

        p {
            padding: 20px;
            width: 300px;
        }

        .tlo {
            background-color: lightblue;
        }

        .obramowanie {
            border: 2px solid black;
        }

        .zaokraglenie {
            background-color: lightblue;
            border-radius: 15px;
        }

        .cien {
            background-color: white;
            box-shadow: 2px 2px 5px gray;
        }

        .przezroczystosc {
            background-color: green;
            color: white;
            opacity: 0.5;
        }
    </style>

</head>
<body>

    <h1>Tło i obramowanie</h1>

    <p class="tlo">
        Element z niebieskim tłem.
    </p>

    <p class="obramowanie">
        Element z czarnym obramowaniem.
    </p>

    <p class="zaokraglenie">
        Element z zaokrąglonymi rogami.
    </p>

    <p class="cien">
        Element z cieniem.
    </p>

    <p class="przezroczystosc">
        Element półprzezroczysty.
    </p>

</body>
</html>
```

## Rodzaje obramowania CSS

| Wartość  | Przykład                    | Działanie         |
|----------|-----------------------------|-------------------|
| `solid`  | `border: 2px solid black;`  | Linia ciągła.     |
| `dashed` | `border: 2px dashed black;` | Linia przerywana. |
| `dotted` | `border: 2px dotted black;` | Linia kropkowana. |
| `double` | `border: 4px double black;` | Linia podwójna.   |
| `none`   | `border: none;`             | Brak obramowania. |


**Wyjaśnienie właściwości box-shadow**

`box-shadow: 2px 2px 5px gray;`


| **Wartość**	|    **Znaczenie**              |
|----------|------------------------------------|
| 2px	   |     Przesunięcie cienia w poziomie.|
| 2px	   |     Przesunięcie cienia w pionie.  |
| 5px	   |     Promień rozmycia cienia.       |
| gray	   | Kolor cienia.                      |


**Wyjaśnienie właściwości opacity**

**Właściwość opacity przyjmuje wartości od 0 do 1.**

| **Wartość**	|	Działanie|
|---------------|------------------------------------|
| opacity: 1;	| Element całkowicie widoczny.  |
| opacity: 0.75;| Element widoczny w 75%.       |
| opacity: 0.5;	| Element widoczny w 50%.       |
| opacity: 0.25;| Element widoczny w 25%.       |
| opacity: 0;	| Element całkowicie przezroczysty.|



## Podstawowe właściwości CSS – rozmiary i odstępy

| Właściwość CSS | Przykład | Działanie |
|---|---|---|
| `width` | `width: 300px;` | Ustawia szerokość elementu. |
| `height` | `height: 100px;` | Ustawia wysokość elementu. |
| `max-width` | `max-width: 500px;` | Ustawia maksymalną szerokość elementu. |
| `min-height` | `min-height: 100px;` | Ustawia minimalną wysokość elementu. |
| `padding` | `padding: 20px;` | Ustawia odstęp wewnętrzny elementu. |
| `margin` | `margin: 20px;` | Ustawia odstęp zewnętrzny elementu. |
| `margin-top` | `margin-top: 10px;` | Ustawia margines górny. |
| `margin-left` | `margin-left: 10px;` | Ustawia margines lewy. |
| `box-sizing` | `box-sizing: border-box;` | Uwzględnia padding i obramowanie w ustawionej szerokości i wysokości elementu. |


## Model pudełkowy CSS – Box Model
 
**Model pudełkowy (ang. CSS Box Model)** to sposób, w jaki przeglądarka internetowa przedstawia elementy HTML, określając ich rozmiary, obramowanie oraz odstępy wewnętrzne i zewnętrzne.

Każdy element HTML, np. p, div, h1, img czy input, jest traktowany przez przeglądarkę jako prostokątne pudełko.

Model pudełkowy składa się z czterech podstawowych warstw:

```text
+-------------------------------------------------------+
|               MARGIN – odstęp zewnętrzny              |
|   +-----------------------------------------------+   |
|   |             BORDER – obramowanie              |   |
|   |   +---------------------------------------+   |   |
|   |   |     PADDING – odstęp wewnętrzny       |   |   |
|   |   |   +-------------------------------+   |   |   |
|   |   |   |                               |   |   |   |
|   |   |   |    CONTENT – zawartość        |   |   |   |
|   |   |   |                               |   |   |   |
|   |   |   |    width  – szerokość         |   |   |   |
|   |   |   |    height – wysokość          |   |   |   |
|   |   |   |                               |   |   |   |
|   |   |   +-------------------------------+   |   |   |
|   |   |                                       |   |   |
|   |   +---------------------------------------+   |   |
|   |                                               |   |
|   +-----------------------------------------------+   |
|                                                       |
+-------------------------------------------------------+
```