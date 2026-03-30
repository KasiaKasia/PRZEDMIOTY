from abc import ABC, abstractmethod

class MetodaPlatnosci(ABC):
    @abstractmethod
    def przetwórz_platnosc(self, kwota):
        pass

class KartaKredytowa(MetodaPlatnosci):
    def __init__(self, numer_karty):
        self.numer_karty = numer_karty
    
    def przetwórz_platnosc(self, kwota):
        return f"Przetwarzam {kwota} zł kartą kredytową {self.numer_karty[-4:]}"

class PayPal(MetodaPlatnosci):
    def __init__(self, email):
        self.email = email
    
    def przetwórz_platnosc(self, kwota):
        return f"Przetwarzam {kwota} zł przez PayPal ({self.email})"

class PrzelewBankowy(MetodaPlatnosci):
    def __init__(self, numer_konta):
        self.numer_konta = numer_konta
    
    def przetwórz_platnosc(self, kwota):
        return f"Przetwarzam {kwota} zł przelewem na konto {self.numer_konta}"

class SystemPlatnosci:
    def wykonaj_platnosc(self, metoda: MetodaPlatnosci, kwota):
        return metoda.przetwórz_platnosc(kwota)

# Użycie
system = SystemPlatnosci()

karta = KartaKredytowa("1234-5678-9012-3456")
paypal = PayPal("user@example.com")
przelew = PrzelewBankowy("12 3456 7890 1234 5678")

print(system.wykonaj_platnosc(karta, 100))
print(system.wykonaj_platnosc(paypal, 50))
print(system.wykonaj_platnosc(przelew, 200))