# Zastosowanie informatyki

## 📝Sprzęt Komputerowy - Hardware

Definicja: Wszystkie fizyczne elementy komputera. Inaczej, wszystkie urządzenia (elementy) komputera w jego wnętrzu albo mogące być do niego podłączone.

Można (głównie sprzęt zewnętrzny) podzielić na:

- urządzenia wejścia: mysz, klawiatura, mikrofon, skaner…
- urządzenia wyjścia: monitor (wyświetlacz), głośniki / słuchawki, drukarka…
- urządzenia we/wy: monitor (wyświetlacz) dotykowy, modem...

Urządzenia wejścia służą do wprowadzania danych do komputera.

Przykłady:

- klawiatura,
- mysz,
- mikrofon,
- skaner,
- kamera.
 

Urządzenia wyjścia służą do przekazywania informacji z komputera do użytkownika.

Przykłady:

- monitor,
- drukarka,
- głośniki,
- projektor.
 

## 📝 Sprzęt wewnętrzny

Definicja: To elementy komputera umieszczone w jego obudowie (nie zawsze) i dające się wymienić (nie zawsze).

Przykłady: Procesor (CPU), płyta główna, pamięć RAM, dysk twardy (SSD/HDD), karta graficzna, karta sieciowa…

## 📝 Procesor (CPU)

Definicja: **Centralna jednostka obliczeniowa**. `Mózg komputera`. Najważniejszy (nie dla wszystkich ) element wewnętrzny komputera. Wykonuje operacje obliczeniowe - te których nie można zaadresować do innych urządzeń/elementów.

Wykonuje wszystkie operacje (pętle, porównania, matematykę (dodawanie, odejmowanie itp)) w naszych programach. Albo wszystkie operacje (wyszukiwanie) na bazach danych. Same dane do programów są w pamięci.

## Procesor (CPU) - częstotliwość taktowania

Mierzona w gigahercach (GHz), określa, jak szybko procesor może wykonywać instrukcje.

**Hz (Herc) to jednostka częstotliwości w układzie SI**, oznaczająca **liczbę cykli zjawiska okresowego** (np. fali, drgania, odświeżania ekranu) **występujących w ciągu jednej sekundy**. Jednostka ta nazwana jest na cześć niemieckiego fizyka Heinricha Hertza, który badał fale elektromagnetyczne.

1 GHz (gigaherc) = 1 000 000 000 Hz. = 1 000 000 000 operacji na sekundę

**Układ SI** to Międzynarodowy Układ Jednostek Miar (Système international d’unités).

To standardowy system jednostek używany w nauce i technice.

Przykładowe podstawowe jednostki SI to:

- metr (m) – długość,
- kilogram (kg) – masa,
- sekunda (s) – czas,
- amper (A) – natężenie prądu,
- kelwin (K) – temperatura,
- mol (mol) – ilość substancji,
- kandela (cd) – światłość.

## Procesor (CPU) - długość słowa

**Długość słowa procesora** określa ile bitów procesor może przetwarzać naraz w jednej sekundzie.

Definicja: **Słowo maszynowe** - Jest to podstawowa jednostka informacji przetwarzana przez komputer. Składa się z określonej liczby bitów, zwanej długością lub szerokością słowa.

Procesor każdą operację wykonuje na “słowach”. Im większe słowo obsługuje tym większą informację na raz może wykonać.

Ważne w programach kompilowanych (np. w C++) kompilować je pod określoną architekturę procesora. Zwyczajnie program będzie działać bardziej optymalnie, ewentualnie jak będzie źle to nie zadziała w ogóle.

Warto przeczytać: https://wsiz.edu.pl/blog-naukowy/jak-dziala-cpu-wykonywanie-instrukcji-przez-procesor-na-przykladach/

## Procesor (CPU) - architektura

Definicja: **Abstrakcyjny model definiujący jego budowę i zasady działania, obejmujący jego model programowy** (zestaw instrukcji, rejestry, tryby adresowania) **oraz mikroarchitekturę** (sprzętową implementację)

Główne architektury procesorów to x86-64 (w której działają zarówno Intel, jak i AMD) oraz ARM, używana głównie w urządzeniach mobilnych i serwerach. Intel wykorzystuje architekturę x86-64 i jego własne implementacje, a także wprowadza innowacje w architekturze rdzeni (np. Alder Lake, Raptor Lake). AMD wykorzystuje architekturę x86-64, rozwijając ją w swojej architekturze rdzeni Zen, która jest znana z wysokiej wydajności i obsługi wielowątkowości.

## 📝 Procesor (CPU) - rdzenie (Cores) i wątki (Threads)

Definicja: Rdzeń procesora to fizyczna, niezależna jednostka obliczeniowa wewnątrz procesora, która wykonuje operacje i instrukcje. Im więcej rdzeni, tym więcej zadań komputer może przetwarzać równolegle, zwiększając wydajność.

Definicja: Wątek to wirtualna, logiczna wersja rdzenia, umożliwiająca podzielenie jednego rdzenia fizycznego na dwie lub więcej części, które mogą niezależnie przetwarzać instrukcje.

