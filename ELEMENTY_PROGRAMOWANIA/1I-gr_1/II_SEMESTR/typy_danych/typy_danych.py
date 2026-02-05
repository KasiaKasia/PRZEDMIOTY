"""
PRZYKŁAD DEMONSTRUJĄCY WSZYSTKIE TYPY DANYCH W PYTHONIE
Autor: Python Demo
Data: 2024
"""

print("=" * 60)
print("DEMONSTRACJA WSZYSTKICH TYPÓW DANYCH W PYTHONIE")
print("=" * 60)
print()

# ============================================================================
# 1. TYPY NUMERYCZNE
# ============================================================================
print("1. TYPY NUMERYCZNE")
print("-" * 40)

# int - liczby całkowite
liczba_calkowita = 42
print(f"int: {liczba_calkowita} | Typ: {type(liczba_calkowita)}")

# float - liczby zmiennoprzecinkowe
liczba_zmiennoprzecinkowa = 3.14159
print(f"float: {liczba_zmiennoprzecinkowa} | Typ: {type(liczba_zmiennoprzecinkowa)}")

# complex - liczby zespolone
liczba_zespolona = 2 + 3j
print(f"complex: {liczba_zespolona} | Typ: {type(liczba_zespolona)}")
print(f"  Część rzeczywista: {liczba_zespolona.real}")
print(f"  Część urojona: {liczba_zespolona.imag}")
print()

# ============================================================================
# 2. TYP TEKSTOWY
# ============================================================================
print("2. TYP TEKSTOWY")
print("-" * 40)

# str - ciąg znaków
tekst = "Witaj, świecie!"
print(f"str: '{tekst}' | Typ: {type(tekst)}")
print(f"  Długość tekstu: {len(tekst)} znaków")
print(f"  Pierwszy znak: '{tekst[0]}'")
print(f"  Ostatni znak: '{tekst[-1]}'")
print()

# ============================================================================
# 3. TYPY SEKWENCYJNE
# ============================================================================
print("3. TYPY SEKWENCYJNE")
print("-" * 40)

# list - lista (mutable)
lista = [1, "dwa", 3.0, True, [5, 6]]
print(f"list: {lista} | Typ: {type(lista)}")
print(f"  Elementy: {len(lista)}")
print(f"  Pierwszy element: {lista[0]}")
print(f"  Ostatni element: {lista[-1]}")

# tuple - krotka (immutable)
krotka = (10, 20, 30, "czterdzieści")
print(f"\ntuple: {krotka} | Typ: {type(krotka)}")
print(f"  Elementy: {len(krotka)}")
print(f"  Elementy nie można zmieniać!")

# range - zakres
zakres = range(1, 10, 2)  # 1, 3, 5, 7, 9
print(f"\nrange(1, 10, 2): {list(zakres)} | Typ: {type(zakres)}")
print(f"  Start: {zakres.start}")
print(f"  Stop: {zakres.stop}")
print(f"  Step: {zakres.step}")
print()

# ============================================================================
# 4. TYP MAPUJĄCY
# ============================================================================
print("4. TYP MAPUJĄCY")
print("-" * 40)

# dict - słownik
slownik = {
    "imie": "Anna",
    "wiek": 25,
    "miasto": "Warszawa",
    "hobby": ["czytanie", "programowanie"]
}
print(f"dict: {slownik} | Typ: {type(slownik)}")
print(f"  Klucze: {list(slownik.keys())}")
print(f"  Wartości: {list(slownik.values())}")
print(f"  Wartość dla klucza 'imie': {slownik['imie']}")
print()

# ============================================================================
# 5. TYPY ZBIORÓW
# ============================================================================
print("5. TYPY ZBIORÓW")
print("-" * 40)

# set - zbiór (mutable, unikalne elementy)
zbior = {1, 2, 2, 3, 3, 3, 4, 5}
print(f"set: {zbior} | Typ: {type(zbior)}")
print(f"  Zbiór usuwa duplikaty automatycznie!")
print(f"  Liczba unikalnych elementów: {len(zbior)}")

# frozenset - zamrożony zbiór (immutable)
zamrozony_zbior = frozenset(["a", "b", "c", "a", "b"])
print(f"\nfrozenset: {zamrozony_zbior} | Typ: {type(zamrozony_zbior)}")
print(f"  Zamrożony zbiór nie można modyfikować!")
print()

# ============================================================================
# 6. TYP LOGICZNY
# ============================================================================
print("6. TYP LOGICZNY")
print("-" * 40)

# bool - wartości logiczne
prawda = True
falsz = False
print(f"bool True: {prawda} | Typ: {type(prawda)}")
print(f"bool False: {falsz} | Typ: {type(falsz)}")

