# Podstawy Python

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
**range (zakres - immutable)**

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
indices = range(len(my_list))

# Pętle z licznikiem
for i in range(5):
    print(f"Iteracja {i}")

# Konwersja na listę (tylko gdy potrzebujemy)
numbers = list(range(10))  # [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
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
# bytes - immutable
b = bytes([65, 66, 67])  # b'ABC'
b = b"Hello"             # Literał
b = "Hello".encode('utf-8')

# bytearray - mutable
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
print(mv[0])      # 72 (H)
mv[0] = 104       # Zmiana na 'h'

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

def get_user(id: int) -> Optional[Dict[str, Any]]:
    if id == 0:
        return None
    return {"id": id, "name": "Jan"}

def process(value: Union[int, str, float]) -> str:
    return str(value)

# Własne typy
UserId = int
ProductId = int

def get_user(user_id: UserId) -> Dict:
    pass
```    
### **Klasy (typ zdefiniowany przez użytkownika)**

```Python
class Person:
    def __init__(self, name: str, age: int):
        self.name = name
        self.age = age
    
    def greet(self) -> str:
        return f"Hello, I'm {self.name}"

# Typowanie kacze (duck typing)
def process(obj):
    if hasattr(obj, 'process'):
        obj.process()
    # Nie sprawdzamy typu, tylko interfejs
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

| Typ | Mutowalność  | Czy można zmienić po utworzeniu?  |
|:-----|:----:|:------|
| list  | mutowalna    | ✅ można dodawać, usuwać, zmieniać elementy   |
| dict | mutowalny   | ✅ można dodawać, usuwać, zmieniać pary klucz-wartość   |
| set | mutowalny | ✅ można dodawać, usuwać elementy |
| tuple | niemutowalna | ❌ NIE można zmienić! Jest jak "zamrożona lista" |

**1. List (lista) – MUTOWALNA**

```Python
my_list = [1, 2, 3] 
 
my_list[0] = 100      	# zmiana elementu 
my_list.append(4)     	# dodanie elementu 
 
print(my_list)  		# [100, 2, 3, 4] 
```
 

**2. Dict (słownik) – MUTOWALNY**

```Python
my_dict = {"a": 1, "b": 2} 
 
my_dict["a"] = 100     	# zmiana wartości 
my_dict["c"] = 3       	# dodanie nowego klucza 
 
print(my_dict)  		# {'a': 100, 'b': 2, 'c': 3} 
```
 

**3. Set (zbiór) – MUTOWALNY**

```Python
my_set = {1, 2, 3} 
 
my_set.add(4) 
my_set.remove(2) 
 
print(my_set)  		# {1, 3, 4} 
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

**range() nie tworzy listy**
```Python
x = range(5)
print(x) # Wynik: range(0, 5)
```
## Operatory == i is

**Operator ==** porównuję wartości. Inaczej mówiąc **sprawdza, czy wartości dwóch obiektów są takie same. Nie bierze pod uwagę, czy obiekty są przechowywane w tym samym miejscu w pamięci – liczy się tylko zawartość**. Jest to porównanie semantyczne, oparte na metodzie __eq__ obiektu. 

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

print(c == d)  # True
print(c is d)  # True

e = 1000
f = int("1000")

print(e == f)  # True
print(e is f)  # False
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
## Funkcje
Funkcja to **blok kodu, który wykonuje określone zadanie** i może być wielokrotnie używany.
Składnia: 

```Python
def nazwa_funkcji(parametry): 
   """Dokumentacja (opcjonalna)""" 
   # ciało funkcji 
   return wartość  # opcjonalnie 
```

Przykłady: 
```Python
# Prosta funkcja bez parametrów 
def przywitaj(): 
   print("Cześć!") 
 
# Funkcja z parametrem 
def powitaj(imie): 
   print(f"Cześć, {imie}!") 
 
# Funkcja zwracająca wartość 
def dodaj(a, b): 
   wynik = a + b 
   return wynik 
```


**Argumenty funkcji**   

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
```

4. Built-in scope

To są funkcje wbudowane:
len, print, range itd.

```Python
print(len("abc")) 
```
Python zawsze je widzi.

## Funkcje zaawansowane
### lambda

**`lambda`** pozwala tworzyć małe, **anonimowe funkcje**, czyli funkcje definiowane bez użycia instrukcji `def`.

Najczęściej stosuje się je do krótkich, prostych operacji, np. w połączeniu z funkcjami `map()`, `filter()` czy `sorted()`.

Funkcja `lambda` składa się ze słowa kluczowego `lambda`, argumentów, dwukropka i jednego wyrażenia.

Czyli zamiast:

```python
def dodaj(a, b):
    wynik = a + b
    return wynik
```

możemy zapisać:
```python
dodaj = lambda a, b: a + b
print(dodaj(2, 3))  # 5
```

Skrótowa wersja w lambda: 
`lambda a, b: a + b` 

Składnia: 
`lambda argumenty: wyrażenie `

Istotne:

- lambda może zawierać tylko jedno wyrażenie,
- nie można umieszczać w niej instrukcji takich jak return, while, for ani zwykłego bloku if,
- można jednak używać wyrażenia warunkowego wartość1 if warunek else wartość2.

```python
parzystosc = lambda x: "parzysta" if x % 2 == 0 else "nieparzysta"

print(parzystosc(4))  # parzysta
print(parzystosc(5))  # nieparzysta
```

**Przykład zastosowania**: Sortowanie listy słowników po wartości klucza. Załóżmy, że mamy listę osób i chcemy posortować je po wieku. 

```python
osoby = [{'imie': 'Anna', 'wiek': 25}, {'imie': 'Jan', 'wiek': 30}, {'imie': 'Maria', 'wiek': 22}] 
posortowane = sorted(osoby, key=lambda x: x['wiek']) 
print(posortowane) 
```

Przykład: Obliczenie kwadratów liczb w liście. 
 
```python
kwadraty = list(map(lambda x: x**2, [1, 2, 3, 4])) 
print(kwadraty) 
```
 
### map
**Funkcja map** stosuje podaną funkcję do każdego elementu iterowalnego (np. listy, tupli) i zwraca iterator z wynikami. Często łączy się ją z lambdami dla zwięzłości. 

**Przykład zastosowania**: Podwojenie elementów listy. 
 
```python
liczby = [1, 2, 3, 4] 
podwojone = list(map(lambda x: x * 2, liczby)) 
print(podwojone) 
```
 
Przykład: Konwersja temperatur z Celsjusza na Fahrenheita dla listy wartości. 

Konwersja z **Celsjusza (°C)** na **Fahrenheita (°F)** działa według prostego wzoru matematycznego:  **°F=(°C×9/5 )+32**
Skale różnią się w dwóch rzeczach: 

1. Wielkość stopnia 
```text
    100°C = 180°F 
    → 1°C = 9/5°F (czyli 1.8°F) 
```

2. Punkt zerowy 

```text
0°C = 32°F 
→ dlatego dodajemy +32 
```
 

Przykłady:
```text
0°C → (0×9/5)+32=32°F  
25°C → (25×9/5)+32=77°F
100°C → (100×9/5)+32=212°F
```

```python
celsjusze = [0, 10, 20, 30] 
fahrenheit = list(map(lambda c: (c * 9/5) + 32, celsjusze)) 
print(fahrenheit) 
```

### filter
**Funkcja filter** filtruje elementy iterowalnego na podstawie warunku podanego w funkcji (zwracającej True/False). Zwraca iterator z elementami spełniającymi warunek. 

**Przykład zastosowania**: Wybór parzystych liczb z listy. 
```python
liczby = [1, 2, 3, 4, 5, 6] 
parzyste = list(filter(lambda x: x % 2 == 0, liczby)) 
print(parzyste) 
```

Przykład: Filtrowanie słów dłuższych niż 3 litery z listy. 
```python
slowa = ['kot', 'pies', 'slon', 'ptak', 'ryba'] 
dlugie = list(filter(lambda s: len(s) > 3, slowa)) 
print(dlugie) 
```

### reduce

**Funkcja reduce** (z modułu functools) redukuje iterowalny do pojedynczej wartości, stosując funkcję kumulacyjną do elementów. Wymaga importu: from functools  import reduce. 

Ogólna składnia 
```text
reduce(function, iterable) 
```
- function → funkcja z dwoma argumentami 
- iterable → lista / tuple / inna kolekcja 

Python bierze elementy po kolei i łączy je w jeden wynik. 


**Przykład zastosowania**: Obliczenie sumy elementów listy. 
```python
from functools import reduce 
liczby = [1, 2, 3, 4] 
suma = reduce(lambda x, y: x + y, liczby) 
print(suma) 
```

Przykład: Znalezienie maksymalnej wartości w liście. 
```python
from functools import reduce 
liczby = [1, 3, 2, 5, 4] 
maks = reduce(lambda x, y: x if x > y else y, liczby) 
print(maks) 
```

## Rekurencja 

**Rekurencja** to technika programowania, w której **funkcja wywołuje samą siebie, aby rozwiązać problem. Zamiast używać pętli** (jak for czy while), **funkcja dzieli problem na mniejsze podproblemy**, aż dojdzie do prostego przypadku, który można rozwiązać bezpośrednio.  Kluczowe elementy funkcji rekurencyjnej: 

**Przypadek bazowy (base case)**: Warunek, który kończy rekurencję. Bez niego funkcja będzie się wywoływać w nieskończoność, co spowoduje błąd (RecursionError w Pythonie, bo przekroczony zostanie limit rekurencji, domyślnie ok. 1000 wywołań). 

