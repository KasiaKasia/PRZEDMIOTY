#
# Program:
# - Pobiera od użytkownika liczbę zestawów do wylosowania.
# - Losuje 6 liczb całkowitych z zakresu od 1 do 49 dla każdego zestawu.
# - Nie dopuszcza do powtórzenia liczby w obrębie jednego zestawu.
# - Przechowuje wyniki w tablicy dwuwymiarowej (liście list).
# - Wyświetla wszystkie wylosowane zestawy.
# - Zlicza i wyświetla, ile razy każda liczba od 1 do 49 wystąpiła we wszystkich zestawach.

import random


# Funkcja generująca zestawy liczb
def generuj_zestawy(liczba_zestawow):
    wszystkie_zestawy = []

    for i in range(liczba_zestawow):
        zestaw = []

        while len(zestaw) < 6:
            liczba = random.randint(1, 49)

            if liczba not in zestaw:
                zestaw.append(liczba)

        wszystkie_zestawy.append(zestaw)

    return wszystkie_zestawy


# Funkcja wyświetlająca wszystkie zestawy
def wyswietl_zestawy(wszystkie_zestawy):
    print("\nWylosowane zestawy:")

    for indeks, zestaw in enumerate(wszystkie_zestawy, start=1):
        print(f"Zestaw {indeks}: {zestaw}")


# Funkcja zliczająca wystąpienia liczb
def zlicz_wystapienia(wszystkie_zestawy):
    wystapienia = [0] * 49

    for zestaw in wszystkie_zestawy:
        for liczba in zestaw:
            wystapienia[liczba - 1] += 1

    return wystapienia


# Funkcja wyświetlająca statystyki
def wyswietl_statystyki(wystapienia):
    print("\nLiczba wystąpień każdej liczby:")

    for indeks in range(49):
        print(f"Liczba {indeks + 1}: {wystapienia[indeks]}")


# Program główny
liczba_zestawow = int(input("Podaj liczbę zestawów do wylosowania: "))

if liczba_zestawow > 0:
    wszystkie_zestawy = generuj_zestawy(liczba_zestawow)

    wyswietl_zestawy(wszystkie_zestawy)

    wystapienia = zlicz_wystapienia(wszystkie_zestawy)

    wyswietl_statystyki(wystapienia)
else:
    print("Liczba zestawów musi być większa od zera.")