Ilość wątków to bardzo istotna informacja z punktu widzenia programowania. Każdy program to proces, z którego programista może wydzielić wątki - sekwencje programu które mogą wykonywać się jednocześnie - dzięki czemu program działa szybciej.


**rdzeń** to fizyczna część procesora,
**wątek** to „strumień pracy”, który rdzeń wykonuje

**Wątek procesora** to **ciąg instrukcji wykonywany przez rdzeń procesora**. Większa liczba wątków pozwala lepiej wykonywać wiele zadań jednocześnie.

## 📝 Karta graficzna (GPU)

**Karta graficzna (GPU)** to podzespół komputera odpowiedzialny głównie za przetwarzanie i wyświetlanie grafiki na monitorze.

**GPU** to skrót od **Graphics Processing Unit**, czyli procesor graficzny.

Karta graficzna zajmuje się między innymi:

- wyświetlaniem obrazu, filmów i animacji,
- renderowaniem grafiki 2D i 3D,
- obsługą gier komputerowych,
- przyspieszaniem niektórych obliczeń, np. związanych z grafiką, AI czy obróbką wideo.

Przykłady kart graficznych:

- NVIDIA GeForce RTX 4060,
- AMD Radeon RX 7600,
- Intel Arc A750.

W komputerach spotyka się też **zintegrowane GPU**, które jest wbudowane w procesor, oraz **dedykowane karty graficzne**, które są osobnymi podzespołami i zwykle mają większą wydajność.

## 📝 Płyta główna (motherboard)

**Płyta główna (motherboard)** to główny element komputera, do którego podłączone są pozostałe podzespoły.

Można powiedzieć, że jest to "centrum połączeń" całego komputera.

Do płyty głównej podłącza się między innymi:

- procesor CPU,
- pamięć RAM,
- kartę graficzną,
- dyski SSD i HDD,
- zasilacz,
- wentylatory,
- urządzenia przez USB,
- kartę sieciową i dźwiękową.

Płyta główna umożliwia tym elementom komunikowanie się ze sobą.

Na płycie głównej znajdują się m.in.:

- socket procesora – gniazdo, w którym montuje się procesor CPU. Socket musi być zgodny z konkretną rodziną procesorów;
- sloty RAM - gniazda, do których wkłada się moduły pamięci operacyjnej RAM;
- złącza PCIe – służą do podłączania kart rozszerzeń, np. karty graficznej, karty sieciowej lub dźwiękowej;
- złącza M.2 - służą głównie do montażu szybkich dysków SSD, najczęściej NVMe;
- złącza SATA – służą do podłączania dysków HDD, SSD SATA oraz czasem napędów optycznych;
- porty USB - umożliwiają podłączanie urządzeń zewnętrznych, np. klawiatury, myszy, pendrive’a czy drukarki;
- BIOS/UEFI – oprogramowanie zapisane na płycie głównej, które uruchamia komputer, sprawdza podstawowe podzespoły i pozwala zmieniać ustawienia sprzętowe przed uruchomieniem systemu operacyjnego.

## 📝 Pamięć RAM

**Pamięć RAM** to pamięć operacyjna komputera, w której tymczasowo przechowywane są dane i programy aktualnie używane przez procesor.

RAM to skrót od **Random Access Memory**.

Na przykład, gdy uruchamiasz:

- przeglądarkę internetową,
- edytor kodu,
- grę,
- kilka aplikacji jednocześnie,

ich dane są ładowane do pamięci RAM, aby procesor miał do nich szybki dostęp.

Najważniejsza cecha RAM:

> Po wyłączeniu komputera dane zapisane w pamięci RAM są tracone.

Dlatego RAM różni się od dysku SSD lub HDD, gdzie dane pozostają zapisane po wyłączeniu komputera.

Im więcej pamięci RAM ma komputer, tym więcej programów i danych może być jednocześnie obsługiwanych bez dużego spowolnienia.

Przykładowe pojemności RAM:

- 8 GB
- 16 GB
- 32 GB
- 64 GB

## 📝 Dysk twardy (HDD/SSD)

**Dysk twardy** to urządzenie, na którym komputer przechowuje dane na stałe, czyli także po wyłączeniu zasilania.

Na dysku znajdują się między innymi:

- system operacyjny,
- programy,
- dokumenty,
- zdjęcia,
- filmy,
- gry.

Najczęściej spotyka się dwa rodzaje dysków:

| Rodzaj  | Pełna nazwa       | Cechy                                           |
| ------- | ----------------- | ----------------------------------------------- |
| **HDD** | Hard Disk Drive   | starszy, wolniejszy, mechaniczny, zwykle tańszy |
| **SSD** | Solid State Drive | szybszy, cichszy, bez ruchomych części          |


**HDD**

Dysk HDD zapisuje dane na obracających się talerzach magnetycznych.

Ma elementy mechaniczne, dlatego:

- jest wolniejszy,
- może być głośniejszy,
- jest bardziej podatny na uszkodzenia mechaniczne.

**SSD**

Dysk SSD zapisuje dane w pamięci elektronicznej.