**Przypadek rekurencyjny (recursive case)**: Część, w której funkcja wywołuje siebie z mniejszymi argumentami, zbliżając się do przypadku bazowego. 

Rekurencja jest przydatna w problemach, które mają strukturę drzewiastą lub dzielą się na podproblemy, np. obliczanie silni, przeszukiwanie drzew, sortowanie (jak quicksort) czy generowanie fraktali. 

 
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

**Wyjątki** to mechanizm, **który pozwala programowi radzić sobie z błędami w czasie wykonania (runtime errors), np. dzielenie przez zero, brak pliku czy nieoczekiwane dane. Zamiast crashować program, możesz "złapać" błąd i obsłużyć go elegancko**. To kluczowe dla robustnego kodu. Python ma wbudowane wyjątki (np. ZeroDivisionError, FileNotFoundError), ale możesz też tworzyć własne. Podstawowa struktura to blok try-except, z opcjonalnymi else i finally.  

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
finally: 
    print("Program zakończył przetwarzanie wejścia – zawsze to się wyświetli.") 
```

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
class MojBlad(Exception):  # Dziedziczy po Exception 
    def __init__(self, wiadomosc="To mój custom błąd!"): 
        self.wiadomosc = wiadomosc 
        super().__init__(self.wiadomosc) 
 
def funkcja(): 
    raise MojBlad("Coś poszło nie tak.") 
 
try: 
    funkcja() 
except MojBlad as e: 
    print(e)  # Wyjście: Coś poszło nie tak.

```


## Dekoratory 

**Dekoratory** to funkcje, które modyfikują lub rozszerzają zachowanie innych funkcji bez zmiany ich kodu. Definiuje się je z użyciem **`@dekorator` nad funkcją**. Są meta-funkcjami, które zwracają nową funkcję. 

 

Idea dekoratora 

Dekorator: 

- bierze **funkcję jako argument** 
- **opakowuje ją dodatkową logiką** 
- zwraca **nową funkcję** 

Czyli zamiast zmieniać funkcję, **dodajemy warstwę wokół niej**.

Przykład 
```python
def moj_dekorator(func): 
    def wrapper(): 
        print("Coś przed funkcją") 
        func() 
        print("Coś po funkcji") 
    return wrapper 
 
@moj_dekorator 
def powitanie(): 
    print("Witaj!") 
 
powitanie() 
```

**Przykład zastosowania**: Dekorator mierzący czas wykonania funkcji. 

 
```python
import time 
 
def miernik_czasu(func): 
   def wrapper(*args, **kwargs): 
       start = time.time() 
       wynik = func(*args, **kwargs) 
       koniec = time.time() 
       print(f"Czas wykonania: {koniec - start} sekund") 
       return wynik 
   return wrapper 
 
@miernik_czasu 
def wolna_funkcja(n): 
   time.sleep(n) 
   return "Gotowe" 
 
print(wolna_funkcja(2)) 
```

Przykład: Dekorator dodający logowanie. 

```python
def loguj(func): 
   def wrapper(*args, **kwargs): 
       print(f"Wywołano {func.__name__} z argumentami {args}") 
       return func(*args, **kwargs) 
   return wrapper 
 
@loguj 
def dodaj(a, b): 
   return a + b 
 
print(dodaj(3, 5)) 
```

## Programowanie obiektowe (OOP)

**Programowanie obiektowe (OOP)** w Pythonie to **paradygmat** programowania, który pozwala na **organizowanie kodu wokół "obiektów"** zamiast funkcji i procedur. Jest to jedna z kluczowych cech Pythona, czyniąca go elastycznym i łatwym w utrzymaniu dla dużych projektów. 

**Kluczowe pojęcia OOP**

**1. Klasa (Class)**

**Klasa to szablon** lub blueprint **definiujący strukturę i zachowanie obiektów**. Definiuje, jakie atrybuty (dane) i metody (funkcje) będą miały obiekty stworzone na jej podstawie. Klasa sama w sobie nie przechowuje danych – to robią jej instancje (obiekty). 

```Python
class Pies:  
   pass  # klasa nic nie robi, czyli blok istnieje ale jest pusty   
 
moj_pies = Pies() 
print(type(moj_pies)) 
```

**2. Obiekt (Object)**

**Obiekt to instancja** (konkretny egzemplarz) **klasy**. **Obiekt ma własne atrybuty i może wywoływać metody zdefiniowane w klasie**. Tworzysz obiekt wywołując klasę jak funkcję (np. Klasa()). Obiekty są unikalne, nawet jeśli pochodzą z tej samej klasy. 

```Python
class Pies: 
   def szczekaj(self):   
       print("Hau hau!") 
 
moj_pies = Pies()       
inny_pies = Pies()     
 
moj_pies.szczekaj()     
print(moj_pies == inny_pies)    
```

**2.a) self**

**self to odniesienie (referencja) do bieżącej instancji klasy** (konkretnego obiektu). To sposób, w jaki obiekt "widzi samego siebie" i może operować na swoich własnych danych. 

 

Kiedy definiujesz metodę wewnątrz klasy, **Python automatycznie przekazuje instancję obiektu jako pierwszy argument tej metody. self pozwala metodzie odwoływać się do atrybutów i innych metod tej konkretnej instancji**. 

Bez self metoda nie wiedziałaby, do którego obiektu się odnosi – czy do atrybutów klasy, czy instancji. 

```Python
class Osoba: 
   def przedstaw_sie(self): 
       print(f"Jestem obiektem: {self}") 
       print(f"Mój typ to: {type(self)}") 
 
osoba1 = Osoba() 
osoba2 = Osoba() 
 
print("Wywołanie dla osoby1:") 
osoba1.przedstaw_sie()  # self = osoba1 
 
print("\nWywołanie dla osoby2:") 
osoba2.przedstaw_sie()  # self = osoba2 
```

Wynik:
```Python
Wywołanie dla osoby1: Jestem obiektem: <__main__.Osoba object at 0x7c84a9049be0> 
Mój typ to: <class '__main__.Osoba'> 
Wywołanie dla osoby2: Jestem obiektem: <__main__.Osoba object at 0x7c84a9049c10>  
Mój typ to: <class '__main__.Osoba'> 
```
 
**self w __init__**

Metoda **__init__ jest wywoływana automatycznie podczas tworzenia obiektu**. self w __init__ odnosi się do nowo tworzonego obiektu.

```Python
class Pracownik: 
   def __init__(self, imie, pensja): 
       print(f"1. Tworzę obiekt: {self}") 
       print(f"2. Przypisuję imię '{imie}' do self.imie") 
        
       self.imie = imie 
       self.pensja = pensja 
        
       print(f"3. Obiekt po inicjalizacji: imię={self.imie}, pensja={self.pensja}") 
       print(f"4. ID obiektu: {id(self)}") 
 
p = Pracownik("Anna", 5000) 
print(f"\nUtworzony obiekt: {p}") 
print(f"ID obiektu z zewnątrz: {id(p)}") 
```

Wynik: 
```Python
Tworzę obiekt: <__main__.Pracownik object at 0x7fa10867db50> 
Przypisuję imię 'Anna' do self.imie 
Obiekt po inicjalizacji: imię=Anna, pensja=5000
ID obiektu: 140329607486288 
Utworzony obiekt: <__main__.Pracownik object at 0x7fa10867db50>  
ID obiektu z zewnątrz: 140329607486288 
```
 
self odwołuje się do atrybutów obiektu 
```Python
class Samochod: 
   def __init__(self, marka):        
       self.marka = marka 
       self.predkosc = 0 
    
   def przyspiesz(self, wartosc): 
       # self.predkosc - odwołanie do atrybutu 
       self.predkosc += wartosc 
       print(f"{self.marka}: jadę z prędkością {self.predkosc} km/h") 
    
   def hamuj(self): 
       # self.predkosc - modyfikacja atrybutu 
       self.predkosc = 0 
       print(f"{self.marka}: zatrzymałem się") 
 
auto = Samochod("Toyota") 
auto.przyspiesz(50)  # self to auto 
auto.hamuj()         # self to auto 
```
 

self pozwala odróżnić atrybuty obiektu od zmiennych lokalnych 

```Python
class Przyklad: 
   def __init__(self, wartosc): 
       # wartosc - to parametr (zmienna lokalna) 
       # self.wartosc - to atrybut obiektu 
       self.wartosc = wartosc 
        
   def pokaz(self, wartosc): 
       # wartosc - to parametr metody 
       # self.wartosc - to atrybut obiektu 
       print(f"Parametr metody: {wartosc}") 
       print(f"Atrybut obiektu: {self.wartosc}") 
 
ob = Przyklad(100) 
ob.pokaz(50)  # Parametr: 50, Atrybut: 100 
```
 

Python automatycznie przekazuje obiekt jako pierwszy argument przy wywołaniu metody:

```Python
class Test: 
   def metoda(self, arg1, arg2): 
       print(f"self: {self}") 
       print(f"arg1: {arg1}, arg2: {arg2}") 
 
t = Test() 
 
# Te dwa wywołania są RÓWNOWAŻNE: 
t.metoda(10, 20)           # Python automatycznie wstawia self 
Test.metoda(t, 10, 20)     # Ręczne przekazanie obiektu jako self 
```

**3. Metody (Methods)**

