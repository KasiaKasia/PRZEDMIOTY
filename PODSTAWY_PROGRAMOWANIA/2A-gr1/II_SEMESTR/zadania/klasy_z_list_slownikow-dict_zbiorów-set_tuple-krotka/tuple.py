class Tuple:
    def __init__(self):
        self.dane = ()

    def dodaj(self, element):
        self.dane = self.dane + (element,)

    def usun(self, element):
        if element in self.dane:
            lista = list(self.dane)
            lista.remove(element)
            self.dane = tuple(lista)
        else:
            print("Nie znaleziono elementu.")

    def szukaj(self, element):
        if element in self.dane:
            return self.dane.index(element)
        return None

    def edytuj(self, stary, nowy):
        if stary in self.dane:
            lista = list(self.dane)
            index = lista.index(stary)
            lista[index] = nowy
            self.dane = tuple(lista)
        else:
            print("Nie znaleziono elementu.")

    def wyswietlTuple(self):
        return self.dane


t = Tuple()

t.dodaj("Jabłko")
t.dodaj("Gruszka")
t.dodaj("Truskawka")

print(t.wyswietlTuple()) 

print(t.szukaj("Gruszka"))
# 1

t.edytuj("Gruszka", "Pomarańcza")
print(t.wyswietlTuple()) 

t.usun("Jabłko")
print(t.wyswietlTuple()) 