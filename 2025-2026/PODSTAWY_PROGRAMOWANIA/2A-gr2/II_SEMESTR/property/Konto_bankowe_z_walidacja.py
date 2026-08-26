class KontoBankowe:
    def __init__(self, numer_konta, wlasciciel, saldo_poczatkowe=0):
        self.__numer_konta = numer_konta
        self.__wlasciciel = wlasciciel
        self.__saldo = saldo_poczatkowe
        self.__historia_transakcji = []
    
    def __dodaj_do_historii(self, typ, kwota, opis=""):
        """Prywatna metoda - dodawanie do historii"""
        from datetime import datetime
        self.__historia_transakcji.append({
            'data': datetime.now(),
            'typ': typ,
            'kwota': kwota,
            'opis': opis,
            'saldo_po': self.__saldo
        })
    
    def __waliduj_kwote(self, kwota):
        """Prywatna metoda walidacji"""
        if kwota <= 0:
            raise ValueError("Kwota musi być większa od 0")
        if kwota > 1000000:
            raise ValueError("Maksymalna kwota transakcji to 1 000 000 zł")
        return True
    
    def wplata(self, kwota, opis="Wpłata"):
        """Publiczna metoda wpłaty"""
        if self.__waliduj_kwote(kwota):
            self.__saldo += kwota
            self.__dodaj_do_historii("WPŁATA", kwota, opis)
            return f"Wpłacono {kwota} zł. Nowe saldo: {self.__saldo} zł"
    
    def wyplata(self, kwota, opis="Wypłata"):
        """Publiczna metoda wypłaty"""
        if self.__waliduj_kwote(kwota):
            if kwota > self.__saldo:
                return "Niewystarczające środki na koncie"
            self.__saldo -= kwota
            self.__dodaj_do_historii("WYPŁATA", -kwota, opis)
            return f"Wypłacono {kwota} zł. Nowe saldo: {self.__saldo} zł"
    
    def przelew(self, konto_docelowe, kwota, tytul):
        """Przelew na inne konto"""
        wynik = self.wyplata(kwota, f"Przelew do {konto_docelowe.numer_konta}")
        if "Wypłacono" in wynik:
            konto_docelowe.wplata(kwota, f"Przelew od {self.__numer_konta}")
            return f"Przelew {kwota} zł wykonany pomyślnie"
        return wynik
    
    @property
    def saldo(self):
        """Getter - tylko odczyt salda"""
        return self.__saldo
    
    @property
    def numer_konta(self):
        return self.__numer_konta
    
    @property
    def wlasciciel(self):
        return self.__wlasciciel
    
    def pobierz_historie(self, ostatnie_n=10):
        """Publiczna metoda do pobierania historii"""
        return self.__historia_transakcji[-ostatnie_n:]
    
    def __str__(self):
        return f"Konto {self.__numer_konta} ({self.__wlasciciel}): {self.__saldo} zł"

# Użycie
konto1 = KontoBankowe("12345", "Jan Kowalski", 5000)
konto2 = KontoBankowe("67890", "Anna Nowak", 3000)

print(konto1)  # Konto 12345 (Jan Kowalski): 5000 zł

print(konto1.wplata(1500))  # Wpłacono 1500 zł. Nowe saldo: 6500 zł
print(konto1.wyplata(500))  # Wypłacono 500 zł. Nowe saldo: 6000 zł
print(konto1.przelew(konto2, 1000, "Przelew"))  # Przelew 1000 zł wykonany pomyślnie

print(f"Saldo konta 1: {konto1.saldo} zł")  # 5000 zł
print(f"Saldo konta 2: {konto2.saldo} zł")  # 4000 zł

# Nie można bezpośrednio modyfikować salda:
# konto1.__saldo = 1000000  # AttributeError
# konto1.saldo = 1000000  # AttributeError (brak settera)