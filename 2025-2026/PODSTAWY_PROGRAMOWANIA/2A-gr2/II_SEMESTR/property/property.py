class Uzytkownik:
    def __init__(self, imie, nazwisko):
        self.imie = imie
        self.nazwisko = nazwisko

    @property
    def pelne_imie(self):
        return f"{self.imie} {self.nazwisko}"

    @pelne_imie.setter
    def pelne_imie(self, wartosc):
        imie, nazwisko = wartosc.split(" ", 1)
        self.imie = imie
        self.nazwisko = nazwisko


u = Uzytkownik("Jan", "Kowalski")
print(u.pelne_imie)        # Jan Kowalski

u.pelne_imie = "Adam Nowak"   # setter rozbija string na imię i nazwisko
print(u.imie, u.nazwisko)     # Adam Nowak