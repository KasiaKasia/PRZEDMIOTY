#include <iostream>
#include <string>

using namespace std; // dzięki temu nie musisz pisać std:: przed cout, string itp.

struct Osoba {
    string imie;
    int wiek;
};

enum Kolor { czerwony, zielony, niebieski };

void funkcjaVoid() {
    cout << "To jest funkcja void.\n";
}

int main() {
    // Typy podstawowe
    int a = 10;
    short b = 100;
    long c = 100000;
    long long d = 1000000000;
    unsigned int e = 20;
    float f = 3.14f;
    double g = 3.141592;
    long double h = 3.1415926535;
    char znak = 'A';
    bool flag = true;

    // Typy złożone
    int tablica[5] = { 1, 2, 3, 4, 5 };
    int* wskaznik = &a;
    int& referencja = a;
    string tekst = "Hello World!";
    Osoba osoba = { "Jan", 30 };
    Kolor kolor = zielony;

    // Wyświetlanie wartości
    cout << "int a = " << a << "\n";
    cout << "short b = " << b << "\n";
    cout << "long c = " << c << "\n";
    cout << "long long d = " << d << "\n";
    cout << "unsigned int e = " << e << "\n";
    cout << "float f = " << f << "\n";
    cout << "double g = " << g << "\n";
    cout << "long double h = " << h << "\n";
    cout << "char znak = " << znak << "\n";
    cout << "bool flag = " << flag << "\n";

    cout << "Tablica: ";
    for (int i = 0; i < 5; i++) cout << tablica[i] << " ";
    cout << "\n";

    cout << "Wskaznik na a: " << *wskaznik << "\n";
    cout << "Referencja do a: " << referencja << "\n";
    cout << "Tekst: " << tekst << "\n";
    cout << "Osoba: " << osoba.imie << ", wiek " << osoba.wiek << "\n";
    cout << "Kolor enum: " << kolor << "\n";

    funkcjaVoid();
}
