/*
Zadanie 1 – Struktury i unie

Treść :
Napisz program w C++, który przechowuje dane pracownika : 
imię, wiek i typ identyfikatora.

Użytkownik może wybrać, czy identyfikator będzie numerem pracownika(int) czy kodem literowym(char[10]).

Wykorzystaj strukturę i unię do przechowywania identyfikatora.Program powinien wyświetlić wprowadzone dane.

*/

#include <iostream>
#include <cstring>
    using namespace std;

union ID {
 //
};

struct Employee {
    //
};

int main() {
    Employee emp;
    cout << "Podaj imie pracownika: ";
    cin.getline(emp.name, 30);
    

    if (emp.idType == 'n') {
        // 
    }
	// 

    return 0;
}
