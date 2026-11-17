# sposób: 1
print(f"sposób: 1:\n")
def sito(tablica):
    for i in range(2, 11):
        if tablica[i]:
            for j in range(i * 2, 101, i):
                tablica[j] = False

tablica = [True] * 101
sito(tablica)

print("Liczby pierwsze od 2 do 100:")

for i in range(2, 101):
    if tablica[i] == True:
        print(i, end=" ")


# sposób: 2
print(f"\n\nsposób: 2:\n")
def sito_eratostenesa(tablica):
    n = len(tablica) - 1

    for i in range(2, int(n ** 0.5) + 1):
        if tablica[i] == True:
            for j in range(2 * i, n + 1, i):
                tablica[j] = False


n = 100

tablica = [True] * (n + 1)

sito_eratostenesa(tablica)

print("Liczby pierwsze w przedziale od 2 do 100:")

for i in range(2, n + 1):
    if tablica[i] == True:
        print(i, end=" ")

