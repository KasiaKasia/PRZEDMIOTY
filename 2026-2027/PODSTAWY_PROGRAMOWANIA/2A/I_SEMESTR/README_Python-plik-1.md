# Podstawy Python

**Python** jest **językiem interpretowanym**, ale **jego kod jest najpierw kompilowany do bytecode, który następnie wykonuje interpreter Pythona**.

**Bytecode** to pośrednia postać kodu Pythona. Nie jest to już zwykły tekst z pliku .py, ale też nie jest to bezpośrednio kod maszynowy procesora.

Schemat:
```text
kod Python
   ↓
bytecode
   ↓
Python Virtual Machine
   ↓
wykonanie programu
```
Przykład kodu:

a = 2
b = 3
print(a + b)

**Python najpierw przekształca go do bytecode**, czyli zestawu prostszych **instrukcji przeznaczonych dla maszyny wirtualnej Pythona**.

**Python Virtual Machine (PVM)** to część interpretera Pythona, która wykonuje bytecode.


## Uruchomienie skryptu

Wykonaj polecenie, w katalogu skryptu Python:
`python nazwa_skrypu.py`

## **Podstawowe typy komentarzy**

 🔹Komentarz jednowierszowy - zaczyna się od # 

```Python
# To jest komentarz jednowierszowy 
x = 10  # To też jest komentarz - po kodzie 
```
  
 🔹Komentarz wielowierszowy  
Python nie posiada osobnej składni komentarza wielowierszowego.
Jeżeli chcemy zapisać komentarz w kilku liniach, każdą linię poprzedzamy znakiem #.

```python
# To jest komentarz
# zapisany w kilku
# liniach.
```

## **Typy danych**

### **1. Typy numeryczne**

**int (liczby całkowite)**

```Python

age = 25
count = -10
large = 10**100  

# Systemy liczbowe
binary = 0b1010      # 10
octal = 0o12         # 10
hexadecimal = 0xA    # 10

# Przykłady zastosowań
user_id = 12345
items_in_cart = 3
page_number = 1
price_in_cents = 1999
```

**float (liczby zmiennoprzecinkowe)**

```Python

price = 19.99
temperature = -5.5
pi = 3.14159265359

# Notacja naukowa
avogadro = 6.022e23  # 6.022 × 10²³
plank = 6.626e-34    # 6.626 × 10⁻³⁴

# Przykłady zastosowań
distance = 42.195  # maraton w km
probability = 0.95
interest_rate = 0.045
weight = 72.5  # kg

# Uwaga na błędy zaokrągleń!
print(0.1 + 0.2)  # 0.30000000000000004
# Rozwiązanie: użyj decimal.Decimal dla pieniędzy
```

**complex (liczby zespolone)**
```Python
# Forma: liczba + liczba*j
z1 = 2 + 3j
z2 = complex(4, 5)

# Operacje
print(z1.real)     # 2.0 (część rzeczywista)
print(z1.imag)     # 3.0 (część urojona)
print(z1.conjugate())  # (2-3j)

# Przykłady zastosowań (mniej typowe w codziennym programowaniu)
# Fizyka, fizyka kwantowa, elektronika, przetwarzanie sygnałów, inżynieria
impedance = 50 + 20j  # Ω

impedancja = 50 + 100j  # zamiast i używa się j (zgodnie z konwencją inż elektryków).
```
### **2. Typy tekstowe**
**str (string - łańcuch znaków)**

```Python
# Różne sposoby tworzenia
single = 'Python'
double = "Python"
multiline = """To jest
wielolinijkowy
string"""
triple_single = '''Również działa'''

# F-string (Python 3.6+)
name = "Anna"
age = 30
text = f"Mam na imię {name} i mam {age} lat"

# Operacje na stringach
s = "Hello, World!"
print(s.upper())     # "HELLO, WORLD!"
print(s.lower())     # "hello, world!"
print(s.split(','))  # ['Hello', ' World!']
print(s.replace('World', 'Python'))  # "Hello, Python!"

imie = "Anna"
powitanie = "Cześć, " + imie + "!"  # konkatenacja (łączenie) 
print(powitanie)  # Cześć, Anna! 
 
powtorzenie = "git" * 3  # powielanie 
print(powtorzenie)  # gitgitgit


# Slices (wycinanie)
text = "Python Programming"
print(text[0:6])    # "Python"
print(text[7:])     # "Programming"
print(text[:4])     # "Pyth"
print(text[::-1])   # "gnimmargorP nohtyP" (odwrócenie)

# Przykłady zastosowań
name = "Jan Kowalski"
email = "jan@example.com"
message = f"Witaj {name}!"
path = "/home/user/documents/file.txt"
html = "<div>Hello</div>"
sql = "SELECT * FROM users WHERE id = 123"

```

**METODY STRINGÓW** 

**split()** - dzielenie stringa na listę 
```Python
# Podstawowe split() 
zdanie = "Python jest świetny" 
slowa = zdanie.split() 
print(slowa)  # ['Python', 'jest', 'świetny'] 
 
# Split z własnym separatorem 
data = "2024-01-15" 
czesc_daty = data.split("-") 
print(czesc_daty)  # ['2024', '01', '15'] 
 
# Split z limitem podziałów 
tekst = "jabłko,gruszka,banan,wiśnia" 
owoce = tekst.split(",", 2) 
print(owoce)  # ['jabłko', 'gruszka', 'banan,wiśnia'] 
 
# Praktyczny przykład - parsowanie danych 
dane_logowania = "user:haslo123" 
login, haslo = dane_logowania.split(":") 
print(f"Login: {login}, Hasło: {haslo}") 
```
 

**join()** - łączenie listy w string 

```Python
# Podstawowe join() 
owoce = ['jabłko', 'gruszka', 'banan'] 
tekst = ", ".join(owoce) 
print(tekst)  # jabłko, gruszka, banan 
 
# Różne separatory 
slowa = ['Python', 'jest', 'fajny'] 
print(" ".join(slowa))   # Python jest fajny 
print("-".join(slowa))   # Python-jest-fajny 
print("".join(slowa))    # Pythonjestfajny 
 
# Łączenie z transformacją 
liczby = [1, 2, 3, 4, 5] 
# Najpierw musimy zamienić liczby na stringi 
tekst = ", ".join(str(x) for x in liczby) 
print(tekst)  # 1, 2, 3, 4, 5 
 
# Praktyczny przykład - tworzenie ścieżki 
katalogi = ['home', 'user', 'dokumenty'] 
sciezka = '/'.join(katalogi) 
print(sciezka)  # home/user/dokumenty 
```
 

**replace()** - zamiana fragmentów stringa 

```Python
tekst = "Lubię koty. Koty są fajne." 
nowy_tekst = tekst.replace("koty", "psy") 
print(nowy_tekst)  
 
tekst = "Lubię koty. Koty są fajne." 
nowy_tekst = tekst.replace("koty", "psy").replace("Koty", "Psy") 
print(nowy_tekst) 
 
tekst = "jabłko jabłko jabłko" 
print(tekst.replace("jabłko", "gruszka", 2))  
tekst = "Hello, World!!!" 
czysty = tekst.replace(",", "").replace("!", "") 
print(czysty) 
 
numer_telefonu = "+48 123-456-789" 
czysty_numer = numer_telefonu.replace("+48 ", "").replace("-", "") 
print(czysty_numer)
```

