##  @media
 
 ```css
@media typ_mediów and (warunek) {
    /* Tu wstawiasz reguły CSS, które mają działać tylko pod tym warunkiem */
}

 ```

 ** Typy mediów**

 - **all**: Domyślny typ, stosowany do wszystkich mediów (np. ekrany, drukarki). Nie wymaga jawnego podawania w zapytaniu.

- **screen**: Przeznaczony dla ekranów urządzeń, takich jak komputery, smartfony czy tablety (kolorowe ekrany bitmapowe).

- **print**: Używany dla wydruków lub podglądu drukowania (strony paginowane, czarno-białe lub kolorowe).

- **speech**: Przeznaczony dla syntezatorów mowy i czytników ekranowych (np. dla osób niewidomych), zastępujący przestarzały typ "aural"

- jak mamy `min-width: 801px`
Czyli:
✅ 801px → działa

✅ 1200px → działa

❌ 800px → nie działa

❌ 500px → nie działa

- jak mamy `max-width: 800px`
Czyli:

✅ 800px → działa

✅ 600px → działa

❌ 801px → nie działa

❌ 1200px → nie działa