**Metody to funkcje zdefiniowane wewnątrz klasy, które operują na obiektach. Pierwszy parametr metody to zawsze self** (odwołuje się do bieżącego obiektu). 

Metody pozwalają na interakcję z obiektem. Mogą modyfikować atrybuty lub zwracać wartości. Są wywoływane na obiekcie: obiekt.metoda(). 

 
```Python
class Samochod: 
   def jedz(self, predkosc): 
       print(f"Samochód jedzie z prędkością {predkosc} km/h.") 
    
   def zatrzymaj(self):        
       print("Samochód się zatrzymał.") 
 
moj_samochod = Samochod()  # Obiekt 
moj_samochod.jedz(100)     # Wyjście: Samochód jedzie z prędkością 100 km/h. 
moj_samochod.zatrzymaj()   # Wyjście: Samochód się zatrzymał. 
```

**4. Atrybuty (Attributes)**

**Atrybuty to zmienne związane z klasą lub obiektem. Mogą być atrybutami klasy** (wspólne dla wszystkich obiektów) lub **instancji** (unikalne dla każdego obiektu). 

Atrybuty przechowują dane. Dostęp do nich: obiekt.atrybut. Mogą być ustawiane w __init__ lub bezpośrednio. 

```Python
class Osoba: 
   gatunek = "Człowiek"  # Atrybut klasy (wspólny) 
 
   def __init__(self, imie):  # Więcej o __init__ poniżej 
       self.imie = imie      # Atrybut instancji (unikalny) 
 
jan = Osoba("Jan")            # Obiekt 
print(jan.imie)               # Wyjście: Jan 
print(jan.gatunek)            # Wyjście: Człowiek 
 
anna = Osoba("Anna") 
print(anna.imie)              # Wyjście: Anna 
print(anna.gatunek)           # Wyjście: Człowiek (wspólny) 
```

**5. init (Konstruktor)**

**__init__ to specjalna metoda (konstruktor), która jest wywoływana automatycznie przy tworzeniu obiektu. Służy do inicjalizacji atrybutów obiektu. Nie zwraca wartości, ale ustawia początkowe stany**. Pierwszy parametr to self. Możesz podać argumenty przy tworzeniu obiektu. 

```Python
class Ksiazka: 
   def __init__(self, tytul, autor, rok=2023):  # Konstruktor z domyślnym parametrem 
       self.tytul = tytul                       # Inicjalizacja atrybutów 
       self.autor = autor 
       self.rok = rok 
 
   def opis(self):  # Funkcja używająca atrybutów 
       return f"{self.tytul} autorstwa {self.autor} ({self.rok})" 
 
moja_ksiazka = Ksiazka("Python dla początkujących", "Jan Kowalski")  # Tworzenie z argumentami 
print(moja_ksiazka.opis())  # Wyjście: Python dla początkujących autorstwa Jan Kowalski (2023) 
 
inna_ksiazka = Ksiazka("Zaawansowany Python", "Anna Nowak", 2024) 
print(inna_ksiazka.opis())  # Wyjście: Zaawansowany Python autorstwa Anna Nowak (2024) 
```

 

## Dziedziczenie

**Dziedziczenie** to mechanizm programowania obiektowego (OOP), który pozwala utworzyć nową klasę na podstawie już istniejącej klasy.

Nowa klasa, nazywana **klasą pochodną**, może korzystać z atrybutów i metod zdefiniowanych w **klasie bazowej**, bez konieczności ponownego definiowania tego samego kodu.

Klasa pochodna może również:

* dodawać własne atrybuty i metody,
* rozszerzać funkcjonalność klasy bazowej,
* nadpisywać metody odziedziczone z klasy bazowej.

Dziedziczenie umożliwia ponowne wykorzystanie kodu oraz tworzenie hierarchii klas.

Przykładowa hierarchia:

```text
Zwierze
   |
   +--- Pies
   |
   +--- Kot
```

Klasy `Pies` i `Kot` mogą dziedziczyć wspólne właściwości i metody z klasy `Zwierze`.

### Kluczowe pojęcia

**Klasa bazowa (base class / parent class)** – klasa, z której dziedziczą inne klasy. Może zawierać wspólne atrybuty i metody wykorzystywane przez klasy pochodne.

**Klasa pochodna (derived class / child class)** – klasa dziedzicząca po klasie bazowej. Może korzystać z jej metod i atrybutów, a także dodawać własne lub nadpisywać odziedziczone metody.

**Nadpisywanie metod (method overriding)** – zdefiniowanie w klasie pochodnej metody o tej samej nazwie jak metoda znajdująca się w klasie bazowej. Dzięki temu klasa pochodna może zmienić zachowanie odziedziczonej metody.

**`super()`** – wbudowana funkcja pozwalająca uzyskać dostęp do metod znajdujących się dalej w hierarchii dziedziczenia zgodnie z kolejnością MRO. Jest często wykorzystywana w metodzie `__init__()` klasy pochodnej w celu wykonania kodu konstruktora klasy bazowej.

**MRO (Method Resolution Order)** – kolejność, w jakiej Python przeszukuje klasy podczas wyszukiwania metod i innych atrybutów. Ma szczególne znaczenie w przypadku dziedziczenia wielokrotnego.

---

### 1. Podstawowe dziedziczenie

Nazwę klasy bazowej zapisujemy w nawiasach podczas definiowania klasy pochodnej:

```python
class Animal:
    def __init__(self, name):
        self.name = name

    def speak(self):
        return f"{self.name} makes a sound."


class Dog(Animal):
    def speak(self):
        return f"{self.name} barks."


dog = Dog("Rex")

print(dog.name)       # Rex
print(dog.speak())    # Rex barks.
```

Klasa:

```python
class Dog(Animal):
```

oznacza, że `Dog` dziedziczy po klasie `Animal`.

Obiekt klasy `Dog` może korzystać z konstruktora `__init__()` zdefiniowanego w klasie `Animal`.

Metoda `speak()` została natomiast **nadpisana** w klasie `Dog`.

---

### 2. Sprawdzanie dziedziczenia – `issubclass()`

Funkcja **`issubclass()`** pozwala sprawdzić, czy jedna klasa dziedziczy po drugiej.

Składnia:

```python
issubclass(klasa_pochodna, klasa_bazowa)
```

Przykład:

```python
class Animal:
    pass


class Dog(Animal):
    pass


print(issubclass(Dog, Animal))  # True
print(issubclass(Animal, Dog))  # False
```

`Dog` jest klasą pochodną klasy `Animal`, dlatego:

```python
issubclass(Dog, Animal) # True
```

Możemy również wykorzystać `isinstance()` do sprawdzenia obiektu:

```python
dog = Dog()

print(isinstance(dog, Dog))     # True
print(isinstance(dog, Animal))  # True
```

Warto zapamiętać:

```text
isinstance()  → obiekt + klasa
issubclass()  → klasa + klasa
```

Jako ciekawostka:

```python
print(issubclass(bool, int))  # True
```

W Pythonie `bool` jest podklasą `int`.

---

### 3. Użycie `super()` w konstruktorze

Jeżeli klasa pochodna posiada własny konstruktor `__init__()`, możemy za pomocą `super()` wywołać kod konstruktora znajdującego się wcześniej w hierarchii dziedziczenia.

```python
class Animal:
    def __init__(self, name):
        self.name = name


class Dog(Animal):
    def __init__(self, name, breed):
        super().__init__(name)
        self.breed = breed

    def info(self):
        return f"{self.name} is a {self.breed}."


dog = Dog("Rex", "Labrador")

print(dog.info())
```

Wynik:

```text
Rex is a Labrador.
```

Instrukcja:

```python
super().__init__(name)
```

powoduje wykonanie odpowiedniej metody `__init__()` znajdującej się dalej w kolejności dziedziczenia.

Dzięki temu nie musimy ponownie pisać:

```python
self.name = name
```

w klasie `Dog`.

---

### 4. Wielokrotne dziedziczenie

Python umożliwia również dziedziczenie po więcej niż jednej klasie bazowej.

```python
class Flyer:
    def fly(self):
        return "Flying high!"


class Swimmer:
    def swim(self):
        return "Swimming fast!"


class Duck(Flyer, Swimmer):
    def quack(self):
        return "Quack!"


duck = Duck()

print(duck.fly())
print(duck.swim())
print(duck.quack())

# Wynik:
# Flying high!
# Swimming fast!
# Quack!
```

Klasa:

```python
class Duck(Flyer, Swimmer):
```

dziedziczy po dwóch klasach:

```text
Flyer
Swimmer
```

Dlatego obiekt `duck` może korzystać zarówno z metody `fly()`, jak i `swim()`.

---

### 5. MRO – Method Resolution Order

W przypadku dziedziczenia Python musi wiedzieć, w jakiej kolejności przeszukiwać klasy.

Kolejność tę możemy sprawdzić za pomocą:

```python
print(Duck.mro())
```

Przykładowy wynik:

```text
[
    <class '__main__.Duck'>,
    <class '__main__.Flyer'>,
    <class '__main__.Swimmer'>,
    <class 'object'>
]
```

Oznacza to, że podczas wyszukiwania metody Python sprawdza klasy w kolejności:

```text
Duck
↓
Flyer
↓
Swimmer
↓
object
```

`object` jest podstawową klasą, po której pośrednio lub bezpośrednio dziedziczą klasy w Pythonie.

