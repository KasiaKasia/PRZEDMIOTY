#include <iostream>
using namespace std;

void printStars(int rows) {
    for (int i = 1; i <= rows; i++) {
        for (int j = 1; j <= i; j++) {
            cout << "* ";
        }
        cout << endl;
    }
}

int main() {
    int n;
    cout << "Podaj liczbę wierszy: ";
    cin >> n;
    printStars(n);
    return 0;
}