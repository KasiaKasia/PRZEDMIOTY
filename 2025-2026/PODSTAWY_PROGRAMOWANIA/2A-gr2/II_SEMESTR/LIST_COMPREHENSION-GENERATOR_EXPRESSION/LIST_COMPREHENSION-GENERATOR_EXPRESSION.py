# Znajdź wszystkie liczby parzyste od 0 do 999 999 i 
# policz ich kwadraty

import sys
import time

# ====================== 1. LIST COMPREHENSION (zachłanna) ======================
print("=== LIST COMPREHENSION ===")

start = time.time()

# Tworzymy całą listę naraz w pamięci
kwadraty_list = [x**2 for x in range(1_000_000) if x % 2 == 0]

czas_list = time.time() - start
pamięć_list = sys.getsizeof(kwadraty_list)

print(f"Czas utworzenia: {czas_list:.4f} sekundy")
print(f"Rozmiar w pamięci: {pamięć_list / 1024 / 1024:.2f} MB")
print(f"Pierwsze 10 wyników: {kwadraty_list[:10]}")
print(f"Ilość elementów: {len(kwadraty_list)}\n")


# ====================== 2. GENERATOR EXPRESSION (leniwy) ======================
print("=== GENERATOR EXPRESSION ===")

start = time.time()

# Tworzymy tylko "przepis" – nic się jeszcze nie oblicza!
kwadraty_gen = (x**2 for x in range(1_000_000) if x % 2 == 0)

czas_gen = time.time() - start
pamięć_gen = sys.getsizeof(kwadraty_gen)

print(f"Czas utworzenia: {czas_gen:.4f} sekundy")
print(f"Rozmiar w pamięci: {pamięć_gen} bajtów  (~0 MB)")
print(f"Typ obiektu: {type(kwadraty_gen)}")

# Dopiero teraz zaczynamy obliczać – na żądanie
pierwsze_10 = [next(kwadraty_gen) for _ in range(10)]
print(f"Pierwsze 10 wyników: {pierwsze_10}")