Przy bardziej złożonych hierarchiach dziedziczenia Python ustala MRO w taki sposób, aby jednoznacznie określić kolejność wyszukiwania metod.

> **Informacja dodatkowa:** mechanizm stosowany przez Pythona do ustalania MRO w przypadku dziedziczenia wielokrotnego opiera się na algorytmie określanym jako **C3 linearization**. 

---

### 6. Praktyczny przykład dziedziczenia – Pydantic `BaseModel`

Pydantic jest zewnętrzną biblioteką Pythona służącą między innymi do tworzenia modeli danych i ich walidacji.

Modele Pydantic tworzy się poprzez dziedziczenie po klasie `BaseModel`.

```python
from pydantic import BaseModel

class User(BaseModel):
    name: str
    age: int
    email: str


user = User(
    name="Anna",
    age=18,
    email="anna@example.com"
)

print(user)
```

Klasa:

```python
class User(BaseModel):
```

oznacza, że `User` dziedziczy po klasie `BaseModel` dostarczonej przez bibliotekę Pydantic.

Możemy to sprawdzić za pomocą `issubclass()`:

```python
print(issubclass(User, BaseModel))  # True
```

Możemy również sprawdzić utworzony obiekt:

```python
print(isinstance(user, User))       # True
print(isinstance(user, BaseModel))  # True
```

Pydantic wykorzystuje adnotacje typów:

```python
name: str
age: int
email: str
```

do opisu i walidacji danych modelu.

Ponieważ Pydantic nie należy do biblioteki standardowej Pythona, przed użyciem należy go zainstalować, np.:

```bash
pip install pydantic
```

Przykład z `BaseModel` jest praktycznym zastosowaniem dziedziczenia, ale najlepiej omawiać go **dopiero po zrozumieniu zwykłego dziedziczenia, `isinstance()` i `issubclass()`**.

## Moduły i pakiety
Moduł to plik z rozszerzeniem `.py`, który zawiera kod Pythona, np. funkcje, klasy, zmienne lub inne instrukcje.

Dzięki modułom możemy dzielić program na mniejsze, logiczne części, wielokrotnie wykorzystywać napisany kod oraz łatwiej organizować większe projekty.


### 1. Importowanie modułu – import 
```python
import math           
import random 
import os 

 
print(math.pi)              
print(math.sqrt(16))        
 

liczba = random.randint(1, 10) 
print(liczba) 

print(f"Aktualny katalog roboczy: {os.getcwd()}")   
```

Po zastosowaniu `import math` uzyskujemy dostęp do elementów modułu poprzez jego nazwę:

`nazwa_modułu.nazwa_elementu`

### 2. Importowanie konkretnych elementów – `from ... import ...` 

```python
from math import sqrt, pi 
from random import randint, choice 
from os import getcwd 
 

print(sqrt(25))         
print(pi) 
 
losowa = randint(1, 100) 
print(losowa)  

print(f"Aktualny katalog roboczy: {getcwd()}")    

kolor = choice(["czerwony", "zielony", "niebieski"])
print(kolor)
```

Można również zastosować import z użyciem `*`, jednak taki sposób importowania jest **niezalecany**:
```python
from math import *
```
Taki zapis importuje wiele nazw bezpośrednio do bieżącej przestrzeni nazw. Jest niezalecany, ponieważ utrudnia ustalenie, z którego modułu pochodzi dana funkcja lub zmienna i może prowadzić do konfliktów nazw.

### 3. Tworzenie własnych modułów 

Struktura:
```text
moj_projekt/
├── main.py
├── obliczenia.py
└── utils.py
```

Plik obliczenia.py (moduł): 
```python
# obliczenia.py 

 

def dodaj(a, b): 
    return a + b 

 
def odejmij(a, b): 
    return a - b 
 

def pomnoz(a, b): 
    return a * b 

 
# zmienne na poziomie modułu 

PI = 3.14159 
TAX_RATE = 0.23 


class Kalkulator: 

    def __init__(self): 
        self.wynik = 0 

     
    def dodaj(self, x): 
        self.wynik += x 
        return self.wynik 
```        

Plik main.py (używamy modułu): 
```python
import obliczenia 
from obliczenia import dodaj, Kalkulator 

 
print(obliczenia.dodaj(5, 7))           # 12 
print(dodaj(10, 20))                    # 30 
 

kalk = Kalkulator() 
print(kalk.dodaj(100))                  # 100 
print(kalk.dodaj(50))                   # 150 
```
W pierwszym przypadku odwołujemy się do funkcji przez nazwę modułu `obliczenia.dodaj()`

W drugim funkcja `dodaj()` została zaimportowana bezpośrednio, dlatego możemy użyć jej bez nazwy modułu.

### 4. Aliasy – `as`
Słowo kluczowe `as` pozwala nadać importowanemu modułowi, funkcji lub klasie inną nazwę, nazywaną aliasem.

```python
import random as rnd

liczba = rnd.randint(1, 10)
print(liczba)
```
Możemy również utworzyć alias dla konkretnego elementu modułu:
```python
from math import sqrt as pierwiastek

print(pierwiastek(25))
```

### 5. Pakiety (packages) – struktura z wieloma modułami 

**Pakiet** pozwala organizować wiele powiązanych modułów w strukturze katalogów.

Tradycyjny pakiet Pythona zawiera plik `__init__.py`.

Od Pythona 3.3 istnieją również tzw. **namespace packages**, które mogą działać bez pliku `__init__.py`. W typowych projektach edukacyjnych i w zwykłych pakietach nadal często stosuje się `__init__.py`.

W przedstawionych dalej przykładach będziemy korzystać ze zwykłych pakietów zawierających plik `__init__.py`

Przykład struktury pakietu: 
```text
sklep/ 
├── __init__.py 
├── produkty.py 
├── zamowienia.py 
├── platnosci/ 
│   ├── __init__.py 
│   ├── karta.py 
│   └── przelew.py 
└── utils/ 
    ├── __init__.py 
    └── helpers.py 
```
 

Plik sklep/produkty.py: 
```python
# sklep/produkty.py 


class Produkt: 
    def __init__(self, nazwa, cena): 
        self.nazwa = nazwa 
        self.cena = cena 


def stworz_produkt(nazwa, cena): 
    return Produkt(nazwa, cena) 
``` 

Plik sklep/zamowienia.py: 
```python
# sklep/zamowienia.py 

from .produkty import Produkt   # import względny 


class Zamowienie: 
    def __init__(self): 
        self.produkty = [] 
    

    def dodaj_produkt(self, produkt: Produkt):
        if isinstance(produkt, Produkt):
            self.produkty.append(produkt)
``` 

Plik sklep/__init__.py 
```python
# sklep/__init__.py  

from .produkty import Produkt, stworz_produkt 
from .zamowienia import Zamowienie # Kropka . oznacza bieżący pakiet.
 

__all__ = ['Produkt', 'stworz_produkt', 'Zamowienie'] 
```
Kod zapisany w `__init__.py` jest wykonywany podczas importowania pakietu. Z tego powodu nie należy umieszczać tam niepotrzebnych operacji wykonywanych automatycznie.
Użycie pakietu w main.py: 

 
```python
# main.py 
import sklep 
from sklep import Produkt, stworz_produkt, Zamowienie 
 

p1 = stworz_produkt("Laptop", 4999) 
p2 = Produkt("Myszka", 89) 
 
zam1 = Zamowienie() 
zam1.dodaj_produkt(p1) 
zam1.dodaj_produkt(p2) 

print(f"Złożono zamówienie na {len(zam1.produkty)} produktów")


p3 = sklep.stworz_produkt("Laptop", 4999)
p4 = sklep.Produkt("Myszka", 89)

zam2 = sklep.Zamowienie()
zam2.dodaj_produkt(p3) 
zam2.dodaj_produkt(p4) 

print(f"Złożono zamówienie na {len(zam2.produkty)} produktów")


```

### 6. Rola pliku `__init__.py` 

Plik `__init__.py` ma kilka ważnych funkcji: 

- Pozwala utworzyć zwykły pakiet Pythona – obecność `__init__.py` powoduje, że katalog jest traktowany jako regularny pakiet. 
- Kod inicjalizujący – kod znajdujący się w `__init__.py` jest wykonywany podczas pierwszego importu danego pakietu w danym uruchomieniu programu.
- Udostępnianie wygodnego interfejsu pakietu – możemy zaimportować wybrane klasy lub funkcje z podmodułów i udostępnić je bezpośrednio z poziomu pakietu
- Definiowanie `__all__` – określa nazwy brane pod uwagę przy użyciu `from pakiet import *`.
  


### 7. Uruchamianie modułu a jego importowanie – `__name__`

Każdy moduł Pythona posiada specjalną zmienną:

`__name__`

Jeżeli plik zostanie uruchomiony bezpośrednio, jej wartością jest:

`"__main__"`

Dlatego często stosuje się zapis:

```python
def main():
    print("Program został uruchomiony bezpośrednio.")


if __name__ == "__main__":
    main()
```

Jeżeli natomiast plik zostanie zaimportowany jako moduł, warunek:

`if __name__ == "__main__":`

nie zostanie spełniony, dlatego kod znajdujący się wewnątrz tego bloku nie zostanie wykonany.

### Pojęcia

**Biblioteka standardowa** – zbiór modułów i pakietów dostarczanych razem z Pythonem, np. `math`, `random`, `os`.

**Własne moduły** – pliki `.py` utworzone przez programistę.

