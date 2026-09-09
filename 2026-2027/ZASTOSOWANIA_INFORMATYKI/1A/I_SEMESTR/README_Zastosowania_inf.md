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
 

## 📝Sprzęt wewnętrzny

Definicja: To elementy komputera umieszczone w jego obudowie (nie zawsze) i dające się wymienić (nie zawsze).

Przykłady: Procesor (CPU), płyta główna, pamięć RAM, dysk twardy (SSD/HDD), karta graficzna, karta sieciowa…

## 📝Procesor (CPU)

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

## Procesor (CPU) - rdzenie (Cores) i wątki (Threads)

Definicja: Rdzeń procesora to fizyczna, niezależna jednostka obliczeniowa wewnątrz procesora, która wykonuje operacje i instrukcje. Im więcej rdzeni, tym więcej zadań komputer może przetwarzać równolegle, zwiększając wydajność.

Definicja: Wątek to wirtualna, logiczna wersja rdzenia, umożliwiająca podzielenie jednego rdzenia fizycznego na dwie lub więcej części, które mogą niezależnie przetwarzać instrukcje.

Ilość wątków to bardzo istotna informacja z punktu widzenia programowania. Każdy program to proces, z którego programista może wydzielić wątki - sekwencje programu które mogą wykonywać się jednocześnie - dzięki czemu program działa szybciej.


**rdzeń** to fizyczna część procesora,
**wątek** to „strumień pracy”, który rdzeń wykonuje

**Wątek procesora** to **ciąg instrukcji wykonywany przez rdzeń procesora**. Większa liczba wątków pozwala lepiej wykonywać wiele zadań jednocześnie.