# Przykłady wyrażeń logicznych
print(f"\nPrzykłady wyrażeń logicznych:")
print(f"  10 > 5: {10 > 5}")
print(f"  10 == 5: {10 == 5}")
print(f"  'python' in 'hello python world': {'python' in 'hello python world'}")
print()

# ============================================================================
# 7. TYPY BINARNE
# ============================================================================
print("7. TYPY BINARNE")
print("-" * 40)

# bytes - bajty (immutable)
bajty = b'hello'
print(f"bytes: {bajty} | Typ: {type(bajty)}")
print(f"  Długość: {len(bajty)} bajtów")
print(f"  Jako lista: {list(bajty)}")
print(f"  Jako string: {bajty.decode('utf-8')}")

# bytearray - tablica bajtów (mutable)
tablica_bajtow = bytearray(b'world')
print(f"\nbytearray przed modyfikacją: {tablica_bajtow}")
tablica_bajtow[0] = 87  # Zamień 'w' (119) na 'W' (87)
print(f"bytearray po modyfikacji: {tablica_bajtow}")
print(f"  Typ: {type(tablica_bajtow)}")

# memoryview - widok pamięci
widok = memoryview(b'python')
print(f"\nmemoryview: {widok} | Typ: {type(widok)}")
print(f"  Rozmiar: {widok.nbytes} bajtów")
print(f"  Format: {widok.format}")
print()

# ============================================================================
# 8. TYP SPECJALNY
# ============================================================================
print("8. TYP SPECJALNY")
print("-" * 40)

# NoneType - brak wartości
brak_wartosci = None
print(f"None: {brak_wartosci} | Typ: {type(brak_wartosci)}")
print(f"  None reprezentuje brak wartości lub 'nic'")
print()

# ============================================================================
# 9. TYPY Z MODUŁÓW (ZAWAANSOWANE)
# ============================================================================
print("9. TYPY Z MODUŁÓW (ZAAWANSOWANE)")
print("-" * 40)

from decimal import Decimal
from fractions import Fraction
from datetime import date, datetime

# Decimal - dokładne liczby dziesiętne
cena = Decimal('19.99')
print(f"Decimal: {cena} | Typ: {type(cena)}")
print(f"  Dokładne obliczenia finansowe")

# Fraction - ułamki zwykłe
polowa = Fraction(1, 2)
trzecia = Fraction(1, 3)
print(f"\nFraction 1/2: {polowa} | Typ: {type(polowa)}")
print(f"Fraction 1/3: {trzecia} | Typ: {type(trzecia)}")
print(f"  Suma 1/2 + 1/3 = {polowa + trzecia}")

# date - data
dzisiejsza_data = date.today()
print(f"\ndate: {dzisiejsza_data} | Typ: {type(dzisiejsza_data)}")
print(f"  Rok: {dzisiejsza_data.year}")
print(f"  Miesiąc: {dzisiejsza_data.month}")
print(f"  Dzień: {dzisiejsza_data.day}")

# datetime - data i czas
teraz = datetime.now()
print(f"\ndatetime: {teraz} | Typ: {type(teraz)}")
print(f"  Godzina: {teraz.hour}:{teraz.minute}:{teraz.second}")
print()

# ============================================================================
# 10. PRZYKŁAD INTEGRACJI WIELU TYPÓW
# ============================================================================
print("10. PRZYKŁAD INTEGRACJI WIELU TYPÓW")
print("-" * 40)

# Struktura danych studenta wykorzystująca wiele typów
student = {
    "id": 12345,                          # int
    "imie": "Jan",                        # str
    "nazwisko": "Kowalski",               # str
    "wiek": 22,                           # int
    "srednia_ocen": 4.5,                  # float
    "aktywny": True,                      # bool
    "przedmioty": [                       # list
        "Matematyka",                     # str
        "Informatyka",                    # str
        "Fizyka"                          # str
    ],
    "oceny": {                            # dict
        "Matematyka": 5.0,                # float
        "Informatyka": 4.5,               # float
        "Fizyka": 4.0                     # float
    },
    "kontakty": {                         # dict z różnymi typami
        "email": "jan@example.com",       # str
        "telefon": "+48 123 456 789",     # str
        "adres": {                        # dict wewnętrzny
            "ulica": "Marszałkowska",     # str
            "numer": "123",               # str
            "miasto": "Warszawa"          # str
        }
    },
    "umiejetnosci": {"Python", "SQL", "Git"},  # set
    "data_rejestracji": date(2023, 9, 1),      # date
    "ostatnie_logowanie": teraz                # datetime
}

print("Student:")
print(f"  ID: {student['id']} (typ: {type(student['id'])})")
print(f"  Imię: {student['imie']} (typ: {type(student['imie'])})")
print(f"  Wiek: {student['wiek']} (typ: {type(student['wiek'])})")
print(f"  Średnia: {student['srednia_ocen']} (typ: {type(student['srednia_ocen'])})")
print(f"  Aktywny: {student['aktywny']} (typ: {type(student['aktywny'])})")
print()
print("  Przedmioty:")
for i, przedmiot in enumerate(student['przedmioty'], 1):
    print(f"    {i}. {przedmiot}")
