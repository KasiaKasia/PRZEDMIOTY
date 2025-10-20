#include <iostream>

void zwieksz(int x) {
    x++;
    std::cout << "W funkcji: " << x << std::endl;
}

int main() {
    int a = 5;
    zwieksz(a);
    std::cout << "Poza funkcją: " << a << std::endl; // a nadal wynosi 5
    return 0;
}