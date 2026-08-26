// Sprawdzian testowy   - Podstawy Programowania  2A gr2 (14os) i gr1 (16 os)
 
 GRUPA A
Zadanie 1 (5 pkt) 
Treść:
Napisz program, który wczyta liczbę całkowitą i sprawdzi, czy jest parzysta, czy nieparzysta.

Przykład działania:
Podaj liczbę: 7
Liczba nieparzysta

Rozwiązanie:
 ////////////////////
#include <iostream>
using namespace std;

int main() {
    int liczba;
    cout << "Podaj liczbe: ";
    cin >> liczba;

    if (liczba % 2 == 0)
        cout << "Liczba parzysta";
    else
        cout << "Liczba nieparzysta";

    return 0;
}

// GRUPA B

Zadanie 1 (5 pkt)
 
Treść:
Napisz program, który po wpisaniu liczby od 1 do 7 wypisze nazwę dnia tygodnia.
W przypadku innej liczby — wypisz komunikat „Nie ma takiego dnia”.

Przykład:
Podaj numer dnia tygodnia: 3
Środa
/////
#include <iostream>
using namespace std;

int main() {
    int dzien;
    cout << "Podaj numer dnia tygodnia (1-7): ";
    cin >> dzien;

    switch (dzien) {
        case 1: cout << "Poniedzialek"; break;
        case 2: cout << "Wtorek"; break;
        case 3: cout << "Sroda"; break;
        case 4: cout << "Czwartek"; break;
        case 5: cout << "Piatek"; break;
        case 6: cout << "Sobota"; break;
        case 7: cout << "Niedziela"; break;
        default: cout << "Nie ma takiego dnia";
    }
    return 0;
}

 GRUPA C

Zadanie 1 (5 pkt)
Treść:
Napisz program, który wypisze liczby od 1 do 10 w jednej linii.

Oczekiwany wynik:
1 2 3 4 5 6 7 8 9 10
/////////////
#include <iostream>
using namespace std;

int main() {
    for (int i = 1; i <= 10; i++) {
        cout << i << " ";
    }
    return 0;
}

// GRUPA D
/*
Zadanie 1 (5 pkt)
 
Treść:
Napisz program, który pobiera od użytkownika liczby aż do momentu, gdy wpisze 0.
Na końcu wypisz sumę wprowadzonych liczb.

Przykład:

Podaj liczbe: 3
Podaj liczbe: 4
Podaj liczbe: 2
Podaj liczbe: 0
Suma = 9

Rozwiązanie:
*/
#include <iostream>
using namespace std;

int main() {
    int liczba, suma = 0;
    do {
        cout << "Podaj liczbe: ";
        cin >> liczba;
        suma += liczba;
    } while (liczba != 0);

    cout << "Suma = " << suma;
    return 0;
}
// GRUPA A
/* 
Zadanie 2 (5 pkt) – Funkcja dodająca dwie liczby (referencja)

Polecenie:
Napisz funkcję void dodaj(int a, int b, int &wynik),
która doda dwie liczby i zapisze wynik przez referencję.
W funkcji main() pobierz dwie liczby od użytkownika i wypisz sumę.

Przykład działania:
Podaj a: 4
Podaj b: 6
Suma = 10


Rozwiązanie:
*/
#include <iostream>
using namespace std;

void dodaj(int a, int b, int &wynik) {
    wynik = a + b;
}

int main() {
    int x, y, suma;
    cout << "Podaj a: ";
    cin >> x;
    cout << "Podaj b: ";
    cin >> y;

    dodaj(x, y, suma);

    cout << "Suma = " << suma;
    return 0;
}
// GRUPA B
/* 
Zadanie 2 (5 pkt) – Funkcja odejmująca dwie liczby (referencja)

Polecenie:
Napisz funkcję void odejmij(int a, int b, int &wynik),
która odejmie drugą liczbę od pierwszej i zwróci wynik przez referencję.

Przykład działania:
Podaj a: 10
Podaj b: 3
Różnica = 7

Rozwiązanie:
*/
#include <iostream>
using namespace std;

void odejmij(int a, int b, int &wynik) {
    wynik = a - b;
}

int main() {
    int x, y, roznica;
    cout << "Podaj a: ";
    cin >> x;
    cout << "Podaj b: ";
    cin >> y;

    odejmij(x, y, roznica);

    cout << "Różnica = " << roznica;
    return 0;
}

