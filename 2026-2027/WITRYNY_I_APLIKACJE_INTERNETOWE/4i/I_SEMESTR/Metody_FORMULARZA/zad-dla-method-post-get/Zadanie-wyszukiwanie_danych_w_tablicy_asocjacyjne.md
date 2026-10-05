# Zadanie – wyszukiwanie danych w tablicy asocjacyjnej w PHP

Utwórz formularz HTML zawierający pole tekstowe `input`, w którym użytkownik wpisze nazwisko osoby.

W skrypcie PHP utwórz tablicę asocjacyjną:

```php
$osoby = [
    "Kowalska" => [
        "imie" => "Natalia",
        "wiek" => 20,
        "miasto" => "Warszawa"
    ],

    "Nowak" => [
        "imie" => "Kamil",
        "wiek" => 22,
        "miasto" => "Kraków"
    ],

    "Malicka" => [
        "imie" => "Oliwia",
        "wiek" => 19,
        "miasto" => "Gdańsk"
    ]
];
```

Po wysłaniu formularza:

1. Pobierz nazwisko wpisane przez użytkownika.
2. Sprawdź, czy takie nazwisko występuje jako klucz w tablicy `$osoby`.
3. Jeżeli osoba została znaleziona, wyświetl:
   - imię,
   - nazwisko,
   - wiek,
   - miasto.
4. Jeżeli nazwiska nie ma w tablicy, wyświetl komunikat:

`Nie znaleziono osoby o podanym nazwisku.`

### Przykład

Użytkownik wpisuje:

```text
Nowak
```

Program powinien wyświetlić:

```text
Imię: Kamil
Nazwisko: Nowak
Wiek: 22
Miasto: Kraków
```