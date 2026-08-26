#include <iostream>
#include <string>

struct Adres {
    std::string miasto;
    std::string ulica;
    int numerDomu;
};

struct Osoba {
    std::string imie;
    int wiek;
    Adres adres;  
};

int main() {
    Osoba anna;
    anna.imie = "Anna";
    anna.wiek = 25;
    anna.adres.miasto = "Warszawa";   
    anna.adres.ulica = "Marszałkowska";
    anna.adres.numerDomu = 10;

    std::cout << anna.imie << " mieszka w " << anna.adres.miasto << std::endl;
    return 0;
}