### **3. Typy sekwencyjne (kolekcje)**
**list (lista - mutable)**

```Python
# Tworzenie
numbers = [1, 2, 3, 4, 5]
mixed = [1, "text", 3.14, True]
nested = [[1, 2], [3, 4]]  # lista list

# Operacje
fruits = ["apple", "banana", "orange"]
fruits.append("grape")      # Dodanie na koniec
fruits.insert(1, "kiwi")    # Wstawienie na pozycję
fruits.remove("banana")     # Usunięcie elementu
popped = fruits.pop()       # Usunięcie i zwrócenie ostatniego

# List comprehension (ważne!)
squares = [x**2 for x in range(10)]  # [0, 1, 4, 9, 16, 25, 36, 49, 64, 81]
even_squares = [x**2 for x in range(10) if x % 2 == 0]

# Przykłady zastosowań
shopping_list = ["mleko", "chleb", "jajka"]
scores = [85, 92, 78, 90, 88]
queue = []  # Kolejka FIFO
stack = []  # Stos LIFO
results = []  # Zbieranie wyników obliczeń
```

**tuple (krotka - immutable)**
```Python
# Tworzenie
point = (10, 20)
single_item = (5,)  # UWAGA: przecinek jest ważny!
empty = ()
coordinates = (x, y, z)

# Auto-packowanie (automatyczne tworzenie krotki)
a = 1, 2, 3  # to taka sama krotka

# Unpackowanie (rozpakowywanie)
x, y = (10, 20)
name, age, city = ("Anna", 25, "Warszawa")

# Przykłady zastosowań (gdy dane nie powinny się zmieniać)
# Stałe konfiguracyjne
RGB_RED = (255, 0, 0)
SCREEN_SIZE = (1920, 1080)

# Zwracanie wielu wartości z funkcji
def get_user():
    return ("Jan", "Kowalski", 30)
first, last, age = get_user()

# Klucze słownika (muszą być immutable)
locations = { (50.1, 19.9): "Kraków" }  # tuple współrzędnych jako klucz
```


### **4. Typy odwzorowujące (mapowania)**
**dict (słownik - mapping)**

```Python

# Tworzenie
user = {
    "name": "Anna",
    "age": 30,
    "email": "anna@example.com"
}

# dict() konstruktor
person = dict(name="Jan", age=25)

# Z krotek
pairs = [("a", 1), ("b", 2)]
d = dict(pairs)

# Dict comprehension
squares = {x: x**2 for x in range(5)}  # {0: 0, 1: 1, 2: 4, 3: 9, 4: 16}

# Operacje
user["phone"] = "123-456-789"  # Dodanie
user["age"] = 31               # Modyfikacja
del user["email"]              # Usunięcie

# Bezpieczne pobieranie
age = user.get("age", 0)       # 31 (domyślnie 0 jeśli nie ma)
city = user.get("city", "Nieznane")  # "Nieznane"

# Iteracja
for key in user:
    print(f"{key}: {user[key]}")

for key, value in user.items():
    print(f"{key}: {value}")

# Przykłady zastosowań
config = {
    "host": "localhost",
    "port": 8080,
    "debug": True
}

cache = {}
user_sessions = {}  # session_id -> user_data
counters = {}  # element -> liczba wystąpień
```


### **5. Typy zbiorów**
**set (zbiór - mutable, unikalne elementy)**

```Python
# Tworzenie
colors = {"red", "green", "blue"}
empty_set = set()  # {} to słownik!

# Z listy (usuwanie duplikatów)
numbers = [1, 2, 2, 3, 3, 3, 4]
unique = set(numbers)  # {1, 2, 3, 4}

# Set comprehension
even_set = {x for x in range(10) if x % 2 == 0}  # {0, 2, 4, 6, 8}

# Operacje zbiorów
A = {1, 2, 3, 4}
B = {3, 4, 5, 6}

print(A | B)  # Unia: {1, 2, 3, 4, 5, 6}
print(A & B)  # Przecięcie: {3, 4}
print(A - B)  # Różnica: {1, 2}
print(A ^ B)  # Symetryczna różnica: {1, 2, 5, 6}

# Sprawdzanie członkostwa (bardzo szybkie!)
if "red" in colors:
    print("Mamy czerwony")

# Przykłady zastosowań
unique_visitors = set()  # Unikalne IP
tags = {"python", "programming", "tutorial"}
stop_words = {"a", "an", "the", "and", "or"}

# Znajdowanie wspólnych elementów
likes_alice = {"chess", "music", "reading"}
likes_bob = {"music", "sports", "travel"}
common_interests = likes_alice & likes_bob  # {"music"}
# Zastosowania: usuwanie duplikatów, operacje matematyczne na zbiorach
```

**frozenset (zbiór immutable)**

```Python
# Nie można zmieniać po utworzeniu
fs = frozenset([1, 2, 3, 4])

# Może być używany jako klucz słownika
config_key = frozenset(["option1", "option2"])
settings = {config_key: "value"}

# Przykłady zastosowań
# Klucze wymagające niezmienności
valid_statuses = frozenset(["active", "pending", "closed"])
cache_keys = set()  # Przechowuje frozensety jako klucze cache
```

### **6. Typy logiczne**
**bool (Boolean)**

```Python
# Tylko dwie wartości
is_valid = True
is_error = False

# Wszystkie wartości mają wartość logiczną!
print(bool(0))      # False
print(bool(1))      # True
print(bool(""))     # False
print(bool("abc"))  # True
print(bool([]))     # False
print(bool([1]))    # True
print(bool(None))   # False

# Operatory logiczne
age = 18
has_permission = True
can_enter = age >= 18 and has_permission  # True

# Short-circuit evaluation
result = calculate() or default_value  # Jeśli calculate() zwróci False, użyj default

# Przykłady zastosowań
is_authenticated = False
is_admin = True
is_active = user.status == "active"

# Flagi konfiguracji
DEBUG_MODE = True
ENABLE_CACHE = False

# Warunki
if is_valid and not is_error:
    process()
```    

### **7. Typy binarne**
**bytes (immutable) i bytearray (mutable)**

```Python
# bytes - immutable (niemutowalny)
b = bytes([65, 66, 67])  
print(b)                 # b'ABC'
b = b"Hello"             # Literał
b = "Hello".encode('utf-8')

# bytearray - mutable (mutowalny)
ba = bytearray([65, 66, 67])
ba[0] = 68  # Modyfikacja

# Przykłady zastosowań
# Praca z plikami binarnymi
with open("image.jpg", "rb") as f:
    data = f.read()  # bytes

# Sieci/API
response = b'{"status": "ok"}'
json_data = response.decode('utf-8')

# Szyfrowanie/haszowanie
import hashlib
hash_object = hashlib.sha256(b"secret data")
```

**memoryview**

```Python
# Bez kopiowania danych
data = bytearray(b"Hello World")
mv = memoryview(data)
print(data.decode())
print(mv[0])      # 72 (Litera H ma kod ASCII 72)
mv[0] = 104       # Zmiana na małą litere: 'h'
print(data.decode())
# Przykłady zastosowań (optymalizacja)
# Duże bufory danych, manipulacja bez kopiowania
```

### **8. Typy None**
**NoneType**

