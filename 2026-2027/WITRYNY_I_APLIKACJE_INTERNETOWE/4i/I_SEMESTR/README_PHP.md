# PHP: Hypertext Preprocessor

**PHP** jest językiem **skryptowym** **wykorzystywanym** głównie do **tworzenia dynamicznych stron i aplikacji internetowych po stronie serwera**. Jest **językiem dynamicznie typowanym**, co oznacza, że **typy zmiennych są określane w czasie wykonywania programu i mogą się zmieniać w zależności od przypisanych wartości**.

## PHP jest językiem dynamicznie typowanym.
W PHP nie trzeba określać typu zmiennej podczas jej tworzenia.

```PHP
$imie = "Jan";
$wiek = 18;
```
**PHP sam rozpoznaje typ danych.**

Co więcej, zmienna może później otrzymać wartość innego typu:
```PHP
$wartosc = 10;
$wartosc = "dziesięć";
```
Najpierw $wartosc przechowuje liczbę, a później tekst.

## Typy danych

| Typ        | Znaczenie                                          | Przykład                          |
| ---------- | -------------------------------------------------- | --------------------------------- |
| `int`      | liczba całkowita                                   | `$wiek = 20;`                     |
| `float`    | liczba zmiennoprzecinkowa                          | `$cena = 19.99;`                  |
| `string`   | tekst                                              | `$imie = "Jan";`                  |
| `bool`     | wartość logiczna                                   | `$aktywny = true;`                |
| `array`    | tablica indeksowana lub asocjacyjna                | `$kolory = ["red", "blue"];`      |
| `object`   | obiekt utworzony na podstawie klasy                | `$user = new User();`             |
| `null`     | brak wartości                                      | `$telefon = null;`                |
| `resource` | specjalny typ reprezentujący odwołanie do zewnętrznego zasobu, np. otwartego pliku | `$file = fopen("dane.txt", "r");` |




## Dodatkowe typy: `callable` i `iterable`

**callable – wywoływalny**

`callable` oznacza coś, co PHP może **wywołać jak funkcję.**

```PHP
function powitanie() {
    echo "Cześć!";
}

$funkcja = "powitanie";
$funkcja();
```

Można też określić **parametr funkcji** jako `callable`:

```PHP
function wykonaj(callable $funkcja){
    $funkcja();
}

function powitanie(){
    echo "Witaj!";
}

wykonaj("powitanie");
```

**iterable – iterowalny**

`iterable` nie jest osobnym typem wartości takim jak int, string czy object. We współczesnym PHP jest to wbudowany alias typu:

`array|Traversable`

czyli oznacza: **tablicę lub obiekt, po którym można iterować.**

Przykład:
```PHP
function wyswietl(iterable $elementy)
{
    foreach ($elementy as $element) {
        echo $element . "\n";
    }
}

$kolory = ["czerwony", "zielony", "niebieski"];

wyswietl($kolory);
```

## Pseudotypy
**Pseudotypy** to bardziej wskazówki w dokumentacji niż rzeczywiste typy danych, ale są istotne w kontekście typowania.


● **Mixed** oznacza, że dana wartość może być **dowolnego typu**.
`mixed` stosujemy wtedy, gdy nie możemy lub nie chcemy ograniczyć wartości do jednego konkretnego typu.

Przykład:
```PHP
function showValue(mixed $value) {
 return $value;
}

echo showValue("Jan"); 
echo showValue(25); 
echo showValue(3.14);
echo showValue(null);
```

Możemy również określić, że funkcja zwraca wartość typu mixed:
```PHP
function getValue(): mixed {
    return "Hello";
}

echo getValue();
```

● **Void** Typ void stosuje się jako typ wartości zwracanej przez funkcję.

Oznacza, że funkcja **nie zwraca wartości**.

Przykład:
```PHP
function logMessage(string $msg): void {
 echo $msg;
}
logMessage("Witaj!");
```
Funkcja wykonuje określoną czynność — wyświetla tekst — ale nie zwraca wartości za pomocą `return`.

● **Never** oznacza, że funkcja nigdy nie zakończy działania w normalny sposób i nie przekaże sterowania z powrotem do miejsca, z którego została wywołana.

Może na przykład:

- zgłosić wyjątek,
- zakończyć działanie skryptu za pomocą exit() lub die(),
- wykonywać nieskończoną pętlę.

Przykład:
```PHP
function throwError(): never {
 throw new Exception("Błąd!");
}
throwError();
```
Funkcja nie dochodzi do normalnego zakończenia, ponieważ zostaje zgłoszony wyjątek.

Inny przykład:
```PHP
function stopProgram(): never {
    exit("Koniec programu");
}

stopProgram();
```
## Typy złożone
● **Union Types** (od PHP 8.0) Pozwalają określić, że zmienna może mieć jeden z kilku typów, np. int|float.
Przykład:
```PHP
function add(int|float $a, int|float $b): int|float {
 return $a + $b;
}
echo add(5, 3);
```
● **Intersection Types** (od PHP 8.1) Wymagają, aby wartość była zgodna ze wszystkimi określonymi typami (używane głównie z obiektami).
Przykład:
```PHP
function process(Countable&Traversable $data): void {
    echo "Liczba elementów: " . count($data) . "\n";

    foreach ($data as $item) {
        echo $item . "\n";
    }
}

$items = new ArrayIterator(["A", "B", "C"]);

process($items);
```

