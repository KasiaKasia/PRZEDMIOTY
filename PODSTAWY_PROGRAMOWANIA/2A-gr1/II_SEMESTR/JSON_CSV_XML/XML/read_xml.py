import xml.etree.ElementTree as ET
from pathlib import Path

# ==================== ODCZYT ====================

tree = ET.parse('dane.xml')
root = tree.getroot()

# Przeglądanie struktury
print(root.tag)                    # nazwa głównego elementu

for child in root:
    print(child.tag, child.attrib)

# Znajdowanie konkretnych elementów
for person in root.findall('osoba'):
    imie = person.find('imie').text
    wiek = person.find('wiek').text
    print(f"Pan/i {imie} ma {wiek} lat")
    
    # Atrybuty
    if 'id' in person.attrib:
        print("ID = ", person.get('id'))