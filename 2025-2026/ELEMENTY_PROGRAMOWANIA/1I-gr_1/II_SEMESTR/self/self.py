class BankAccount:
    def __init__(self, wlasciciel, saldo_poczatkowe=0):
        # self - nowo tworzone konto
        self.wlasciciel = wlasciciel
        self.saldo = saldo_poczatkowe
        self.numer_konta = id(self)  # unikalny numer konta
        
        print(f"Tworzę konto dla {wlasciciel}")
        print(f"  self to: {self}")
        print(f"  numer konta: {self.numer_konta}")
        print(f"  saldo początkowe: {self.saldo}")
    
    def wplata(self, kwota):
        # self - konkretne konto, na które wpłacamy
        print(f"\nWpłata na konto {self.wlasciciel}: {kwota} zł")
        self.saldo += kwota
        self._wyswietl_saldo()
    
    def wyplata(self, kwota):
        # self - konkretne konto, z którego wypłacamy
        if self.saldo >= kwota:
            print(f"\nWypłata z konta {self.wlasciciel}: {kwota} zł")
            self.saldo -= kwota
        else:
            print(f"\nBrak środków na koncie {self.wlasciciel}")
        self._wyswietl_saldo()
    
    def _wyswietl_saldo(self):
        # self - konto, którego saldo pokazujemy
        print(f"  Aktualne saldo {self.wlasciciel}: {self.saldo} zł")

# Tworzymy dwa konta - każde ma swój własny self
print("=== Konto Anny ===")
konto_anny = BankAccount("Anna", 1000)

print("\n=== Konto Piotra ===")
konto_piotra = BankAccount("Piotr", 500)

# Operacje - self automatycznie wskazuje odpowiednie konto
print("\n=== Operacje ===")
konto_anny.wplata(200)      # self = konto_anny
konto_piotra.wyplata(100)   # self = konto_piotra
konto_anny.wyplata(1500)    # self = konto_anny