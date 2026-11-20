<?php
/*
KARTA PRACY – PHP: GET, POST oraz przekazywanie identyfikatora w adresie URL

INSTRUKCJA DLA UCZNIA:
1. Zapisz plik w katalogu serwera PHP, np. htdocs, i uruchom przez localhost.
2. Nie zmieniaj nazw pól formularzy, nazw zmiennych ani przygotowanego HTML.
3. Uzupełnij rozwiązania w miejscach oznaczonych komentarzem TODO.
4. W zadaniu 5 zastąp wyłącznie fragmenty ..... odpowiednim kodem.
5. Nie trzeba tworzyć bazy danych.

UWAGA: Zadanie 5 odwołuje się do plików w katalogu img/. Aby zobaczyć
zdjęcia, należy umieścić tam pliki o podanych nazwach. Linki będą kierować
do pliku szczegoly.php – do przetestowania strony docelowej można go
samodzielnie utworzyć po wykonaniu ćwiczenia.
*/

// ===========================================
// ZADANIE 1 – FORMULARZ GET: WYCIECZKA
// ===========================================
/*
1. Sprawdź, czy metodą GET przesłano parametry imie i miasto.
2. Pobierz obie wartości z tablicy $_GET.
3. Jeżeli oba pola nie są puste, wyświetl pod formularzem komunikat:
   "Uczestnik: Anna. Cel wycieczki: Kraków."
   (podstaw wartości wpisane przez użytkownika).
4. W przeciwnym razie wyświetl:
   "Uzupełnij imię i miasto."
5. Komunikat ma pojawić się dopiero po wysłaniu formularza.
   Dane użytkownika wyświetlaj bezpiecznie, np. przez htmlspecialchars().
*/
$komunikatGet1 = "";
// TODO ZADANIE 1 – napisz kod PHP tutaj.


// ===========================================
// ZADANIE 2 – FORMULARZ GET: SUMA LICZB
// ===========================================
/*
1. Po wysłaniu drugiego formularza pobierz metodą GET pola a oraz b.
2. Sprawdź, czy podano obie liczby i czy są poprawnymi wartościami liczbowymi.
3. Oblicz ich sumę.
4. Wyświetl wynik pod formularzem, np. "Suma: 15".
5. Jeśli dane są niepoprawne, wyświetl "Podaj dwie liczby".
6. Wynik nie może pojawiać się przed wysłaniem formularza.
*/
$komunikatGet2 = "";
// TODO ZADANIE 2 – napisz kod PHP tutaj.


// ===========================================
// ZADANIE 3 – FORMULARZ POST: ZGŁOSZENIE KSIĄŻKI
// ===========================================
/*
1. Sprawdź, czy wysłano trzeci formularz metodą POST.
2. Pobierz z $_POST wartości tytul oraz autor.
3. Jeśli oba pola zostały wypełnione, wyświetl:
   "Dodano książkę: Lalka – Bolesław Prus".
4. Jeśli choć jedno pole jest puste, wyświetl:
   "Wpisz tytuł i autora książki".
5. Zabezpiecz wyświetlane dane za pomocą htmlspecialchars().
6. Komunikat ma pojawić się dopiero po wysłaniu tego formularza.
*/
$komunikatPost1 = "";
// TODO ZADANIE 3 – napisz kod PHP tutaj.


// ===========================================
// ZADANIE 4 – FORMULARZ POST: ZAMÓWIENIE BILETÓW
// ===========================================
/*
1. Pobierz metodą POST liczbę biletów z pola ilosc_biletow.
2. Cena jednego biletu wynosi 18 zł.
3. Sprawdź, czy podana liczba biletów jest całkowita i większa od zera.
4. Oblicz kwotę do zapłaty: liczba biletów * 18.
5. Wyświetl np. "3 bilety – do zapłaty: 54 zł".
6. Dla niepoprawnej liczby wyświetl:
   "Podaj prawidłową liczbę biletów".
7. Wynik ma być widoczny wyłącznie po wysłaniu czwartego formularza.
*/
$komunikatPost2 = "";
// TODO ZADANIE 4 – napisz kod PHP tutaj.


