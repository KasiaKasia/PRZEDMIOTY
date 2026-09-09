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