## Sprawdzenie typu

**`gettype()`**

Przykład:
```PHP
$wiek = 18;
$imie = "Anna";

echo gettype($imie) . "\n" . gettype($wiek);
```

**`var_dump()`**

Przykład:
```PHP
$cena = 19.99;

var_dump($cena);
```

**`is_*`**
Do sprawdzania, czy coś jest konkretnym typem, służą funkcje `is_*`:

Przykład:
```PHP
$wiek = 18;

var_dump(is_int($wiek));      // true
var_dump(is_string($wiek));   // false

$wartosc = 3;

if (is_string($wartosc)) {
    echo "To jest stringie";
} else {
    echo "To nie jest string";
}
```

**`instanceof`**
Dla obiektów konkretnej klasy używa się również `instanceof`:

Przykład:
```PHP
class User {}

$user = new User();

if ($user instanceof User) {
    echo "Obiekt jest klasy User";
}
```

## Połączenie PHP z bazą danych


### 1. Utworzenie bazy danych

Najpierw utwórzmy bazę danych o nazwie szkola_php:
```SQL
CREATE DATABASE szkola_php
CHARACTER SET utf8mb4
COLLATE utf8mb4_polish_ci;
```

Następnie wybieramy bazę:
```SQL
USE szkola_php;
```

### 2. Utworzenie tabeli

Utwórzmy tabelę uczniowie:
```SQL
CREATE TABLE uczniowie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(50) NOT NULL,
    nazwisko VARCHAR(50) NOT NULL,
    klasa VARCHAR(10) NOT NULL,
    wiek INT
);
```

### 3. Dodanie danych

Dodajmy kilka rekordów:
```SQL
INSERT INTO uczniowie (imie, nazwisko, klasa, wiek)
VALUES ('Anna', 'Kowalska', '5TP', 19);

INSERT INTO uczniowie (imie, nazwisko, klasa, wiek)
VALUES ('Jan', 'Nowak', '5TP', 18);

INSERT INTO uczniowie (imie, nazwisko, klasa, wiek)
VALUES ('Maria', 'Wiśniewska', '4TP', 18);

INSERT INTO uczniowie (imie, nazwisko, klasa, wiek)
VALUES ('Piotr', 'Zieliński', '4TP', 17);
```
Można też zrobić jeden INSERT:
```SQL
INSERT INTO uczniowie (imie, nazwisko, klasa, wiek)
VALUES
('Anna', 'Kowalska', '5TP', 19),
('Jan', 'Nowak', '5TP', 18),
('Maria', 'Wiśniewska', '4TP', 18),
('Piotr', 'Zieliński', '4TP', 17);
```

### 4. Połączenie PHP z bazą danych

Do nawiązania połączenia możemy wykorzystać funkcję:

`mysqli_connect()`

Podstawowa składnia:

`mysqli_connect(host, użytkownik, hasło, baza_danych);`

Przykład dla typowego środowiska XAMPP:
```PHP
$connection = mysqli_connect(
    "localhost",
    "root",
    "",
    "szkola_php"
);

```

 

localhost   → serwer bazy danych
root        → użytkownik MySQL
""          → hasło
szkola_php  → nazwa bazy danych

  

### 5. Sprawdzenie połączenia

Możemy sprawdzić, czy udało się połączyć:
```PHP
<?php

$connection = mysqli_connect(
    "localhost",
    "root",
    "",
    "szkola_php"
);

if (!$connection) {
    die("Błąd połączenia z bazą danych");
}

echo "Połączono z bazą danych.";

?>
```
 
### 6. Pobranie danych z tabeli

Do pobrania danych wykorzystujemy zapytanie:
```SQL
SELECT * FROM uczniowie;
```
W PHP:
```PHP
$sql = "SELECT * FROM uczniowie";

$result = mysqli_query($connection, $sql);
```
Funkcja:

`mysqli_query()` wykonuje zapytanie SQL. Przyjmuje tutaj dwa argumenty:

`mysqli_query($connection, $sql);`

czyli:

$connection → połączenie z bazą
$sql        → zapytanie SQL

### 7. Pobieranie kolejnych rekordów

Do pobierania kolejnych rekordów możemy wykorzystać:

`mysqli_fetch_assoc()`

Przykład:
```PHP
$row = mysqli_fetch_assoc($result);
```
**Funkcja zwraca jeden rekord jako tablicę asocjacyjną.**

Przykładowo rekord:

1 | Anna | Kowalska | 5TP | 19

możemy odczytać:
```PHP
$row["id"];
$row["imie"];
$row["nazwisko"];
$row["klasa"];
$row["wiek"];
```

Na przykład:
```PHP
echo $row["imie"];
```
wyświetli:

Anna

### 8. Wyświetlenie wszystkich rekordów

Najczęściej używamy `while`:
```PHP
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["imie"];
}
```

