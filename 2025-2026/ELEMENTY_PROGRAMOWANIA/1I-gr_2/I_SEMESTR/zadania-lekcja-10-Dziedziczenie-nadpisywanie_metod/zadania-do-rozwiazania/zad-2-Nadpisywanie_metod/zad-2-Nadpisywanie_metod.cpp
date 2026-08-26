#include <iostream>

class Pojazd { 
public:
   
};

class Rower : public Pojazd {
public:
    
};

int main() {

    return 0;
}

/*
Zadanie 2: Nadpisywanie metod

Opis zadania:
Stwórz klasę bazową Pojazd z wirtualną metodą jedz(), która wyświetla ogólny komunikat. 
Następnie utwórz klasę pochodną Rower dziedziczącą z Pojazd i nadpisz metodę jedz(), aby wyświetlała specyficzny komunikat dla roweru. 

W funkcji main() użyj polimorfizmu: utwórz wskaźnik do Pojazd wskazujący na obiekt Rower i wywołaj metodę jedz().
*/