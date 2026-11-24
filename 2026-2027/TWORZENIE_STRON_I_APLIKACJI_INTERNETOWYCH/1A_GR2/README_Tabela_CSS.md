# tabela

W HTML tabele tworzymy za pomocą znacznika `<table>`. Możemy w nich umieszczać wiersze, kolumny, nagłówki, a także łączyć komórki w poziomie i pionie.

Do łączenia komórek służą dwa atrybuty:

* **colspan** – łączy komórki w poziomie (kolumny).
* **rowspan** – łączy komórki w pionie (wiersze).

 
## **Najważniejsze znaczniki:**

**Znacznik	Znaczenie**
`<table>`	Tworzy tabelę
`<tr>`	    Tworzy wiersz tabeli
`<th>`	    Tworzy komórkę nagłówkową
`<td>`	    Tworzy zwykłą komórkę
`<caption>`	Dodaje tytuł tabeli
`<thead>`	Grupuje nagłówki tabeli
`<tbody>`	Grupuje główną zawartość tabeli


Przykład
```HTML
<table border="1">
    <tr>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Klasa</th>
    </tr>
    <tr>
        <td>Anna</td>
        <td>Nowak</td>
        <td>2A</td>
    </tr>
    <tr>
        <td>Jan</td>
        <td>Kowalski</td>
        <td>3B</td>
    </tr>
</table>
```
**border="1"** dodaje proste obramowanie do demonstracji; we współczesnym HTML wygląd tabeli najlepiej ustawiać za pomocą CSS.


## **Łączenie kolumn – colspan**

Atrybut **colspan** określa, ile kolumn ma zajmować jedna komórka.

Przykładowo **colspan="2"** oznacza, że komórka zajmuje miejsce dwóch kolumn.

Przykład:
```HTML
<table border="1">
    <tr>
        <th colspan="2">Dane ucznia</th>
        <th>Klasa</th>
    </tr>
    <tr>
        <td>Anna</td>
        <td>Nowak</td>
        <td>2A</td>
    </tr>
</table>
```
**Ważne**: W pierwszym wierszu występują tylko dwa znaczniki <th>, ponieważ pierwszy z nich zajmuje dwie kolumny.


## Łączenie wierszy – rowspan

Atrybut **rowspan** określa, ile wierszy ma zajmować jedna komórka.

Przykładowo **rowspan="2"** oznacza, że komórka rozciąga się na dwa wiersze.

Przykład:
```HTML
<table border="1">
    <tr>
        <th>Przedmiot</th>
        <th>Imię</th>
        <th>Ocena</th>
    </tr>
    <tr>
        <td rowspan="2">Informatyka</td>
        <td>Anna</td>
        <td>5</td>
    </tr>
    <tr>
        <td>Jan</td>
        <td>4</td>
    </tr>
</table>
```
**Ważne**: W ostatnim wierszu nie wpisujemy ponownie komórki „Informatyka”, ponieważ komórka z poprzedniego wiersza zajmuje już jej miejsce.

## Łączenie kolumn i wierszy jednocześnie

**Można użyć obu atrybutów w jednej tabeli.**

Przykład: plan zajęć szkolnych.
```HTML
<table border="1">
    <tr>
        <th colspan="3">PLAN ZAJĘĆ</th>
    </tr>

    <tr>
        <th>Dzień</th>
        <th>Przedmiot</th>
        <th>Sala</th>
    </tr>

    <tr>
        <td rowspan="2">Poniedziałek</td>
        <td>Informatyka</td>
        <td>12</td>
    </tr>

    <tr>
        <td>Matematyka</td>
        <td>15</td>
    </tr>

    <tr>
        <td>Wtorek</td>
        <td>Angielski</td>
        <td>7</td>
    </tr>
</table>
```

**WAŻNE**
`colspan` łączy komórki w **poziomie**, a `rowspan` w **pionie**. Gdy komórka zajmuje miejsce kilku innych, **nie należy dodawać tych zajętych komórek ponownie**.
### Krótkie zadanie dla uczniów

Utwórz tabelę HTML przedstawiającą wyniki konkursu szkolnego. Tabela powinna mieć trzy kolumny: Konkurs, Uczeń, Miejsce. Zastosuj `colspan="3"` w nagłówku „WYNIKI KONKURSU” oraz `rowspan="2"` dla konkursu informatycznego, w którym uczestniczyło dwóch uczniów.


## CSS (Cascading Style Sheets)

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