// ===========================================
// ZADANIE 5 – UZUPEŁNIJ LUKI (S): GALERIA ATRAKCJI
// ===========================================
/*
Dana jest tablica $atrakcje z sześcioma atrakcjami turystycznymi.
Każda atrakcja posiada klucze "nazwa" i "src".

Uzupełnij WYŁĄCZNIE fragmenty ..... w sekcji zadania 5 tak, aby:
1. Każde zdjęcie było odnośnikiem do pliku szczegoly.php.
2. Identyfikator $id był przesyłany metodą GET w parametrze id.
3. Nad każdym zdjęciem pojawiała się nazwa atrakcji z tablicy.
4. Atrybut src pobierał ścieżkę zdjęcia z tablicy.
5. Atrybut alt zawierał nazwę atrakcji z tablicy.

Nie zmieniaj pętli foreach, struktury HTML ani nazw zmiennych.
W miejscach ..... wpisz właściwe wyrażenia PHP (w tym miejscu
zastąp także cudzysłowy przy wartości "....." tam, gdzie to konieczne).
*/
$atrakcje = [
    1 => ["nazwa" => "Wawel", "src" => "img/wawel.jpg"],
    2 => ["nazwa" => "Zamek Królewski", "src" => "img/zamek.jpg"],
    3 => ["nazwa" => "Molo w Sopocie", "src" => "img/molo.jpg"],
    4 => ["nazwa" => "Kopalnia Soli Wieliczka", "src" => "img/wieliczka.jpg"],
    5 => ["nazwa" => "Pałac Kultury i Nauki", "src" => "img/pkin.jpg"],
    6 => ["nazwa" => "Zamek Książ", "src" => "img/ksiaz.jpg"]
];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karta pracy – PHP GET i POST</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, sans-serif; background: #f0f8ff; color: #243447; }
        header, footer { background: #205782; color: white; text-align: center; padding: 23px 15px; }
        header h1 { margin: 0 0 9px; }
        header p { margin: 0; }
        main { max-width: 1050px; margin: 25px auto; padding: 0 18px; }
        .wstep { background: #e4f0fa; padding: 13px 18px; border-radius: 7px; margin-bottom: 20px; }
        .siatka { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 18px; }
        section { background: white; border: 1px solid #d5e1ec; border-radius: 9px; padding: 20px; }
        h2 { margin: 0 0 15px; color: #205782; font-size: 21px; }
        label { display: block; font-weight: bold; margin: 13px 0 6px; }
        input { width: 100%; padding: 10px; border: 1px solid #a9bfd0; border-radius: 5px; }
        button { background: #3278a8; color: white; border: 0; padding: 11px 17px; border-radius: 5px; margin-top: 15px; cursor: pointer; }
        button:hover { background: #205782; }
        .wynik { min-height: 46px; margin-top: 15px; background: #eef5fb; border-radius: 5px; padding: 12px; overflow-wrap: anywhere; }
        .galeria-sekcja { margin-top: 18px; }
        .galeria { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 15px; }
        .atrakcja { background: #f5f9fd; border: 1px solid #d5e1ec; padding: 12px; border-radius: 7px; text-align: center; }
        .atrakcja h3 { font-size: 16px; min-height: 38px; margin: 0 0 10px; }
        .atrakcja a { color: #205782; text-decoration: none; }
        .atrakcja img { display: block; width: 100%; height: 150px; object-fit: cover; border-radius: 5px; background: #dae6f0; }
        .uwaga { font-size: 13px; color: #50677a; margin-bottom: 15px; }
        footer { margin-top: 30px; }
        @media (max-width: 700px) { .siatka { grid-template-columns: 1fr; } .galeria { grid-template-columns: repeat(2, minmax(0, 1fr)); } }
        @media (max-width: 430px) { .galeria { grid-template-columns: 1fr; } }
    </style>
</head>
<body>
<header>
    <h1>PHP – metoda GET i POST</h1>
    <p>Karta pracy: formularze i tablice asocjacyjne</p>
</header>
<main>
    <div class="wstep">Przeczytaj treść zadań w komentarzach pliku PHP. W zadaniach 1–4 wpisz brakujący kod w sekcjach TODO. W zadaniu 5 uzupełnij fragmenty oznaczone kropkami.</div>
    <div class="siatka">
        <section>
            <h2>Zadanie 1 – GET: wycieczka</h2>
            <form method="get" action="">
                <input type="hidden" name="zadanie" value="get1">
                <label for="imie">Imię uczestnika</label>
                <input id="imie" name="imie" type="text" placeholder="np. Anna">
                <label for="miasto">Miasto docelowe</label>
                <input id="miasto" name="miasto" type="text" placeholder="np. Kraków">
                <button type="submit">Wyślij GET</button>
            </form>
            <div class="wynik"><?= htmlspecialchars($komunikatGet1, ENT_QUOTES, 'UTF-8') ?></div>
        </section>

        <section>
            <h2>Zadanie 2 – GET: suma</h2>
            <form method="get" action="">
                <input type="hidden" name="zadanie" value="get2">
                <label for="a">Pierwsza liczba</label>
                <input id="a" name="a" type="number" step="any">
                <label for="b">Druga liczba</label>
                <input id="b" name="b" type="number" step="any">
                <button type="submit">Oblicz sumę (GET)</button>
            </form>
            <div class="wynik"><?= htmlspecialchars($komunikatGet2, ENT_QUOTES, 'UTF-8') ?></div>
        </section>

        <section>
            <h2>Zadanie 3 – POST: książka</h2>
            <form method="post" action="">
                <input type="hidden" name="zadanie" value="post1">
                <label for="tytul">Tytuł książki</label>
                <input id="tytul" name="tytul" type="text" placeholder="np. Lalka">
                <label for="autor">Autor</label>
                <input id="autor" name="autor" type="text" placeholder="np. Bolesław Prus">
                <button type="submit">Wyślij POST</button>
            </form>
            <div class="wynik"><?= htmlspecialchars($komunikatPost1, ENT_QUOTES, 'UTF-8') ?></div>
        </section>

        <section>
            <h2>Zadanie 4 – POST: bilety</h2>
            <form method="post" action="">
                <input type="hidden" name="zadanie" value="post2">
                <label for="ilosc_biletow">Liczba biletów</label>
                <input id="ilosc_biletow" name="ilosc_biletow" type="number" step="1" placeholder="np. 3">
                <button type="submit">Oblicz cenę (POST)</button>
            </form>
            <div class="wynik"><?= htmlspecialchars($komunikatPost2, ENT_QUOTES, 'UTF-8') ?></div>
        </section>
    </div>

    <section class="galeria-sekcja">
        <h2>Zadanie 5 (S) – galeria atrakcji</h2>
        <p class="uwaga">Nazwy, adresy zdjęć i linki należy uzupełnić zgodnie z komentarzem w kodzie źródłowym. Zdjęcia wymagają plików w katalogu <code>img</code>.</p>
        <div class="galeria">
            <?php foreach ($atrakcje as $id => $atrakcja): ?>
                <div class="atrakcja">
                    <a href="szczegoly.php?.....">
                        <h3><?= "....." ?></h3>
                        <img
                            src="<?= htmlspecialchars(".....") ?>"
                            alt="<?= htmlspecialchars(".....") ?>">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>
<footer>Ćwiczenia praktyczne – PHP, HTML i CSS</footer>
</body>
</html>