```Python
# Brak wartości, null w innych językach
result = None

# Sprawdzanie
if result is None:  # Używaj 'is', nie '=='
    print("Brak wyniku")

# Wartość domyślna funkcji
def find_user(id):
    if id == 0:
        return None  # Nie znaleziono
    return {"id": id, "name": "Jan"}

# Przykłady zastosowań
optional_value = None  # Wartość może być lub nie
pending_result = None  # Do czasu obliczeń
cache = None  # Inicjalizacja później
```

### **9. Typy specjalne**
**Typy z modułu typing (Python 3.5+)**

```Python
from typing import List, Dict, Optional, Union, Tuple, Any

# Adnotacje typów (type hints)
def process_items(items: List[str]) -> Dict[str, int]:
    result = {}
    for item in items:
        result[item] = len(item)
    return result

def get_user(id: int) -> Optional[Dict[str, Any]]: # wartość może być podanego typu albo None.
    if id == 0:
        return None
    return {"id": id, "name": "Jan"}

def process(value: Union[int, str, float]) -> str:
    return str(value)

print(process_items(["Jan", "Anna", "Adam"]))
print(get_user(0))

process(10)       # int
process("Jan")    # str
process(3.14)     # float

# Własne typy
UserId = int
ProductId = int

def get_user(user_id: UserId) -> Dict:
    pass
```    

**range (zakres - immutable)**

**range() nie tworzy listy**
```Python
x = range(5)
print(x) # Wynik: range(0, 5) To oznacza zakres liczb: 0, 1, 2, 3, 4
```
Python przechowuje tylko informację:

start = 0
stop - 1 = 5
step = 1

Dlatego: `print(type(x))` da: `<class 'range'>`

```Python
# Tworzenie
r1 = range(5)         # 0, 1, 2, 3, 4
r2 = range(2, 8)      # 2, 3, 4, 5, 6, 7
r3 = range(1, 10, 2)  # 1, 3, 5, 7, 9 (krok 2)
r4 = range(10, 0, -1) # 10, 9, 8, ..., 1

# Przykłady zastosowań (oszczędność pamięci)
# Nie tworzy całej listy w pamięci!
for i in range(1_000_000):
    if i > 100:
        break

# Indeksowanie
my_list = [1, 2, 3] 
indices = range(len(my_list))

# Pętle z licznikiem
for i in range(5):
    print(f"Iteracja {i}")
 
```


## Podstawowe użycie range()
*range(start, stop, step)* - służy do generowania ciągu liczb.

oznacza:

- Zacznij od start,
- dodawaj step,
- zatrzymaj się przed stop.

```Python
print("range(5):")
for i in range(5):
    print(i) # 0, 1, 2, 3, 4

# range(start, stop) - od start do stop-1
print("\nrange(2, 7):")
for i in range(2, 7):
    print(i) # 2, 3, 4, 5, 6

# range(start, stop, step) - z krokiem
print("\nrange(0, 10, 2):")
for i in range(0, 10, 2):
    print(i) # 0, 2, 4, 6, 8

# Ujemny krok - liczenie wstecz
print("\nrange(10, 0, -2):")
for i in range(10, 0, -2):
    print(i) # 10, 8, 6, 4, 2
``` 





### **Klasy (typ zdefiniowany przez użytkownika)**

```Python
class Person:
    def __init__(self, name: str, age: int):
        self.name = name
        self.age = age
    
    def greet(self) -> str:
        return f"Hello, I'm {self.name}"


    def process(self):
        print(f"Przetwarzam dane osoby: {self.name}, wiek: {self.age}")

# Typowanie kacze (duck typing)
# W Pythonie duck typing oznacza, że zwykle mniej ważne jest, jakiego typu jest obiekt, a ważniejsze jest, czy ma potrzebne metody albo atrybuty.
def process(obj):
    if hasattr(obj, 'process'):
        obj.process()
    # Nie sprawdzamy typu, tylko interfejs


person = Person("Anna", 30)


# Wywołanie zwykłej metody
print(person.greet())


# Przekazanie obiektu do funkcji process()
process(person)

```

### **Konwersja i sprawdzanie typów**

```Python

# KONWERSJA TYPÓW

wiek = int("18")          # str -> int
cena = float("19.99")     # str -> float
tekst = str(123)          # int -> str
wartosc = bool(1)         # int -> bool

print(wiek)       # 18
print(cena)       # 19.99
print(tekst)      # 123
print(wartosc)    # True


# SPRAWDZANIE TYPÓW
# type() - zwraca typ obiektu

print(type(42))          # <class 'int'>
print(type(3.14))        # <class 'float'>
print(type("Python"))    # <class 'str'>
print(type(True))        # <class 'bool'>
print(type([1, 2, 3]))   # <class 'list'>


# isinstance() - sprawdza, czy obiekt należy do określonego typu lub typów
liczba = 42

print(isinstance(liczba, int))    # True
print(isinstance(liczba, float))  # False

tekst = "Python"

print(isinstance(tekst, str))     # True

# SPRAWDZANIE kilku typów: 
wartosc = 10

print(isinstance(wartosc, (int, float)))  # True
```    


## **Mutowalność (mutable) vs niemutowalność (immutable)**

| Typ   | Mutowalność  | Czy można zmienić po utworzeniu?                        |
|:------|:------------:|:--------------------------------------------------------|
| list  | mutowalna    | ✅ można dodawać, usuwać, zmieniać elementy             | 
| dict  | mutowalny    | ✅ można dodawać, usuwać, zmieniać pary klucz-wartość   |
| set   | mutowalny    | ✅ można dodawać, usuwać elementy                       |
| tuple | niemutowalna | ❌ NIE można zmienić! Jest jak "zamrożona lista"        |

**1. List (lista) – MUTOWALNA**

```Python
my_list = [1, 2, 3] 
 
my_list[0] = 100      	# zmiana elementu 
my_list.append(4)     	# dodanie elementu 
my_list.remove(2)       # Usunięcie elementu
popped = fruits.pop()  
print(my_list)  		# [100, 2, 3, 4] 
```
 

**2. Dict (słownik) – MUTOWALNY**

```Python
my_dict = {"a": 1, "b": 2} 
 
my_dict["a"] = 100     	# zmiana wartości 
my_dict["c"] = 3       	# dodanie nowego klucza 
 
print(my_dict)  		# {'a': 100, 'b': 2, 'c': 3} 
del my_dict["a"]        # Usunięcie
```
 

**3. Set (zbiór) – MUTOWALNY**

```Python
my_set = {1, 2, 3} 
 
my_set.add(4) 
my_set.remove(2) 
my_set.update({7, 8})      
print(my_set)  		# {1, 3, 4, 7, 8}
```
 

**4. Tuple (krotka) – NIEMUTOWALNA**

```Python
my_tuple = (1, 2, 3) 
 
# my_tuple[0] = 100   	# ❌ BŁĄD 
```
 

**Ważny przypadek (tuple z listą w środku)**
```Python
my_tuple = (1, [2, 3]) 
 
my_tuple[1].append(4) 
 
print(my_tuple)  		# (1, [2, 3, 4]) 
```

Krotka jest niemutowalna, ale obiekt w środku (lista) już nie. 

## METODY LIST, TUPLE, SET I DICT
### Lista

**Lista** to uporządkowana kolekcja elementów, która pozwala na duplikaty i ma indeksy. 
 
**append(x)** 

Dodaje element na koniec listy. 
```python
numbers = [1, 2, 3]
numbers.append(4) 
print(numbers)      # [1,2,3,4]
```
 

**extend(iterable)** 

