#include <iostream>

class Bateria {
public:
    int poziom = 100;
    void rozladuj(int procent) {
       
    }
};

class Ekran {
public:
    void wyswietl(std::string wiadomosc) {
        
    }
};

class Smartfon : public Bateria, public Ekran { 
public:
    void uzyj(std::string wiadomosc, int procentZuzycia) {
       
    }
};

int main() {
   
    return 0;
}

/*
Zadanie 1: Dziedziczenie wielokrotne

Opis zadania:
Stwórz hierarchię klas reprezentującą urządzenie elektroniczne, które dziedziczy z dwóch klas bazowych: 
- Bateria (obsługująca poziom naładowania)  
- Ekran (obsługująca wyświetlanie). 

Klasa pochodna Smartfon powinna dziedziczyć z obu, a następnie zaimplementuj metodę uzyj(), która łączy funkcjonalności z obu klas bazowych. 

Użyj dziedziczenia wielokrotnego, aby uniknąć duplikacji kodu. W funkcji main() utwórz obiekt Smartfon i przetestuj metodę.

*/