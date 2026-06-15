class Slownik:
    def __init__(self):
        self.dane = {}

    def dodaj(self, klucz, wartosc):
        self.dane[klucz] = wartosc

    def usun(self, klucz):
        if klucz in self.dane:
            del self.dane[klucz]
        else:
            print("Nie znaleziono klucza.")

    def wyswietlSlownik(self):
        return self.dane

    def szukaj(self, klucz):
        return self.dane.get(klucz)

    def edytuj(self, klucz, nowa_wartosc):
        if klucz in self.dane:
            self.dane[klucz] = nowa_wartosc
        else:
            print("Nie znaleziono klucza do edycji.")

slownik = Slownik()

slownik.dodaj("imie", "Jan")
slownik.dodaj("nazwisko", "Kowalski")
slownik.dodaj("wiek", 25)

print("Slownik:\n", slownik.wyswietlSlownik()) 

print(slownik.szukaj("wiek"))
 
print("Słownik: \n", slownik.wyswietlSlownik()) 
slownik.edytuj("wiek", 26)
print("Słownik: \n", slownik.wyswietlSlownik()) 

slownik.usun("nazwisko")
print(slownik.wyswietlSlownik()) 