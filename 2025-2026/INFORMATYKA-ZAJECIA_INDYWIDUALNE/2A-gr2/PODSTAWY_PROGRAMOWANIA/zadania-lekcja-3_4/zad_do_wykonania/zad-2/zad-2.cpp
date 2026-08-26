#include <iostream>
using namespace std;
int main() {
    int liczba = 42, guess;
    do {
        cout << "Podaj liczbę (0 aby wyjść): ";
        
    } while (guess != liczba);
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


*/