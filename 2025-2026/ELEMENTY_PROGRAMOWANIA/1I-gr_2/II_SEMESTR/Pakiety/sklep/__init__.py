# sklep/__init__.py

# Możemy tutaj wystawić wygodny interfejs publiczny pakietu

from .produkty import Produkt, stworz_produkt
from .zamowienia import Zamowienie

# Możemy też wykonać kod inicjalizujący pakiet
print("Pakiet 'sklep' został zaimportowany")

__all__ = ['Produkt', 'stworz_produkt', 'Zamowienie']