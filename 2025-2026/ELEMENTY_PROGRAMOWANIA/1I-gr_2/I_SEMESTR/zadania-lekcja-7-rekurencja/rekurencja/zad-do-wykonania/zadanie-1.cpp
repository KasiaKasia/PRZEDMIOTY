#include <iostream>


unsigned long long fibonacci(int n) {
    
    cout << "Wywołanie: n=" << n << endl;
     
    // .. 
    
}

int main() {
    int n;
    cout << "Podaj numer półki (n): ";
    cin >> n;
	
    // .. 
    return 0;
}

/*
Zadanie 1 – Zadanie: Rekurencyjne obliczanie n-tego elementu ciągu Fibonacciego

Opis zadania
W bibliotece chcesz ponumerować półki z książkami w sposób zgodny z ciągiem Fibonacciego, gdzie każda półka ma numer będący kolejnym elementem ciągu. Ciąg Fibonacciego definiuje się następująco:

- F(0) = 0
- F(1) = 1
- F(n) = F(n-1) + F(n-2)  dla   n >= 2  

Twoim zadaniem jest napisać program w C++, który:

1. Używa funkcji rekurencyjnej do obliczenia n-tego elementu ciągu Fibonacciego.
2. Przyjmuje od użytkownika liczbę n (numer półki) i wyświetla odpowiedni numer Fibonacciego.
3. Wyświetla w konsoli, jakie wywołania rekurencyjne są wykonywane, aby uczniowie mogli zobaczyć, jak działa stos wywołań.

Przykład:

Dla n = 5, ciąg Fibonacciego to: 0, 1, 1, 2, 3, 5 $, więc F(5) = 5.
Program powinien wyświetlić:

	Podaj numer półki (n): 5
	Wywołanie: n=5
	Wywołanie: n=4
	Wywołanie: n=3
	Wywołanie: n=2
	Wywołanie: n=1
	Wywołanie: n=0
	Wywołanie: n=2
	Wywołanie: n=1
	Numer półki 5: 5


Wskazówki: 

1. Warunek bazowy: Dla  n = 0  ma zwróć 0, dla n = 1 ma zwróć 1.
2. Krok rekurencyjny: Dla n >= 2, oblicz F(n) = F(n-1) + F(n-2).
3. Stos wywołań: Każde wywołanie funkcji fibonacci(n) dodaje ramkę na stosie. Śledź, jak funkcja "zwija" stos po osiągnięciu warunku bazowego.
4. Uwaga: Ciąg Fibonacciego rośnie szybko, więc dla dużych n (np. n > 40 ) użyj typu unsigned long long, ale bądź świadom ograniczeń wydajności rekurencji 
	 

*/