**Biblioteki zewnętrzne** – pakiety instalowane dodatkowo, najczęściej za pomocą `pip`, np. `requests`, `numpy`, `pandas`.

## Modyfikatory dostępu


**Modyfikatory dostępu** określają, w jaki sposób można korzystać z atrybutów i metod klasy.

W Pythonie nie ma formalnych modyfikatorów public, protected, private jak np. w Javie. Stosuje się głównie **konwencje nazewnictwa**:

```text
name      → publiczny
_name     → niepubliczny / wewnętrzny zgodnie z konwencją
__name    → podlega mechanizmowi name mangling
```
**name mangling** = zmiana nazwy przez Pythona.

Przykład:

```python
class User:
    def __init__(self, name, email, password):
        self.name = name
        self._email = email
        self.__password = password

    def show_info(self):
        print(f"Imię: {self.name}")
        print(f"E-mail: {self._email}")

    def check_password(self, password):
        return self.__password == password



class UserService:
    def show_data(self, user):
        print("Dane użytkownika:")
        print(user.name)       # publiczny - dostęp OK
        print(user._email)     # dostęp możliwy, ale niezalecany

        # print(user.__password)
        # AttributeError - brak bezpośredniego dostępu

    def login(self, user, password):
        if user.check_password(password):
            print("Logowanie poprawne")
        else:
            print("Niepoprawne hasło")


user = User( "Anna", "anna@example.com", "tajne123")
service = UserService()

service.show_data(user)

service.login(user, "tajne123")
service.login(user, "inne_haslo")
# wynik:
# Dane użytkownika:
# Anna
# anna@example.com
# Logowanie poprawne
# Niepoprawne hasło

```
Jeżeli odkomentujesz:

`print(user.__password)`

otrzymasz błąd:
```text
AttributeError: 'User' object has no attribute '_UserService__password'
```

Najważniejsze jest tutaj to, że UserService **nie próbuje odczytać** `__password` **bezpośrednio**. Zamiast tego korzysta z publicznej metody `user.check_password(password)`

Metoda `check_password()` należy do klasy User, dlatego wewnątrz niej można odwołać się do `self.__password`

Czyli `user.name` jest publiczne i dostępne z drugiej klasy, jest technicznie dostępne, ale zgodnie z konwencją jest elementem wewnętrznym, a `user.__password` nie jest bezpośrednio dostępne z `UserService`.



**name mangling** istnieje przede wszystkim po to, aby **uniknąć przypadkowych konfliktów nazw w klasach i klasach potomnych**, a nie po to, żeby zapewnić prawdziwe zabezpieczenie danych.

Na przykład:
```python
class User:
    def __init__(self):
        self.__value = 10
```

Python przechowuje:
```text
_User__value
```

A jeżeli druga klasa ma:
```python
class Admin:
    def __init__(self):
        self.__value = 20
```

to Python utworzy:
```text
_Admin__value
```

Dzięki temu te dwie nazwy się nie mieszają. 

**Ważne**: nie dotyczy to nazw typu:
```python
__init__
__str__
```

bo są to specjalne metody Pythona, a nie atrybuty podlegające name mangling.


## @property

**@property** to **dekorator**, który pozwala korzystać z metody klasy tak, jakby była zwykłym atrybutem obiektu.

Oznacza to, że metoda nadal może wykonywać obliczenia lub inną logikę, ale podczas korzystania z niej nie zapisujemy nawiasów ().

Przykład bez @property:

```python
class Product:
    def __init__(self, price):
        self.price = price


    def get_price_with_tax(self):
        return self.price * 1.23


product = Product(100)

print(product.get_price_with_tax()) # 123.0
```
 

Ponieważ `get_price_with_tax()` jest zwykłą metodą, musimy użyć nawiasów: `product.get_price_with_tax()`

Ten sam przykład z `@property`:

```python
class Product:
    def __init__(self, price):
        self.price = price


    @property
    def price_with_tax(self):
        return self.price * 1.23


product = Product(100)

print(product.price_with_tax) # 123.0
```
 


Teraz korzystamy z `product.price_with_tax` zamiast `product.price_with_tax()`. Metoda `def price_with_tax(self):` dzięki dekoratorowi `@property` jest dostępna jak właściwość obiektu.

`@property` jest przydatne, gdy chcemy, aby wartość wyglądała dla użytkownika klasy jak zwykły atrybut, ale w rzeczywistości była **obliczana lub kontrolowana przez metodę**.

Przykład:

```python
class Rectangle:
    def __init__(self, width, height):
        self.width = width
        self.height = height


    @property
    def area(self):
        return self.width * self.height

rectangle = Rectangle(5, 4) 
print(rectangle.area) # 20
```


Nie przechowujemy osobno pola `self.area` Pole powierzchni jest obliczane na podstawie

```python
self.width
self.height
```

za każdym razem, gdy użyjemy `rectangle.area`


`@property` a **zwykły atrybut**


Zwykły atrybut:

```python
class User:
    def __init__(self, name):
        self.name = name

user = User("Anna")
print(user.name)
```

`name` przechowuje konkretną wartość.

Natomiast `@property`:

```python
class User:
    def __init__(self, first_name, last_name):
        self.first_name = first_name
        self.last_name = last_name


    @property
    def full_name(self):
        return f"{self.first_name} {self.last_name}"


user = User("Anna", "Kowalska")
print(user.full_name)
```

`full_name` nie musi być przechowywane jako osobny atrybut. Jego wartość jest tworzona na podstawie innych danych.


## Ważne

Metodę z `@property` odczytujemy bez nawiasów:

```python
print(user.full_name)       # poprawnie
```

a nie:

```python
print(user.full_name())     # błąd
```


`@property` **może również kontrolować dostęp do danych**

Częstym zastosowaniem `@property` jest kontrolowanie sposobu odczytu i zmiany wartości.

Na przykład:

```python
class Product:
    def __init__(self, price):
        self._price = price


    @property
    def price(self):
        return self._price
 

product = Product(100)

print(product.price) # 100
```
Mimo że rzeczywista wartość znajduje się w `self._price` użytkownik klasy korzysta z `product.price`. To pozwala później dodać dodatkową logikę bez zmieniania sposobu korzystania z klasy.



## Gettery i settery

**Getter** to metoda służąca do odczytywania wartości atrybutu, a **setter** to metoda służąca do ustawiania lub zmiany jego wartości.
Stosujemy je wtedy, gdy chcemy kontrolować dostęp do danych obiektu, np. sprawdzać poprawność wartości przed jej zapisaniem.

Przykład bez gettera i settera:

```python
class Product:
    def __init__(self, price):
        self.price = price


product = Product(100)

print(product.price)

product.price = -50

print(product.price)
```

Python pozwoli przypisać: -50 mimo że ujemna cena nie ma sensu.
Możemy temu zapobiec za pomocą gettera i settera.


**Getter i setter jako zwykłe metody**:

```python
class Product:
    def __init__(self, price):
        self._price = price

    def get_price(self):
        return self._price

    def set_price(self, value):
        if value < 0:
            raise ValueError("Cena nie może być ujemna.")

        self._price = value

product = Product(100)
print(product.get_price()) # 100

product.set_price(150)
print(product.get_price()) # 150       
```

Jeżeli spróbujemy:

```python
product.set_price(-50)
```
otrzymamy błąd:

```text
ValueError: Cena nie może być ujemna.
```

Tutaj `get_price()` jest getterem, ponieważ odczytuje wartość.

Natomiast `set_price()` jest setterem, ponieważ ustawia nową wartość.


**Getter i setter z użyciem `@property`**

W Pythonie częściej stosuje się `@property`, ponieważ pozwala korzystać z gettera i settera tak, jakbyśmy pracowali ze zwykłym atrybutem.

```python
class Product:
    def __init__(self, price):
        self.price = price


    @property
    def price(self):
        return self._price


    @price.setter
    def price(self, value):
        if value < 0:
            raise ValueError("Cena nie może być ujemna.")


        self._price = value

product = Product(100)
print(product.price) # 100

product.price = 150
print(product.price) # 150        
```
Zwróć uwagę, że nie piszemy:

```python
product.get_price()
product.set_price(150)
```

tylko:

```python
product.price
product.price = 150
```

Kod wygląda więc tak, jakby `price` było zwykłym atrybutem, ale w rzeczywistości jego odczyt i modyfikacja są kontrolowane przez metody.

**Getter z `@property`**

Ten fragment:

```python
@property
def price(self):
    return self._price
```
pełni rolę **gettera**. Gdy wykonujemy `print(product.price)` Python wywołuje metodę `price()` oznaczoną dekoratorem `@property`.


**Setter z `@property`**

Setter definiujemy za pomocą: `@price.setter`
Przykład:

```python
@price.setter
def price(self, value):
    if value < 0:
        raise ValueError("Cena nie może być ujemna.")


    self._price = value
```

Gdy wykonujemy `product.price = 150` Python wywołuje setter i przekazuje wartość 150 do parametru `value` Dzięki temu możemy sprawdzić wartość przed jej zapisaniem.

**Ważny błąd — nieskończona rekurencja**

W setterze nie należy pisać:

```python
@price.setter
def price(self, value):
    self.price = value
```

ponieważ 

```python 
self.price = value
```
ponownie wywoła setter `price`, który znowu wykona: `self.price = value` i proces będzie się powtarzał.

Dlatego używamy osobnego atrybutu `self._price = value`

Poprawnie:

