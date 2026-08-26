# sklep/produkty.py

class Produkt:
    def __init__(self, nazwa, cena):
        self.nazwa = nazwa
        self.cena = cena

def stworz_produkt(nazwa, cena):
    return Produkt(nazwa, cena)