Dodaje wiele elementów naraz. 
```python
numbers = [1, 2, 3]
numbers.extend([5,6])
print(numbers)      # [1, 2, 3, 5, 6]
``` 


**insert(index, x)** 

Wstawia element w określone miejsce. 
```python
numbers = [1, 2, 3]
numbers.insert(1, 10) 
print(numbers)      # [1, 10, 2, 3]
```
 

**remove(x)** 

Usuwa pierwsze wystąpienie elementu. 
```python
numbers = [1, 2, 3]
numbers.remove(2) 
print(numbers)      # [1, 3]
```
 

**pop([index])** 

Usuwa element i zwraca go. 
```python
numbers = [1, 2, 3, 4] 

numbers.pop()       # usuwa ostatni  
print(numbers)      # [1, 2, 3]

numbers.pop(1)      # usuwa element z indeksu
print(numbers)      # [1, 3]
``` 
 

**clear()** 

Usuwa wszystkie elementy. 
```python
numbers = [1,2,3,4] 

numbers.clear() 
print(numbers)      # [] 
```
 

**index(x)** 

Zwraca indeks pierwszego wystąpienia. 
```python
numbers = [1,2,3,4] 

i = numbers.index(3)
print(i)        # 2 
```
 

**count(x)** 

Liczy ile razy element występuje. 
```python
numbers = [1,1,2,3]  

c = numbers.count(1)
print(c) # 2 
```
 

**sort() - metoda listy** 

Sortuje istniejącą listę, zmieniając jej kolejność, i nie zwraca nowej listy. Zwracaną wartością jest None.
```python
numbers = [3,1,2]
numbers.sort()   

print(numbers)      # [1,2,3] 

result = numbers.sort()
print(result)       # None

numbers = [3, 1, 5, 2]
numbers.sort(reverse=True)
print(numbers)      # [5, 3, 2, 1]
```
**sorted() - funkcja wbudowana**

Jest funkcją wbudowaną, która tworzy i zwraca nową posortowaną listę. Oryginalna lista pozostaje bez zmian.

```python
numbers2 = [5, 4, 2, 6]

result2 = sorted(numbers2)

print(result2)   # [2, 4, 5, 6]
print(numbers2)  # [5, 4, 2, 6]

numbers = [3, 1, 5, 2]

result = sorted(numbers, reverse=True)

print(result)   # [5, 3, 2, 1]
print(numbers)  # [3, 1, 5, 2]
```

**reverse()** 

Odwraca kolejność. 
```python
numbers = [3,1,2]  

numbers.reverse() 
print(numbers) # [2, 1, 3] 
```
 

**copy()** 

Tworzy kopię listy ( płytką kopię kolekcji). W przypadku zagnieżdżonych mutowalnych obiektów elementy wewnętrzne mogą być nadal współdzielone.
```python
numbers = [3,1,2]  

new_list = numbers.copy()  

numbers.append(6) 

new_list.append(5) 

print(numbers)  # [3, 1, 2, 6] 
print(new_list) # [3, 1, 2, 5]
```

### Tuple

**Krotka (tuple)** to uporządkowana kolekcja elementów. Może zawierać duplikaty i posiada indeksy, ale jest niemutowalna, czyli po utworzeniu nie można dodawać, usuwać ani zmieniać jej elementów.

**count(x)**
Zwraca liczbę wystąpień podanej wartości w krotce.

```python
numbers = (1, 2, 3, 2, 4, 2)

result = numbers.count(2)

print(result)  # 3
```

**index(x)**

Zwraca indeks pierwszego wystąpienia podanej wartości w krotce.

```python
numbers = (10, 20, 30, 40)

result = numbers.index(30)

print(result)  # 2

numbers = (10, 20, 30)

# numbers.index(50)         # ValueError: tuple.index(x): x not in tuple
```

**Ważne**

Tuple ma znacznie mniej metod niż list, ponieważ krotka jest niemutowalna.

Dlatego nie posiada metod takich jak:
```text
append()
extend()
insert()
remove()
pop()
clear()
sort()
reverse()
```
które zmieniałyby jej zawartość.

### Set

Set to nieuporządkowany zbiór bez duplikatów. 


**add(x)** 

Dodaje element. Element 4 zostaje dodany do zbioru, ale nie wiadomo w jakiej kolejności. Zbiór nie ma uporządkowania, więc nie można powiedzieć, że element jest „na końcu” ani „na początku”. 

 
```python
A = {1,2,3}  

A.add(4)  
print(A)  # {1, 2, 3, 4}   
```
 

**update(iterable)**

Dodaje wiele elementów. Elementy zostaną dodane do zbioru, jeśli ich tam jeszcze nie było. Nie wiadomo w jakiej kolejności się pojawią przy wyświetleniu. 

```python 
A = {1, 2, 3}  

A.update({7, 8})    # set  
print(A)            # {1, 2, 3, 7, 8}

A.update((9, 10))   # tuple  
print(A)            # {1, 2, 3, 7, 8, 9, 10}

A.update("ab")      # string → dodaje 'a' i 'b' 
print(A)            # {1, 2, 3, 7, 8, 9, 'a', 10, 'b'}
```
 

**remove(x)** 

Usuwa element (błąd jeśli nie istnieje). 
```python
A = {1, 2, 3}  

A.remove(2)  
print(A)        # {1, 3}
``` 

**discard(x)** 

Usuwa element bez błędu. 
```python
A = {1, 2, 3}  

A.discard(4)  
print(A)        # {1, 2, 3} 
```
 

**pop()** 

usuwa i zwraca dowolny element zbioru. Nie należy zakładać, który element zostanie usunięty, ponieważ `set` nie zachowuje określonej kolejności elementów.
```python
A = {1, 2, 3, 4} 

x = A.pop()  

print(x)  # jeden z elementów zbioru
print(A)  # zbiór bez usuniętego elementu
```
 

**clear()** 

Czyści zbiór. 
```python
A = {1, 2, 3, 4} 

A.clear() 
print(A)        # set()
```
 

**copy()** 
Tworzy kopię zbioru.

```python
A = {1, 2, 3, 4} 

B = A.copy()    # tworzy osobny zbiór

A.add(6) 
B.add(7) 

print(A)        # {1, 2, 3, 4, 6} 
print(B)        # {1, 2, 3, 4, 7} 
```

 

Operacje zbiorów 

**union()** 

Łączy zbiory. 
```python
A = {1,2}  
B = {2,3}  

print(A.union(B)) # {1,2,3} 
```
 

**intersection()** 

Część wspólna. 
```python
A = {1,2}  
B = {2,3}  

print(A.intersection(B)) # {2} 
```
 
**intersection_update()**

Zmienia istniejący zbiór, pozostawiając w nim tylko elementy wspólne z drugim zbiorem.
```python
A = {1, 2, 3, 4}
B = {3, 4, 5}

A.intersection_update(B)
print(A)  # {3, 4}
```
**Różnica**:

`A.intersection(B)` zwraca nowy zbiór, 
natomiast:
`A.intersection_update(B)` zmienia zbiór A.


**difference()** 

Różnica zbiorów. 
```python
A = {1,2}  
B = {2,3}  

print(A.difference(B)) # {1} 
```


**difference_update()**

Usuwa ze zbioru elementy, które znajdują się również w drugim zbiorze.
```python
A = {1, 2, 3, 4}
B = {3, 4, 5}

A.difference_update(B)
print(A)  # {1, 2}
```

**symmetric_difference()** 