```python
@price.setter
def price(self, value):
    self._price = value
```    

## Klasy abstrakcyjne

**Klasa abstrakcyjna** to klasa bazowa, której głównym zadaniem jest określenie wspólnej struktury i zachowania dla klas pochodnych.

Może definiować:

* atrybuty,
* zwykłe metody z gotową implementacją,
* metody abstrakcyjne, których implementację powinny dostarczyć klasy pochodne.

Klasa posiadająca co najmniej jedną niezrealizowaną metodę abstrakcyjną **nie może być bezpośrednio instancjonowana**, czyli nie można utworzyć jej obiektu.

Klasy abstrakcyjne są ściśle związane z **dziedziczeniem**.

Przykładowa hierarchia:

```text
PaymentProcessor
       |
       +---- StripeProcessor
       |
       +---- PayPalProcessor
```

`PaymentProcessor` może określić, jakie operacje powinien obsługiwać każdy procesor płatności, natomiast klasy `StripeProcessor` i `PayPalProcessor` określają, **w jaki sposób** te operacje zostaną wykonane.

---
 

**Klasy abstrakcyjne stosujemy** wtedy, gdy kilka klas powinno posiadać **wspólny zestaw metod**, ale ich sposób działania będzie różny.

Przykładowo każdy system płatności powinien umożliwiać:

```text
przetworzenie płatności
zwrot płatności
```

ale Stripe i PayPal mogą wykonywać te operacje zupełnie inaczej.

Klasa abstrakcyjna może więc określić:

> „Każdy procesor płatności ma posiadać metodę `process_payment()` oraz `refund()`”.

Nie określa natomiast, jak dokładnie Stripe lub PayPal mają te operacje wykonać.

Dzięki temu klasy abstrakcyjne pozwalają:

* określić wspólny interfejs dla klas pochodnych,
* wymusić implementację wymaganych operacji,
* ponownie wykorzystywać wspólny kod,
* uporządkować hierarchię klas,
* zmniejszyć ryzyko pominięcia wymaganej metody.

---

### Moduł `abc`

Python udostępnia moduł `abc` czyli **Abstract Base Classes**.

Do tworzenia klas abstrakcyjnych najczęściej wykorzystujemy:

```python
from abc import ABC, abstractmethod
```

`ABC` służy jako klasa bazowa pomagająca tworzyć klasy abstrakcyjne.

`@abstractmethod` jest dekoratorem oznaczającym metodę jako abstrakcyjną.

Podstawowy schemat:

```python
from abc import ABC, abstractmethod


class PaymentProcessor(ABC):

    @abstractmethod
    def process_payment(self, amount):
        pass
```

---

### Metoda abstrakcyjna

**Metoda abstrakcyjna** określa, że dana operacja powinna istnieć w klasach konkretnych dziedziczących po klasie abstrakcyjnej.

Oznaczamy ją dekoratorem `@abstractmethod`

Przykład:

```python
from abc import ABC, abstractmethod

class PaymentProcessor(ABC):

    @abstractmethod
    def process_payment(self, amount: float, currency: str) -> str:
        pass
```

Klasa `PaymentProcessor` określa, że procesor płatności powinien posiadać metodę `process_payment()`

Nie określa jednak jeszcze sposobu wykonania płatności.

---

### Przykład klasy abstrakcyjnej

Utwórzmy klasę abstrakcyjną reprezentującą procesor płatności:

```python
from abc import ABC, abstractmethod


class PaymentProcessor(ABC):

    @abstractmethod
    def process_payment(self, amount: float, currency: str) -> str:
        pass

    @abstractmethod
    def refund(self, transaction_id: str) -> bool:
        pass
```

Klasa posiada dwie metody abstrakcyjne: `process_payment()`, `refund()`

Dlatego nie możemy utworzyć jej obiektu:

```python
processor = PaymentProcessor()
```

Python zgłosi błąd:

```text
TypeError: Can't instantiate abstract class PaymentProcessor without an implementation for abstract methods 'process_payment', 'refund'
```

Klasa posiada bowiem niezrealizowane metody abstrakcyjne.

---

### Implementacja metod abstrakcyjnych w klasie pochodnej

Teraz utworzymy konkretną klasę:

```python
class StripeProcessor(PaymentProcessor):

    def process_payment(self, amount: float, currency: str) -> str:
        transaction_id = "stripe_123"

        print(f"Stripe: płatność {amount} {currency} przyjęta")

        return transaction_id

    def refund(self, transaction_id: str) -> bool:
        print(f"Stripe: zwrot transakcji {transaction_id}")

        return True
```

Klasa `StripeProcessor` dziedziczy po `PaymentProcessor` i implementuje obie wymagane metody `process_payment()`, `refund()`

Dlatego możemy utworzyć jej obiekt:

```python
stripe = StripeProcessor()

transaction_id = stripe.process_payment(99.99, "PLN")
stripe.refund(transaction_id)
```

Przykładowy wynik:

```text
Stripe: płatność 99.99 PLN przyjęta
Stripe: zwrot transakcji stripe_123
```

---

### Brak implementacji wszystkich metod abstrakcyjnych

Załóżmy, że utworzymy klasę `PayPalProcessor`, ale zaimplementujemy tylko jedną metodę:

```python
class PayPalProcessor(PaymentProcessor):

    def process_payment(self, amount: float, currency: str) -> str:
        return "paypal_123"
```

Brakuje implementacji `refund()` Dlatego utworzenie obiektu

```python
paypal = PayPalProcessor()
```

spowoduje błąd:

```text
TypeError: Can't instantiate abstract class PayPalProcessor without an implementation for abstract method 'refund'
```

Klasa `PayPalProcessor` nadal posiada niezrealizowaną metodę abstrakcyjną, więc **sama pozostaje klasą abstrakcyjną**.

### Ważne

Klasa pochodna nie musi implementować wszystkich odziedziczonych metod abstrakcyjnych już w momencie jej definiowania.

Jeżeli jednak nie zaimplementuje wszystkich metod abstrakcyjnych, *sama pozostaje klasą abstrakcyjną* i *nie można tworzyć jej obiektów*.

Aby klasa pochodna stała się klasą konkretną, z której można tworzyć obiekty, musi zaimplementować wszystkie odziedziczone metody abstrakcyjne.

---

### Klasa abstrakcyjna może zawierać zwykłe metody i atrybuty

Klasa abstrakcyjna nie musi składać się wyłącznie z metod abstrakcyjnych.

Może posiadać:

* konstruktor `__init__()`,
* atrybuty,
* zwykłe metody,
* metody abstrakcyjne.

Przykład:

```python
from abc import ABC, abstractmethod


class PaymentProcessor(ABC):

    def __init__(self, provider_name: str):
        self.provider_name = provider_name

    @abstractmethod
    def process_payment(self, amount: float, currency: str) -> str:
        pass

    def show_provider(self):
        print(f"Dostawca płatności: {self.provider_name}")
 

# Klasa pochodna: 
class StripeProcessor(PaymentProcessor):

    def process_payment(self, amount: float, currency: str) -> str:
        return f"Stripe: płatność {amount} {currency} przyjęta"
 

# Tworzymy obiekt: 
stripe = StripeProcessor("Stripe")
stripe.show_provider()

print(stripe.process_payment(100, "PLN"))
```

Wynik:

```text
Dostawca płatności: Stripe
Stripe: płatność 100 PLN przyjęta
```

Metody `show_provider()` nie musimy ponownie definiować w `StripeProcessor`, ponieważ jest to zwykła metoda odziedziczona po `PaymentProcessor`.

Natomiast `process_payment()` musi zostać zaimplementowana, ponieważ została oznaczona jako abstrakcyjna.

---

### Klasa abstrakcyjna a dziedziczenie

Klasy abstrakcyjne wykorzystują zwykły mechanizm dziedziczenia.

Możemy więc użyć poznanych wcześniej funkcji:

```python
issubclass()
isinstance()
```

Przykład:

```python
print(issubclass(StripeProcessor, PaymentProcessor))
```

Wynik:

```text
True
```

Ponieważ:

```python
class StripeProcessor(PaymentProcessor):
```

oznacza, że `StripeProcessor` dziedziczy po `PaymentProcessor`.

Możemy również sprawdzić obiekt:

```python
stripe = StripeProcessor("Stripe")

print(isinstance(stripe, StripeProcessor))
print(isinstance(stripe, PaymentProcessor))
```

Wynik:

```text
True
True
```

Warto zapamiętać:

```text
isinstance()  → obiekt + klasa

issubclass()  → klasa + klasa
```

---

### Pełniejszy przykład – system płatności

Klasa abstrakcyjna może zawierać zarówno wspólną implementację, jak i metody abstrakcyjne.