print()
print("  Oceny:")
for przedmiot, ocena in student['oceny'].items():
    print(f"    {przedmiot}: {ocena}")
print()
print(f"  Umiejętności: {', '.join(student['umiejetnosci'])}")
print(f"  Data rejestracji: {student['data_rejestracji']} (typ: {type(student['data_rejestracji'])})")
print(f"  Ostatnie logowanie: {student['ostatnie_logowanie']} (typ: {type(student['ostatnie_logowanie'])})")
print()

# ============================================================================
# 11. KONWERSJE TYPÓW
# ============================================================================
print("11. KONWERSJE TYPÓW (TYPE CASTING)")
print("-" * 40)

print("Przykłady konwersji:")
liczba = 123
print(f"  int -> str: {str(liczba)} (typ: {type(str(liczba))})")

tekst = "456"
print(f"  str -> int: {int(tekst)} (typ: {type(int(tekst))})")

lista = [1, 2, 3]
print(f"  list -> tuple: {tuple(lista)} (typ: {type(tuple(lista))})")

krotka = (4, 5, 6)
print(f"  tuple -> list: {list(krotka)} (typ: {type(list(krotka))})")

zbior = {1, 2, 3}
print(f"  set -> list: {list(zbior)} (typ: {type(list(zbior))})")

print(f"\n  bool(0): {bool(0)}")
print(f"  bool(1): {bool(1)}")
print(f"  bool(''): {bool('')}")
print(f"  bool('tekst'): {bool('tekst')}")
print(f"  bool([]): {bool([])}")
print(f"  bool([1, 2]): {bool([1, 2])}")
print()

# ============================================================================
# 12. OPERACJE NA TYPACH
# ============================================================================
print("12. OPERACJE NA RÓŻNYCH TYPACH")
print("-" * 40)

# Operacje na stringach
tekst1 = "Hello"
tekst2 = "World"
print(f"String concatenation: '{tekst1}' + ' ' + '{tekst2}' = '{tekst1 + ' ' + tekst2}'")
print(f"String repetition: '{tekst1}' * 3 = '{tekst1 * 3}'")

# Operacje na listach
lista1 = [1, 2, 3]
lista2 = [4, 5, 6]
print(f"\nList concatenation: {lista1} + {lista2} = {lista1 + lista2}")
print(f"List repetition: {lista1} * 2 = {lista1 * 2}")

# Operacje na zbiorach
A = {1, 2, 3, 4}
B = {3, 4, 5, 6}
print(f"\nSet operations:")
print(f"  A = {A}, B = {B}")
print(f"  Union (A | B): {A | B}")
print(f"  Intersection (A & B): {A & B}")
print(f"  Difference (A - B): {A - B}")

# Operacje na słownikach
print(f"\nDictionary operations:")
slownik1 = {"a": 1, "b": 2}
slownik2 = {"c": 3, "d": 4}
print(f"  dict1: {slownik1}")
print(f"  dict2: {slownik2}")
print(f"  Merged dict: {{**slownik1, **slownik2}} = {{**slownik1, **slownik2}}")
print()

# ============================================================================
# PODSUMOWANIE
# ============================================================================
print("=" * 60)
print("PODSUMOWANIE")
print("=" * 60)

print(f"\nPrzegląd typów danych w Pythonie:")
print(f"  1. Typy numeryczne: int, float, complex")
print(f"  2. Typ tekstowy: str")
print(f"  3. Typy sekwencyjne: list, tuple, range")
print(f"  4. Typ mapujący: dict")
print(f"  5. Typy zbiorów: set, frozenset")
print(f"  6. Typ logiczny: bool")
print(f"  7. Typy binarne: bytes, bytearray, memoryview")
print(f"  8. Typ specjalny: NoneType")
print(f"  9. Typy z modułów: Decimal, Fraction, date, datetime")

print(f"\nKluczowe cechy:")
print(f"  • Dynamiczne typowanie - zmienna może zmieniać typ")
print(f"  • Duck typing - ważniejsze jest zachowanie niż typ")
print(f"  • Wszystko jest obiektem - nawet typy danych")

print(f"\nPrzykład dynamicznego typowania:")
zmienna = 10
print(f"  Początkowo: zmienna = {zmienna} (typ: {type(zmienna)})")
zmienna = "dziesięć"
print(f"  Po zmianie: zmienna = '{zmienna}' (typ: {type(zmienna)})")

print()
print("=" * 60)
print("KONIEC DEMONSTRACJI")
print("=" * 60)