Zwraca nowy zbiór zawierający elementy, które są w A lub w B, ale nie w obu naraz. 

Formuła matematyczna: 

A △ B = (A - B) ∪ (B - A) 

 
```python
A = {1,2}  
B = {2,3}  

print(A.symmetric_difference(B)) # {1,3} 
```

**symmetric_difference_update()**

Zmienia zbiór tak, aby pozostały w nim elementy występujące w jednym ze zbiorów, ale nie w obu jednocześnie.
```python
A = {1, 2, 3}
B = {3, 4, 5}

A.symmetric_difference_update(B)

print(A)  # {1, 2, 4, 5} 
```

**issubset()** 
Zwraca True, jeśli każdy element zbioru A jest też w zbiorze B. 

Zwraca False, jeśli choć jeden element A nie występuje w B. 

```python
A = {1,2}  
B = {2,3}  

print(A.issubset(B))
C = {1, 2}  
D = {1, 2, 3, 4}  

print(C.issubset(D)) # True  
```

 

**issuperset()** 

Zwraca True, jeśli wszystkie elementy zbioru B są też w A. 

Zwraca False, jeśli choć jeden element B nie występuje w A. 

Innymi słowy: A jest nadzbiorem B. 

 
```python
A = {1, 2, 3, 4}  
B = {2, 3}  

print(A.issuperset(B)) # True 
```
 

 

**isdisjoint()** 
 
Zwraca True, jeśli żaden element A nie występuje w B. 

Zwraca False, jeśli jest przynajmniej jeden wspólny element. 

Sprawdza czy zbiory nie mają części wspólnej. 

 
```python
# Przykład – brak wspólnych elementów 

A = {1, 2, 3} 
B = {4, 5, 6} 
 
print(A.isdisjoint(B))  # True 
```
### DICTIONARY (dict) Słownik to para klucz → wartość. 
 
**fromkeys()**
Tworzy nowy słownik na podstawie podanych kluczy. Wszystkie klucze otrzymują początkowo tę samą wartość.

```python
keys = ["name", "age", "city"]

person = dict.fromkeys(keys)

print(person)       # {'name': None, 'age': None, 'city': None}
keys = ["a", "b", "c"]

data = dict.fromkeys(keys, 0)

print(data)         # {'a': 0, 'b': 0, 'c': 0}
```

**get(key)** 

Pobiera wartość bez błędu. 
```python
person = {  
    "name": "Jan",  
    "age": 30  
}  

print(person.get("name")) 
```
 

**keys()** 
Zwraca wszystkie klucze

```python
person = {  
    "name": "Jan",  
    "age": 30  
}  
print(person.keys()) # dict_keys(['name', 'age']) 
```
  

**values()** 
Zwraca wartości
```python
person = {  
    "name": "Jan",  
    "age": 30  
}  
print(person.values()) # dict_values(['Jan', 30]) 
```
 

**items()** 
zwraca pary (key,value)

```python
person = {  
    "name": "Jan",  
    "age": 30  
}  
print(person.items()) # dict_items([('name', 'Jan'), ('age', 30)]) 
```


**update()** 
Służy do dodawania nowych par klucz–wartość do słownika lub aktualizowania wartości już istniejących kluczy.

```python
person = {  
    "name": "Jan",  
    "age": 30  
}  

person.update({"city":"Warsaw"})  

print(person ) # {'name': 'Jan', 'age': 30, 'city': 'Warsaw'} 
# Jeżeli klucz już istnieje, update() zmieni jego wartość:
person.update({"age": 31})

print(person) # {'name': 'Jan', 'age': 31, 'city': 'Warsaw'}

# Można też dodać lub zmienić kilka elementów jednocześnie:
person.update({
    "age": 32,
    "country": "Poland"
})

print(person) # {'name': 'Jan', 'age': 32, 'city': 'Warsaw', 'country': 'Poland'}

```
 

**pop(key)** 

Usuwa ze słownika element o podanym kluczu i jednocześnie zwraca jego wartość.
Jeżeli podany klucz nie istnieje, pop() domyślnie spowoduje błąd.
 
```python
person = {
    "name": "Jan",
    "age": 30
}

age = person.pop("age")

print(age)     # 30
print(person)  # {'name': 'Jan'}

# Jeżeli podany klucz nie istnieje, pop() domyślnie spowoduje błąd KeyError:
# person.pop("city") # KeyError: 'city'

city = person.pop("city", "Brak")

print(city)  # Brak
```
 

**popitem()** 

usuwa i zwraca ostatnio dodaną parę klucz: wartość ze słownika.
Jeśli słownik jest pusty, popitem() spowoduje błąd KeyError.

```python
person = {
    "name": "Jan",
    "first": "Kowalski",
    "age": 30,
    "gender": "M"
}

p = person.popitem()

print(p)       # ('gender', 'M')
print(person)  # {'name': 'Jan', 'first': 'Kowalski', 'age': 30}

# klucz i wartość osobno:
key, value = person.popitem()

print(key) # age
print(value) # 30

nic = {}

# nic.popitem()
# KeyError: 'popitem(): dictionary is empty'
```

**setdefault()** 

Sprawdza, czy podany klucz istnieje w słowniku.

- jeśli klucza nie ma → dodaje go z podaną wartością,
- jeśli klucz już istnieje → nie zmienia jego wartości,
- zwraca wartość przypisaną do danego klucza.

```python
person = {
    "name": "Jan",
    "age": 30
}

person.setdefault("country", "Poland")
print(person)           # {'name': 'Jan', 'age': 30, 'country': 'Poland'}

person.setdefault("age", 40)
print(person)           # {'name': 'Jan', 'age': 30, 'country': 'Poland'}

value = person.setdefault("country", "Germany")
print(value)  # Poland
```

 

**clear()** 
Usuwa wszystkie elementy ze słownika.
`clear()` nie usuwa samej zmiennej person. **Usuwa tylko zawartość słownika**.

```python
person = {
    "name": "Jan",
    "age": 30
}

person.clear()

print(person)  # {}
```
 

**copy()** 
Tworzy nowy słownik zawierający te same pary `klucz`: `wartość` co słownik oryginalny.
Zmiany wykonywane bezpośrednio w jednym słowniku nie wpływają na drugi.
`copy()` wykonuje tzw. płytką kopię (shallow copy). Ma to znaczenie przede wszystkim wtedy, gdy słownik zawiera zagnieżdżone listy, słowniki lub inne mutowalne obiekty.

```python
person = {
    "name": "Jan",
    "age": 30,
    "city": "Warsaw"
}

new_person = person.copy()

new_person["age"] = 31
new_person["post-code"] = "12-333"

print(person)           # {'name': 'Jan', 'age': 30, 'city': 'Warsaw'}
print(new_person)       # {'name': 'Jan', 'age': 31, 'city': 'Warsaw', 'post-code': '12-333'}
```


 

  



## Operatory == i is

**Operator ==** porównuję wartości. Inaczej mówiąc **sprawdza, czy wartości dwóch obiektów są takie same. Nie bierze pod uwagę, czy obiekty są przechowywane w tym samym miejscu w pamięci – liczy się tylko zawartość**. Jest to porównanie semantyczne, oparte na metodzie `__eq__` obiektu. 

Przykłady 
```python
a = 5 
b = 5 
print(a == b) 

a = [1, 2, 3] 
b = [1, 2, 3] 
print(a == b) 
```


