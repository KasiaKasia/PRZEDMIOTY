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