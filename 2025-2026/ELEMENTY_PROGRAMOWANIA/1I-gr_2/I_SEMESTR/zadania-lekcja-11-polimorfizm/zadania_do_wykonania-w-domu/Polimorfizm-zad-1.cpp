#include <iostream>
#include <vector>
#include <string>
using namespace std;
 
class Pojazd {
public:
	//...

public:
    Pojazd(string nazwa, int rokProdukcji)
        
    }
	//...
};

 
class SamochodOsobowy : public Pojazd {
public:
    SamochodOsobowy(string nazwa, int rokProdukcji)
        : Pojazd(nazwa, rokProdukcji) {
    }

	//...
};
 
class Motocykl : public Pojazd {
public:
    Motocykl(string nazwa, int rokProdukcji)
	//...
    }

	//...
};

 
class Ciezarowka : public Pojazd {
public:
	//...
};
 
int main() {
    cout << "=== Warsztat samochodowy === \n" << endl;
 
    vector<Pojazd*> pojazdy;
	
	//...
	
    // Zwolnienie pamięci
    for (auto p : pojazdy) {
        delete p;
    }

    return 0;
}

/* Zadanie domowe 1: System pojazdów w warsztacie

Cel:
Stworzyć program, który wykorzystuje polimorfizm dynamiczny do obliczania kosztów naprawy różnych typów pojazdów.

📋 Opis zadania
W warsztacie samochodowym naprawiane są różne typy pojazdów:
- Samochód osobowy
- Motocykl
- Ciężarówka

Każdy z nich ma:
- nazwę,
- rok produkcji,
- metodę wirtualną obliczKosztNaprawy(), która zwraca koszt naprawy pojazdu.

Koszt naprawy może zależeć np. od:
- wieku pojazdu (im starszy, tym droższa naprawa),
- rodzaju pojazdu (ciężarówka → najdroższa).

🧩 Wymagania:
1. Utwórz klasę bazową Pojazd z:
- chronionymi polami: string nazwa; int rokProdukcji;
- konstruktorem ustawiającym te pola,
- wirtualną funkcją double obliczKosztNaprawy() (domyślnie zwracającą 0),
- funkcją wirtualną void wypiszInformacje() wypisującą dane o pojeździe.

2. Utwórz klasy pochodne:
- SamochodOsobowy
- Motocykl
- Ciezarowka

Każda powinna nadpisać metodę obliczKosztNaprawy() w inny sposób, np.:
- SamochodOsobowy: 2000 + 100 × (2025 - rokProdukcji)
- Motocykl: 1000 + 50 × (2025 - rokProdukcji)
- Ciezarowka: 5000 + 200 × (2025 - rokProdukcji)

3. W funkcji main():
- Stwórz tablicę wskaźników do klasy bazowej Pojazd*.
- Dodaj do niej różne obiekty (new SamochodOsobowy, new Motocykl, new Ciezarowka).
- Przejdź pętlą po tablicy i dla każdego pojazdu:
- - wypisz jego dane,
- - wyświetl koszt naprawy.

4. Na końcu zwolnij pamięć (delete).

💻 Przykładowy wynik działania programu
=== Warsztat samochodowy ===

Pojazd: Audi A4 (rok 2015)
Koszt naprawy: 3000 zł

Pojazd: Yamaha MT07 (rok 2018)
Koszt naprawy: 1650 zł

Pojazd: Volvo FH16 (rok 2012)
Koszt naprawy: 7600 zł

🧠 Wskazówki:

- Użyj słowa kluczowego virtual w metodach klasy bazowej.
- W klasach pochodnych użyj override – to dobra praktyka.
- Pamiętaj o wirtualnym destruktorze w klasie bazowej!
- Spróbuj napisać funkcję void wypiszInformacje(), która w każdej klasie pochodnej wyświetla nieco inne dane.
 
*/
