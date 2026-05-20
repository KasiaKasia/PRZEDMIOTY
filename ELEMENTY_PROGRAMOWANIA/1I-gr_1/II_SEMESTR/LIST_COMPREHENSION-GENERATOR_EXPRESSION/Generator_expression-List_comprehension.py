import sys

lista = [x**2 for x in range(1_000_000)]
gen = (x**2 for x in range(1_000_000))

print(sys.getsizeof(lista))   # ~8-9 MB
print(sys.getsizeof(gen))     # tylko ~120 bajtów!