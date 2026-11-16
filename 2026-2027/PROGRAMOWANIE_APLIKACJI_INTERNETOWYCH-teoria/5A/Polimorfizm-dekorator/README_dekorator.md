# Dekoratory 

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