// GRUPA C
/* 
Zadanie 2 (5 pkt) Funkcja zamieniająca wartości (wskaźniki)

Polecenie:
Napisz funkcję void zamien(int *a, int *b),
która zamieni miejscami wartości dwóch zmiennych, używając wskaźników.

Przykład działania:
Przed zamianą: a = 5, b = 8
Po zamianie: a = 8, b = 5


Rozwiązanie:
*/
#include <iostream>
using namespace std;

void zamien(int *a, int *b) {
    int temp = *a;
    *a = *b;
    *b = temp;
}

int main() {
    int x, y;
    cout << "Podaj a: ";
    cin >> x;
    cout << "Podaj b: ";
    cin >> y;

    cout << "Przed zamiana: a = " << x << ", b = " << y << endl;
    zamien(&x, &y);
    cout << "Po zamianie: a = " << x << ", b = " << y << endl;

    return 0;
}
// GRUPA D
/* 
Zadanie 2 (5 pkt) Funkcja mnożąca liczbę przez 2 (wskaźnik)

Polecenie:
Napisz funkcję void podwoj(int *liczba),
która pomnoży wartość liczby przez 2 za pomocą wskaźnika.

Przykład działania:
Podaj liczbe: 7
Po podwojeniu: 14

Rozwiązanie:
*/
#include <iostream>
using namespace std;

void podwoj(int *liczba) {
    *liczba = *liczba * 2;
}

int main() {
    int x;
    cout << "Podaj liczbe: ";
    cin >> x;

    podwoj(&x);

    cout << "Po podwojeniu: " << x;
    return 0;
}

// GRUPA A
/* 
Zadanie 3 (5 pkt) 

Polecenie:
Zdefiniuj strukturę Uczen, która przechowuje imię, nazwisko i średnią ocen ucznia.
W funkcji main() utwórz jednego ucznia, wczytaj dane i wypisz je na ekranie.

Przykład działania:
Podaj imie: Anna
Podaj nazwisko: Kowalska
Podaj srednia: 4.75

Uczen: Anna Kowalska, Średnia: 4.75

Rozwiązanie:
*/
#include <iostream>
using namespace std;

struct Uczen {
    string imie;
    string nazwisko;
    float srednia;
};

int main() {
    Uczen u;
    cout << "Podaj imie: ";
    cin >> u.imie;
    cout << "Podaj nazwisko: ";
    cin >> u.nazwisko;
    cout << "Podaj srednia: ";
    cin >> u.srednia;

    cout << "Uczen: " << u.imie << " " << u.nazwisko 
         << ", Średnia: " << u.srednia;
    return 0;
}
// GRUPA B
/* 
Zadanie 3 (5 pkt)– Struktura: prostokąt i jego pole

Polecenie:
Zdefiniuj strukturę Prostokat z polami a i b (boki).
Napisz funkcję float pole(Prostokat p), która zwraca pole prostokąta.
W main() wczytaj dane i wypisz wynik.

Przykład działania:
Podaj bok a: 4
Podaj bok b: 7
Pole = 28

Rozwiązanie:
*/
#include <iostream>
using namespace std;

struct Prostokat {
    float a;
    float b;
};

float pole(Prostokat p) {
    return p.a * p.b;
}

int main() {
    Prostokat p;
    cout << "Podaj bok a: ";
    cin >> p.a;
    cout << "Podaj bok b: ";
    cin >> p.b;

    cout << "Pole = " << pole(p);
    return 0;
}

// GRUPA C
/* 
Zadanie 3 (5 pkt)– Unia: różne typy danych

Polecenie:
Zdefiniuj unię Dane, która może przechowywać liczbę całkowitą, rzeczywistą lub znak.
W main() pokaż, że unia przechowuje tylko jedną wartość naraz.

Przykład działania:
Wpisano int: 42
Wpisano float: 3.14
Wpisano znak: A


Rozwiązanie:
*/
#include <iostream>
using namespace std;

union Dane {
    int liczba;
    float zmiennoprzecinkowa;
    char znak;
};

