/*
Zadanie 1 – Struktury i unie

Treść :
Napisz program w C++, który przechowuje dane pracownika : 
imię, wiek i typ identyfikatora. Gdzie typ identyfikatora jest typu char  

Użytkownik może wybrać,  typ identyfikatora na podstawie którego poda numer pracownika lub kod pracownika. 
Numer pracownika (int num;) i kod pracownika ( char code[20];) to specjalny typ union.

Wykorzystaj typ struct i unię do przechowywania numeru i kodu pracownika. Program powinien wyświetlić wprowadzone dane dla typu struct oraz union.

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
