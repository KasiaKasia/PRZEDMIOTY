#include <iostream>
#include <vector>
#include <list>
#include <deque>

int main() {
 
    int liczby[5] = { 10, 20, 30, 40, 50 };
     
    liczby[2] = 35;  
     
    for (int i = 0; i < 5; i++) {
        std::cout << "Element " << i << ": " << liczby[i] << std::endl;
    }
 
    int suma = 0;
    for (int i = 0; i < 5; i++) {
        suma += liczby[i];
    }
    std::cout << "Suma: " << suma << std::endl; // Wypisze: Suma: 185

	// DODAWANIE i USUWANIE ELEMENTÓW - vector
    std::cout << "DODAWANIE i USUWANIE ELEMENTÓW \n";
    std::vector<int> liczby_vector = { 10, 20, 30, 40, 50 };
    liczby_vector.push_back(60);  
    liczby_vector.insert(liczby_vector.begin() + 2, 1500);  
    liczby_vector.insert(liczby_vector.begin(), 3, 99);

    std::cout << "Po dodaniu :";
    for (int i1 : liczby_vector) std::cout << i1 << " ";
    std::cout  << "\n";



    liczby_vector.pop_back();          
    liczby_vector.erase(liczby_vector.begin() + 1);  

    std::cout << "Po usunięciu: ";
    for (int i2 : liczby_vector) std::cout << i2 << " ";
    std::cout << "\n";



    // DODAWANIE i USUWANIE ELEMENTÓW - list
    std::list<int> liczby_list = { 10, 20, 30, 40, 50 };

 
    liczby_list.push_back(60); 
    liczby_list.push_front(5);

    auto itl = liczby_list.begin();
    std::advance(itl, 2);
    liczby_list.insert(itl, 15);

    std::cout << "Po dodaniu: ";
    for (int i3 : liczby_list) std::cout << i3 << " ";
    std::cout << "\n";

    liczby_list.pop_back();              
    liczby_list.pop_front();              
    itl = liczby_list.begin();
    std::advance(itl, 2);
    liczby_list.erase(itl);

    std::cout << "Po usunięciu: ";
    for (int i4 : liczby_list) std::cout << i4 << " ";
    std::cout << "\n";



    // DODAWANIE i USUWANIE ELEMENTÓW - deque
 
    std::deque<int> liczby_deque = { 10, 20, 30, 40, 50 };

       
    liczby_deque.push_back(60);
    liczby_deque.push_front(5);

    std::cout << "Po dodaniu: ";
    for (int i5 : liczby_deque) std::cout << i5 << " ";
    std::cout << "\n";
         
    liczby_deque.pop_back();
    liczby_deque.pop_front();

    std::cout << "Po usunięciu: ";
    for (int i6 : liczby_deque) std::cout << i6 << " ";
    std::cout << "\n";
         
    auto it2 = liczby_deque.begin();
    std::advance(it2, 2);  
    it2 = liczby_deque.insert(it2, 99);  
    liczby_deque.erase(it2);  

    std::cout << "Po wstawianiu i usuwaniu w środku: ";
    for (int i7 : liczby_deque) std::cout << i7 << " ";
    std::cout << "\n";


    return 0;
}