Nie ma ruchomych części, dlatego:

- działa szybciej,
- jest cichy,
- komputer szybciej się uruchamia,
- programy szybciej się otwierają. 

> HDD i SSD służą do trwałego przechowywania danych, ale SSD jest znacznie szybszy od HDD.

## 📝 Jednostki pojemności pamięci masowych

**Jednostki pojemności pamięci masowych** służą do określania, ile danych może pomieścić np. dysk HDD, SSD, pendrive czy karta pamięci.

**Najmniejszą jednostką jest bit**.

**1 bit (b) – może przyjąć wartość 0 albo 1**

**1 bajt (B) to 8 bitów (b)**

| Jednostka | Wartość |
| --------- | ------: |
| 1 B       | 8 bitów |
| 1 KB      |  1024 B |
| 1 MB      | 1024 KB |
| 1 GB      | 1024 MB |
| 1 TB      | 1024 GB |


**KB, MB, GB, TB używają systemu dziesiętnego,**
**KiB, MiB, GiB, TiB – systemu binarnego.**

**KB, MB, GB, TB** są oparte na potęgach liczby `10`:
```text
10³ = 1000
10⁶ = 1 000 000
10⁹ = 1 000 000 000
```

KiB, MiB, GiB, TiB są oparte na potęgach liczby `2`, ponieważ komputery działają binarnie:
```text
2¹⁰ = 1024

1 KiB = 1024 B

Następnie:

1 MiB = 1024 KiB
1 GiB = 1024 MiB
1 TiB = 1024 GiB
```

## 📝Monitor (Wyświetlacz/Ekran)

**Monitor (wyświetlacz, ekran)** to urządzenie wyjściowe komputera, które służy do **wyświetlania obrazu i informacji przetwarzanych przez komputer**.

Do ważnych parametrów monitora należą:

- przekątna ekranu – np. 24", 27", 32",
- rozdzielczość – np. Full HD 1920 × 1080, QHD 2560 × 1440, 4K 3840 × 2160,
- częstotliwość odświeżania – np. 60 Hz, 144 Hz,
- typ matrycy – np. IPS, VA, OLED,
- jasność,
- czas reakcji,
- złącza – np. HDMI, DisplayPort, USB-C.


## Dekodowanie Liczb:
## Binarny, Ósemkowy, Szesnastkowy i Dziesiętny


📝**Dekodowanie liczby** **polega na odczytaniu jej wartości zapisanej w określonym systemie liczbowym**. Każdy **system liczbowy ma swoją podstawę**, która określa, **jakich cyfr używamy** oraz jakie **wartości mają kolejne pozycje w liczbie**.

### 📝 System dziesiętny

W systemie dziesiętnym podstawą jest **10**, więc używamy cyfr:

**0, 1, 2, 3, 4, 5, 6, 7, 8, 9**

**Wartość cyfry zależy nie tylko od samej cyfry, ale również od miejsca, na którym się znajduje.**

Dokładnie tak samo działają inne systemy liczbowe. Zmienia się tylko podstawa systemu.

### 📝 Dekodowanie liczby binarnej do dziesiętnej

Dekodowanie liczby binarnej do dziesiętnej polega na obliczeniu wartości liczby zapisanej w systemie binarnym, czyli dwójkowym, i przedstawieniu jej w systemie dziesiętnym.

**System binarny ma podstawę:**

`2`

**i używa tylko dwóch cyfr:**

`0` i `1`

Każda pozycja w liczbie binarnej odpowiada kolejnej potędze liczby 2. Pozycje liczymy od prawej strony, zaczynając od 0.

Przykład:

`1011₂`

Najpierw zapisujemy pozycje cyfr:
```text
pozycja:   3   2   1   0
liczba:    1   0   1   1
```
1 · 2³ + 0 · 2² + 1 · 2¹ + 1 · 2⁰
```text
1 * 2³ = 1 * 8 = 8
0 * 2² = 0 * 4 = 0
1 * 2¹ = 1 * 2 = 2
1 * 2⁰ = 1 * 1 = 1
```

Suma:  8 + 0 + 2 + 1 = 11

Zatem:

`1011₂ = 11₁₀`

### 📝 Dekodowanie liczby dziesiętnej do binarnej 

Zamiana liczby dziesiętnej na binarną polega na przedstawieniu liczby zapisanej w systemie dziesiętnym za pomocą tylko dwóch cyfr:

`0` i `1`

Najczęściej stosuje się **metodę kolejnego dzielenia przez 2 i zapisywania reszt z dzielenia**.

Załóżmy, że chcemy zamienić:

`25₁₀`

na system binarny.

Dzielimy liczbę przez 2 tak długo, aż otrzymamy 0:
```text
25 : 2 = 12 reszty 1
12 : 2 =  6 reszty 0
 6 : 2 =  3 reszty 0
 3 : 2 =  1 reszty 1
 1 : 2 =  0 reszty 1
``` 

Teraz bardzo ważne: reszty odczytujemy od dołu do góry:

`1 1 0 0 1`

czyli:

`25₁₀ = 11001₂`

Aby zamienić liczbę dziesiętną na binarną, dzielimy ją kolejno przez 2, zapisujemy reszty z dzielenia, a następnie odczytujemy reszty od dołu do góry.


### 📝 Dekodowanie liczby ósemkowej do dziesiętnej 

**Dekodowanie liczby ósemkowej do dziesiętnej** polega na obliczeniu wartości liczby zapisanej w systemie ósemkowym i przedstawieniu jej w systemie dziesiętnym.

**System ósemkowy ma podstawę:**

`8`

**i używa cyfr:**

`0, 1, 2, 3, 4, 5, 6, 7`

Każda pozycja w liczbie ósemkowej odpowiada kolejnej potędze liczby 8. Pozycje liczymy od prawej strony, zaczynając od 0.

Przykład:

157₈

Najpierw zapisujemy pozycje:
```text
pozycja:   2   1   0
liczba:    1   5   7
```
Następnie każdą cyfrę mnożymy przez odpowiednią potęgę liczby 8:

`1 · 8² + 5 · 8¹ + 7 · 8⁰`

Obliczamy potęgi:
```text
8² = 64
8¹ = 8
8⁰ = 1
```

Czyli:

`1 · 64 + 5 · 8 + 7 · 1`

otrzymujemy:

`64 + 40 + 7 = 111`

Zatem:

`157₈ = 111₁₀`

### 📝 Dekodowanie liczby dziesiętnej do ósemkowej

**Zamiana liczby dziesiętnej na ósemkową** polega na przedstawieniu liczby zapisanej w systemie dziesiętnym za pomocą cyfr używanych w systemie ósemkowym:

`0, 1, 2, 3, 4, 5, 6, 7`

**System ósemkowy ma podstawę:**

`8`

Najczęściej stosuje się metodę kolejnego dzielenia przez 8 i zapisywania reszt z dzielenia.

Przykład:

`111₁₀`

Chcemy zamienić tę liczbę na system ósemkowy.

Dzielimy kolejno przez 8:
```text
111 : 8 = 13 reszty 7
 13 : 8 =  1 reszty 5
  1 : 8 =  0 reszty 1
```  

Teraz reszty odczytujemy od dołu do góry:

`1 5 7`

czyli:

``111₁₀ = 157₈``

Ponieważ system ósemkowy ma podstawę `8`. Przy dzieleniu liczby całkowitej przez `8` możliwe reszty to:

`0, 1, 2, 3, 4, 5, 6, 7`

czyli dokładnie cyfry używane w systemie ósemkowym.

### 📝 Dekodowanie liczby Szesnastkowej na dziesiętny

Dekodowanie liczby szesnastkowej do dziesiętnej polega na obliczeniu wartości liczby zapisanej w systemie szesnastkowym i przedstawieniu jej w systemie dziesiętnym.

**System szesnastkowy ma podstawę:**

`16`

**i używa cyfr:**

`0, 1, 2, 3, 4, 5, 6, 7, 8, 9`

**oraz liter:**

`A, B, C, D, E, F`

**które oznaczają:**
```text
A = 10
B = 11
C = 12
D = 13
E = 14
F = 15
```

Każda pozycja w liczbie szesnastkowej odpowiada kolejnej potędze liczby 16. Pozycje liczymy od prawej strony, zaczynając od 0.

Przykład:

`2A₁₆`

Najpierw zapisujemy pozycje:

```text
pozycja:   1   0
liczba:    2   A
```

Następnie każdą cyfrę mnożymy przez odpowiednią potęgę liczby 16:

`2 · 16¹ + A · 16⁰`

Ponieważ:

`A = 10`

otrzymujemy:

`2 · 16¹ + 10 · 16⁰`

Obliczamy:
```text
16¹ = 16
16⁰ = 1
```
czyli:

`2 · 16 + 10 · 1`

więc:

`32 + 10 = 42`

Zatem:

`2A₁₆ = 42₁₀`

### 📝 Dekodowanie liczby dziesiętnej  do szesnastkowej

Zamiana liczby dziesiętnej na szesnastkową polega na przedstawieniu liczby zapisanej w systemie dziesiętnym za pomocą cyfr i liter używanych w systemie szesnastkowym.

**System szesnastkowy ma podstawę:**

`16`

**i używa cyfr**:

`0, 1, 2, 3, 4, 5, 6, 7, 8, 9`

**oraz liter:**

`A, B, C, D, E, F`

które oznaczają:
```text
A = 10
B = 11
C = 12
D = 13
E = 14
F = 15
```

Najczęściej stosuje się metodę kolejnego dzielenia przez 16 i zapisywania reszt z dzielenia.

Weźmy liczbę:

`42₁₀`

Dzielimy przez 16:
```text
42 : 16 = 2 reszty 10
 2 : 16 = 0 reszty 2
```

Reszta 10 w systemie szesnastkowym jest zapisywana jako:

`A`

Teraz odczytujemy reszty od dołu do góry:

`2 A`

czyli:

`42₁₀ = 2A₁₆`

### MySQL