int main() {
    Dane d;

    d.liczba = 42;
    cout << "Int: " << d.liczba << endl;

    d.zmiennoprzecinkowa = 3.14;
    cout << "Float: " << d.zmiennoprzecinkowa << endl;

    d.znak = 'A';
    cout << "Znak: " << d.znak << endl;

    return 0;
}

// GRUPA D
/* 
Zadanie 3 (5 pkt) - Unie w praktyce – różne typy danych liczb

Polecenie:
Napisz program w C++, który:
Definiuje unię Liczba, mogącą przechowywać liczbę całkowitą (int) lub zmiennoprzecinkową (float).
Pozwala użytkownikowi wybrać, jaką wartość chce wpisać.
Wypisuje tę wartość na ekranie.

Przykład działania:
Wybierz typ (1 - int, 2 - float): 2
Podaj liczbe: 3.14
Wpisano float: 3.14

Rozwiązanie:
*/

#include <iostream>
using namespace std;

union Liczba {
    int calkowita;
    float zmiennoprzecinkowa;
};

int main() {
    Liczba l;
    int wybor;

    cout << "Wybierz typ (1 - int, 2 - float): ";
    cin >> wybor;

    if (wybor == 1) {
        cout << "Podaj liczbe calkowita: ";
        cin >> l.calkowita;
        cout << "Wpisano int: " << l.calkowita << endl;
    } else if (wybor == 2) {
        cout << "Podaj liczbe zmiennoprzecinkowa: ";
        cin >> l.zmiennoprzecinkowa;
        cout << "Wpisano float: " << l.zmiennoprzecinkowa << endl;
    } else {
        cout << "Nieprawidlowy wybor!";
    }

    return 0;
}

// GRUPA A – Klasa Kolo
/*
Polecenie:
Napisz klasę Kolo, która przechowuje promień koła.
Konstruktor ma przyjmować promień.
Metoda pole() ma obliczać i zwracać pole koła (πr²).
W main() utwórz obiekt, wczytaj promień od użytkownika i wyświetl pole.

Przykład działania:
Podaj promień: 5
Pole koła: 78.54


Rozwiązanie:
*/
#include <iostream>
#include <cmath> // dla M_PI
using namespace std;

class Kolo {
    float r;
public:
    Kolo(float promien) {
        r = promien;
    }

    float pole() {
        return M_PI * r * r;
    }
};

int main() {
    float r;
    cout << "Podaj promien: ";
    cin >> r;

    Kolo k(r);
    cout << "Pole koła: " << k.pole();
    return 0;
}

// GRUPA B – Klasa Student
/*
Polecenie:
Napisz klasę Student, która przechowuje imię i średnią ocen.
	- Konstruktor ma ustawiać obie wartości.
	- Metoda ocenaOpisowa() ma zwracać tekstową ocenę:

		2.0–2.9 → „niedostateczny”
		3.0–3.9 → „dostateczny”
		4.0–4.9 → „dobry”
		5.0 → „bardzo dobry”

Przykład działania:
Student: Ola
Średnia: 4.5
Ocena opisowa: dobry

Rozwiązanie:
*/
#include <iostream>
using namespace std;

class Student {
    string imie;
    float srednia;
public:
    Student(string i, float s) {
        imie = i;
        srednia = s;
    }

    string ocenaOpisowa() {
        if (srednia < 3.0) return "niedostateczny";
        else if (srednia < 4.0) return "dostateczny";
        else if (srednia < 5.0) return "dobry";
        else return "bardzo dobry";
    }

    void pokaz() {
        cout << "Student: " << imie << "\nŚrednia: " << srednia
             << "\nOcena opisowa: " << ocenaOpisowa() << endl;
    }
};

int main() {
    Student s("Ola", 4.5);
    s.pokaz();
    return 0;
}
// GRUPA C - Klasa Temperatura
/*
Polecenie:
Napisz klasę Temperatura, która przechowuje wartość temperatury w stopniach Celsjusza.

	- Konstruktor ustawia wartość.
	- Metoda naFahrenheita() przelicza wartość na stopnie Fahrenheita.
	- Metoda pokaz() wypisuje wynik w obu jednostkach.
Przykład działania:

Podaj temperature w C: 25
25°C = 77°F

Rozwiązanie:
*/
#include <iostream>
using namespace std;

class Temperatura {
    float celsjusz;
public:
    Temperatura(float c) {
        celsjusz = c;
    }

