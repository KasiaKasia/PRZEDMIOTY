#include <iostream>
int dodaj(int a, int b) {
    return a + b;
}

int main() {
    int wynik = dodaj(3, 4);
    std::cout << "Wynik: " << wynik << std::endl;
    return 0;
}