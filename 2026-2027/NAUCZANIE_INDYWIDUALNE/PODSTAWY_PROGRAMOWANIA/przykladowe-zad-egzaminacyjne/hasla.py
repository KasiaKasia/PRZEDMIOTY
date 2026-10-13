
import random

def generuj_haslo():
    male_litery = "abcdefghijklmnopqrstuvwxyz"
    wielkie_litery = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"
    polskie_znaki = "ąęłńóśżźĄĘŁŃÓŚŻŹ"
    cyfry = "0123456789"
    znaki_specjalne = "!@#$%^&*()_+"

    znaki_hasla = []

    # Losowanie 3 małych liter
    for i in range(3):
        znaki_hasla.append(random.choice(male_litery))

    # Losowanie 3 wielkich liter
    for i in range(3):
        znaki_hasla.append(random.choice(wielkie_litery))

    # Losowanie 2 znaków diakrytycznych
    for i in range(2):
        znaki_hasla.append(random.choice(polskie_znaki))

    # Losowanie 2 cyfr
    for i in range(2):
        znaki_hasla.append(random.choice(cyfry))

    # Losowanie 2 znaków specjalnych
    for i in range(2):
        znaki_hasla.append(random.choice(znaki_specjalne))

    # Losowe rozmieszczenie znaków
    random.shuffle(znaki_hasla)

    # Zamiana listy znaków na napis
    haslo = "".join(znaki_hasla)

    return haslo


# Program główny
for i in range(5):
    haslo = generuj_haslo()
    print(f"Hasło {i + 1}: {haslo}")