```python
from abc import ABC, abstractmethod
from datetime import datetime


class PaymentProcessor(ABC):

    def __init__(self, api_key: str):
        self.api_key = api_key
        self.transaction_log = []

    @abstractmethod
    def process_payment(
        self,
        amount: float,
        currency: str
    ) -> str:
        pass

    @abstractmethod
    def refund(
        self,
        transaction_id: str
    ) -> bool:
        pass

    def log_transaction(
        self,
        transaction_id: str,
        amount: float
    ):
        self.transaction_log.append({
            "id": transaction_id,
            "amount": amount,
            "timestamp": datetime.now()
        })

        print(f"Zalogowano transakcję: {transaction_id}")
 

# Implementacja Stripe:
 
class StripeProcessor(PaymentProcessor):

    def process_payment(
        self,
        amount: float,
        currency: str
    ) -> str:

        transaction_id = (
            f"stripe_{int(datetime.now().timestamp())}"
        )

        print(
            f"Stripe: płatność {amount} "
            f"{currency} przyjęta"
        )

        self.log_transaction(
            transaction_id,
            amount
        )

        return transaction_id

    def refund(
        self,
        transaction_id: str
    ) -> bool:

        print(
            f"Stripe: zwrot dla {transaction_id}"
        )

        return True
 

# Implementacja PayPal:

class PayPalProcessor(PaymentProcessor):

    def process_payment(
        self,
        amount: float,
        currency: str
    ) -> str:

        transaction_id = (
            f"paypal_{int(datetime.now().timestamp())}"
        )

        print(
            f"PayPal: płatność {amount} "
            f"{currency} przyjęta"
        )

        self.log_transaction(
            transaction_id,
            amount
        )

        return transaction_id

    def refund(
        self,
        transaction_id: str
    ) -> bool:

        print(
            f"PayPal: zwrot dla {transaction_id}"
        )

        return True
 

# Utworzenie obiektów: 
stripe = StripeProcessor("sk_test_12345")
paypal = PayPalProcessor("paypal_key_999")
 
# Wykonanie płatności: 
trans_id1 = stripe.process_payment(99.99, "PLN")
trans_id2 = paypal.process_payment(49.50, "EUR")

# Zwrot: 
stripe.refund(trans_id1)
 

# Nie możemy natomiast utworzyć:
# processor = PaymentProcessor("abc123")
# ponieważ `PaymentProcessor` posiada niezrealizowane metody abstrakcyjne.
```
---

### Najczęstsze zastosowania klas abstrakcyjnych

| Zastosowanie       | Przykładowa klasa abstrakcyjna | Klasy pochodne                                |
| ------------------ | ------------------------------ | --------------------------------------------- |
| System płatności   | `PaymentProcessor`             | `StripeProcessor`, `PayPalProcessor`          |
| Eksport raportów   | `ReportExporter`               | `PDFExporter`, `ExcelExporter`, `CSVExporter` |
| Modele AI          | `AIModel`                      | różne implementacje modeli                    |
| Obsługa urządzeń   | `DeviceDriver`                 | `USBDriver`, `BluetoothDriver`                |
| Pluginy            | `Plugin`                       | różne rozszerzenia aplikacji                  |
| Repozytoria danych | `Repository`                   | `UserRepository`, `ProductRepository`         |

Klasa abstrakcyjna jest szczególnie przydatna wtedy, gdy wiele klas powinno wykonywać **te same rodzaje operacji**, ale każda z nich realizuje je w inny sposób.

---

### Abstrakcyjne właściwości – `@property` i `@abstractmethod`

Klasa abstrakcyjna może wymagać od klas pochodnych nie tylko metod, ale również właściwości.

Możemy połączyć: `@property` z `@abstractmethod`

Przykład:

```python
from abc import ABC, abstractmethod


class PaymentProcessor(ABC):

    @property
    @abstractmethod
    def provider_name(self) -> str:
        pass

    @abstractmethod
    def process_payment(
        self,
        amount: float,
        currency: str
    ) -> str:
        pass

    def log(self, message: str):
        print(
            f"[{self.provider_name}] {message}"
        )

# Klasa Stripe:
 
class StripeProcessor(PaymentProcessor):

    @property
    def provider_name(self) -> str:
        return "Stripe"

    def process_payment(
        self,
        amount: float,
        currency: str
    ) -> str:

        self.log(
            f"Przetwarzam płatność "
            f"{amount} {currency}"
        )

        return "stripe_tx_123"
 

# Użycie: 
stripe = StripeProcessor()
print(stripe.provider_name)
print(stripe.process_payment( 99.99, "PLN"))
```

Klasa `PaymentProcessor` określa więc, że każda konkretna implementacja powinna udostępniać właściwość `provider_name` oraz metodę `process_payment()`

---

### Klasa abstrakcyjna a zwykła klasa bazowa

Nie każda klasa bazowa musi być klasą abstrakcyjną.

Zwykła klasa bazowa:

```python
class Animal:

    def speak(self):
        print("Dźwięk")
```

może być instancjonowana:

```python
animal = Animal()
```

Natomiast klasa posiadająca metodę abstrakcyjną:

```python
from abc import ABC, abstractmethod


class Animal(ABC):

    @abstractmethod
    def speak(self):
        pass
```

nie może być instancjonowana:

```python
# animal = Animal()
```

dopóki metoda `speak()` pozostaje abstrakcyjna.

---

### Klasa abstrakcyjna a `Protocol`

## Materiał dodatkowy

Python udostępnia również `typing.Protocol`

`Protocol` **nie jest nowszą wersją klasy abstrakcyjnej**.

Jest innym mechanizmem, wykorzystywanym przede wszystkim do **strukturalnego typowania**.

W przypadku klasy abstrakcyjnej najczęściej mamy jawne dziedziczenie:

```python
class StripeProcessor(PaymentProcessor):
    ...
```

W przypadku protokołu klasa nie musi dziedziczyć po protokole.

Wystarczy, że posiada odpowiednie atrybuty i metody.

Przykład:

```python
from typing import Protocol

class PaymentProcessor(Protocol):

    @property
    def provider_name(self) -> str:
        ...

    def process_payment(
        self,
        amount: float,
        currency: str
    ) -> str:
        ...


# Klasa Stripe:
class StripeProcessor:

    @property
    def provider_name(self) -> str:
        return "Stripe"

    def process_payment(
        self,
        amount: float,
        currency: str
    ) -> str:

        return "stripe_tx_123"
 

# Klasa testowa:
class FakeTestProcessor:

    @property
    def provider_name(self) -> str:
        return "Testowy"

    def process_payment(
        self,
        amount: float,
        currency: str
    ) -> str:

        return "test_ok"

'''
Żadna z tych klas nie dziedziczy jawnie po `PaymentProcessor`
Mimo to obie mają strukturę zgodną z protokołem.
Możemy napisać:
'''
 
def wykonaj_platnosc(processor: PaymentProcessor,kwota: float):

    print(f"Procesor: " f"{processor.provider_name}")

    tx = processor.process_payment(kwota,"PLN")

    print(f"Transakcja: {tx}")


# Następnie:
stripe = StripeProcessor()
testowy = FakeTestProcessor()

wykonaj_platnosc(stripe, 149.99)

wykonaj_platnosc(testowy, 9.99)
```

## `ABC` a `Protocol`

| ABC                                                                           | Protocol                                                                           |
| ----------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| opiera się na dziedziczeniu                                                   | opiera się głównie na zgodności struktury                                          |
| klasa zwykle jawnie dziedziczy po klasie abstrakcyjnej                        | nie wymaga jawnego dziedziczenia                                                   |
| może zawierać wspólną implementację                                           | służy przede wszystkim do określania wymaganego interfejsu                         |
| może uniemożliwić utworzenie obiektu przy brakujących metodach abstrakcyjnych | samo w sobie nie wymusza implementacji metod podczas zwykłego wykonywania programu |
| przydatne do projektowania hierarchii klas                                    | szczególnie przydatne przy type hints i statycznym sprawdzaniu typów               |

`Protocol` dobrze współpracuje z narzędziami do statycznej analizy typów, takimi jak:

```text
mypy
pyright
```

Można go traktować jako formalny sposób opisania zasady:

> „Nie interesuje mnie, po jakiej klasie dziedziczysz. Interesuje mnie, czy posiadasz wymagane metody i właściwości”.

Jest to związane z koncepcją **duck typing**.

---

### Najważniejsze informacje do zapamiętania

**Klasa abstrakcyjna:**

* jest wykorzystywana jako klasa bazowa,
* może posiadać metody abstrakcyjne,
* może posiadać zwykłe metody i atrybuty,
* wykorzystuje `ABC` i `@abstractmethod`,
* klasa posiadająca niezrealizowane metody abstrakcyjne nie może być instancjonowana,
* klasa pochodna musi zaimplementować wszystkie wymagane metody abstrakcyjne, jeśli ma stać się klasą konkretną,
* pozwala określić wspólny interfejs dla wielu klas,
* wykorzystuje mechanizm dziedziczenia.

Podstawowy schemat:

```python
from abc import ABC, abstractmethod

class Base(ABC):

    @abstractmethod
    def method(self):
        pass

class Child(Base):

    def method(self):
        print("Implementacja")
```

Teraz:

```python
obj = Child()
obj.method()
```

jest poprawne. Natomiast:

```python
# obj = Base()
```

spowoduje błąd, ponieważ `Base` posiada niezrealizowaną metodę abstrakcyjną.


## Obsługa plików

Python ma bardzo prosty i **bezpieczny sposób pracy z plikami dzięki wbudowanej funkcji open() oraz menedżerowi kontekstu with. Dzięki temu nie musisz pamiętać o ręcznym zamykaniu pliku (close())**, a kod jest czytelniejszy i mniej podatny na błędy. 

### 1. **Otwieranie pliku – with open(...)** 

Zalecany sposób: 
```python
with open('nazwa_pliku.txt', 'tryb') as plik: 
    # tutaj pracujemy z plikiem 
    # po wyjściu z bloku with plik jest automatycznie zamykany 
```
 

**with** - automatycznie zamyka plik nawet jeśli wystąpi błąd (wyjątek). Kod jest krótszy i czytelniejszy. Nie musisz pamiętać o plik.close(). 

