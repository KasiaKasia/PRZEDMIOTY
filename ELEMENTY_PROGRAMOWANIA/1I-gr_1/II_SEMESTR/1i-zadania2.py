'''
1. List (lista) – MUTOWALNA 

my_list = [1, 2, 3] 
 
# ODCZYT
print(my_list[0])          # pierwszy element

# MODYFIKACJA
my_list[0] = 100           # zmiana elementu


# DODAWANIE
my_list.append(4)          # dodanie na koniec
my_list.insert(1, 50)      # wstawienie pod indeks 1
my_list.extend([5, 6])     # dodanie wielu elementów


# USUWANIE
my_list.pop(0)             # usuwa element o indeksie 0 i zwraca jego wartość
my_list.remove(3)          # usuwa pierwsze wystąpienie wartości 3
del my_list[0]             # usuwa element o indeksie 0
my_list.clear()            # usuwa wszystkie elementy
 

# WYSZUKIWANIE
my_list.index(2)           # zwraca indeks pierwszego wystąpienia 2
my_list.count(2)           # liczy ile razy występuje 2
2 in my_list               # sprawdza czy 2 istnieje w liście

# SORTOWANIE I ODWRACANIE
my_list.sort()             # sortowanie rosnąco
my_list.sort(reverse=True) # sortowanie malejąco
my_list.reverse()          # odwrócenie kolejności


# PRZYDATNE FUNKCJE
len(my_list)               # liczba elementów
min(my_list)               # najmniejszy element
max(my_list)               # największy element
sum(my_list)               # suma elementów
sorted(my_list)            # zwraca nową posortowaną listę
 
print(my_list)  		 
 

2. Dict (słownik) – MUTOWALNY 

my_dict = {
    "imie": "Jan",
    "wiek": 30
}

# ODCZYT
print(my_dict["imie"])         # odczyt wartości po kluczu
print(my_dict.get("wiek"))     # odczyt bez ryzyka KeyError

 
# MODYFIKACJA
my_dict["wiek"] = 31           # zmiana istniejącej wartości


# DODAWANIE
my_dict["miasto"] = "Warszawa" # dodanie nowej pary klucz-wartość

my_dict.update({
    "email": "jan@example.com",
    "telefon": "123456789"
})                             # dodanie wielu wartości
# DODANIE DOMYŚLNEJ WARTOŚCI
my_dict.setdefault("kraj", "Polska")
# jeśli klucz nie istnieje → zostanie dodany


# USUWANIE
my_dict.pop("wiek")            # usuwa klucz i zwraca jego wartość
my_dict.pop("wiek", None)	   # Usunięcie elementu (bezpieczne – jak discard) 
del my_dict["imie"]            # usuwa element po kluczu
my_dict.clear()                # usuwa wszystkie elementy 


# USUWANIE OSTATNIEGO ELEMENTU
my_dict.popitem()              # usuwa i zwraca ostatnią parę


# WYSZUKIWANIE
"miasto" in my_dict            # sprawdza czy klucz istnieje
"email" not in my_dict         # sprawdza czy klucz nie istnieje

# POBIERANIE DANYCH
my_dict.keys()                 # wszystkie klucze
my_dict.values()               # wszystkie wartości
my_dict.items()                # wszystkie pary (klucz, wartość)

# KOPIOWANIE
new_dict = my_dict.copy()      # płytka kopia słownika



# PRZYDATNE FUNKCJE
len(my_dict)                   # liczba elementów
sorted(my_dict)                # posortowane klucze

 
print(my_dict)  		    

 

3. Set (zbiór) – MUTOWALNY 

my_set = {1, 2, 3} 
 
# ODCZYT
print(1 in my_set)          # sprawdza czy element istnieje
print(4 not in my_set)      # sprawdza czy element nie istnieje


# DODAWANIE
my_set.add(4)               # dodanie jednego elementu
my_set.update([5, 6])       # dodanie wielu elementów

 
# USUWANIE
my_set.remove(3)            # usuwa element (błąd jeśli nie istnieje)
my_set.discard(3)           # usuwa element (bez błędu jeśli nie istnieje)
my_set.pop()                # usuwa i zwraca losowy element
my_set.clear()              # usuwa wszystkie elementy



# KOPIOWANIE
new_set = my_set.copy()     # płytka kopia zbioru

# OPERACJE NA ZBIORACH
my_set.union({4, 5})        # suma zbiorów
my_set.intersection({2, 3}) # część wspólna
my_set.difference({2})      # różnica zbiorów
my_set.symmetric_difference({2, 4})  # różnica symetryczna

# SPRAWDZANIE RELACJI
my_set.issubset({1, 2, 3, 4})      # czy jest podzbiorem
my_set.issuperset({1, 2})          # czy jest nadzbiorem
my_set.isdisjoint({10, 20})        # czy nie mają wspólnych elementów

# MODYFIKACJA ZBIORÓW
my_set.intersection_update({2, 3})
my_set.difference_update({2})
my_set.symmetric_difference_update({2, 4})

# PRZYDATNE FUNKCJE
len(my_set)                # liczba elementów
min(my_set)                # najmniejszy element
max(my_set)                # największy element
sum(my_set)                # suma elementów
sorted(my_set)             # zwraca posortowaną listę


print(my_set)  		 

 

4. Tuple (krotka) – NIEMUTOWALNA (immutable)

my_tuple = (1, 2, 3) 


# ODCZYT
print(my_tuple[0])         # pierwszy element
print(my_tuple[-1])        # ostatni element


# WYSZUKIWANIE
my_tuple.index(2)          # indeks pierwszego wystąpienia 2
my_tuple.count(2)          # liczba wystąpień 2

# SPRAWDZANIE
2 in my_tuple              # czy element istnieje
5 not in my_tuple          # czy element nie istnieje

# WYCINKI (SLICING)
my_tuple[1:3]              # (2, 3)
my_tuple[:2]               # (1, 2)
my_tuple[1:]               # (2, 3, 2)

# ŁĄCZENIE
new_tuple = my_tuple + (4, 5)

# POWIELANIE
new_tuple = my_tuple * 2

# DODAWANIE ELEMENTÓW
# my_tuple[0] = 10 # BŁĄD TypeError: 'tuple' object does not support item assignment 
# my_tuple.append(4)		# brak takiej metody 

# USUWANIE
del my_tuple			    # Możesz usunąć tylko całą krotkę

'''

