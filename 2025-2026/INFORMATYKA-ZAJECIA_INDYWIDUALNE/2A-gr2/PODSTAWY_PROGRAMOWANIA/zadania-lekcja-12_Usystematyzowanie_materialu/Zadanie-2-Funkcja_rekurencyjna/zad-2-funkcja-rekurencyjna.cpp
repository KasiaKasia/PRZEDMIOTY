#include <iostream>
using namespace std;

long long factorial(int n) {
    if (n <= 1)
        return 1; // warunek bazowy
    else
        return n * factorial(n - 1); // wywołanie rekurencyjne
}

int main() {
    int n;
    cout << "Podaj liczbe nieujemna: ";

     cin >> n;
	 if(n<0) {
		 cout << "podałeś liczbę ujemna: "; 
	 } else {
		 
		 cout << " " << factorial(n)<< endl;
	 }

    return 0;
}

/*
Zadanie 2 – Funkcja rekurencyjna

Treść :
Napisz program w C++, który oblicza silnię liczby n wprowadzanej przez użytkownika.

Wykorzystaj funkcję rekurencyjną. Program powinien sprawdzić, czy wprowadzona liczba jest nieujemna.
*/