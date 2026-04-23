'''
Zadanie 2 — Dziedziczenie + ABC + typ jako parametr
Treść

Stwórz:

Abstrakcyjną klasę Figura (ABC) z metodą:
    pole()
Klasy:
    Prostokat
    Kolo

Klasę KalkulatorFigur, która ma metodę:

    def oblicz_pole(figura: Figura)

→ przyjmuje obiekt klasy Figura
'''
'''
Podpowiedź :

from abc import ABC, abstractmethod
import math

class Figura(ABC):
    @abstractmethod
    def pole(self):
        pass


class Prostokat(Figura):
    def __init__(self, a, b):
        self.a = a
        self.b = b

  

class Kolo(Figura):



class KalkulatorFigur:
'''