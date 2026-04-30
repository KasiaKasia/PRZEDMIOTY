# Podstawy Python

## **Podstawowe typy komentarzy**

 🔹Komentarz jednowierszowy - zaczyna się od # 

```Python
# To jest komentarz jednowierszowy 
x = 10  # To też jest komentarz - po kodzi  
```
  
🔹Komentarz wielowierszowy - używamy trzech cudzysłowów ''' lub """ 

```Python
'''
  To jest komentarz wielowierszowy. 
  Może zawierać wiele linii tekstu. 
  Często używany na początku pliku 
  lub do dokumentowania funkcji
'''
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
r1 = range(5)      # 0, 1, 2, 3, 4
r2 = range(2, 8)   # 2, 3, 4, 5, 6, 7
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

### **Sprawdzanie typów**

```Python
# type() - podstawowy
print(type(42))        # <class 'int'>
print(type("text"))    # <class 'str'>

# isinstance() - zalecany (uwzględnia dziedziczenie)
print(isinstance(42, int))      # True
print(isinstance("text", str))  # True

# issubclass() - sprawdzanie hierarchii
print(issubclass(bool, int))  # True (bool dziedziczy po int)

# type hints w praktyce (mypy, pydantic)
from pydantic import BaseModel

class User(BaseModel):
    name: str
    age: int
    email: str
```    