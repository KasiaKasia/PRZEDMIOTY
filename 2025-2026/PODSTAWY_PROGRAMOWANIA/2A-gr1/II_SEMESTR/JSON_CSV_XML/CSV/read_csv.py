import csv
from pathlib import Path
 

# 1. Podstawowy odczyt
with open('dane.csv', 'r', encoding='utf-8', newline='') as f:
    reader = csv.reader(f)           # lista list
    next(reader)                     # pomiń nagłówek
    for row in reader:
        print(row[0], row[1], row[2])
print('----------------')

# 2. Odczyt jako słowniki  
with open('dane.csv', 'r', encoding='utf-8', newline='') as f:
    reader = csv.DictReader(f)
  #  print(reader.fieldnames)
    for row in reader:
        print(row['imie'], row['wiek'], row['miasto'])