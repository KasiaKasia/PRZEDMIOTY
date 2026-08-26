❓ Pytanie 1

Które stwierdzenie najlepiej opisuje działanie sortowania bąbelkowego (Bubble Sort)?

🔘 Odpowiedzi

A. Algorytm dzieli listę na mniejsze części i sortuje je rekurencyjnie
B. Algorytm porównuje sąsiednie elementy i zamienia je miejscami, aż lista będzie posortowana
C. Algorytm zawsze znajduje najmniejszy element i umieszcza go na początku listy
D. Algorytm działa w czasie liniowym O(n) dla dużych zbiorów danych

✅ Poprawna odpowiedź:

B

💡 Dlaczego?
B dokładnie opisuje mechanizm działania Bubble Sort
A → to bardziej jak Quick Sort / Merge Sort
C → to Selection Sort
D → nieprawda, Bubble Sort ma złożoność O(n²)
/*
Pytanie 2

Który warunek musi być spełniony, aby algorytm wyszukiwania binarnego działał poprawnie?

🔘 Odpowiedzi

A. Lista musi zawierać unikalne elementy
B. Lista musi być wcześniej posortowana
C. Lista musi mieć parzystą liczbę elementów
D. Algorytm działa poprawnie na dowolnej liście, niezależnie od kolejności

✅ Poprawna odpowiedź:

B

💡 Dlaczego?
Wyszukiwanie binarne działa poprzez dzielenie posortowanej listy na pół
Bez uporządkowania nie wiadomo, w którą stronę iść (lewo/prawo)
Pozostałe odpowiedzi są błędne, bo:
A → elementy nie muszą być unikalne
C → liczba elementów nie ma znaczenia
D → to całkowicie nieprawda

*/

Pytanie:
Na czym polega wyszukiwanie liniowe?

Odpowiedzi:
A. Na dzieleniu tablicy na połowy i sprawdzaniu środkowego elementu
B. Na sprawdzaniu każdego elementu po kolei aż do znalezienia wyniku
C. Na sortowaniu tablicy przed wyszukiwaniem
D. Na przeszukiwaniu tylko pierwszej połowy tablicy

✅ Poprawna odpowiedź:
B. Na sprawdzaniu każdego elementu po kolei aż do znalezienia wyniku