**Operator `is`** sprawdza tożsamość obiektów. Inaczej mówiąc, sprawdza, czy dwie zmienne wskazują na **dokładnie ten sam obiekt w pamięci**.

Operatora `is` nie należy używać do porównywania wartości liczb, napisów, list, słowników ani zbiorów. Do porównywania ich wartości używamy `==`.
```python 

a = [1, 2, 3]
b = [1, 2, 3]

print(a == b)  # True
print(a is b)  # False


a = 5 
b = 57777777777777777
c = 5
print(a == b)  # False
print(a is b)  # False
print(a is c)  # True


a = [1, 2, 3]
b = a

print(a == b)  # True
print(a is b)  # True
```


Python ma mechanizm zwany **internowaniem małych liczb całkowitych** (integer caching). 

CPython stosuje optymalizację nazywaną cache'owaniem małych liczb całkowitych (small integer caching).

W standardowej implementacji CPython obiekty reprezentujące liczby całkowite z zakresu **od `-5` do `256` są tworzone wcześniej i ponownie wykorzystywane**. Dzięki temu Python nie musi za każdym razem tworzyć nowego obiektu dla często używanych małych liczb.

Z tego powodu dwie zmienne zawierające taką samą małą liczbę mogą wskazywać na ten sam obiekt.

CPython to najczęściej używana implementacja języka Python. To właśnie CPython jest standardowo pobierany ze strony python.org.
Python  → język programowania
CPython → program, który wykonuje kod napisany w Pythonie

```python
a = 10
b = int("10")

print(a == b)  # True
print(a is b)  # True

c = 256         
d = int("256")  

# c ─────┐
#        ├──► 256
# d ─────┘


print(c == d)  # True
print(c is d)  # True
print(id(c))
print(id(d))

e = 1000        # obiekt E
f = int("1000") # obiekt F

print(e == f)  # True
print(e is f)  # False -  is sprawdza, czy e i f wskazują na dokładnie ten sam obiekt w pamięci.
print(id(e))   # 
print(id(f))
```
**Ważne**: cache małych liczb jest optymalizacją CPythona. Nie używamy operatora is do porównywania wartości liczb. Do tego służy operator ==.
 
Przykład – list 
```python
a = [1, 2, 3]
b = [1, 2, 3]

print(a == b)  # True
print(a is b)  # False
```
 

Przykład – dict 
```python
a = {"name": "Jan"}
b = {"name": "Jan"}

print(a == b)  # True
print(a is b)  # False
```
 

Przykład – set 
```python
a = {1, 2, 3}
b = {1, 2, 3}

print(a == b)  # True
print(a is b)  # False
```    
 

Przykład – is – None 
```python
x = None 
if x is None: 
    print("brak wartości") 
``` 
W przypadku `None` zalecane jest używanie `x is None` zamiast `x == None`
 

## W Pythonie istnieją dwie główne pętle:

`for` – do iterowania po sekwencjach
`while` – pętla warunkowa (wykonuje się dopóki warunek jest prawdziwy)

**1. `for`**

Najczęściej używana pętla w Pythonie. Służy do przejścia po elementach kolekcji (lista, krotka, string, range, słownik itp.).
Podstawowe przykłady:

```Python
# 1. Po liście
owoce = ["jabłko", "banan", "wiśnia"]
for owoc in owoce:
    print(owoc)

# 2. Z range() – najczęściej używane
for i in range(5):           # 0, 1, 2, 3, 4
    print(i)

for i in range(1, 11):       # od 1 do 10
    print(i)

for i in range(0, 21, 2):    # co drugi (parzyste)
    print(i)

# Z enumerate (indeks + wartość)
imiona = ["Ania", "Kasia", "Tomek"]
for i, imie in enumerate(imiona, start=1):
    print(f"{i}. {imie}")

# Po słowniku
osoba = {"imie": "Jan", "nazwisko": "Kowalski", "wiek": 32}
for klucz, wartosc in osoba.items():
    print(f"{klucz}: {wartosc}")    
```

**2. `while`**

Wykonuje się tak długo, jak warunek jest prawdziwy.

```Python
# Prosty licznik
licznik = 0
while licznik < 5:
    print(licznik)
    licznik += 1

# Z inputem od użytkownika
haslo = ""
while haslo != "1234":
    haslo = input("Podaj hasło: ")
print("Hasło poprawne!")
```
Nieskończona pętla

```Python
while True:
    print("Działa bez końca")
```

## **Instrukcje sterujące w pętlach**

| Instrukcja | Działanie | Przykład użycia |
|:-----|:----|:------|
| `break` | Przerywa pętlę | Znaleziono element → wychodzimy |
| `continue` | Pomija resztę iteracji | Pomijamy nieparzyste liczby |
| `else` | Wykonuje się jeśli pętla nie została przerwana break | Szukanie elementu – nie znaleziono |
| `pass` | Nic nie robi (placeholder)| Pusta pętla / przyszły kod |

**1. `break` – przerywa pętlę całkowicie**
Instrukcja break natychmiast wychodzi z pętli, nawet jeśli warunek pętli jest jeszcze spełniony.

```Python
# Przykład: szukamy pierwszej parzystej liczby większej niż 10
liczby = [1, 3, 7, 12, 15, 18, 22]

for liczba in liczby:
    if liczba > 10 and liczba % 2 == 0:
        print(f"Znaleziono pierwszą parzystą liczbę > 10: {liczba}")
        break          # przerywamy pętlę
    print(liczba)

print("Koniec pętli")
```

**2. `continue` – pomija resztę bieżącej iteracji**
Przechodzi od razu do następnej iteracji pętli.

```Python
# Przykład: pomijamy liczby ujemne
liczby = [5, -2, 8, -4, 10, -1, 7]

for liczba in liczby:
    if liczba < 0:
        continue          # pomijamy ujemne liczby
    print(liczba)
```    

**3. `else` w pętli – wykonuje się, gdy pętla nie została przerwana break**
Klauzula else przy pętli działa tylko wtedy, gdy pętla skończyła się normalnie (bez break).

```Python
# Przykład: szukamy liczby parzystej
liczby = [1, 3, 5, 7, 9]

for liczba in liczby:
    if liczba % 2 == 0:
        print(f"Znaleziono parzystą: {liczba}")
        break
else:
    print("Nie znaleziono żadnej liczby parzystej!")
```

**4. `pass` – "nic nie rób" (placeholder)**
Używany, gdy składnia wymaga bloku kodu, ale nie chcesz nic robić (np. planujesz kod na później).

```Python
for i in range(10):
    if i % 2 == 0:
        pass          # później tu coś dodam
    else:
        print(i)
```        

Porównanie w jednym przykładzie

```Python
for i in range(1, 11):
    if i == 3:
        continue          # pomiń 3
    if i == 8:
        break             # przerwij przy 8
    print(i)
else:
    print("Pętla zakończona normalnie")
```    
## List comprehensions (wyrażenia listowe)

**List comprehension** to zwięzły sposób tworzenia nowej listy na podstawie elementów innego obiektu iterowalnego, np. listy lub range().

Często pozwala zastąpić pętlę for, w której tworzymy pustą listę i dodajemy do niej kolejne elementy za pomocą append().

Przykład tradycyjny:
```python
kwadraty = []

for x in range(10):
    kwadraty.append(x**2)

print(kwadraty) # [0, 1, 4, 9, 16, 25, 36, 49, 64, 81]
```
 


