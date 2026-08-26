'''
Ćwiczenie 1 (Lista) 

Dodaj do ListaZakupow metodę usun_ostatni() która usuwa ostatni produkt z listy. 
'''

class ListaZakupow: 
   def __init__(self): 
       self.produkty = [] 
    
   def dodaj(self, produkt): 
       self.produkty.append(produkt) 
       print(f"Dodano: {produkt}") 
    
   def usun(self, produkt): 
       if produkt in self.produkty: 
           self.produkty.remove(produkt) 
           print(f"Usunięto: {produkt}") 
       else: 
           print(f"Brak {produkt} na liście") 
    
   def wyswietl(self): 
       if not self.produkty: 
           print("Lista zakupów jest pusta") 
       else: 
           print("LISTA ZAKUPÓW:") 
           for i, produkt in enumerate(self.produkty, 1): 
               print(f"  {i}. {produkt}") 
    
   def ile_produktow(self): 
       return len(self.produkty) 
 
# Użycie: 
lista = ListaZakupow() 
lista.dodaj("chleb") 
lista.dodaj("mleko") 
lista.dodaj("jajka") 
lista.wyswietl() 
lista.usun("mleko") 
lista.wyswietl() 
print(f"Liczba produktów: {lista.ile_produktow()}") 

'''

Ćwiczenie 2 (Krotka) 

Stwórz klasę KartaPlatnicza która przechowuje w krotce: numer karty, datę ważności, kod CVV. Nie dodawaj metody do zmiany tych danych. 

'''
class Punkt2D: 
   def __init__(self, x, y): 
       # krotka przechowuje współrzędne (nie mogą się zmienić) 
       self.wspolrzedne = (x, y) 
    
   def pobierz_x(self): 
       return self.wspolrzedne[0] 
    
   def pobierz_y(self): 
       return self.wspolrzedne[1] 
    
   def odleglosc_od_poczatku(self): 
       x, y = self.wspolrzedne 
       return (x**2 + y**2) ** 0.5 
    
   def __str__(self): 
       return f"Punkt{self.wspolrzedne}" 
    
   # Nie ma metody do zmiany współrzędnych! (bo krotka jest niemutowalna) 
   # Aby zmienić, trzeba stworzyć nowy obiekt 
 
# Użycie: 
p1 = Punkt2D(3, 4) 
print(p1)                      # Punkt(3, 4) 
print(f"x = {p1.pobierz_x()}") # x = 3 
print(f"Odległość: {p1.odleglosc_od_poczatku():.2f}") # 5.00 
 
# Nie można zrobić: p1.wspolrzedne[0] = 5 (błąd!) 
# Aby zmienić, tworzymy nowy punkt: 
p2 = Punkt2D(5, 6) 


'''

Ćwiczenie 3 (Słownik) 

Dodaj do Telefon metodę edytuj_numer(nazwa, nowy_numer) która zmienia numer istniejącego kontaktu. 
'''
class Telefon: 
   def __init__(self): 
       # słownik: nazwa kontaktu -> numer telefonu 
       self.kontakty = {} 
    
   def dodaj_kontakt(self, nazwa, numer): 
       self.kontakty[nazwa] = numer 
       print(f"Dodano: {nazwa} -> {numer}") 
    
   def usun_kontakt(self, nazwa): 
       if nazwa in self.kontakty: 
           usuniety = self.kontakty.pop(nazwa) 
           print(f"Usunięto: {nazwa} ({usuniety})") 
       else: 
           print(f"Brak kontaktu: {nazwa}") 
    
   def zadzwon(self, nazwa): 
       if nazwa in self.kontakty: 
           print(f"Dzwonię do {nazwa} pod numer {self.kontakty[nazwa]}") 
       else: 
           print(f"Nie mam numeru do {nazwa}") 
    
   def wyswietl_kontakty(self): 
       if not self.kontakty: 
           print("Brak kontaktów") 
       else: 
           print("KONTAKTY:") 
           for nazwa, numer in self.kontakty.items(): 
               print(f"  {nazwa}: {numer}") 
    
   def znajdz_po_numerze(self, numer): 
       # szukamy kto ma dany numer 
       for nazwa, nr in self.kontakty.items(): 
           if nr == numer: 
               return nazwa 
       return None 
 
# Użycie: 
telefon = Telefon() 
telefon.dodaj_kontakt("Ania", "123-456-789") 
telefon.dodaj_kontakt("Kamil", "987-654-321") 
telefon.wyswietl_kontakty() 
telefon.zadzwon("Ania") 
kto = telefon.znajdz_po_numerze("987-654-321") 
print(f"Numer 987-654-321 należy do: {kto}") 


'''
Ćwiczenie 4 (Zbiór) 

Dodaj do LiczbyUnikalne metodę czesc_wspolna(inny_zbior) która zwraca nowy obiekt LiczbyUnikalne zawierający tylko liczby występujące w obu zbiorach. 

'''

class LiczbyUnikalne: 
   def __init__(self): 
       self.liczby = set()  # zbiór przechowuje unikalne liczby 
    
   def dodaj(self, liczba): 
       if liczba in self.liczby: 
           print(f"{liczba} już jest w zbiorze!") 
       else: 
           self.liczby.add(liczba) 
           print(f"Dodano: {liczba}") 
    
   def usun(self, liczba): 
       if liczba in self.liczby: 
           self.liczby.remove(liczba) 
           print(f"Usunięto: {liczba}") 
       else: 
           print(f"{liczba} nie ma w zbiorze") 
    
   def wyswietl(self): 
       if not self.liczby: 
           print("Zbiór jest pusty") 
       else: 
           print(f"Zbiór liczb: {sorted(self.liczby)}")  # sortujemy dla czytelności 
    
   def ile_liczb(self): 
       return len(self.liczby) 
    
   def czy_zawiera(self, liczba): 
       return liczba in self.liczby 
    
   def polacz(self, inny_zbior): 
       """Łączy z innym zbiorem (suma)""" 
       self.liczby.update(inny_zbior) 
       print("Połączono zbiory") 
 
# Użycie: 
zb = LiczbyUnikalne() 
zb.dodaj(5) 
zb.dodaj(10) 
zb.dodaj(5)      # komunikat: już jest! 
zb.dodaj(7) 
zb.wyswietl()    # {5, 7, 10} 
zb.usun(10) 
zb.wyswietl()    # {5, 7} 
print(f"Czy jest 5? {zb.czy_zawiera(5)}") 