#include <iostream>
#include <cstring> 
using namespace std;

union Variant {
    int number;
    char text[21];
};

int main() {
    Variant var;
    char input[21];
 

    return 0;
}
/*
Zadanie 3 – Tablice, łańcuchy znaków i wariant
 
Napisz program w C++, który wczytuje od użytkownika ciąg znaków (maks. 20 znaków) i sprawdza, czy ciąg zawiera tylko cyfry. 
Jeśli tak, zapisuje go jako liczbę w unii, w przeciwnym razie zapisuje jako tekst. Program następnie wyświetla wartość.
*/