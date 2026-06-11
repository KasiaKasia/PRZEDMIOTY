'''
1. List (lista) – MUTOWALNA 

my_list = [1, 2, 3] 
 
my_list[0] = 100      	# zmiana elementu 
my_list.append(4)     	# dodanie elementu 
my_list.pop(0)			# usuwa 1 element i zwraca jego wartość
my_list.remove(3) 		# Usunięcie elementu po wartości 
del my_list[0]			# Usunięcie przez del 
my_list.clear()			# Wyczyszczenie całej listy 
 
 
print(my_list)  		 
 

2. Dict (słownik) – MUTOWALNY 

my_dict = {"a": 1, "b": 2} 
 
my_dict["a"] = 100     	    # zmiana wartości 
my_dict["c"] = 3       	    # dodanie nowego klucza 
my_dict.pop("a", None)	    # Usunięcie elementu (bezpieczne – jak discard) 
my_dict.pop("b")			# usunięcie po kluczu 
del my_dict["c"]			# Usunięcie przez del 
my_dict.clear()			    # Wyczyszczenie słownika 

 
print(my_dict)  		    

 

3. Set (zbiór) – MUTOWALNY 

my_set = {1, 2, 3} 
 
my_set.add(4) 
my_set.remove(2)			# usunięcie z błędem 
my_set.discard(3) 		    # usunięcie bez błędu 
my_set.pop() 			    # usuwa losowy element 
my_set.clear() 			    # wyczyszczenie 


print(my_set)  		 

 

4. Tuple (krotka) – NIEMUTOWALNA 

my_tuple = (1, 2, 3) 
 
# my_tuple[0] = 10 # BŁĄD TypeError: 'tuple' object does not support item assignment 

del my_tuple			    # Możesz usunąć tylko całą krotkę
# my_tuple.append(4)		# brak takiej metody 
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
