#include <iostream>
using namespace std;

int main() {
    int a = 5;

    cout << "PREINkrementacja: " << ++a << endl;
    cout << "POSTINkrementacja: " << a++ << endl;
    cout << "Wartość po: " << a << endl;

    int b = 5;
    cout << "PREDEkrementacja: " << --b << endl; 
    cout << "POSTDEkrementacja: " << b-- << endl;
    cout << "Wartość po: " << b << endl;

    return 0;
}