**To samo za pomocą list comprehension**:
```python
kwadraty = [x**2 for x in range(10)]
print(kwadraty)
```

Podstawowa składnia:
```text
[wyrażenie for element in iterable]
```
 

Przykład:
```python
liczby = [1, 2, 3, 4, 5]
podwojone = [x * 2 for x in liczby]
print(podwojone) # [2, 4, 6, 8, 10]
```
 

**List comprehension z warunkiem**

Możemy również dodać warunek if.

Składnia:
```text
[wyrażenie for element in iterable if warunek]
```

Przykład — tylko liczby parzyste:
```python
parzyste = [x for x in range(10) if x % 2 == 0]
print(parzyste) # [0, 2, 4, 6, 8]
```
 
**Zagnieżdżone list comprehensions**
List comprehensions mogą być również zagnieżdżane.

Przykład — macierz 3 × 4 wypełniona zerami:
```python
macierz = [
    [0 for _ in range(4)]
    for _ in range(3)
]
print(macierz)
'''
wynik:
[
    [0, 0, 0, 0],
    [0, 0, 0, 0],
    [0, 0, 0, 0]
]
'''
```

List comprehension jest dobrym rozwiązaniem, gdy operacja jest krótka i czytelna.

Na przykład:
```python
kwadraty = [x**2 for x in range(10)]
```
jest bardziej zwięzłe niż:
```python
kwadraty = []
for x in range(10):
    kwadraty.append(x**2)
```
Jeżeli jednak wyrażenie zawiera wiele warunków albo skomplikowaną logikę, zwykła pętla for może być bardziej czytelna.

**Zalety i ograniczenia**

**Zalety**:

- krótszy zapis,
- często bardzo czytelny,
- naturalny i często stosowany w Pythonie,
- nie wymaga ręcznego tworzenia pustej listy i używania append().

**Ograniczenie**:

List comprehension tworzy całą **listę w pamięci**.

Przy bardzo **dużej liczbie danych może więc zużywać dużo pamięci**.



## Ternary operator (operator warunkowy) 

Ternary w Pythonie to skrótowy zapis instrukcji if/else w jednej linijce.

**Składnia**
wartość_jeśli_true if warunek else wartość_jeśli_false

Przykład podstawowy
```Python
wiek = 20

if wiek >= 18:
    status = "pełnoletni"
else:
    status = "niepełnoletni"

print(status)
```

To samo w ternary:
```Python
wiek = 20

status = "pełnoletni" if wiek >= 18 else "niepełnoletni"

print(status)
```

---
## Funkcje
Funkcja to **blok kodu, który wykonuje określone zadanie** i może być wielokrotnie używany.
Składnia: 

```Python
def nazwa_funkcji(parametry): 
   """Dokumentacja (opcjonalna)""" 
   # ciało funkcji 
   return wartość  # opcjonalnie 
```
Metoda nie zwraca wartości. Funkcja zwraca wartość za pomocą `return`

Przykłady: 
```Python
# Prosta metoda bez parametrów 
def przywitaj(): 
   print("Cześć!") 
 
# Metoda z parametrem 
def powitaj(imie): 
   print(f"Cześć, {imie}!") 
 
# Funkcja zwracająca wartość 
def dodaj(a, b): 
   wynik = a + b 
   return wynik 
```


**Argumenty funkcji, metody**   

**1. Argumenty pozycyjne - kolejność ma znaczenie:**

```Python
def opisz_osobe(imie, wiek, miasto): 
   print(f"{imie}, lat {wiek}, z {miasto}") 
 
opisz_osobe("Anna", 25, "Warszawa")  # OK 
``` 

**2. Argumenty nazwane (keyword arguments) - kolejność nie ma znaczenia**
 
`opisz_osobe(miasto="Kraków", imie="Piotr", wiek=30)`

**3. Argumenty domyślne:**
 
```Python
def powitaj(imie, jezyk="polski"): 
   if jezyk == "polski": 

       return f"Cześć, {imie}!"  
   elif jezyk == "angielski": 
       return f"Hello, {imie}!" 
   else: 
       return f"Witaj, {imie}!" 
 
print(powitaj("Anna"))  # używa domyślnego "polski" 
print(powitaj("John", "angielski")) 
```

⚠️ Ważne: Argumenty domyślne muszą być na końcu listy parametrów: 

Poprawnie 

`def funkcja(a, b=10): ... `
 
Błędnie - parametr domyślny przed wymaganym 

`def funkcja(a=10, b): ...  # SyntaxError `

**4. `*args` - dowolna liczba argumentów pozycyjnych:**

przekazywane bez nazw. Nie piszemy sumuj_wszystko(a=10, b=20) 

```Python
def sumuj_wszystko(*liczby):    
   """Przyjmuje dowolną liczbę argumentów""" 
   return sum(liczby) 
 
print(sumuj_wszystko(1, 2, 3))     # 6 
print(sumuj_wszystko(10, 20))      # 30 
print(sumuj_wszystko(1, 2, 3, 4, 5))  # 15 
```

**5. `**kwargs` - dowolna liczba argumentów nazwanych:**

```Python
def pokaz_dane(**dane): 
   """Przyjmuje dowolną liczbę argumentów nazwanych""" 
   for klucz, wartosc in dane.items(): 
       print(f"{klucz}: {wartosc}") 
 
pokaz_dane(imie="Anna", wiek=25, miasto="Warszawa") 
# Wyświetli: 
# imie: Anna 
# wiek: 25 
# miasto: Warszawa 
```

**6. Łączenie różnych typów argumentów:**

```Python
def skomplikowana_funkcja(a, b, *args, opcja=None, **kwargs): 
   print(f"a={a}, b={b}") # pamietać o wcięciach 
   print(f"args={args}") 
   print(f"opcja={opcja}") 
   print(f"kwargs={kwargs}") 

skomplikowana_funkcja(1, 2, 3, 4, 5, opcja="test", x=100, y=200)   
 

# Wyświetli:
 
# a=1, b=2
# args=(3, 4, 5)
# opcja=test
# kwargs={'x': 100, 'y': 200}
```

Kolejność parametrów musi być:
- Argumenty pozycyjne 
- *args 
- Argumenty domyślne/nazwane 
- **kwargs 



## Zasięg zmiennych

Zasięg zmiennych (ang. scope) określa, gdzie dana zmienna jest dostępna i z jakiego miejsca w kodzie możesz z niej korzystać.

Python szuka zmiennych według reguły **LEGB**:

- L – Local     - Lokalny (wewnątrz funkcji)
- E – Enclosing - Otaczający (funkcja w funkcji)
- G – Global    - Globalny (na poziomie pliku)
- B – Built-in  - Wbudowany (np. len, print)

1. Scope lokalny (Local)
Zmienne stworzone wewnątrz funkcji:

```Python
def foo():
    x = 10
    print(x)

foo()
print(x)  # błąd NameError: name 'x' is not defined
```

2. Scope globalny

Zmienne poza funkcją:

```Python
x = 100

def foo():
    # x ma być zmienną lokalną, ale lokalne x jeszcze nie ma wartości
    print(x) # 100
    x = x + 1 # UnboundLocalError: cannot access local variable 'x' where it is not associated with a value

foo()
```

```Python
x = 10

def foo():
    global x
    x = x + 1
    print(x)
foo()
``` 

3. Enclosing scope (funkcja w funkcji)

