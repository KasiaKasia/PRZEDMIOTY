<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablica asocjacyjna i znaczniki semantyczne - zadanie</title>
  
  <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f8ff;
        margin: 0;
    }

    header {
        background-color: #205782;
        color: white;
        text-align: center;
        padding: 20px;
    }

    nav {
        background-color: #3278a8;
        padding: 15px;
        text-align: center;
    }

    nav a {
        color: white;
        margin: 15px;
        text-decoration: none;
    }

    main {
        display: flex;
        gap: 20px;
        padding: 20px;
    }

    section {
        width: 70%;
    }

    aside {
        width: 30%;
        background-color: white;
        padding: 15px;
    }

    article {
        background-color: white;
        border: 1px solid #bfd6e6;
        padding: 15px;
        margin-bottom: 15px;
    }

    footer {
        background-color: #205782;
        color: white;
        text-align: center;
        padding: 15px;
    }
</style> 
</head>

    <!-- 
ZADANIE PODSUMOWUJĄCE – PORTAL WYDARZEŃ SZKOLNYCH
Temat: Tablice asocjacyjne i wielowymiarowe PHP oraz semantyczne znaczniki HTML5
 Maksymalna liczba punktów: 40

INSTRUKCJA
Uzupełnij ten plik według poleceń. Nie twórz własnych stylów CSS. 
Wydarzenia mają być wyświetlane na podstawie tablicy, a nie wpisane ręcznie w HTML.


CZĘŚĆ I – TABLICA I OPERACJE (12 pkt)
1. Na podstawie utworzonej tablicy zmień liczbę uczestników "Warsztaty HTML i CSS" z 18 na 22. (2 pkt)
2. Dodaj wydarzenie "Turniej wiedzy informatycznej" z kluczami i wartosciami:
  - "data" 2026-12-15, 
  - "miejsce" Sala 10, 
  - "uczestnicy" 20,
  - "aktywne" true. 
  (3 pkt)
3. Usuń wydarzenie "Dzień otwarty szkoły" za pomocą unset(). (3 pkt)

CZĘŚĆ II – SEMANTYCZNA STRUKTURA HTML (10 pkt)
4. Uzupełnij nagłówek strony: <header> z <h1> "Portal wydarzeń szkolnych". (2 pkt)
5. Dodaj <nav> z linkami do #start, #wydarzenia i #kontakt. (2 pkt)
6. Utwórz pojedynczy <main>, a w nim <section id="wydarzenia"> i <aside>. (3 pkt)
7. Dodaj <footer id="kontakt"> z tekstem "Portal szkolny – 2026". (2 pkt)
8. W sekcji umieść nagłówek <h2> "Wydarzenia szkolne". (1 pkt)

CZĘŚĆ III – WYŚWIETLANIE DANYCH (18 pkt)
9. Użyj foreach do wyświetlenia wszystkich wydarzeń. (3 pkt)
10. Każde wydarzenie przedstaw w oddzielnym <article>; jego nazwę w <h3>. (3 pkt)
11. Wyświetl datę w <time datetime="...">, miejsce i liczbę uczestników. (5 pkt)
12. Użyj if do wyświetlenia "Zapisy otwarte" albo "Zapisy zamknięte" zależnie od wartości pola "aktywne". (3 pkt)
13. W <aside> wyświetl za pomocą foreach i if wyłącznie nazwy wydarzeń z otwartymi zapisami, np. w liście <ul> i <li>. (4 pkt)

UWAGA: Znaczniki semantyczne i PHP uzupełnij samodzielnie. Nie używaj bazy danych.
    -->
<?php 

$wydarzenia = [
    "Konkurs programistyczny" => [
        "data" => "2026-11-15", 
        "miejsce" => "Sala 12",
        "uczestnicy" => 25, 
        "aktywne" => true
    ],
    "Warsztaty HTML i CSS" => [
        "data" => "2026-11-20", 
        "miejsce" => "Sala 7",
        "uczestnicy" => 18, 
        "aktywne" => true
    ],
    "Szkolenie z cyberbezpieczeństwa" => [
        "data" => "2026-12-05", 
        "miejsce" => "Sala 15",
        "uczestnicy" => 30, 
        "aktywne" => false
    ],
    "Dzień otwarty szkoły" => [
        "data" => "2026-12-10", 
        "miejsce" => "Aula",
        "uczestnicy" => 50, 
        "aktywne" => true
    ]
];
//  
//  
// 2: Zmień liczbę uczestników warsztatów.
$wydarzenia["Warsztaty HTML i CSS"]["uczestnicy"] = 22;

// TODO 3: Dodaj turniej wiedzy informatycznej.
$wydarzenia["Turniej wiedzy informatycznej"] = [
    "data" => "2026-12-15",
    "miejsce" => "Sala 10",
    "uczestnicy" => 20,
    "aktywne" => true
];

// TODO 4: Usuń szkolenie z cyberbezpieczeństwa.
unset($wydarzenia["Dzień otwarty szkoły"]);
?>
<body>
    
    <header>
        <h1>Portal wydarzeń szkolnych</h1>
    </header>

    <nav>
        <a href="#start">Start</a>
        <a href="#wydarzenia">Wydarzenia</a>
        <a href="#kontakt">Kontakt</a>
    </nav>

    <main>
        <section id="wydarzenia">
            <h2>Wydarzenia szkolne</h2>
            <?php foreach ($wydarzenia as $nazwa => $szczegoly): ?>
                <article>
                    <h3><?php echo $nazwa; ?></h3>
                    <p><time datetime="<?php echo $szczegoly['data']; ?>"><?php echo $szczegoly['data']; ?></time></p>
                    <p>Miejsce: <?php echo $szczegoly['miejsce']; ?></p>
                    <p>Liczba uczestników: <?php echo $szczegoly['uczestnicy']; ?></p>
                    <?php if ($szczegoly['aktywne']): ?>
                        <p>Zapisy otwarte</p>
                    <?php else: ?>
                        <p>Zapisy zamknięte</p>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </section>

        <aside>
            <h2>Wydarzenia z otwartymi zapisami</h2>
            <ul>
                <?php foreach ($wydarzenia as $nazwa => $szczegoly): ?>
                    <?php if ($szczegoly['aktywne']): ?>
                        <li><?php echo $nazwa; ?></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>

    <footer id="kontakt">
        Portal szkolny – 2026
    </footer>
</body>
</html>