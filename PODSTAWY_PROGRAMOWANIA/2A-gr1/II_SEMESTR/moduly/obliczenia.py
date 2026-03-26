# obliczenia.py

def dodaj(a, b):
    return a + b

def odejmij(a, b):
    return a - b

def pomnoz(a, b):
    return a * b

# zmienne na poziomie modułu
PI = 3.14159
TAX_RATE = 0.23

class Kalkulator:
    def __init__(self):
        self.wynik = 0
    
    def dodaj(self, x):
        self.wynik += x
        return self.wynik