```Python
def outer(): 
    x = 5

    def inner(): 
        print(x)  # 5
    inner() # inner() widzi x z outer()

outer()
```

Modyfikacja 

```Python
def outer():
    x = 5
    print(x) # 5
    
    def inner():
        nonlocal x
        x = 10
        print(x) # 10
    inner()
    print(x) # 10

outer()



def zew():
    x = 5

    def wew():
        nonlocal x # nie twórz nowego lokalnego x, tylko użyj x z funkcji zewnętrznej zew().
        x = x + 2

    wew()

    print(x)

zew()
```

4. Built-in scope

To są funkcje wbudowane:
len, print, range itd.

```Python
print(len("abc")) 
```
Python zawsze je widzi.

-------------------------------------------------------------------------
-------------------------------------------------------------------------
-------------------------------------------------------------------------
-------------------------------------------------------------------------
 
## Rekurencja 

**Rekurencja** to technika programowania, w której **funkcja wywołuje samą siebie, aby rozwiązać problem. Zamiast używać pętli** (jak for czy while), **funkcja dzieli problem na mniejsze podproblemy**, aż dojdzie do prostego przypadku, który można rozwiązać bezpośrednio.  Kluczowe elementy funkcji rekurencyjnej: 

**Przypadek bazowy (base case)**: Warunek, który kończy rekurencję. Bez niego funkcja będzie się wywoływać w nieskończoność, co spowoduje błąd (RecursionError w Pythonie, bo przekroczony zostanie limit rekurencji, domyślnie ok. 1000 wywołań). 

**Przypadek rekurencyjny (recursive case)**: Część, w której funkcja wywołuje siebie z mniejszymi argumentami, zbliżając się do przypadku bazowego. 

Rekurencja jest przydatna w problemach, które mają strukturę drzewiastą lub dzielą się na podproblemy, np. obliczanie silni, przeszukiwanie drzew, sortowanie (jak quicksort) czy generowanie fraktali. 

**Przykład**
```python
def odliczanie(liczba):

    if liczba == 0:
        return

    print(liczba)

    odliczanie(liczba - 1)

odliczanie(5)
```

**Przykład**: Obliczanie silni 
```python
def silnia(n): 
    if n == 0 or n == 1:  # Przypadek bazowy: 0! = 1, 1! = 1 
        return 1 
    else:  # Przypadek rekurencyjny 
        return n * silnia(n - 1) 
```
 
Jak działa, wyjaśnienie:
```text
Dla silnia(5): Wywołuje 5 * silnia(4) 
    silnia(4): Wywołuje 4 * silnia(3) 
    silnia(3): Wywołuje 3 * silnia(2) 
    silnia(2): Wywołuje 2 * silnia(1) 
    silnia(1): Zwraca 1 (przypadek bazowy) 
```

Teraz "wspinamy się" z powrotem: 2 * 1 = 2, 3 * 2 = 6, 4 * 6 = 24, 5 * 24 = 120. 

## Wyjątki 

**Wyjątki** to mechanizm, **który pozwala programowi radzić sobie z błędami w czasie wykonania (runtime errors), np. dzielenie przez zero, brak pliku czy nieoczekiwane dane. Zamiast crashować program, możesz "złapać" błąd i obsłużyć go elegancko**. Jest to kluczowe dla tworzenia niezawodnego i odpornego na błędy kodu. 
Python ma wbudowane wyjątki (np. ZeroDivisionError, FileNotFoundError), ale możesz też tworzyć własne. Podstawowa struktura to blok try-except, z opcjonalnymi else i finally.  

**Podstawowa struktura: try-except**
- **try**: W tym bloku umieszczasz kod, który może spowodować błąd. 
- **except**: Łapie wyjątek i obsługuje go. Możesz sprecyzować typ wyjątku (np. except ValueError:) lub złapać wszystkie (except: – ale to niezalecane, bo maskuje błędy). 


Przykład 
```python
try: 
    liczba = int(input("Podaj liczbę: "))  # Może rzucić ValueError, jeśli nie liczba 
    wynik = 10 / liczba  # Może rzucić ZeroDivisionError 
    print(wynik) 
except ValueError: 
    print("To nie jest liczba!") 
except ZeroDivisionError: 
    print("Nie dziel przez zero!") 
```
Warto też zauważyć, że Python ma wiele innych wbudowanych wyjątków, np. `TypeError`, `IndexError`, `KeyError`, `FileNotFoundError`, `NameError`.


**Dodatkowe bloki: else i finally** 

- **else**: Wykonuje się tylko, jeśli w try NIE wystąpił żaden wyjątek. Przydatne do kodu, który ma działać po sukcesie. 
- **finally**: Zawsze się wykonuje, niezależnie od tego, czy był wyjątek czy nie. Idealne do czyszczenia zasobów (np. zamykanie plików). 

Przykład 
```python
try: 
    a = int(input("Podaj pierwszą liczbę: "))  # Może rzucić ValueError 
    b = int(input("Podaj drugą liczbę: "))   # Może rzucić ValueError 
    wynik = a / b                           # Może rzucić ZeroDivisionError 
except ValueError: 
    print("Jedna z wartości nie jest liczbą całkowitą!") 
except ZeroDivisionError: 
    print("Nie można dzielić przez zero!") 
except Exception as e: 
    print(f"Nieoczekiwany błąd: {e}") 
else: 
    print(f"Wynik dzielenia: {wynik}") 
    print("Obliczenia zakończone sukcesem.") 
finally: # finally - wykona się zawsze, niezależnie od tego, czy wystąpił błąd:
    print("Program zakończył przetwarzanie wejścia – zawsze to się wyświetli.") 
```
`**Exception**` jest bazową klasą dla większości standardowych wyjątków w Pythonie i może służyć do przechwytywania błędów, które nie zostały wcześniej obsłużone przez bardziej szczegółowe bloki except.


**Raise**: Rzucanie wyjątków raise pozwala ręcznie "rzucić" wyjątek, np. gdy chcesz przerwać wykonanie przy niepoprawnych danych. Możesz raise'ować wbudowany wyjątek lub własny. 

Przykład:  
```python
def sprawdz_wiek(wiek): 
    if wiek < 18: 
        raise ValueError("Jesteś za młody!")  # Rzuca wyjątek z komunikatem 
    return "OK" 
 
try: 
    sprawdz_wiek(15) 
except ValueError as e: 
    print(e)  # Wyjście: Jesteś za młody! 
```

**Custom exceptions**: Własne wyjątki Możesz tworzyć własne klasy wyjątków, dziedzicząc po Exception (lub podklasach jak ValueError). To przydatne w dużych projektach, by mieć specyficzne błędy.Przykład tworzenia i użycia: 

 
```python
# Definicja własnego wyjątku
class MojBlad(Exception):
    def __init__(self, wiadomosc="To mój custom błąd!"):
        self.wiadomosc = wiadomosc
        super().__init__(self.wiadomosc)


# Funkcja sprawdzająca wiek
def sprawdz_wiek(wiek):
    if wiek < 18:
        raise MojBlad("Użytkownik musi mieć co najmniej 18 lat!")

    print("Użytkownik jest pełnoletni.")


# Obsługa wyjątku
try:
    wiek = int(input("Podaj swój wiek: "))
    sprawdz_wiek(wiek)

except MojBlad as e:
    print("Błąd:", e)

except ValueError:
    print("Błąd: Podaj poprawną liczbę!")
```

 