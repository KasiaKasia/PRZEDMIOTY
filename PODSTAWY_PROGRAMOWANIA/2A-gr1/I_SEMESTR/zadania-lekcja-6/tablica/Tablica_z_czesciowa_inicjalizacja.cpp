#include <iostream>
#include <string>

int main()
{
    const int rozmiar_tablicy = 5;
    int calkowite[rozmiar_tablicy] = { 6,7,10 };
    for (int i = 0; i <= rozmiar_tablicy-1; i++) {
        std::cout << "calkowite[ " << i << " ] = " << calkowite[i] << "\n";
    }
     
    std::string  slowa[rozmiar_tablicy] = { "Kwiatek", "Motylek", "kotek" };
 
    for (int index = 0; index <= rozmiar_tablicy - 1; index++) {
        std::cout << "slowa[ " << index << " ] = " << slowa[index] << "\n";
    }

     
    int liczby[rozmiar_tablicy];

    for (int i = 0; i < rozmiar_tablicy; i++) {
        std::cout << "liczby[" << i << "] = " << liczby[i] << "\n";
    }
}

 