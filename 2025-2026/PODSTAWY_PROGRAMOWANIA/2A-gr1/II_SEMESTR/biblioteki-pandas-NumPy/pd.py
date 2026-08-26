import pandas as pd

# Tworzenie DataFrame
data = {
    'imie': ['Anna', 'Jan', 'Ola', 'Tomek'],
    'wiek': [25, 30, 22, 35],
    'miasto': ['Warszawa', 'Kraków', 'Gdańsk', 'Wrocław']
}

df = pd.DataFrame(data)

print(f'df = {df}')

print(df.head())           # pierwsze 5 wierszy
print()
print(f'info  {df.info()}')           # informacje o typach i brakach
print(f'describe {df.describe()}')       # statystyki liczbowe
print()

# Wybieranie kolumn
print(df['imie'])
print(df[['imie', 'wiek']])

# Filtrowanie
print(df[df['wiek'] > 25])

# Dodawanie nowej kolumny
df['wiek_za_5_lat'] = df['wiek'] + 5
print(f"Wiek za 3 lata { df['wiek'] + 3} ")
# Grupowanie
print(df.groupby('miasto')['wiek'].mean())