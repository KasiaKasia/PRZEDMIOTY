''' 

Zadanie 1. Dekorator wyświetlający komunikat

Treść zadania:

Napisz program w języku Python, który wykorzystuje dekorator do wyświetlenia komunikatu przed wykonaniem funkcji.

Wymagania:
1. Utwórz dekorator o nazwie powitanie(func).
2. Wewnątrz dekoratora zdefiniuj funkcję wrapper().
3. Funkcja wrapper() powinna:
   - wyświetlić komunikat "Rozpoczynam wykonywanie funkcji",
   - wywołać oryginalną funkcję func().
4. Utwórz funkcję przywitaj(), która wyświetla komunikat "Witaj w Pythonie!".
5. Zastosuj dekorator @powitanie do funkcji przywitaj().
6. Wywołaj funkcję przywitaj().

Oczekiwany wynik:
Rozpoczynam wykonywanie funkcji
Witaj w Pythonie!
'''
 




'''  

Zadanie 2. Dekorator funkcji dodającej liczby

Treść zadania:

Napisz program w języku Python, który wykorzystuje dekorator do wyświetlenia komunikatu przed wykonaniem dodawania dwóch liczb.

Wymagania:
1. Utwórz dekorator o nazwie loguj(func).
2. Wewnątrz dekoratora zdefiniuj funkcję wrapper(a, b).
3. Funkcja wrapper(a, b) powinna:
   - wyświetlić komunikat "Wykonuję dodawanie dwóch liczb",
   - wywołać oryginalną funkcję func(a, b),
   - zwrócić wynik dodawania.
4. Utwórz funkcję dodaj(a, b), która zwraca sumę dwóch liczb.
5. Zastosuj dekorator @loguj do funkcji dodaj(a, b).
6. Wywołaj funkcję dodaj(4, 6) i wyświetl otrzymany wynik za pomocą print().

Oczekiwany wynik:
Wykonuję dodawanie dwóch liczb
10
'''