`SELECT BIN(235) AS Binarny, OCT(235) AS ‘Ósemkowy’, HEX(235) AS Szesnastkowy;`

| Binarny   |  Ósemkowy         |  Szesnastkowy             |
| --------- | ----------------- | ------------------------- |
| 11101011  | 353               |  EB                       |

`SELECT CONV('11101011', 2, 10) AS ‘Dziesiętny’, CONV('11101011', 2, 8) AS ‘Ósemkowy’, HEX(CONV('11101011', 2, 16)) AS Szesnastkowy;`

| Dziesiętny  |  Ósemkowy         |  Szesnastkowy             |
| ----------- | ----------------- | ------------------------- |
| 235         | 353               |  EB                       |

---

## RODO
 
 📝 **Rozporządzenie o Ochronie Danych Osobowych**
Jest to **rozporządzenie Parlamentu Europejskiego i Rady UE 2016/679**, które weszło w życie 25 maja 2018 r. i obowiązuje we
wszystkich krajach Unii Europejskiej.


 📝 **Najważniejsze informacje o RODO:**
- **Cel RODO**: ochrona osób fizycznych w związku z przetwarzaniem ich danych osobowych oraz zapewnienie swobodnego przepływu takich danych w Unii Europejskiej.
- **Dane osobowe** to informacje dotyczące zidentyfikowanej lub możliwej do zidentyfikowania osoby fizycznej.

 📝 Przykłady:

- imię i nazwisko,
- PESEL,
- adres zamieszkania,
- adres e-mail,
- numer telefonu,
- numer dokumentu tożsamości,
- zdjęcie osoby,
- adres IP,
- dane lokalizacyjne,
- identyfikator użytkownika.

Nie każda pojedyncza informacja musi umożliwiać bezpośrednią identyfikację. Kilka informacji połączonych ze sobą również może pozwolić na ustalenie konkretnej osoby.

 📝 **Podstawowe zasady przetwarzania danych**

Dane osobowe powinny być przetwarzane zgodnie z następującymi zasadami:

- **zgodność z prawem, rzetelność i przejrzystość** – dane muszą być przetwarzane zgodnie z prawem i w sposób zrozumiały dla osoby, której dotyczą,
- **ograniczenie celu** – dane należy zbierać w konkretnym i określonym celu,
- **minimalizacja danych** – należy zbierać tylko dane niezbędne do realizacji danego celu,
- **prawidłowość** – dane powinny być poprawne i w razie potrzeby aktualizowane,
- **ograniczenie przechowywania** – danych nie należy przechowywać dłużej, niż jest to konieczne,
- **integralność i poufność** – dane powinny być odpowiednio zabezpieczone przed utratą, zniszczeniem i dostępem osób nieuprawnionych,
- **rozliczalność** – administrator powinien być w stanie wykazać, że przestrzega zasad RODO.

**Ważne**: zgoda nie jest jedyną podstawą przetwarzania danych.

Przykładowo szkoła nie musi uzyskiwać zgody ucznia lub rodzica na każde przetwarzanie danych, jeżeli obowiązek ich przetwarzania wynika z przepisów prawa.

 📝 **Szczególne kategorie danych osobowych**

Niektóre dane wymagają szczególnej ochrony.

 📝 Należą do nich między innymi dane dotyczące:

- zdrowia,
- pochodzenia rasowego lub etnicznego,
- przekonań religijnych lub światopoglądowych,
- poglądów politycznych,
- przynależności do związków zawodowych,
- danych genetycznych,
- danych biometrycznych wykorzystywanych do jednoznacznej identyfikacji osoby,
- życia seksualnego lub orientacji seksualnej.

Przetwarzanie takich danych jest co do zasady zabronione, chyba że zachodzi jedna z sytuacji dopuszczonych przez RODO.



 📝 **Administrator danych osobowych** to podmiot, który ustala:

- po co dane są przetwarzane,
- w jaki sposób będą przetwarzane.

 📝 **Administratorem może być** np.:

- szkoła,
- urząd,
- firma,
- uczelnia,
- fundacja.

 📝 **Administrator powinien między innymi:**

- zapewnić bezpieczeństwo danych,
- posiadać podstawę prawną przetwarzania,
- informować osoby o zasadach przetwarzania ich danych,
- umożliwiać realizację praw osób, których dane dotyczą,
- stosować odpowiednie środki techniczne i organizacyjne,
- dokumentować działania związane z ochroną danych,
- odpowiednio reagować na naruszenia ochrony danych.

 📝 **Podmiot przetwarzający**

**Podmiot przetwarzający (procesor) przetwarza dane osobowe w imieniu administratora.**

 📝 Przykład:

Szkoła korzysta z zewnętrznego systemu informatycznego do przechowywania określonych danych. Firma obsługująca system może być podmiotem przetwarzającym dane na rzecz szkoły.

 📝 Zasady takiego przetwarzania określa m.in. **umowa powierzenia przetwarzania danych**.


 📝 **Inspektor Ochrony Danych – IOD**

 📝 **Inspektor Ochrony Danych (IOD) pomaga organizacji w przestrzeganiu przepisów dotyczących ochrony danych.**

 📝 Do jego zadań należy między innymi:

- informowanie administratora i pracowników o obowiązkach związanych z RODO,
- monitorowanie przestrzegania przepisów,
- udzielanie zaleceń dotyczących ochrony danych,
- współpraca z organem nadzorczym.

W określonych przez RODO przypadkach wyznaczenie IOD jest obowiązkowe.

Prawa osoby, której dane dotyczą

 📝 **Osoba, której dane dotyczą, może mieć między innymi**:

- prawo do informacji o przetwarzaniu danych,
- prawo dostępu do swoich danych,
- prawo do sprostowania danych,
- prawo do usunięcia danych („prawo do bycia zapomnianym”),
- prawo do ograniczenia przetwarzania,
- prawo do przenoszenia danych,
- prawo do sprzeciwu wobec przetwarzania,
- prawo związane z podejmowaniem decyzji opartych wyłącznie na zautomatyzowanym przetwarzaniu, w tym profilowaniu.

Nie wszystkie te prawa mają zastosowanie w każdej sytuacji. Zależy to między innymi od podstawy prawnej i celu przetwarzania danych.

 📝 **Bezpieczeństwo danych osobowych**

**Administrator powinien stosować środki bezpieczeństwa odpowiednie do zagrożeń.**

 📝 Przykłady:

- silne hasła,
- uwierzytelnianie wieloskładnikowe,
- szyfrowanie danych,
- wykonywanie kopii zapasowych,
- aktualizowanie systemów i oprogramowania,
- ograniczanie dostępu do danych tylko do uprawnionych osób,
- blokowanie komputera po odejściu od stanowiska,
- ochrona urządzeń i nośników danych,
- szkolenie pracowników,
- kontrolowanie uprawnień użytkowników.

 📝 **Naruszenie ochrony danych osobowych**

**Naruszenie ochrony danych osobowych** to zdarzenie prowadzące np. do przypadkowego lub niezgodnego z prawem:

- zniszczenia danych,
- utraty danych,
- zmiany danych,
- nieuprawnionego ujawnienia danych,
- uzyskania dostępu do danych przez osobę nieuprawnioną.

 📝 Przykłady:

- wysłanie wiadomości e-mail z danymi do niewłaściwej osoby,
- zgubienie niezabezpieczonego pendrive'a zawierającego dane osobowe,
- włamanie do systemu informatycznego,
- przypadkowe opublikowanie danych w Internecie,
- utrata dokumentów zawierających dane osobowe.

 📝 Jeżeli naruszenie może powodować ryzyko naruszenia praw lub wolności osób fizycznych, administrator powinien zgłosić je właściwemu organowi nadzorczemu **bez zbędnej zwłoki, w miarę możliwości nie później niż w ciągu 72 godzin od jego stwierdzenia**.

Jeżeli naruszenie może powodować wysokie ryzyko dla osoby, której dane dotyczą, administrator powinien również bez zbędnej zwłoki poinformować tę osobę.

 📝 **Organ nadzorczy w Polsce**

W Polsce organem odpowiedzialnym za nadzór nad przestrzeganiem przepisów dotyczących ochrony danych osobowych jest **Prezes Urzędu Ochrony Danych Osobowych (Prezes UODO)**.

 📝 **Do UODO można między innymi:**

- zgłaszać określone naruszenia ochrony danych,
- składać skargi dotyczące niezgodnego z prawem przetwarzania danych.


 📝 Przykład – RODO w szkole

Szkoła może przetwarzać między innymi:

- imię i nazwisko ucznia,
- datę urodzenia,
- adres,
- dane kontaktowe rodziców,
- oceny,
- informacje o frekwencji,
- informacje wymagane przez przepisy prawa.

Dostęp do tych danych powinny mieć wyłącznie osoby, które potrzebują ich do wykonywania swoich obowiązków.

Przykładowo nauczyciel **nie powinien przekazywać danych ucznia osobie, która nie jest uprawniona do ich otrzymania**.

**Najważniejsza zasada**

 📝 **Dane osobowe należy przetwarzać tylko wtedy, gdy istnieje odpowiedni cel i podstawa prawna, zbierać tylko dane niezbędne oraz odpowiednio chronić je przed dostępem osób nieuprawnionych**.


## Protokoły internetowe

📝 To **zestawy reguł i standardów, które umożliwiają komunikację między urządzeniami w sieci**, takimi jak komputery, serwery czy smartfony. Pozwalają one na przesyłanie danych w sposób uporządkowany i zrozumiały dla obu stron.
HTTP i HTTPS to dwa popularne protokoły używane głównie do komunikacji między przeglądarkami internetowymi a serwerami webowymi.

📝 **HTTP (Hypertext Transfer Protocol)**

**Definicja**: **Protokół komunikacyjny internetowy, który określa zasady wymiany informacji między klientem (np. przeglądarką internetową) a serwerem**. Został stworzony w 1991 roku przez Tima Bernersa-Lee i jest używany do żądania i odbierania zasobów, takich jak strony HTML, obrazów czy plików.

