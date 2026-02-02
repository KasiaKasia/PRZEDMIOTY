#include <iostream>
#include <string>
using namespace std;

// Klasa bazowa
class Zwierze {
public:
    string nazwa;
    int wiek;

     
};

// Klasa pochodna - Pies
class Pies : public Zwierze {
public:
    Pies(string n, int w) : Zwierze(n, w) {}
 
};

// Klasa pochodna - Kot
class Kot : public Zwierze {
public:
     
};

int main() {
    Pies pies("Reksio", 5);
    

    return 0;
}
/*
Zadanie: Zwierzęta i dziedziczenie

Napisz program w C++, który wykorzystuje dziedziczenie.
Utwórz klasę bazową Zwierze z polami:

- nazwa (typ string)
- wiek (typ int)

Klasa powinna mieć metodę dajGlos(), która wyświetla tekst:
„Zwierzę wydaje dźwięk.”

Utwórz dwie klasy pochodne:

- Pies — metoda dajGlos() wypisuje: „Hau hau!”
- Kot — metoda dajGlos() wypisuje: „Miau!”

W funkcji main() utwórz obiekty klasy Pies i Kot, ustaw dane i wywołaj metodę dajGlos().

*/