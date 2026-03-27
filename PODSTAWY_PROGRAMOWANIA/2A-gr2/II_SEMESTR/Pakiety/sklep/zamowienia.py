# sklep/zamowienia.py

from .produkty import Produkt   # import względny

class Zamowienie:
    def __init__(self):
        self.produkty = []
    
    def dodaj_produkt(self, produkt):
        self.produkty.append(produkt)