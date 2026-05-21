import json
from pathlib import Path

# ==================== ODCZYT ====================

# 1. Z pliku
with open('dane.json', 'r', encoding='utf-8') as f:
    data = json.load(f)          # od razu dict/list
print(data)
print(data['imie'])
for klucz, wartosc in data.items():
    print(klucz, wartosc)

# 2. Z stringa
json_string = '{"imie": "Anna", "nazwisko": "Nowak", "wiek": 28, "hobby": ["czytanie", "bieganie"]}'
dane = json.loads(json_string)
print(dane)


# ==================== ZAPIS ====================
'''
indent=2 Dodaje wcięcia (ładne formatowanie JSON-a).

Bez indent:
{"imie": "Anna", "wiek": 28}

Z indent=2:
{
  "imie": "Anna",
  "wiek": 28
}

Liczba 2 oznacza ilość spacji użytych do wcięcia.

Np. indent=4:
{
    "imie": "Anna",
    "wiek": 28
}

ensure_ascii=False Pozwala zachować polskie znaki i Unicode.

Bez ensure_ascii=False
json.dumps({"miasto": "Łódź"})

Wynik:
'{"miasto": "\\u0141\\u00f3d\\u017a"}'

Polskie znaki są zamienione na kody Unicode.

Z ensure_ascii=False
json.dumps({"miasto": "Łódź"}, ensure_ascii=False)

Wynik:
'{"miasto": "Łódź"}'

Znaki są czytelne.

'''


# 1. Do pliku 
# json.dump() → zapisuje JSON bezpośrednio do pliku
with open('wyjscie.json', 'w', encoding='utf-8') as f:
    json.dump(dane, f, indent=4, ensure_ascii=False)

# 2. Do stringa
# Metoda json.dumps() zamienia obiekt Pythona (np. słownik, listę) na tekst w formacie JSON.
# json.dumps() → zwraca JSON jako string (str)
json_str = json.dumps(dane, indent=2, ensure_ascii=False)
print(f"dane do stringa: {json_str}")