### 2. **Tryby otwierania plików (mode)**

- **'r'**– read (domyślny)   
Otwiera plik tylko do odczytu. Plik musi istnieć, inaczej dostaniesz błąd. 
 
- **'w'** – write   
Tworzy nowy plik lub całkowicie nadpisuje istniejący. 
 
- **'a'** – append   
Dopisuje dane na końcu pliku. Jeśli plik nie istnieje – automatycznie go tworzy. 

Dodatkowo często spotykane: 

**'r+'** – odczyt + zapis 
**'w+'** – odczyt + zapis (nadpisuje) 
**'a+'** – odczyt + dopisywanie 

Przykład otwierania w różnych trybach: 
```python 
with open('dane.txt', 'r') as plik:     # tylko odczyt 
    ... 
 
with open('wyniki.txt', 'w') as plik:   # nadpisanie 
    ... 
 
with open('log.txt', 'a') as plik:      # dopisywanie 
    ... 
```

### 3. **Czytanie pliku – metody `read()`, `readline()`, `readlines()`** 
 
Przykład - czytanie całego pliku: 
```python
with open('dane.txt', 'r', encoding='utf-8') as plik: 
    # 1. Odczyt całego pliku naraz (najprostsze) 
    zawartosc = plik.read() 
    print(zawartosc) 

 
    plik.seek(0) # wróc na poczatek pliku    
    # 2. Odczyt linia po linii (najlepsze dla dużych plików) 
    for linia in plik: 
        print(linia.strip())          # strip() usuwa \n na końcu 
 

    plik.seek(0) # wróc na poczatek pliku 
    # 3. Odczyt jako lista linii 
    linie = plik.readlines() 
    print(linie)  
```
 
**Praktyczne przykłady zastosowania**: 

```python
'''
Zawartość pliku config.txt: 

host = localhost 
port = 8080 
username = admin 
password = sekret 
debug = true 
timeout = 30 
'''

# x.strip() usuwa białe znaki z początku i końca napisu (czyli spacje i \n). 
 
with open('config.txt', 'r', encoding='utf-8') as plik: 
    for linia in plik: 
        if '=' in linia: 
            klucz, wartosc = [x.strip() for x in linia.split('=', 1)] 
            print(f"{klucz} = {wartosc}") 
''' 

Zawartość pliku zakupy.txt: 

mleko 
chleb 
jajka 
maslo 
ser 
'''  
```

**Przykład 2: Wczytanie listy zakupów do listy Pythona**
```python
with open('zakupy.txt', 'r', encoding='utf-8') as plik: 
    lista_zakupow = [linia.strip() for linia in plik if linia.strip()] 
    print(lista_zakupow) 
```
### 4. **Zapis pliku – metoda `write()` i `writelines()`**
  
**Tryb 'w' → nadpisuje plik**
```python 
with open('wyniki.txt', 'w', encoding='utf-8') as plik: 
    plik.write("Wynik obliczeń: 42\n") 
    plik.write("Druga linia tekstu\n") 
     
    # Można też zapisać wiele linii naraz 
    linie = ["Pierwsza\n", "Druga\n", "Trzecia\n"] 
    plik.writelines(linie) 
``` 

Zapisze plik wyniki.txt z taką zawartością: 
```text
Wynik obliczeń: 42 
Druga linia tekstu 
Pierwsza 
Druga 
Trzecia 
```
 
**Tryb 'a' → dopisuje na końcu (idealny do logów)**
```python
import datetime 
 
with open('log.txt', 'a', encoding='utf-8') as plik: 
    czas = datetime.datetime.now().strftime('%Y-%m-%d %H:%M:%S') 
    plik.write(f"[{czas}] Użytkownik zalogował się\n") 
    plik.write(f"[{czas}] Błąd: coś poszło nie tak\n")   
```

**Praktyczne przykłady zastosowania**: 

```python
import datetime 

# Przykład 1: Zapis listy zakupów (nadpisanie) 
zakupy = ["mleko", "chleb", "masło", "jajka"] 
 
with open('lista_zakupow.txt', 'w', encoding='utf-8') as plik: 
    for produkt in zakupy: 
        plik.write(produkt + '\n') 
 
# Przykład 2: Logowanie błędów (dopisywanie) 
try: 
    1 / 0 
except Exception as e: 
    with open('errors.log', 'a', encoding='utf-8') as plik: 
        plik.write(f"[{datetime.datetime.now()}] BŁĄD: {e}\n") 
```
 

Wynik: 
Utworzy plik lista_zakupow.txt z zawartością: 
mleko 
chleb 
masło 
jajka     

## Polimorfizm
Python jest językiem obiektowym i w pełni wspiera polimorfizm oraz enkapsulację (hermetyzację).  

**Polimorfizm** w Pythonie to zdolność obiektów różnych klas do reagowania na te same metody w sposób odpowiedni dla ich typu. Oznacza to, że ta sama operacja może zachowywać się inaczej w zależności od typu obiektu, na którym jest wykonywana. 

### 1. **Polimorfizm funkcji wbudowanych**

**Funkcja len() działa z różnymi typami**
```python
print(len("Hello")) # 5 (string)  

print(len([1, 2, 3, 4])) # 4 (lista)  

print(len({'a': 1, 'b': 2})) # 2 (słownik) 
```
 

### 2. **Polimorfizm z klasami i metodami**

**Polimorfizm - ta sama metoda, różne zachowania**
```python
class Pies:  

    def dzwiek(self):  
        return "Hau hau!"  
   

    def opis(self):  
        return "Jestem psem"  
 

class Kot:  

    def dzwiek(self):
        return "Miau!"  

    def opis(self):
        return "Jestem kotem"  
 

class Krowa:  

    def dzwiek(self):  
        return "Muuu!"  

    def opis(self):
        return "Jestem krową"  


def wydaj_dzwiek(zwierze):  

    print(zwierze.dzwiek())  

 
pies = Pies()  
kot = Kot()  
krowa = Krowa()  

wydaj_dzwiek(pies)  
wydaj_dzwiek(kot) 
wydaj_dzwiek(krowa) 
```

### 3. **Polimorfizm z dziedziczeniem**

1. Przykład 
```python
class Figura:  

    def pole(self):  
        pass      

    def obwod(self):  
        pass  
 

class Prostokat(Figura):  

    def __init__(self, szerokosc, wysokosc):  
        self.szerokosc = szerokosc  
        self.wysokosc = wysokosc      

    def pole(self):  
        return self.szerokosc * self.wysokosc  

    def obwod(self):  
        return 2 * (self.szerokosc + self.wysokosc)  

 
class Kolo(Figura):  

    def __init__(self, promien):  
        self.promien = promien      

    def pole(self):  
        return 3.14 * self.promien ** 2     

    def obwod(self):  
        return 2 * 3.14 * self.promien  
 

class Trojkat(Figura):  

    def __init__(self, a, b, c):  
        self.a = a  
        self.b = b  
        self.c = c  

    def pole(self):  
    # Wzór Herona  
        s = (self.a + self.b + self.c) / 2  
        return (s * (s - self.a) * (s - self.b) * (s - self.c)) ** 0.5  

    def obwod(self):  
        return self.a + self.b + self.c  


# Użycie polimorfizmu  
figury = [ Prostokat(5, 10), Kolo(7), Trojkat(3, 4, 5) ]  

for figura in figury:  
    print(f"Pole: {figura.pole():.2f}")  
    print(f"Obwód: {figura.obwod():.2f}")  
    print("\n") 
```
 

Wyjście: 
```text
Pole: 50.00 
Obwód: 30.00 
  
Pole: 153.86 
Obwód: 43.96 
 
Pole: 6.00 
Obwód: 12.00 
```
 

### 4. **Polimorfizm z operatorami (przeciążanie operatorów)** 

**Przeciążenie operatorów  (Operator Overloading)** to mechanizm, dzięki któremu możemy zmienić zachowanie standardowych operatorów (+, -, *, /, ==, >, [] itd.) dla naszych własnych klas. 

Dzięki temu zamiast pisać: 
```python
v3 = v1.add(v2) 
```
 

możemy pisać naturalnie: 
```python
v3 = v1 + v2 
```
Python umożliwia to poprzez **specjalne metody** (tzw. **dunder methods – double underscore**), które zaczynają i kończą się na **__**. 

Przykład: 
```python
class Wektor:  

    def __init__(self, x, y):
        self.x = x  
        self.y = y   

    def __add__(self, other):
        # Przeciążenie operatora +
        return Wektor(self.x + other.x, self.y + other.y)  

    def __str__(self):  
        return f"Wektor({self.x}, {self.y})"  

    def __mul__(self, scalar):  
        # Mnożenie przez skalar
        return Wektor(self.x * scalar, self.y * scalar)  

v1 = Wektor(2, 3)  
v2 = Wektor(5, 7)  
v3 = v1 + v2 # Używamy przeciążonego operatora +  

print(v3) # Wektor(7, 10)  
print(v1 * 3) # Wektor(6, 9) 

 
'''
Pod spodem  

v1 + v2 → Python szuka metody __add__ w klasie Wektor 
print(v3) → Python szuka metody __str__ 
v1 * 3 → Python szuka metody __mul__ 
'''
```

### 5. **Polimorfizm operatorów**

Przykład:
```python
print(2 + 3) # 5 
print("2" + "3") # "23" 
```
 

 