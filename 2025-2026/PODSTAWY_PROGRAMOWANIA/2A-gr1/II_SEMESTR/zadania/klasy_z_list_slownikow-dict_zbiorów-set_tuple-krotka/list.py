class Lista:
    def __init__(self):
        self.elementy = []

    def dodaj(self, element):
        self.elementy.append(element)

    def usun(self, element):
        if element in self.elementy:
            self.elementy.remove(element)
        else:
            print("Nie znaleziono elementu.")

    def odczytaj(self):
        return self.elementy

    def szukajIndexElementu(self, element):
        if element in self.elementy:
            return self.elementy.index(element)
        return None

    def edycja(self, stary_element, nowy_element):
        indeks = self.szukajIndexElementu(stary_element)
        if indeks is not None:
            self.elementy[indeks] = nowy_element
        else:
            print("Nie znaleziono elementu do edycji.")

lista = Lista()

lista.dodaj("Jabłko")
lista.dodaj("Gruszka")
lista.dodaj("Truskawka")

print("Lista elementów:\n", lista.odczytaj()) 

print("Indeks elementu: ", lista.szukajIndexElementu("Gruszka"))

lista.edycja("Gruszka", "Pomarańcza")
print("Lista elementów, po edycji:\n", lista.odczytaj()) 
lista.usun("Truskawka")
print("Lista elementów, po usunięciu:\n", lista.odczytaj()) 
