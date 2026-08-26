import hashlib

class Uzytkownik:
    def __init__(self, login, haslo):
        self.__login = login
        self.__haslo_hash = self.__hashuj_haslo(haslo)
        self.__zalogowany = False
    
    def __hashuj_haslo(self, haslo):
        """Prywatna metoda - hashowanie hasła"""
        return hashlib.sha256(haslo.encode()).hexdigest()
    
    def zaloguj(self, haslo):
        """Publiczna metoda logowania"""
        if self.__haslo_hash == self.__hashuj_haslo(haslo):
            self.__zalogowany = True
            return "Zalogowano pomyślnie"
        return "Błędne hasło"
    
    def wyloguj(self):
        self.__zalogowany = False
        return "Wylogowano"
    
    def zmien_haslo(self, stare_haslo, nowe_haslo):
        """Zmiana hasła z walidacją"""
        if not self.__zalogowany:
            return "Musisz być zalogowany aby zmienić hasło"
        
        if self.__haslo_hash != self.__hashuj_haslo(stare_haslo):
            return "Błędne stare hasło"
        
        if len(nowe_haslo) < 8:
            return "Nowe hasło musi mieć minimum 8 znaków"
        
        self.__haslo_hash = self.__hashuj_haslo(nowe_haslo)
        return "Hasło zmienione pomyślnie"
    
    @property
    def login(self):
        return self.__login
    
    @property
    def czy_zalogowany(self):
        return self.__zalogowany

# Użycie
user = Uzytkownik("anna123", "tajnehaslo")
print(user.login)  # anna123
print(user.czy_zalogowany)  # False

print(user.zaloguj("tajnehaslo"))  # Zalogowano pomyślnie
print(user.czy_zalogowany)  # True

# Nie można bezpośrednio zobaczyć hasła:
# print(user.__haslo_hash)  # AttributeError