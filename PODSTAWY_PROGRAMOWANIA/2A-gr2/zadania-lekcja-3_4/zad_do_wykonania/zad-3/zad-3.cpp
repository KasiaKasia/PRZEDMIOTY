#include <iostream>
using namespace std;

void printMultiplicationTable(int n) {
    
}

int main() {
    int n;
    cout << "Podaj n: ";
    cin >> n;
    printMultiplicationTable(n);
    return 0;
}

/*

Zadanie 3: Tabliczka mnożenia

Opis: Napisz funkcję printMultiplicationTable(int n), która wyświetla tabliczkę mnożenia dla liczb od 1 do n za pomocą pętli zagnieżdżonych. 
Wywołaj funkcję w main() dla wartości podanej przez użytkownika. Użyj continue, aby pominąć wyświetlenie wyników dla parzystych wierszy.


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
*/