    float naFahrenheita() {
        return (celsjusz * 9 / 5) + 32;
    }

    void pokaz() {
        cout << celsjusz << "°C = " << naFahrenheita() << "°F" << endl;
    }
};

int main() {
    float t;
    cout << "Podaj temperature w C: ";
    cin >> t;

    Temperatura temp(t);
    temp.pokaz();
    return 0;
}
// GRUPA D - Klasa Pracownik
/*
Polecenie:
Napisz klasę Pracownik, która przechowuje imię i wynagrodzenie brutto.

	Konstruktor ustawia wartości.
	Metoda obliczNetto() oblicza wynagrodzenie netto, przyjmując podatek 17%.
	Metoda pokaz() wypisuje dane pracownika i wynik.

Przykład działania:
Imię: Jan
Brutto: 5000
Netto: 4150


Rozwiązanie:
*/
#include <iostream>
using namespace std;

class Pracownik {
    string imie;
    float brutto;
public:
    Pracownik(string i, float b) {
        imie = i;
        brutto = b;
    }

    float obliczNetto() {
        return brutto * 0.83; // 17% podatku
    }

    void pokaz() {
        cout << "Imię: " << imie << endl;
        cout << "Brutto: " << brutto << endl;
        cout << "Netto: " << obliczNetto() << endl;
    }
};

int main() {
    Pracownik p("Jan", 5000);
    p.pokaz();
    return 0;
}
/*
Zadanie 5
Zadanie 5 (1 pkt) 

Wymień dwa główne rodzaje polimorfizmu 

a) Statyczny
b) Dynamiczny
*/
/*
🧩 Zadanie 6 – Konstruktor w C++

Przeanalizuj poniższy kod i odpowiedz na pytanie:
*/
#include <iostream>
using namespace std;

class Osoba {
public:
    string imie;
    int wiek;

    Osoba(string i, int w) {
        imie = i;
        wiek = w;
        cout << "Utworzono obiekt klasy Osoba" << endl;
    }
};

int main() {
    Osoba o1("Anna", 25);
    return 0;
}
/*
❓ Pytanie:
Które zdanie na temat programu jest prawdziwe?

🔹 A) Konstruktor Osoba(string i, int w) jest wywoływany automatycznie przy tworzeniu obiektu o1.
🔹 B) Konstruktor trzeba wywołać ręcznie po utworzeniu obiektu o1.
🔹 C) Konstruktor jest metodą, którą można wywołać tylko raz w całym programie.
🔹 D) Konstruktor musi zawsze zwracać wartość typu void.

✅ Poprawna odpowiedź: A)

Konstruktor Osoba(string i, int w) jest wywoływany automatycznie przy tworzeniu obiektu o1.
*/
/*
🧩 Zadanie 7
Które zdanie jest prawdziwe w przypadku klas dziedziczących (bazowa i pochodna)?

A) Najpierw wywoływany jest konstruktor klasy pochodnej, a potem bazowej.
B) Najpierw wywoływany jest konstruktor klasy bazowej, a potem pochodnej.
C) Konstruktory klas bazowych nie są nigdy wywoływane automatycznie.
D) Kolejność wywołań zależy od alfabetu nazw klas.

✅ Poprawna odpowiedź: B
*/
/*
🧩 Zadanie 8 
Jaki jest zasięg zmiennej globalnej?

A) Tylko w funkcji, w której została zadeklarowana.
B) W całym pliku oraz w funkcjach, które ją "widzą".
C) Tylko w klasach, które ją zawierają.
D) Zmienna globalna nie ma zasięgu.

✅ Poprawna odpowiedź: B
*/

/*
🧩 Zadanie 9 
Które zdanie jest prawdziwe na temat kontenerów dynamicznych w C++ (np. std::vector, std::list, std::deque)?

A) Dodawanie i usuwanie elementów jest możliwe tylko w kontenerach dynamicznych, nie w tablicach statycznych.
B) W kontenerach dynamicznych nie można dodawać ani usuwać elementów po utworzeniu.
C) Kontenery dynamiczne działają tak samo jak zwykłe zmienne typu int.
D) Wszystkie kontenery dynamiczne w C++ mają stałą wielkość, podobnie jak tablice statyczne.

✅ Poprawna odpowiedź: A
*/