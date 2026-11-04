<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka szkolna – zadanie PHP</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f0f8ff; margin: 0; }
        header { background-color: #205782; color: white; text-align: center; padding: 20px; }
        nav { background-color: #3278a8; padding: 15px; text-align: center; }
        nav a { color: white; margin: 15px; text-decoration: none; }
        main { display: flex; gap: 20px; padding: 20px; }
        .zawartosc { width: 70%; }
        section { margin-bottom: 20px; }
        aside { width: 30%; background-color: white; padding: 15px; }
        article { background-color: white; border: 1px solid #bfd6e6; padding: 15px; margin-bottom: 15px; }
        details { background-color: white; border: 1px solid #bfd6e6; padding: 12px; margin-bottom: 10px; }
        summary { cursor: pointer; font-weight: bold; }
        footer { background-color: #205782; color: white; text-align: center; padding: 15px; }
    </style>
</head>
<body>
<!--
ZADANIE PODSUMOWUJĄCE – BIBLIOTEKA SZKOLNA
Temat: Tablice asocjacyjne i wielowymiarowe PHP oraz semantyczne znaczniki HTML5
Maksymalna liczba punktów: 40

INSTRUKCJA
Uzupełnij plik zgodnie z poleceniami. Nie zmieniaj gotowych stylów CSS.
Dane o książkach wyświetlaj z tablicy PHP, a nie wpisuj ich ręcznie w HTML.
Nie używaj bazy danych.

CZĘŚĆ I – TABLICA I OPERACJE (12 pkt)
1. Zmień liczbę dostępnych egzemplarzy książki „Pan Tadeusz” z 6 na 9. (2 pkt)
2. Dodaj książkę „Mały Książę” z danymi: 
	autor – Antoine de Saint-Exupéry,
	rok – 1943, 
	egzemplarze – 4, 
	dostępna – true. (4 pkt)
3. Usuń książkę „Quo vadis”  (3 pkt)
4. Zmień status książki „Lalka” na dostępna (true). (3 pkt)

CZĘŚĆ II – STRUKTURA SEMANTYCZNA HTML5 (12 pkt)
5. Uzupełnij <header id="start"> nagłówkiem <h1> "Biblioteka szkolna". (2 pkt)
6. Uzupełnij <nav> trzema odnośnikami: #start, #ksiazki i #kontakt. (2 pkt)
7. W <main> przygotuj dokładnie dwie sekcje <section>:
   - pierwszą z id="ksiazki" 
   - drugą z id="informacje". (3 pkt)
8. W pierwszej sekcji dodaj <h2> "Katalog książek", a w drugiej <h2> "Informacje o wypożyczeniach". (2 pkt)
9. Umieść w <main> jeden <aside> z nagłówkiem <h2> "Dostępne książki". (2 pkt)
10. Uzupełnij <footer id="kontakt"> tekstem "Biblioteka szkolna – 2026". (1 pkt)

CZĘŚĆ III – WYŚWIETLANIE DANYCH PHP (16 pkt)
11. Za pomocą foreach wyświetl wszystkie książki w pierwszej sekcji.
    Każdą książkę umieść w osobnym <article>, a tytuł w <h3>. (4 pkt)
12. W każdym <article> wyświetl 
		autora, 
		rok wydania 
		liczbę egzemplarzy. (3 pkt)
13. Za pomocą if wyświetl "Dostępna" albo "Niedostępna" zgodnie z wartością pola „dostepna”. (2 pkt)
14. W drugiej sekcji umieść <details> i <summary> o treści:
    "Zasady wypożyczania". 
	Po rozwinięciu pokaż tekst:
    "Książki można wypożyczać na 14 dni". (3 pkt)
15. W <aside> za pomocą foreach i if wyświetl w <ul> tylko tytuły dostępnych książek (elementy <li>). (4 pkt)

UWAGA: W kodzie pozostawiono podstawową strukturę strony i tablicę.
Brakujące elementy oraz instrukcje PHP dopisz samodzielnie.
-->
<?php
$ksiazki = [
    "Pan Tadeusz" => [
        "autor" => "Adam Mickiewicz",
        "rok" => 1834,
        "egzemplarze" => 6,
        "dostepna" => true
    ],
    "Lalka" => [
        "autor" => "Bolesław Prus",
        "rok" => 1890,
        "egzemplarze" => 2,
        "dostepna" => false
    ],
    "Quo vadis" => [
        "autor" => "Henryk Sienkiewicz",
        "rok" => 1896,
        "egzemplarze" => 3,
        "dostepna" => true
    ],
    "Kamienie na szaniec" => [
        "autor" => "Aleksander Kamiński",
        "rok" => 1943,
        "egzemplarze" => 5,
        "dostepna" => true
    ]
];

// ZADANIE 1–4: Wykonaj operacje na tablicy $ksiazki.
?>
<header id="start">
    <!-- ZADANIE 5: Dodaj nagłówek h1. -->
</header>
<nav>
    <!-- ZADANIE 6: Dodaj trzy odnośniki. -->
</nav>
<main>
    <div class="zawartosc">
        <section id="ksiazki">
            <!-- ZADANIE 7–8: Dodaj nagłówek h2. -->
            <!-- ZADANIE 11–13: foreach, article, h3, dane książek i if. -->
        </section>
        <section id="informacje">
            <!-- ZADANIE 8 i 14: Dodaj h2 oraz details i summary. -->
        </section>
    </div>
    <aside>
        <!-- ZADANIE 9 i 15: Dodaj h2 i listę dostępnych książek (foreach + if). -->
    </aside>
</main>
<footer id="kontakt">
    <!-- ZADANIE 10: Dodaj tekst stopki. -->
</footer>
</body>
</html>
