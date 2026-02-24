# 1. Tabliczka mnożenia
print("Tabliczka mnożenia 5x5:")
for i in range(1, 6):
    for j in range(1, 6):
        print(f"{i} × {j} = {i*j:2}", end=" | ")
    print()  # nowa linia

# 2. Sumowanie liczb
n = 10
suma = 0
for i in range(1, n+1):
    suma += i
print(f"\nSuma liczb od 1 do {n} = {suma}")

# 3. Generowanie sekwencji
print("\nSekwencja kwadratów:")
kwadraty = [i**2 for i in range(1, 11)]
print(kwadraty)

# 4. Indeksowanie listy
owoce = ['jabłko', 'banan', 'pomarańcza', 'winogrono']
print("\nOwoce z indeksami:")
for i in range(len(owoce)):
    print(f"{i}: {owoce[i]}")