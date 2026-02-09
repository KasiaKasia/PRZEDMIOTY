# Kompleksowy przykład użycia różnych operatorów
def sprawdz_liczbe(liczba):
    # Wyrażenie warunkowe z operatorami logicznymi
    typ = "parzysta dodatnia" if liczba > 0 and liczba % 2 == 0 else \
          "nieparzysta dodatnia" if liczba > 0 and liczba % 2 != 0 else \
          "parzysta ujemna" if liczba < 0 and liczba % 2 == 0 else \
          "nieparzysta ujemna" if liczba < 0 and liczba % 2 != 0 else "zero"
    
    # Operacje bitowe
    podwojona = liczba << 1  # szybkie mnożenie przez 2
    polowa = liczba >> 1 if liczba >= 0 else ~((~liczba) >> 1)  # dzielenie przez 2 z uwzględnieniem znaku
    
    return {
        "liczba": liczba,
        "typ": typ,
        "binarnie": bin(liczba),
        "podwojona": podwojona,
        "polowa": polowa
    }

# Test funkcji
print(sprawdz_liczbe(10))
print(sprawdz_liczbe(-7))
print(sprawdz_liczbe(0))