# ================== ZADANIA ======================
# === LISTA ===
'''Zadanie 1

Zadanie 1 — Lista liczb

Masz listę:
numbers = [7, 2, 9, 4, 1]

Wykonaj:

    - dodaj liczbę 5
    - usuń liczbę 9
    - posortuj listę rosnąco
    - wyświetl wynik
'''

'''Zadanie 2 
products = ["mleko", "chleb", "ser", "jajka"]

Wykonaj:

    dodaj "masło"
    - usuń "ser"
    - posortuj alfabetycznie
    - wyświetl listę
'''

# === SŁOWNIK ===
'''Zadanie 3
Masz słownik:
grades = {
    "Jan": 3,
    "Anna": 5,
    "Piotr": 4
}

Wykonaj:

    - dodaj nowego ucznia "Ola": 5
    - usuń "Jan"
    - posortuj słownik po wartościach (ocenach) rosnąco. Podpowiedź: użyj sorted(), dict(), key=lambda x: x[1] 
    - wyświetl wynik
'''

'''Zadanie 4 
phonebook = {
    "Adam": "123",
    "Ewa": "456",
    "Kuba": "789"
}

Wykonaj:

    - dodaj nowy kontakt "Zosia": "111"
    - usuń "Ewa"
    - posortuj alfabetycznie po kluczach (imionach) Podpowiedź: użyj sorted() i dict()
    - wyświetl wynik
'''
# === ZBIÓR ===
'''Zadanie 5 
Masz zbiór:
a = {5, 1, 9, 3}

Wykonaj:

    - dodaj 7
    - usuń 1
    - „posortuj” zbiór (czyli zamień na listę i posortuj rosnąco)
    - wyświetl wynik
'''
'''Zadanie 6 
letters = {"d", "a", "c", "b"}

Wykonaj:

    - dodaj "e"
    - usuń "c"
    - zamień na listę i posortuj alfabetycznie
    - wyświetl wynik
'''

# === KROTKA ===
'''Zadanie 7
Masz krotkę:
t = (4, 2, 8, 1)

Wykonaj:

   - zamień na listę
   - dodaj 5
   - usuń 2
   - posortuj rosnąco
   - zamień z powrotem na krotkę
'''

'''Zadanie 8 
names = ("Ola", "Jan", "Anna")

Wykonaj:

   - zamień na listę
   - dodaj "Kuba"
   - usuń "Jan"
   - posortuj alfabetycznie
   - zamień z powrotem na krotkę
'''
