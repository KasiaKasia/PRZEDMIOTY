/*
Zadanie 1: Suma liczb od 1 do n

Opis: Napisz program, który wczytuje od użytkownika liczbę całkowitą n i oblicza sumę liczb od 1 do n za pomocą pętli for. 
Użyj instrukcji break, aby przerwać pętlę, jeśli suma przekroczy 100.
Przykład:

Wejście: n = 15
Wyjście: Suma: 120 (pętla przerwie się, gdy suma przekroczy 100)


Wskazówka: Użyj zmiennej do przechowywania sumy i warunku w pętli for.

Rozwiązanie  
*/

#include <iostream>
using namespace std;
int main() {
    int n, suma = 0;
    cout << "Podaj n: ";
    cin >> n;
    for (int i = 1; i <= n; i++) {
        suma += i;
        if (suma > 100) {
            cout << "Suma przekroczyła 100: " << suma << endl;
            break;
        }
    }
    cout << "Suma: " << suma << endl;
    return 0;
}

/*
Zadanie 2: Gra w zgadywanie liczby

Opis: Napisz program, w którym użytkownik zgaduje liczbę wylosowaną z zakresu 1-100 (użyj stałej wartości, np. 42, dla prostoty). 
Użyj pętli do-while, aby użytkownik mógł wprowadzać liczby, dopóki nie zgadnie lub nie wpisze 0 (co kończy grę). 
Po każdym ruchu wyświetl podpowiedź („Za duża”, „Za mała”).

Przyklad:

Wejście: 50, 30, 42
Wyjście: Za duża, Za mała, Brawo, zgadłeś!


Wskazówka: Użyj do-while, aby zapewnić przynajmniej jedną próbę, i if do podpowiedzi.

Rozwiązanie:
*/

#include <iostream>
using namespace std;
int main() {
    int liczba = 42, guess;
    do {
        cout << "Podaj liczbę (0 aby wyjść): ";
        cin >> guess;
        if (guess == 0) break;
        if (guess > liczba) cout << "Za duża!" << endl;
        else if (guess < liczba) cout << "Za mała!" << endl;
        else cout << "Brawo, zgadłeś!" << endl;
    } while (guess != liczba);
    return 0;
}

/*
Zadanie 3: Tabliczka mnożenia

Opis: Napisz funkcję printMultiplicationTable(int n), która wyświetla tabliczkę mnożenia dla liczb od 1 do n za pomocą pętli zagnieżdżonych. Wywołaj funkcję w main() dla wartości podanej przez użytkownika. Użyj continue, aby pominąć wyświetlenie wyników dla parzystych wierszy.
Przyklad:

Wejście: n = 3
Wyjście:
text1 * 1 = 1
1 * 2 = 2
1 * 3 = 3
3 * 1 = 3
3 * 2 = 6
3 * 3 = 9



Wskazówka: Użyj pętli zagnieżdżonych i warunku if z continue dla parzystych i.

Rozwiązanie:
*/

#include <iostream>
using namespace std;

void printMultiplicationTable(int n) {
    for (int i = 1; i <= n; i++) {
        if (i % 2 == 0) continue; // Pomija parzyste wiersze
        for (int j = 1; j <= n; j++) {
            cout << i << " * " << j << " = " << i * j << endl;
        }
    }
}

int main() {
    int n;
    cout << "Podaj n: ";
    cin >> n;
    printMultiplicationTable(n);
    return 0;
}