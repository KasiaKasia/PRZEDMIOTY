# main.py

import obliczenia
from obliczenia import dodaj, Kalkulator

print(obliczenia.dodaj(5, 7))           # 12
print(dodaj(10, 20))                    # 30

kalk = Kalkulator()
print(kalk.dodaj(100))                  # 100
print(kalk.dodaj(50))                   # 150