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
## Ternary operator (operator warunkowy) w Pythonie

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

## lambda pozwala tworzyć małe, anonimowe funkcje (czyli funkcje bez nazwy) 

Czyli zamiast: 

```Python
def dodaj(a, b): 
   wynik = a + b 
   return wynik 
```
 

Skrótowa wersja w lambda: 

`lambda a, b: a + b` 

Składnia: 

`lambda argumenty: wyrażenie `

Istotne: 

- Zawierać może tylko jedno wyrażenie 
- Nie możesz używać w niej instrukcji typu if, for, while, return 

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
