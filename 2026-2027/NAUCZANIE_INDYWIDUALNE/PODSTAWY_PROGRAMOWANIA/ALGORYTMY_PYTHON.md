# **Algorytmy**

**Algorytm** to uporządkowany, jednoznaczny **zestaw kroków prowadzących do rozwiązania konkretnego problemu** lub wykonania zadania.

## Pętla zliczających elementy

### LISTA

```Python
lista = [10, 20, 30, 40]

licznik = 0

for element in lista:
    licznik += 1

print(licznik)
```


### SŁÓNIK

```Python
slownik = {
    "imie": "Anna",
    "wiek": 25,
    "miasto": "Warszawa"
}

licznik = 0

for klucz in slownik:
    licznik += 1

print(licznik)
```
### LISTA SŁOWNIKÓW

```Python
osoby = [
    {
        "imie": "Anna",
        "wiek": 25
    },
    {
        "imie": "Jan",
        "wiek": 30
    },
    {
        "imie": "Anna",
        "wiek": 40
    },
    {
        "imie": "Lonia",
    }
]
licznik = 0

for osoba in osoby:
    licznik += 1

print(licznik)
# lub 
print(len(osoby))


licznikKluczy = 0

for osoba in osoby:
    if "imie" in osoba:
        licznikKluczy += 1

print(f"licznik kluczy: {licznikKluczy}")

licznikAnny = 0

for osoba in osoby:
    if osoba["imie"] == "Anna":
    # if osoba.get("imie") == "Anna":    
        licznikAnny += 1

print(f" licznik osób o imienu Anna: {licznikAnny}")

```
### WYSZUKIWANIE w słowniku 
"miasto" in my_dict            # sprawdza czy klucz istnieje
"email" not in my_dict         # sprawdza czy klucz nie istnieje

### POBIERANIE DANYCH w słowniku
my_dict.keys()                 # wszystkie klucze

my_dict.values()               # wszystkie wartości

my_dict.items()                # wszystkie pary (klucz, wartość)

### ZBIÓR - SET

```Python
zbior = {10, 20, 30, 40, 30, 40}

licznik = 0

for element in zbior:
    licznik += 1

print(licznik)
```

### TUPLE
```Python
krotka = (10, 20, 30, 40)

licznik = 0

for element in krotka:
    licznik += 1

print(licznik)
# lub 
print(len(krotka))
```
## Losowanie i generowanie liczb bez powtórzeń.
```Python
import random

wylosowane = []

while len(wylosowane) < 6:

    liczba = random.randint(1, 49)

    if liczba not in wylosowane:
        wylosowane.append(liczba)

print(wylosowane)


# random.sample(..., 6)- wybiera z nich 6 różnych elementów.
wylosowane = random.sample(range(1, 50), 6)
print(wylosowane)
```


## **Wyszukiwanie liniowe (Linear Search)**

Wyszukiwanie liniowe to najprostszy algorytm wyszukiwania elementu w liście (tablicy). 
Polega na sprawdzaniu każdego elementu po kolei, od początku do końca, aż znajdzie się poszukiwany element lub dojdzie do końca listy. Nie wymaga, aby lista była posortowana, co jest jego zaletą w porównaniu do wyszukiwania binarnego.


```Python
def szukaj(tablica, szukana):

    for i in range(len(tablica)):

        if tablica[i] == szukana:
            return i

    return -1

lista = [64, 34, 25, 12, 22, 11, 90]
indeks = szukaj(lista, 25)
print(indeks)

owoce = ["banan", "jabłko", "gruszka", "pomarańcza"]
indeks = szukaj(owoce, "jabłko")
print(indeks)

indeks = szukaj(owoce, "wiśnia")
print(indeks)     
```    

## **Wyszukiwanie binarne (Binary Search)**
**Algorytm wyszukuje element w posortowanej liście**, dzieląc ją na **pół za każdym razem.** **Porównuje szukany element z środkowym elementem listy i eliminuje połowę**, w której elementu nie ma. Jest bardzo efektywny (złożoność O(log n)), ale wymaga, aby lista była posortowana. To jak szukanie słowa w słowniku – otwierasz na środku i sprawdzasz, czy iść w lewo czy w prawo.


```Python

def binary_search(tablica, szukana):

    lewy = 0
    prawy = len(tablica) - 1

    while lewy <= prawy: 
        srodek = (lewy + prawy) // 2

        if tablica[srodek] == szukana:
            return srodek

        elif tablica[srodek] < szukana:
            lewy = srodek + 1
 

        else:
            prawy = srodek - 1

    return -1

liczby = [2, 5, 8, 12, 17, 21, 30]

wynik = binary_search(liczby, 21)

print(wynik)
```    

**Sortowanie bąbelkowe (Bubble Sort)**
To prosty algorytm sortowania, który **wielokrotnie przechodzi przez listę, porównując sąsiednie elementy i zamieniając je miejscami, jeśli są w złej kolejności. Proces powtarza się, aż lista będzie posortowana.** Jest nieefektywny dla dużych zbiorów danych (złożoność O(n²)), ale łatwy do zrozumienia.
Nazwa pochodzi od "bąbelków" – większe elementy "wypływają" na koniec listy.

```Python
def bubble_sort(tablica):

    n = len(tablica)

    for i in range(n - 1):

        for j in range(n - 1 - i):

            if tablica[j] > tablica[j + 1]:
                tablica[j], tablica[j + 1] = tablica[j + 1], tablica[j]
```                