`mysqli_fetch_assoc()` pobiera kolejny rekord aż do momentu, kiedy nie będzie już żadnych danych.

### 9. Kompletny skrypt PHP

Plik może nazywać się np.: `index.php`

Kod:
```HTML
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Lista uczniów</title>

    <style>
        table {
            border-collapse: collapse;
            width: 600px;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: lightgray;
        }
    </style>
</head>

<body>

    <h1>Lista uczniów</h1>

    <?php

    $connection = mysqli_connect(
        "localhost",
        "root",
        "",
        "szkola_php"
    );

    if (!$connection) {
        die("Błąd połączenia: " . mysqli_connect_error());
    }

    mysqli_set_charset($connection, "utf8mb4");

    $sql = "SELECT * FROM uczniowie";

    $result = mysqli_query($connection, $sql);

    ?>

    <table>

        <tr>
            <th>ID</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Klasa</th>
            <th>Wiek</th>
        </tr>

        <?php

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";

            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["imie"] . "</td>";
            echo "<td>" . $row["nazwisko"] . "</td>";
            echo "<td>" . $row["klasa"] . "</td>";
            echo "<td>" . $row["wiek"] . "</td>";

            echo "</tr>";
        }

        ?>

    </table>

    <?php

    mysqli_close($connection);

    ?>

</body>

</html>
```
 
### 10. `mysqli_fetch_assoc()`  

Nazwa funkcji: `mysqli_fetch_assoc()` pochodzi od słowa associative, czyli asocjacyjny.

Dla rekordu:
```text
id = 1
imie = Anna
nazwisko = Kowalska
```

otrzymujemy tablicę:
```text
$row = [
    "id" => 1,
    "imie" => "Anna",
    "nazwisko" => "Kowalska"
];
```
Dlatego możemy używać nazw kolumn:
```PHP
echo $row["id"];
echo $row["imie"];
echo $row["nazwisko"];
```
To jest bardzo ważne w kontekście tego, co wcześniej omawiałyśmy przy tablicach asocjacyjnych w PHP.

11. Najważniejsze funkcje do zapamiętania na INF.03
Funkcja	Zastosowanie
- `mysqli_connect()`	nawiązuje połączenie z bazą MySQL
- `mysqli_connect_error()`	zwraca informację o błędzie połączenia
- `mysqli_set_charset()`	ustawia kodowanie znaków
- `mysqli_query()`	wykonuje zapytanie SQL
- `mysqli_fetch_assoc()`	pobiera rekord jako tablicę asocjacyjną
- `mysqli_close()`	zamyka połączenie z bazą
 
---
## METODY FORMULARZA 
W formularzach HTML używanych z PHP najczęściej stosuje się dwie metody przesyłania danych:

- `method="GET"`
- `method="POST"`

Najważniejsza różnica polega na tym, w jaki sposób dane z formularza są przesyłane do serwera i jak PHP je odbiera.

| Cecha                                            | GET                       | POST                         |
| ------------------------------------------------ | ------------------------- | ---------------------------- |
| Dane widoczne w adresie URL                      | Tak                       | Nie                          |
| PHP odbiera przez                                | `$_GET`                   | `$_POST`                     |
| Dobre do wyszukiwania i filtrowania              | Tak                       | Raczej nie                   |
| Dobre do logowania, formularzy, dodawania danych | Nie                       | Tak                          |
| Można łatwo zapisać adres z parametrami          | Tak                       | Nie                          |
| Ilość danych                                     | Ograniczona długością URL | Może przesyłać więcej danych |
| Przesyłanie plików                               | Nie                       | Tak, z `enctype`             |


### 1. Metoda GET

Przykład formularza:
```PHP
<form method="GET">

    <input type="text" name="nazwisko">

    <button type="submit">
         kliknij, aby wysłać dane metodą GET
    </button>

</form>
```

Jeżeli użytkownik wpisze: `Kowalski` i kliknie przycisk, adres może wyglądać tak:

`uczniowie.php?nazwisko=Kowalski`
`http://localhost/get/?nazwisko=Kowalski`

Czyli dane są widoczne w URL.

PHP pobiera je przez:

`$nazwisko = $_GET["nazwisko"];`

Możemy potem zrobić np.:

`echo $nazwisko;`

i otrzymamy:

`Kowalski`

GET jest bardzo dobry do:

- wyszukiwania
- filtrowania
- sortowania
- wyboru kategorii
 

### 2. Metoda POST

Formularz wygląda podobnie:
```PHP
<form method="POST">

    <input type="text" name="imie">

    <button type="submit">
        Wyślij
    </button>

</form>
```
PHP pobiera dane:

`$imie = $_POST["imie"];`

Jeśli użytkownik wpisze: `Anna`

to po wysłaniu formularza (kliknięciu przycisku) URL nadal może wyglądać np.:

`index.php`

Nie pojawi się w adresie URL: 
`?imie=Anna`

**Dane są przesyłane w treści żądania HTTP.**

POST stosuje się często do:

- logowania
- rejestracji
- dodawania rekordów
- edycji rekordów
- usuwania rekordów
- wysyłania większych formularzy
- przesyłania plików