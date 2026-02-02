#include <iostream>
using namespace std;

void pokaz(int x) {
    cout << "Liczba całkowita: " << x << endl;
}

void pokaz(double x) {
    cout << "Liczba zmiennoprzecinkowa: " << x << endl;
}

int main() {
    pokaz(10);     // wywoła wersję dla int
    pokaz(3.14);   // wywoła wersję dla double
    return 0;
}