**Jak działa**: **Gdy wpisujesz adres URL w przeglądarce (np. http://example.com), przeglądarka wysyła żądanie HTTP (Request) do serwera. Serwer  dpowiada (Response), wysyłając dane. Komunikacja odbywa się w trybie klient-serwer**

**Wersje**: Najpopularniejsze to HTTP/1.1 (starsza, ale nadal używana) i HTTP/2/HTTP/3 (nowsze, szybsze, z lepszą obsługą wielu żądań jednocześnie).

**Zalety**: Prosty i szybki w implementacji.

**Wady**: Brak szyfrowania – dane są przesyłane w formie jawnej (plain text), co czyni je podatnymi na podsłuchiwanie i ataki (np. man-in-the-middle).

📝 **HTTPS (Hypertext Transfer Protocol Secure)**
**Definicja**: **HTTPS to bezpieczna wersja HTTP, która dodaje warstwę szyfrowania za pomocą protokołów SSL** (Secure Sockets Layer) **lub nowszego TLS** (Transport Layer Security). Został wprowadzony, aby chronić dane przed nieautoryzowanym dostępem.

**Jak działa**: **Działa podobnie jak HTTP, ale połączenie jest szyfrowane**. **Przeglądarka weryfikuje certyfikat SSL/TLS serwera**, który potwierdza autentyczność strony. Adres zaczyna się od https://, a w przeglądarce pojawia się ikona kłódki.

**Zalety**: **Zapewnia poufność** (szyfrowanie danych), **integralność** (dane nie są modyfikowane w trakcie transmisji) **i uwierzytelnianie** (potwierdzenie tożsamości serwera). Jest obowiązkowy dla stron obsługujących płatności, loginy czy dane osobowe.

**Wady**: **Lekko wolniejszy od HTTP ze względu na szyfrowanie** (choć różnica jest minimalna w nowoczesnych systemach). Wymaga certyfikatu, co może być dodatkowym kosztem.


**HTTPS i SEO (Search Engine Optimization)**
Lepsze pozycjonowanie: Google traktuje HTTPS jako sygnał rankingowy, co może poprawić pozycję strony w wynikach wyszukiwania.

HTTPS chroni przed przechwyceniem danych przez osoby trzecie, nie gwarantuje pełnego bezpieczeństwa, ponieważ sama strona może być złośliwa lub zawierać phishing (forma oszustwa internetowego polegająca na podszywaniu się pod zaufane instytucje lub osoby w celu wyłudzenia poufnych danych, takich jak loginy, hasła czy dane kart płatniczych, lub nakłonienia ofiary do wykonania określonych działań). Dlatego zawsze należy zachować
ostrożność, zwłaszcza przy wprowadzaniu danych wrażliwych, i dokładnie sprawdzać adres URL przed podaniem informacji.

📝 Różnice między HTTP a HTTPS

| Cecha                   |  HTTP                                     | HTTPS                                                           |
| :---------------------- | :---------------------------------------- | :-------------------------------------------------------------- |
| Szyfrowanie danych      | Brak                                      | SSL/TLS                                                         |
| Bezpieczeństwo          | Podatne na podsłuch i ataki MITM          | Certyfikat SSL/TLS potwierdza serwer, dane integralne           |
| Domyślny port           | 80                                        | 443                                                             |
| Wydajność               | Nieco szybsze (brak szyfrowania)          | Minimalne wolniejsze, ale nowoczesne protokoły niwelują różnice |
| Wykorzystanie           | Radko w internecie (testy, sieci lokalne) | Standard w sieci(bankowość, sklepy,logowanie, serwery www)      |


## **Certyfikaty internetowe**

**Certyfikaty internetowe** (zwane także certyfikatami cyfrowymi, lub potocznie **SSL/TLS** **certyfikatami**) to elektroniczne dokumenty, które **służą do potwierdzania tożsamości stron w internecie oraz umożliwiają bezpieczne, szyfrowane połączenia między użytkownikiem a serwerem**. 

Certyfikaty używane w internecie są najczęściej zgodne ze standardem **X.509**. Zawierają m.in. informacje o właścicielu certyfikatu, jego kluczu publicznym, okresie ważności oraz podmiocie, który certyfikat wystawił.

Dzięki certyfikatom możliwe jest korzystanie z protokołu HTTPS, czyli szyfrowanej wersji protokołu HTTP.

### **Certyfikaty internetowe:**

**1. Potwierdzają tożsamość strony**
Certyfikat zapewnia, że strona, którą odwiedzasz, jest rzeczywiście tym, za co się podaje.
Przykład:

Jeżeli użytkownik otwiera stronę:

https://bank.pl

przeglądarka sprawdza, czy certyfikat został wystawiony dla domeny bank.pl oraz czy pochodzi od zaufanego urzędu certyfikacji.

Dzięki temu zmniejsza się ryzyko połączenia z fałszywym serwerem podszywającym się pod prawdziwą stronę.


**2. Umożliwiają szyfrowanie danych**
Certyfikat zawiera **klucz publiczny**oraz informacje potrzebne do uwierzytelnienia serwera.

Podczas nawiązywania połączenia TLS klient i serwer uzgadniają klucze sesyjne, które są następnie wykorzystywane do szyfrowania przesyłanych danych.

Dzięki temu dane takie jak:

- hasła,
- dane osobowe,
- numery kart płatniczych,
- dane logowania,
- dane przesyłane w formularzach

są chronione podczas transmisji przed przechwyceniem i odczytaniem przez osoby nieuprawnione.

**3. Zapewniają integralność danych**

TLS chroni również przed nieautoryzowaną zmianą danych podczas transmisji.

Oznacza to, że dane przesłane przez użytkownika do serwera nie powinny zostać niezauważenie zmodyfikowane w trakcie przesyłania.

**4. Są wystawiane przez zaufane urzędy certyfikacji**

Certyfikaty są najczęściej wystawiane przez:

**CA – Certificate Authority,** czyli urząd certyfikacji.

Przykładowe urzędy certyfikacji:

- Let's Encrypt,
- DigiCert,
- GlobalSign,
- Sectigo.

Przeglądarki oraz systemy operacyjne posiadają listy zaufanych głównych urzędów certyfikacji.

Jeżeli certyfikat strony został wystawiony przez zaufany urząd i spełnia wymagania bezpieczeństwa, przeglądarka może uznać go za wiarygodny.



### **Certyfikat internetowy zawiera m.in.:**

● **Wersja (Version)**: Określa wersję standardu certyfikatu (np. wersja 3 dla X.509 v3).

● **Numer seryjny (Serial Number)**: Unikalny identyfikator nadany przez urząd certyfikacji (CA).

● **Algorytm podpisu (Signature Algorithm)**: Określa algorytm użyty do podpisania certyfikatu (np. SHA-256 with RSA).

● **Wydawca (Issuer)**: Dane urzędu certyfikacji, który wystawił certyfikat, w tym nazwa, kraj, organizacja itp.

● **Okres ważności (Validity)**: Daty "od" (Not Before) i "do" (Not After), definiujące, kiedy certyfikat jest aktywny

● **Podmiot (Subject)**: Dane właściciela certyfikatu, np. nazwa domeny (Common Name), organizacja, kraj, miasto.

● **Informacje o kluczu publicznym podmiotu (Subject Public Key Info)**: Klucz publiczny serwera oraz algorytm klucza (np. RSA lub ECDSA).

● **Rozszerzenia (Extensions)**: Certyfikaty X.509 v3 mogą zawierać dodatkowe informacje.

Najważniejsze rozszerzenia to m.in.:

- **Subject Alternative Name – SAN**

Określa domeny, dla których certyfikat jest ważny.

Przykład:

example.com
www.example.com
sklep.example.com

- **Key Usage**

Określa, do czego może być wykorzystywany klucz zawarty w certyfikacie.

- **Extended Key Usage**

Precyzuje dodatkowe zastosowania certyfikatu, np. uwierzytelnianie serwera.

- **Basic Constraints**

Określa m.in., czy certyfikat może pełnić rolę certyfikatu urzędu certyfikacji.
● **Podpis cyfrowy (Signature)**: Podpis urzędu CA, weryfikujący autentycznośćcertyfikatu.
 
**Rodzaje certyfikatów**

➡ **DV – Domain Validation**
Jest to podstawowy poziom weryfikacji.

Urząd certyfikacji sprawdza przede wszystkim, czy osoba lub podmiot ubiegający się o certyfikat ma kontrolę nad daną domeną.

Przykładem dostawcy takich certyfikatów jest:

*Let's Encrypt*

Certyfikaty DV są często dostępne bezpłatnie.

➡ **OV – Organization Validation**
Oprócz kontroli nad domeną urząd certyfikacji weryfikuje także dane organizacji.

Może sprawdzać m.in.:

- nazwę przedsiębiorstwa,
- dane rejestrowe,
- istnienie organizacji.

➡ **EV – Extended Validation**
Certyfikat EV wymaga rozszerzonej procedury weryfikacji organizacji.

Urząd certyfikacji sprawdza bardziej szczegółowo dane podmiotu.

W przeszłości przeglądarki wyróżniały certyfikaty EV np. zielonym paskiem lub nazwą organizacji w pasku adresu.

Obecnie większość przeglądarek nie prezentuje już certyfikatów EV w tak wyraźny sposób.

Certyfikat jednodomenowy

**SSL czy TLS**
**SSL (Secure Sockets Layer)**: To starszy protokół szyfrowania, opracowany w latach 90 przez Netscape. Jego ostatnie wersje (SSL 2.0 i 3.0) miały poważne luki bezpieczeństwa,
dlatego od dawna nie są zalecane i nie są używane w praktyce.

**TLS (Transport Layer Security)**: To ulepszona i bezpieczniejsza wersja SSL, rozwijana od 1999 roku. Aktualne wersje to TLS 1.2 i TLS 1.3 (TLS 1.0 i 1.1 też są przestarzałe i
wycofywane). TLS jest standardem de facto w dzisiejszym internecie. 