'''
Zadanie 1 — Klasy (podstawy)
Treść

Stwórz klasę Produkt, która:

posiada pola:
    nazwa
    cena
    _ilosc (protected)

posiada metody:
    dodaj_sztuki(ile)
    sprzedaj(ile) — nie pozwala sprzedać więcej niż jest
    wartosc_magazynu() → cena * ilość

używa @property do odczytu ilości
'''
'''
Podpowiedź 
class Produkt:
    def __init__(self, nazwa, cena, ilosc):
 

    @property
    def ilosc(self):
        return self._ilosc

    def dodaj_sztuki(self, ile):
     

    def sprzedaj(self, ile):
        if ile > self._ilosc:
            raise ValueError("Brak wystarczającej ilości")
        self._ilosc -= ile

    def wartosc_magazynu(self):
 
'''