Zadanie 3

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Ćwiczenie DOM</title>
    <style>
        .box { padding: 10px; border: 1px solid #aaa; margin: 10px 0; }
    </style>
</head>

<body>

<header>
    <h2 id="status">Status: Nieaktywny</h2>
</header>

<main>

    <div class="box">
        <p>Kliknij przycisk, aby zmienić status</p>
    </div>

    <button id="startBtn">Uruchom</button>

</main>

<script>

/*
Zadanie:

Po kliknięciu przycisku:
1. Zmień tekst w nagłówku (id="status") na: "Status: Aktywny"
2. Zmień kolor tekstu nagłówka na zielony

Wykorzystaj:
- getElementById
- onclick

*/

</script>

</body>
</html>

Rozwiazanie:

<script>
document.getElementById("startBtn").onclick = function() {
    const status = document.getElementById("status");
    
    status.innerText = "Status: Aktywny";
    status.style.color = "green";
};
</script>

Zadanie 4

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Ćwiczenie DOM 2</title>
    <style>
        .box { padding: 10px; border: 1px solid #aaa; margin: 10px 0; }
    </style>
</head>

<body>

<header>
    <h2>Lista zadań</h2>
</header>

<main>

    <div class="box">
        <p>Zadanie 1</p>
        <p>Zadanie 2</p>
        <p>Zadanie 3</p>
    </div>

    <div class="box">
        <p>Zadanie 4</p>
        <p>Zadanie 5</p>
    </div>

    <button id="kolorBtn">Zmień kolor tekstów</button>

</main>

<script>

/*
Zadanie:

Po kliknięciu przycisku:
1. Pobierz wszystkie elementy <p> za pomocą getElementsByTagName
2. Zmień ich kolor tekstu na niebieski

Wykorzystaj:
- getElementsByTagName
- onclick
*/

</script>

</body>
</html>


Rozwiazanie:
<script>
document.getElementById("kolorBtn").onclick = function() {
    let paragrafy = document.getElementsByTagName("p");

    for (let i = 0; i < paragrafy.length; i++) {
        paragrafy[i].style.color = "blue";
    }
};
</script>
/*
Zadanie 5

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Ćwiczenie DOM 3</title>
    <style>
        .sekcja { padding: 10px; border: 1px solid #ccc; margin: 10px 0; }
    </style>
</head>

<body>

<header>
    <h2 id="wynik">Wybierz kolor</h2>
</header>

<main>

    <section class="sekcja">
        <form>
            <label><input type="radio" name="kolor" value="red"> Czerwony</label><br>
            <label><input type="radio" name="kolor" value="green"> Zielony</label><br>
            <label><input type="radio" name="kolor" value="blue"> Niebieski</label>
        </form>
    </section>

    <button id="btn">Zastosuj kolor</button>

</main>

<script>

/*
Zadanie:

Po kliknięciu przycisku:
1. Pobierz wszystkie elementy typu radio o name="kolor" za pomocą getElementsByName
2. Sprawdź, który z nich jest zaznaczony (checked)
3. Ustaw kolor tekstu nagłówka (id="wynik") zgodnie z wybraną opcją

Wykorzystaj:
- getElementsByName
- onclick
- checked
*/

</script>

</body>
</html>
/*
Rozwiązanie:

<script>
document.getElementById("btn").onclick = function() {
    let kolory = document.getElementsByName("kolor");
    let naglowek = document.getElementById("wynik");

    for (let i = 0; i < kolory.length; i++) {
        if (kolory[i].checked) {
            naglowek.style.color = kolory[i].value;
        }
    }
};
</script>
*/
Zadanie 5

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Ćwiczenie DOM - querySelector</title>
    <style>
        .sekcja { padding: 10px; border: 1px solid #ccc; margin: 10px 0; }
    </style>
</head>

<body>

<header>
    <h2 id="wynik">Wybierz element</h2>
</header>

<main>

    <section class="sekcja">
        <p class="opcja">Opcja 1</p>
        <p class="opcja">Opcja 2</p>
        <p class="opcja">Opcja 3</p>
    </section>

    <button id="btn">Zmień tekst</button>

</main>

<script>
document.getElementById("btn").onclick = function() {
    // tutaj użyj querySelector
};
/*
Zadanie:

Po kliknięciu przycisku:
1. Pobierz pierwszy element z klasą "opcja" za pomocą querySelector
2. Zmień jego tekst na: "Wybrano pierwszą opcję"
3. Zmień jego kolor na czerwony

Wykorzystaj:
- document.querySelector()
- .textContent
- .style.color

Podpowiedź:
querySelector zwraca tylko pierwszy pasujący element!
*/
</script>

</body>
</html>
Rozwiazanie
document.getElementById("btn").onclick = function() {
   let element = document.querySelector(".opcja");
	element.textContent = "Wybrano pierwszą opcję";
	element.style.color = "red";

};

Zadanie 6

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Ćwiczenie DOM 4</title>
    <style>
        .box {
            width: 200px;
            height: 100px;
            border: 2px solid #aaa;
            margin: 20px;
            text-align: center;
            line-height: 100px;
            transition: 0.3s;
        }
    </style>
</head>

<body>

<header>
    <h2 id="tekst">Najedź myszką na kwadrat</h2>
</header>

<main>

    <div id="kwadrat" class="box">
        Hover me
    </div>

</main>

<script>

/*
Zadanie:

1. Gdy użytkownik najedzie myszką na element "kwadrat" (onmouseover):
   - zmień kolor tła na zielony
   - zmień tekst w nagłówku (id="tekst") na: "Myszka nad elementem"

2. Gdy myszka opuści element (onmouseout):
   - przywróć domyślny kolor tła (biały)
   - przywróć tekst nagłówka

Wykorzystaj:
- onmouseover
- onmouseout
- getElementById
*/

</script>

</body>
</html>

Rozwiązanie
<script>
let kwadrat = document.getElementById("kwadrat");
let tekst = document.getElementById("tekst");

kwadrat.onmouseover = function() {
    kwadrat.style.backgroundColor = "green";
    tekst.innerText = "Myszka nad elementem";
};

kwadrat.onmouseout = function() {
    kwadrat.style.backgroundColor = "white";
    tekst.innerText = "Najedź myszką na kwadrat";
};
</script>


Zadanie 7
/*
Pytanie

Które stwierdzenie poprawnie opisuje działanie zmiennych var, let i const w poniższym kodzie?

if (true) {
  var x = 10;
  let y = 20;
  const z = 30;
}

console.log(x);
console.log(y);
console.log(z);
🔘 Odpowiedzi

A. Wszystkie zmienne są dostępne poza blokiem if
B. Tylko x jest dostępne poza blokiem, ponieważ var ma zasięg funkcyjny
C. Tylko y i z są dostępne poza blokiem, ponieważ let i const mają zasięg globalny
D. Wszystkie zmienne mają zasięg blokowy i działają poza if

✅ Poprawna odpowiedź:

B

💡 Wyjaśnienie
var x → ma zasięg funkcyjny, więc „ucieka” z bloku if
let y → ma zasięg blokowy, działa tylko w if
const z → ma zasięg blokowy, działa tylko w if

Dlatego:

console.log(x); // działa → 10
console.log(y); // błąd
console.log(z); // błąd
*/


Co zostanie wypisane w konsoli po wykonaniu poniższego kodu?

let a = 5;
let b = a++;
let c = ++a;

console.log(a, b, c);
Odpowiedzi:

A. 6 5 6
B. 7 5 7
C. 7 5 6
D. 6 6 7

✅ Poprawna odpowiedź:

C. 7 5 6

/*
Zadanie 8 

SZABLON HTML + JS
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>onkeydown – test</title>
    <style>
        .box {
            padding: 20px;
            border: 2px solid #aaa;
            margin: 20px 0;
        }
    </style>
</head>

<body>

<header>
    <h2 id="info">Czekam na wpisanie znaku...</h2>
</header>

<main>

    <div class="box">
        <input type="text" id="pole" placeholder="Wpisz znak...">
    </div>

</main>

<script>
let pole = document.getElementById("pole");
let info = document.getElementById("info");

pole.onkeydown = function () {
    info.innerText = "Wykryto naciśnięcie klawisza!";
    info.style.color = "green";
};
</script>

</body>
</html>
❓ PYTANIE TESTOWE

Co się stanie, gdy użytkownik wpisze literę "A" w pole input?

🔘 Odpowiedzi

A. Tekst zmieni się dopiero po puszczeniu klawisza
B. Tekst zmieni się natychmiast po naciśnięciu klawisza
C. Tekst zmieni się tylko jeśli klikniemy myszką w stronę
D. Nic się nie stanie, ponieważ onkeydown działa tylko na przyciski <button>

✅ Poprawna odpowiedź:

B

💡 Wyjaśnienie
onkeydown uruchamia się w momencie wciśnięcia klawisza
działa zanim znak pojawi się w input
dlatego zmiana tekstu następuje natychmiast

*/

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Ćwiczenie DOM - onkeydown</title>
    <style>
        .sekcja { padding: 10px; border: 1px solid #ccc; margin: 10px 0; }
    </style>
</head>

<body>

<header>
    <h2 id="wynik">Wpisz tekst</h2>
</header>

<main>

    <section class="sekcja">
        <input type="text" id="pole" placeholder="Wpisz coś i naciśnij Enter">
    </section>

</main>

<script>

// tutaj napisz kod

/*
Zadanie:

Po naciśnięciu klawisza Enter w polu input:
1. Pobierz wartość wpisaną w pole tekstowe
2. Wyświetl ją w nagłówku (id="wynik")

Wykorzystaj:
- onkeydown
- event.key === "Enter"
- .value
- .textContent
*/

</script>

</body>
</html>


Rozwiazanie:

document.getElementById("pole").onkeydown = function(event) {
    if (event.key === "Enter") {
        let tekst = this.value;
        document.getElementById("wynik").textContent = tekst;
    }
};

zadanie 9 

Co wyświetli następujący kod w konsoli?

const fruits = ["jabłko", "banan", "gruszka"];

for (const fruit in fruits) {
  console.log(fruit);
}

a) jabłko  banan  gruszka
b) 
0
1
2
c)
jabłko  
banan  
gruszka

Rozwiazanie
b)


| Procent     | Ocena                  |                              
| ----------- | ---------------------- |  
| **0–49%**   | **1 (niedostateczny)** |  
| **50–59%**  | **2 (dopuszczający)**  | 
| **60–69%**  | **3 (dostateczny)      |  
| **70–79%**  | **3.5                  | 
| **80–89%**  | **4 (dobry)            |  
| **90–94%**  | **4.5                  |  
| **95–100%** | **5 (bardzo dobry)     |  
