import xml.etree.ElementTree as ET
#tworzy nowy element XML, który jest głównym (rootem) drzewa XML.
root = ET.Element("pracownicy")

 
osoba = ET.SubElement(root, "osoba", id="1")
 
ET.SubElement(osoba, "imie").text = "Jan"
ET.SubElement(osoba, "nazwisko").text = "Kowalski"
ET.SubElement(osoba, "pensja").text = "7500"

# Zapis z ładnym formatowaniem
tree = ET.ElementTree(root)
ET.indent(tree, space="    ")        # Python 3.9+
tree.write('pracownicy.xml', encoding='utf-8', xml_declaration=True)