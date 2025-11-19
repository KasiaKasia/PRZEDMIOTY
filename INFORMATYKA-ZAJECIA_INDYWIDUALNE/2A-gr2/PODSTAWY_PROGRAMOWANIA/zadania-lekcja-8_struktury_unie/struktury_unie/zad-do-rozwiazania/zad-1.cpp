#include <iostream>
#include <string>
#include <variant>
#include <vector>
using namespace std;

struct Pracownik {
	// ..
    variant<int, string> stanowisko;  
    // int = nr pokoju, string = nazwa pojazdu
};

void przedstaw(const Pracownik& p) {
    cout << p.imie << ", wiek " << p.wiek
         << ", pensja " << p.pensja << " zł, ";

    // std::visit wywoła odpowiednią lambdę zależnie od tego,
    // czy w variant jest int (pokój), czy string (pojazd)
    visit([&](auto&& arg) {
		// ...
        if constexpr (is_same_v<T, int>) {
		// ...
    }, p.stanowisko);

    cout << endl;
}

int main() {
    vector<Pracownik> pracownicy = {
       // ...
	   
	   }
    };

    for (const auto& p : pracownicy) {
        // ...
    }

    return 0;
}


/*
Napisz program w C++17+, który przechowuje dane o pracownikach firmy.

1. Zdefiniuj strukturę Pracownik, która zawiera:

- string imie,
- int wiek,
- double pensja,
- variant<int, string> stanowisko – gdzie:

	- jeśli pracownik jest biurowy → w stanowisko przechowywany jest numer pokoju (int),
	- jeśli pracownik jest kierowcą → w stanowisko przechowywana jest nazwa pojazdu (string).

2. Utwórz funkcję void przedstaw(const Pracownik& p), która wypisuje wszystkie dane o pracowniku.
- Wykorzystaj std::visit, aby w elegancki sposób obsłużyć oba przypadki (int i string).

3. W main() utwórz tablicę 3 pracowników:

- dwóch biurowych (z numerem pokoju),
- jednego kierowcę (z nazwą pojazdu).

4. Wypisz dane wszystkich pracowników za pomocą pętli.


  Przykładowy wynik działania:
Jan Kowalski, wiek 30, pensja 4200 zł, pracuje w pokoju nr 101
Anna Nowak, wiek 25, pensja 3800 zł, pracuje w pokoju nr 205
Piotr Malinowski, wiek 40, pensja 5000 zł, jeździ pojazdem: Ford Transit


*/