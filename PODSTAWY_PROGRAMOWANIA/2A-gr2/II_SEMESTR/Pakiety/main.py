# main.py

import sklep
from sklep import Produkt, stworz_produkt, Zamowienie

p1 = stworz_produkt("Laptop", 4999)
p2 = Produkt("Myszka", 89)

zam = Zamowienie()
zam.dodaj_produkt(p1)
zam.dodaj_produkt(p2)

print(f"Złożono zamówienie na {len(zam.produkty)} produktów")