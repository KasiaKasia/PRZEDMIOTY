import csv
from pathlib import Path
# Zapis listy słowników
dane = [
    {'imie': 'Kasia', 'wiek': 25, 'miasto': 'Warszawa'},
    {'imie': 'Tomek', 'wiek': 32, 'miasto': 'Kraków'}
]

with open('output.csv', 'w', encoding='utf-8', newline='') as f:
    fieldnames = ['imie', 'wiek', 'miasto']
    writer = csv.DictWriter(f, fieldnames=fieldnames)
    writer.writeheader()
    writer.writerows(dane)