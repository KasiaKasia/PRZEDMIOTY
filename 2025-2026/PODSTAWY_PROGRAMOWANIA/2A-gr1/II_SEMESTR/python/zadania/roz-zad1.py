# =========================
# ZADANIE 1 - instrukcja IF
# =========================
# Napisz program, który sprawdza czy liczba jest dodatnia, ujemna czy równa zero.

liczba = 10

if liczba > 0:
    print("Liczba dodatnia")
elif liczba < 0:
    print("Liczba ujemna")
else:
    print("Liczba równa zero")


# =========================
# ZADANIE 2 - LISTY
# =========================
# Utwórz listę 5 dowolnych liczb i oblicz ich sumę.
# podpowiedź: można użyć funkcji sum() lub pętli for do iteracji po elementach listy i dodawania ich do siebie.

liczby = [10, 20, 30, 40, 50]

suma = 0
for liczba in liczby:
    suma += liczba

print("Lista:", liczby)
print("Suma:", suma)

# alternatywnie:
# print("Suma (sum()):", sum(liczby))


# =========================
# ZADANIE 3 - TUPLE (krotka)
# =========================
# Utwórz krotkę z 3 imionami i wyświetl każde z nich.
# Przykład: krotki są niemutowalne (immutable)
# imiona[0] = "Maria"  # to spowoduje błąd!

imiona = ("Anna", "Jan", "Piotr")

for imie in imiona:
    print("Imię:", imie)


# =========================
# ZADANIE 4 - RANGE
# =========================
# Przykłady działania range() Zastosuj: iteracje w pętlach

zakres1 = range(5)          # 0, 1, 2, 3, 4
zakres2 = range(1, 6)       # 1, 2, 3, 4, 5
zakres3 = range(0, 10, 2)   # 0, 2, 4, 6, 8

# Wyświetlenie wyników:

print("Zakres1:")
for i in zakres1:
    print(i)

print("Zakres2:")
for i in zakres2:
    print(i)

print("Zakres3:")
for i in zakres3:
    print(i)


# =========================
# ZADANIE 5 - SŁOWNIK (dict)
# =========================
# Utwórz słownik zawierający dane ucznia (np. imię, wiek, klasa)
# i wyświetl jego zawartość.

uczen = {
    "imie": "Jan",
    "wiek": 16,
    "klasa": "2A"
}

print("Imię:", uczen["imie"])
print("Wiek:", uczen["wiek"])
print("Klasa:", uczen["klasa"])

# Możesz też dodać nowy element:
uczen["miasto"] = "Warszawa"
print("Po dodaniu:", uczen)


# =========================
# ZADANIE 6 - SET (zbiory)
# =========================
# Utwórz zbiór liczb z powtórzeniami i sprawdź,
# że set usuwa duplikaty.

liczby = [1, 2, 2, 3, 4, 4, 5]

zbior = set(liczby)

print("Lista:", liczby)
print("Zbiór:", zbior)

# Dodaj element do zbioru:
zbior.add(6)
print("Po dodaniu 6:", zbior)

# Usuń element ze zbioru:
zbior.remove(2)
print("Po usunięciu 2:", zbior)


# =========================
# ZADANIE 7 - OPERATORY ARYTMETYCZNE
# =========================
# Napisz program, który wykona podstawowe operacje na liczbach a i b.

a = 10
b = 3

print(f"a = {a}, b = {b}")
print(f"Dodawanie: a + b = {a + b}")          # 13
print(f"Odejmowanie: a - b = {a - b}")        # 7
print(f"Mnożenie: a * b = {a * b}")           # 30
print(f"Dzielenie: a / b = {a / b}")          # 3.3333333333333335

print(f"Dzielenie całkowite: a // b = {a // b}")  # 3
print(f"Reszta z dzielenia: a % b = {a % b}")     # 1
print(f"Potęgowanie: a ** b = {a ** b}")          # 1000