#include <iostream>

enum TypDanych { CALKOWITA, ULAMKOWA };

struct Dane {
    TypDanych typ;
    union {
        int calkowita;
        double ulamkowa;
    };
};

int main() {
    Dane y;
    y.typ = CALKOWITA;
    y.calkowita = 100;

    if (y.typ == CALKOWITA) {
        std::cout << "Wartość: " << y.calkowita << std::endl;
    }

    y.typ = ULAMKOWA;
    y.ulamkowa = 2.718;
    if (y.typ == ULAMKOWA) {
        std::cout << "Wartość: " << y.ulamkowa << std::endl;
    }

    return 0;
}