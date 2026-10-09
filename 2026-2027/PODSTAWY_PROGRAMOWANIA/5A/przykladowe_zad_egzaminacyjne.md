## Zad 1

**Część I. Aplikacja konsolowa**

Korzystając z opisu algorytmu **sita Eratostenesa**, 
przekształć pseudokod algorytmu do aplikacji konsolowej **szukającej liczb pierwszych w przedziale 2..n, gdzie n = 100**.
Ze **zbioru liczb naturalnych z przedziału `[2, n]`, tj. `{2,3,4,... ,n}` wybieramy najmniejszą**, czyli 2, i **wykreślamy wszystkie jej wielokrotności większe od niej samej, to jest 4, 6, 8, ...** . 

**Z pozostałych liczb wybieramy najmniejszą niewykreśloną liczbę (`3`) i wykreślamy wszystkie jej wielokrotności większe od niej samej: `6,9, 12, ...`** . 

**Według tej samej procedury postępujemy dla liczby 5.**
**Następnie dla 7 aż do sprawdzenia wszystkich niewykreślonych wcześniej liczb.**
**Wykreślanie powtarzamy do momentu, gdy liczba i, której wielokrotność wykreślamy, będzie większa niż `√𝑛`**.

Pseudokod
Niech A będzie tablicą wartości typu logicznego indeksowaną liczbami całkowitymi od 2 do n (indeksy 0 i 1 nie są brane pod uwagę w czasie działania algorytmu), początkowo wypełniona wartościami true

```text
for i := 2, 3, 4, ..., nie więcej niż √𝑛:
 if A[i] = true:
 for j := 2*i, 3*i, 4*i, ..., nie więcej niż n :
 A[j] := false
``` 
 
Wyjście: wartości i takie, że A[i] zawiera wartość true.
Źródło: https://pl.wikipedia.org/wiki/Sito_Eratostenesa;  

**Założenia programu**
‒ Program wykonywany w konsoli.
‒ Język programowania zgodny z zainstalowanym na stanowisku egzaminacyjnym, jeden z: C++, C#, Java, Python.
‒ Program szuka liczb w przedziale 2..100 (n = 100)
‒ Wypełnianie tablicy odbywa się w osobnej funkcji przyjmującej tablicę jako argument i nie zwracającej żadnej wartości.
‒ Liczby pierwsze są wyświetlane na ekranie, rozdzielone dowolnym separatorem oraz poprzedzone znaczącym komunikatem.
‒ Program powinien być zapisany czytelnie, z zachowaniem zasad czystego formatowania kodu, należy stosować znaczące nazwy zmiennych i funkcji.
 
## Zad 2


Za pomocą narzędzi do tworzenia aplikacji konsolowych zaimplementuj program do tworzenia bezpiecznych haseł.
**Założenia aplikacji:**
− Zastosowany obiektowy język programowania zgodny z zainstalowanym na stanowisku egzaminacyjnym: C++ lub C#, lub Java, lub Python
− **Dowolne podejście: strukturalne lub obiektowe** 
− Zastosowane znaczące nazewnictwo, polskie albo angielskie
− Kod zapisany czytelnie, z zachowaniem zasad czystego formatowania
− Komunikacja z użytkownikiem jest prowadzona w sposób zrozumiały
− **Nie można zastosować metody wbudowanej lub z funkcji bibliotecznych do generowania gotowego hasła**
− **Hasło przechowywane w zmiennej / polu typu napisowego**
− **Funkcja / metoda zwracająca wygenerowane 12-znakowe hasło według zasad:**
− **Losowane są**:
− **3 małe litery z alfabetu łacińskiego    (26 znaków: a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z)**
− **3 wielkie litery z alfabetu łacińskiego (26 znaków: A, B, C, D, E, F, G, H, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, W, X, Y, Z)**
− **2 litery ze znakami diakrytycznymi ze zbioru: ą, ę, ł, ń, ó, ś, ż, ź, Ą, Ę, Ł, Ń, Ó, Ś, Ż, Ź (patrz plik znaki.txt)**
− **2 cyfry z zakresu 0 – 9**
− **2 znaki specjalne z zestawu: !@#$%^&*()_+**
− **Każdy z wylosowanych 12 znaków jest umieszczany w losowym miejscu w haśle**
− **Hasło jest zapisane w zmiennej napisowej i zwracane z funkcji**
− **Aplikacja w programie głównym generuje 5 haseł i wyświetla je ze znaczącym komunikatem**