## Funkcje zaawansowane
### lambda

**`lambda`** pozwala tworzyć małe, **anonimowe funkcje**, czyli funkcje definiowane bez użycia instrukcji `def`.

Najczęściej stosuje się je do krótkich, prostych operacji, np. w połączeniu z funkcjami `map()`, `filter()` czy `sorted()`.

Funkcja `lambda` składa się ze słowa kluczowego `lambda`, argumentów, dwukropka i jednego wyrażenia.


Skrótowa wersja w lambda: 
`lambda a, b: a + b` 

Składnia: 
`lambda argumenty: wyrażenie `


**Zamiast:**

Przykład 1:

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

Przykład 2:

```python
def sprawdz_srednia(a, b, c):
    srednia = (a + b + c) / 3
    return srednia >= 4

print(sprawdz_srednia(5, 4, 3))  # True
print(sprawdz_srednia(2, 3, 3))  # False
```

możemy zapisać:
```
sprawdz_srednia = lambda a, b, c: (a + b + c) / 3 >= 4

print(sprawdz_srednia(5, 4, 3))  # True
print(sprawdz_srednia(2, 3, 3))  # False
```



**Istotne:**

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

**Przykład 1. zastosowania**: Podwojenie elementów listy. 
 
```python
liczby = [1, 2, 3, 4] 
podwojone = list(map(lambda x: x * 2, liczby)) 
print(podwojone) 
```
**Przykład 2. Zamiana napisów na wielkie litery**
```python
imiona = ["anna", "jan", "piotr"]

wynik = list(map(str.upper, imiona))
print(wynik)
```

**Przykład 3. Mnożenie każdej liczby przez 2**

```python
def podwoj(x):
    return x * 2

liczby = [1, 2, 3, 4, 5]

wynik = list(map(podwoj, liczby))
print(wynik)
```
 
**Przykład: Konwersja temperatur z Celsjusza na Fahrenheita dla listy wartości.**

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
liczby = [1, 2, 3, 4, 5, 6, 7, 8]

parzyste = list(filter(lambda x: x % 2 == 0, liczby)) 
print(parzyste) 


def czy_parzysta(x):
    return x % 2 == 0

wynik = list(filter(czy_parzysta, liczby))
print(wynik)

```

Przykład: Filtrowanie słów dłuższych niż 3 litery z listy. 
```python
slowa = ['kot', 'pies', 'slon', 'ptak', 'ryba'] 
dlugie = list(filter(lambda s: len(s) > 3, slowa)) 
print(dlugie) 
```

### reduce

**Funkcja reduce** (z modułu functools) **służy do zredukowania wielu elementów kolekcji do jednej końcowej wartości**. Wymaga importu: from functools  import reduce. 

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

`reduce()` działa tutaj krok po kroku tak:
```text
1 + 2 = 3
3 + 3 = 6
6 + 4 = 10
```
Właśnie dlatego nazywa się **reduce**, czyli można powiedzieć: **redukuje wiele wartości do jednej wartości**.


Przykład: Znalezienie maksymalnej wartości w liście. 
```python
from functools import reduce 
liczby = [1, 3, 2, 5, 4] 
maks = reduce(lambda x, y: x if x > y else y, liczby) 
print(maks) 
```

Możemy również zapisać to bez lambda, używając zwykłej funkcji:

```Python
from functools import reduce

def dodaj(a, b):
    return a + b

liczby = [1, 2, 3, 4]
wynik = reduce(dodaj, liczby)
print(wynik) 
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

**Przykład: Dekorator dodający logowanie. **

**1. Pierwszy przykład – bez `@loguj`**
```python
def loguj(func):
    def wrapper(*args, **kwargs):
        print("Dekorator: wykonuję logowanie")
        return func(*args, **kwargs)
    return wrapper

def dodaj(a, b):
    print("Funkcja: wykonuję dodawanie")
    return a + b

# Wywołanie bez dekoratora
print(dodaj(3, 5))

# Ręczne zastosowanie dekoratora. 
# W tym przypadku dekorator zaczyna działać dopiero po instrukcji:
dodaj = loguj(dodaj)

# Wywołanie z dekoratorem
print(dodaj(10, 20))
```

**2. Drugi przykład – z `@loguj`**

```python
def loguj(func):
    def wrapper(*args, **kwargs):
        print("Dekorator: wykonuję logowanie")
        return func(*args, **kwargs)
    return wrapper

@loguj
def dodaj(a, b):
    print("Funkcja: wykonuję dodawanie")
    return a + b

print(dodaj(3, 5))
print(dodaj(10, 20))
```

---

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
 

 