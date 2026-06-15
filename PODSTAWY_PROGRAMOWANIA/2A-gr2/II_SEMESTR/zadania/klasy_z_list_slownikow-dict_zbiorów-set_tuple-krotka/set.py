class Zbior:
    def __init__(self):
        self.elementy = set()

    def dodaj(self, element):
        self.elementy.add(element)

    def usun(self, element):
        if element in self.elementy:
            self.elementy.remove(element)
        else:
            print("Nie znaleziono elementu.")

    def wyswietlZbior(self):
        return self.elementy

    def szukaj(self, element):
        return element in self.elementy

    def edytuj(self, stary_element, nowy_element):
        if stary_element in self.elementy:
            self.elementy.remove(stary_element)
            self.elementy.add(nowy_element)
        else:
            print("Nie znaleziono elementu do edycji.")

zbior = Zbior()

zbior.dodaj("Jabłko")
zbior.dodaj("Gruszka")
zbior.dodaj("Truskawka")

print(zbior.wyswietlZbior()) 

print(zbior.szukaj("Gruszka")) 

zbior.edytuj("Gruszka", "Pomarańcza")
print(zbior.wyswietlZbior()) 

zbior.usun("Jabłko")
print(zbior.wyswietlZbior())     