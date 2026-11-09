

# Tablica asocjacyjna 

Tablica asocjacyjna w PHP to **rodzaj tablicy, w której zamiast liczb jako indeksów używa się własnych nazw tekstowych, czyli kluczy powiązanych z wartościami**

W PHP kluczami mogą być zarówno liczby całkowite, jak i ciągi znaków


```PHP
<?php
$kolory = ["czerwony", "zielony", "niebieski"];

echo $kolory[0] . "\n";

$osoba = [
    "imie" => "Anna",
    "wiek" => 25,
    "miasto" => "Warszawa"
];
echo $osoba["imie"] . "\n";

foreach ($osoba as $klucz => $wartosc) {
    echo $klucz . ": " . $wartosc . "\n";
}


$produkt = [
    "nazwa" => "Laptop",
    "cena" => 3500,
    "ilosc" => 5
];

foreach ($produkt as $wartosc) {
    echo $wartosc . "<br>";
}


?>
```

## Modyfikowanie wartości elementu tablicy

```PHP
<?php

$produkt = [
    "nazwa" => "Monitor",
    "cena" => 800,
    "ilosc" => 10
];
 
$produkt["cena"] = 650;
 
$produkt["ilosc"] = 15;

echo $produkt["nazwa"] . "<br>";
echo $produkt["cena"] . "<br>";
echo $produkt["ilosc"] . "<br>";

?>
```
## Usuwanie elementu z tablicy asocjacyjnej

**Do usuwania elementów tablicy wykorzystujemy funkcję `unset()`.**

```PHP
<?php

$osoba = [
    "imie" => "Anna",
    "wiek" => 25,
    "miasto" => "Warszawa"
];

// Usunięcie elementu o kluczu "wiek"
unset($osoba["wiek"]);

foreach ($osoba as $klucz => $wartosc) {
    echo $klucz . ": " . $wartosc . "<br>";
}

?>
```

## Sprawdzanie, czy klucz istnieje w tablicy

**Funkcja `isset()` sprawdza, czy zmienna lub element tablicy istnieje i nie ma wartości null.**

```PHP
<?php

$osoba = [
    "imie" => "Anna",
    "wiek" => 25
];

if (isset($osoba["wiek"])) {
    echo "Wiek: " . $osoba["wiek"];
} else {
    echo "Nie podano wieku.";
}

?>
```


## **tablice wielowymiarowe**

**Tablica wielowymiarowa to tablica, której elementami są inne tablice.**

W PHP możemy tworzyć tablice wielowymiarowe zawierające zarówno indeksy liczbowe, jak i klucze tekstowe.


```PHP
<?php
 
$osoby = [
    "Nowak" => [
        "imie" => "Kamil",
        "wiek" => 22,
        "miasto" => "Kraków"
    ],
    "Kowalska" => [
        "imie" => "Natalia",
        "wiek" => 20,
        "miasto" => "Warszawa"
    ]
];
echo $osoby["Nowak"]["imie"]. "\n";
# powiązanie klucza z wartością w tablicy asocjacyjnej
foreach ($osoby as $nazwisko => $dane) {
    echo $nazwisko . "\n";
}
foreach ($osoby as $nazwisko => $dane) {
    echo $nazwisko . " " . $dane["imie"] . "\n";
   
}
?>
```
**Wyświetlanie kluczy głównej tablicy**

```PHP
<?php

$osoby = [
    "Nowak" => [
        "imie" => "Kamil",
        "wiek" => 22,
        "miasto" => "Kraków"
    ],
    "Kowalska" => [
        "imie" => "Natalia",
        "wiek" => 20,
        "miasto" => "Warszawa"
    ]
];

foreach ($osoby as $nazwisko => $dane) {
    echo $nazwisko . "<br>";
}

?>
```

**Wyświetlanie imion i nazwisk wszystkich osób**


```PHP
<?php

$osoby = [
    "Nowak" => [
        "imie" => "Kamil",
        "wiek" => 22,
        "miasto" => "Kraków"
    ],
    "Kowalska" => [
        "imie" => "Natalia",
        "wiek" => 20,
        "miasto" => "Warszawa"
    ]
];

foreach ($osoby as $nazwisko => $dane) {

    echo $dane["imie"] . " " . $nazwisko . "<br>";

}

?>
```

**Wyświetlanie wszystkich danych za pomocą zagnieżdżonej pętli `foreach`**



```PHP
<?php

foreach ($osoby as $nazwisko => $dane) {

    echo "Nazwisko: " . $nazwisko . "<br>";

    foreach ($dane as $klucz => $wartosc) {
        echo $klucz . ": " . $wartosc . "<br>";
    }

    echo "<hr>";
}

?>
```

**Wyświetlanie tylko osób z określonego miasta**

```PHP
<?php

foreach ($osoby as $nazwisko => $dane) {

    if ($dane["miasto"] == "Warszawa") {

        echo $dane["imie"] . " " . $nazwisko . "<br>";

    }
}

?>
```