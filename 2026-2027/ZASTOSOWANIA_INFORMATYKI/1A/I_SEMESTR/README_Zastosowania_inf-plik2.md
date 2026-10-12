# Zastosowanie informatyki


------
## **WCAG (Web Content Accessibility Guidelines)**

to **zbiór wytycznych opracowanych przez W3C (World Wide Web Consortium)** mających na celu zapewnienie, że **strony internetowe będą dostępne dla jak najszerszej grupy użytkowników, w tym osób z różnymi rodzajami niepełnosprawności.**

Wytyczne WCAG obejmują m.in. **dostosowanie kolorów, zapewnienie alternatywnych tekstów do obrazów, umożliwienie nawigacji przy użyciu klawiatury oraz poprawę czytelności treści**.

Celem WCAG jest poprawa dostępności sieci dla osób z problemami ze wzrokiem, słuchem, motoryką czy poznawaniem treści. 

Link do dokumentacji WCAG https://www.w3.org/TR/WCAG22/?utm_source=chatgpt.com

### **Poziomy WCAG:**
1. Poziom **A** (**Minimalna** dostępność)
2. Poziom **AA** (**Rekomendowana** dostępność)
3. Poziom **AAA** (**Najwyższa** dostępność)


### **Poziom A (Minimalna dostępność)**

❏ Strona spełnia podstawowe wymagania dostępności.

❏ Jest to najniższy poziom, który usuwa najpoważniejsze bariery.

Przykłady wymagań:
    ❏ Strona powinna być nawigowalna przy użyciu klawiatury.

    ❏ Obrazy muszą mieć alternatywny tekst (alt).

    ❏ Treść nie powinna powodować napadów padaczkowych (np. brak migających elementów).


### **Poziom AA (Rekomendowana dostępność)**

❏ To standardowy poziom wymagany dla instytucji publicznych i większości stron.

❏ Strony na tym poziomie są dostępne dla większej liczby osób.

Przykłady wymagań:

    ❏ Kontrast tekstu względem tła wynosi co najmniej 4.5:1.

    ❏ Strona działa dobrze zarówno na urządzeniach mobilnych, jak i desktopowych.

    ❏ Nagłówki i etykiety są jednoznaczne i pomagają w nawigacji.  

### **Poziom AAA (Najwyższa dostępność)**

❏ Jest to najbardziej rygorystyczny poziom dostępności.

❏ Wymagany w przypadku treści dla osób z dużymi niepełnosprawnościami (np. osoby niewidome, słabowidzące).

Przykłady wymagań:

    ❏ Kontrast tekstu wynosi co najmniej 7:1.

    ❏ Język strony jest prosty i łatwy do zrozumienia.

    ❏ Wszystkie multimedia mają transkrypcje i napisy    

**Tekst zgodny z WCAG 2.2, powinien spełniać zasady:**

Rozmiar tekstu
**14 pt i 18 pt ( Poziom AAA)**

**Przeliczenie 18 pt na px:**
Zgodnie z typowym przelicznikiem ekranowym (96 DPI):

```text
1 pt ≈ 1.333 px
Więc:
14 pt × 1.333 ≈ 19 px
18 pt × 1.333 ≈ 24 px    
```


## **Kontrast** 
Dla Poziomu AAA:

    ● Mały tekst ( < 18 pt **normalny** / < 14 pt **pogrubiony** ) → **≥ 7 : 1**

    ● Duży tekst ( ≥ 18 pt **normalny** / ≥ 14 pt **pogrubiony** ) → **≥ 4,5 : 1**

Link do strony, na której można sprawdzić między innymi kontrast:
https://webaim.org/resources/contrastchecker/

## **Skalowalność i możliwość powiększenia**

❏ Tekst powinien dać się powiększyć do **200% bez utraty treści lub funkcjonalności**. (WCAG **1.4.4 Resize Text, poziom AA**) [Źródło, link: https://www.w3.org/WAI/WCAG22/Understanding/resize-text.html]

❏ Wysokość linii (**line-height**): **co najmniej 1.5x wielkości czcionki**  (WCAG **1.4.12 Text Spacing, poziom AA**)
 
**line-height = font-size x 1.5**  

Dla przykładu:
```text
font-size: 16px;
to
16px × 1.5 = 24px
czyli:

line-height: 24px;
```
❏ **Odstęp między akapitami: co najmniej 2x wielkości czcionki**

❏ **Odstęp między znakami (letter-spacing): co najmniej 0.12x wielkości czcionki**
 
**letter-spacing = font-size x *0.12** [Źródło, link https://www.w3.org/WAI/WCAG21/Understanding/text-spacing.html]

Przykład:
```text
font-size: 20px;
letter-spacing: 2.4px;

bo:
20px × 0.12 = 2.4px
```
❏ **Odstęp między słowami (word-spacing): co najmniej 0.16x wielkości czcionki** [Źródło, link: https://www.w3.org/WAI/WCAG21/Understanding/text-spacing.html]

**word-spacing = font-size x *0.16**

Przykład dla czcionki `20px`:
```text
font-size: 20px;
word-spacing: 3.2px;

bo:
20px × 0.16 = 3.2px
```

### **Struktura i semantyka**

❏ **Nagłówki powinny być logicznie uporządkowane** (np. `<h1>`, `<h2>`, `<h3>` itd.) (1.3.1, Poziom A)

❏ **Etykiety formularzy powinny być jednoznaczne i poprawnie powiązane z polami** (`<label for="id"`) (2.4.6, Poziom AA)

❏ **Linki powinny mieć opisowy tekst** (np. zamiast "kliknij tutaj", użyj "Pobierz raport PDF") (2.4.4, Poziom A)


### **Język i prostota treści**

❏ **Ustaw język strony** (`<html lang="pl"`) (3.1.1, Poziom A)

❏ **Unikaj trudnych słów i żargonu** – jeśli są konieczne, dodaj definicję (3.1.3, Poziom AAA)

❏ **Tekst powinien być zrozumiały dla osób na poziomie edukacyjnym szkoły podstawowej** (3.1.5, Poziom AAA)

### **Unikanie migotania i animacji**

❏ **Tekst i obrazy nie mogą migać częściej niż 3 razy na sekundę** (2.3.1, Poziom A)

❏ **Jeśli tekst jest animowany, użytkownik powinien mieć możliwość zatrzymania animacji** (2.2.2, Poziom A)

### **Dostępność dla czytników ekranu**

❏ **Używaj semantycznego HTML**-a, np. `<p>` dla akapitów, `<ul>` i `<ol>` dla list.

❏ **Zapewnij poprawne znaczniki ARIA dla dynamicznych treści.**

❏ **Zapewnij tekst alternatywny (alt) dla obrazów z tekstem** (1.4.5,Poziom AA).


### **Linki, odsyłacze, przyciski**

❏ **Linki, odsyłacze, przyciski powinny mieć obszar klikalny co najmniej 44x44 px** (Kryterium 2.5.5 (Target Size) – poziom AAA)

**Jeśli nie możesz zwiększyć rozmiaru, dodaj odpowiedni padding lub elementy odstępu dookoła**.

❏ **Linki, odsyłacze muszą być wyraźnie oznaczone, gdy są w fokus** (np. obramowanie, zmiana koloru, podkreślenie).

Przykład:
```CSS
a:focus { outline: 2px solid #000; outline-offset: 4px; }
```

❏ **Dla przycisku jeśli używasz ikony bez tekstu, musi być aria-label**.

Przykład:
```HTML
<button aria-label="Zamknij okno"> <svg>..</svg> </button>
```

### **Nawigacja za pomocą klawiatury:**

❏ **TAB** (idź do przodu),

❏ **Shift + TAB** (idź do tyłu),

❏ **Enter** (wybierz),

❏ **Esc** (wyjdź/zamknij),

❏ **Spacja** (zaznacz/rozwiń w np. pola rozwijane, listy rozwijane),

❏ **strzałki “góra” i “dół”** (przechodzenie po elementach listy rozwijanej),
Wykonanie powyższych punktów uzyskuje się dodając właściwość:
**`tabindex = "0" do np.: div, input, button`**

```HTML
<div tabindex="0">
    Ten element może otrzymać fokus klawiatury
</div>
```
[Źródło, link https://www.w3.org/WAI/WCAG22/Understanding/keyboard.html ]




## 🌐 Sieć komputerowa

**Sieć komputerowa** to system połączonych ze sobą urządzeń, np. komputerów, drukarek, serwerów czy routerów, które umożliwiają wymianę danych i współdzielenie zasobów.

Do współdzielonych zasobów mogą należeć m.in.:

- pliki,
- drukarki,
- dostęp do Internetu,
- aplikacje,
- bazy danych.

Do najważniejszych elementów i technologii sieciowych należą:

- media transmisyjne,
- protokoły komunikacyjne,
- routery,
- przełączniki,
- interfejsy sieciowe.

---

## 📝 Klasyfikacja sieci ze względu na zasięg

**Sieci komputerowe można podzielić ze względu na obszar, jaki obejmują.**

### LAN – Local Area Network

**LAN** to sieć lokalna, ograniczona do niewielkiego obszaru, np.:

- domu,
- biura,
- szkoły,
- jednego budynku,
- kilku sąsiadujących budynków.

### MAN – Metropolitan Area Network

**MAN** to **sieć miejska lub metropolitalna, która obejmuje obszar miasta lub aglomeracji miejskiej**.

### WAN – Wide Area Network

**WAN** to **sieć rozległa, obejmująca bardzo duży obszar geograficzny**, np.:

- kraj,
- kontynent,
- cały świat.

Przykładem globalnej sieci WAN jest **Internet**.

---

## 📝 LAN – Local Area Network

**LAN (Local Area Network)**, czyli **sieć lokalna, to sieć komputerowa łącząca urządzenia na ograniczonym obszarze**, takim jak:

- dom,
- biuro,
- szkoła,
- budynek firmy.

Jej głównym zadaniem jest umożliwienie szybkiej wymiany danych oraz współdzielenia zasobów pomiędzy urządzeniami.

Przykładowe zasoby współdzielone w sieci LAN:

- drukarki,
- pliki,
- serwery,
- dostęp do Internetu.

### Rodzaje sieci LAN

Sieci LAN mogą być:

- **przewodowe** – np. Ethernet,
- **bezprzewodowe** – WLAN,
- **wirtualne** – VLAN, które umożliwiają logiczny podział jednej większej sieci.

### Główne cechy sieci LAN

- **Ograniczony zasięg** – obejmuje niewielki obszar geograficzny, zwykle jeden budynek lub kilka sąsiadujących budynków.
- **Szybka komunikacja** – umożliwia szybki i stabilny przepływ danych pomiędzy urządzeniami.
- **Współdzielenie zasobów** – pozwala wielu użytkownikom korzystać z tych samych drukarek, plików czy dostępu do Internetu.
- **Wysoka przepustowość** – połączenia przewodowe, np. Ethernet, zapewniają wysoką prędkość transmisji i niskie opóźnienia.

---

## 📝 WAN – Wide Area Network

**WAN (Wide Area Network)**, czyli sieć rozległa, to rozbudowana sieć komputerowa łącząca oddalone od siebie lokalizacje.

Może łączyć np.:

- biura firmy,
- oddziały przedsiębiorstwa,
- centra danych,
- sieci lokalne w różnych miastach lub krajach.

Sieci WAN umożliwiają komunikację pomiędzy odległymi sieciami LAN.

Do działania wykorzystują często infrastrukturę operatorów telekomunikacyjnych.

Przykładem największej sieci WAN jest **Internet**.

### Cechy i funkcje sieci WAN

- **Duży zasięg geograficzny** – może obejmować kraj, kontynent lub cały świat.
- **Łączenie mniejszych sieci** – WAN może łączyć sieci LAN i MAN.
- **Wykorzystanie infrastruktury zewnętrznej** – często opiera się na usługach operatorów telekomunikacyjnych.
- **Komunikacja pomiędzy oddziałami firm** – umożliwia wymianę danych między różnymi lokalizacjami przedsiębiorstwa.
- **Podstawa Internetu** – Internet jest największym przykładem sieci WAN.

---

## 📝 MAN – Metropolitan Area Network

**MAN (Metropolitan Area Network)**, czyli sieć metropolitalna lub miejska, to sieć komputerowa obejmująca obszar miasta lub aglomeracji.

Jej zadaniem jest łączenie wielu rozproszonych sieci lokalnych LAN.

Sieci MAN często wykorzystują szybkie połączenia światłowodowe.

Mogą być wykorzystywane przez:

- instytucje rządowe,
- szkoły i uczelnie,
- przedsiębiorstwa,
- operatorów telekomunikacyjnych,
- dostawców usług internetowych.

### Cechy sieci MAN

- **Zasięg** – obejmuje miasto lub aglomerację miejską.
- **Łączenie sieci LAN** – pozwala połączyć wiele lokalnych sieci komputerowych.
- **Technologie** – często wykorzystuje światłowody, ale może również korzystać z technologii radiowych.
- **Duża przepustowość** – umożliwia szybką transmisję danych pomiędzy różnymi lokalizacjami.

### Przykłady zastosowania sieci MAN

- łączenie budynków uczelni znajdujących się w różnych częściach miasta,
- łączenie oddziałów dużej firmy,
- tworzenie infrastruktury inteligentnych miast,
- połączenie sieci różnych instytucji publicznych.

---

### 📌 Podsumowanie

| Typ sieci | Pełna nazwa | Zasięg | Przykład |
|---|---|---|---|
| **LAN** | Local Area Network | dom, biuro, szkoła, budynek | sieć komputerowa w szkole |
| **MAN** | Metropolitan Area Network | miasto lub aglomeracja | sieć łącząca budynki uczelni |
| **WAN** | Wide Area Network | kraj, kontynent, świat | Internet |


# Topologie sieci komputerowych

Topologie sieci komputerowych to sposoby, w jakie urządzenia (komputery, serwery, routery, przełączniki itp.) są fizycznie lub logicznie połączone w sieci. Topologia określa strukturę połączeń między urządzeniami oraz sposób przepływu danych.

Wybór topologii wpływa na wydajność, skalowalność, niezawodność i łatwość zarządzania siecią.

**Topologie dzielimy na:**

- **Fizyczne:** Rzeczywisty układ kabli, urządzeń i połączeń.
- **Logiczne:** Sposób, w jaki dane przepływają w sieci, niezależnie od fizycznego układu (np. sieć może być fizycznie w topologii gwiazdy, ale logicznie w topologii magistrali).

## Główne topologie sieci komputerowych

1. Topologia magistrali (Bus Topology)
2. Topologia gwiazdy (Star Topology)
3. Topologia pierścienia (Ring Topology)
4. Topologia siatki (Mesh Topology)
5. Topologia drzewa (Tree Topology)
6. Topologia hybrydowa (Hybrid Topology)

## 1. Topologia magistrali (Bus Topology)

Wszystkie urządzenia są podłączone do pojedynczego kabla (magistrali), który pełni rolę głównego kanału komunikacyjnego.

**Schemat:**

```text
    [PC 1]      [PC 2]      [PC 3]      [PC 4]
       |           |           |           |
=======+===========+===========+===========+=======
                Magistrala
```

**Jak działa:** Dane wysyłane przez jedno urządzenie są widoczne dla wszystkich urządzeń w sieci, ale tylko odbiorca z pasującym adresem je przetwarza.

**Zalety:**
- Prosta i tania w instalacji (mało kabli).
- Łatwa do wdrożenia w małych sieciach.

**Wady:**
- Awaria magistrali (np. przerwanie kabla) wyłącza całą sieć.
- Kolizje danych przy dużym ruchu (wspólny kanał).
- Trudna do skalowania i diagnozowania błędów.

**Zastosowanie:** Małe sieci LAN, np. w małej bibliotece, gdzie kilka komputerów łączy się z jednym serwerem przechowującym dane o książkach.

## 2. Topologia gwiazdy (Star Topology)

Wszystkie urządzenia są podłączone do centralnego punktu, np. przełącznika (switch) lub koncentratora (hub).

**Schemat:**

```text
            [PC 1]
               |
[PC 2] --- [SWITCH] --- [PC 3]
               |
            [PC 4]
```

**Jak działa:** Dane z jednego urządzenia przechodzą przez centralny punkt do odbiorcy. Przełącznik kieruje dane tylko do docelowego urządzenia.

**Zalety:**
- Łatwa do zarządzania i skalowania (dodanie nowego urządzenia to podłączenie do przełącznika).
- Awaria jednego urządzenia nie wpływa na resztę sieci.
- Lepsza wydajność dzięki unikaniu kolizji (w przełącznikach).

**Wady:**
- Awaria przełącznika zatrzymuje całą sieć.
- Wymaga więcej kabli niż magistrala, co zwiększa koszt.

**Zastosowanie:** Najpopularniejsza topologia w nowoczesnych sieciach LAN.

## 3. Topologia pierścienia (Ring Topology)

Każde urządzenie jest połączone z dokładnie dwoma innymi, tworząc zamknięty pierścień.

**Schemat:**

```text
      [PC 1] -------- [PC 2]
        |                |
        |                |
      [PC 4] -------- [PC 3]
```

**Jak działa:** Dane przesyłane są w jednym kierunku (lub dwóch w podwójnym pierścieniu) od urządzenia do urządzenia, aż dotrą do odbiorcy.

**Zalety:**
- Równomierne obciążenie sieci (brak kolizji w token ring).
- Prosta w przewidywaniu przepływu danych.

**Wady:**
- Awaria jednego urządzenia może przerwać cały pierścień (chyba że użyto podwójnego pierścienia).
- Trudna do rozbudowy (dodanie urządzenia wymaga przerwania pierścienia).

**Zastosowanie:** Starsze sieci, np. Token Ring w IBM. Rzadziej używana dziś, ale może być w małej bibliotece z prostą siecią.

## 4. Topologia siatki (Mesh Topology)

Każde urządzenie jest połączone z wieloma (lub wszystkimi) innymi urządzeniami w sieci (pełna siatka) lub z kilkoma (częściowa siatka).

**Schemat (pełna siatka):**

```text
      [PC 1] -------- [PC 2]
        |  \          /  |
        |    \      /    |
        |      \  /      |
        |      /  \      |
        |    /      \    |
        |  /          \  |
      [PC 3] -------- [PC 4]
```

**Jak działa:** Dane mogą być przesyłane bezpośrednio między urządzeniami, co zwiększa niezawodność.

**Zalety:**
- Bardzo wysoka niezawodność – awaria jednego połączenia nie przerywa komunikacji.
- Duża przepustowość dzięki wielu ścieżkom.

**Wady:**
- Bardzo kosztowna (dużo kabli i konfiguracji).
- Skomplikowana w zarządzaniu przy dużej liczbie urządzeń.

**Zastosowanie:** Sieci o wysokim zapotrzebowaniu na niezawodność.

## 5. Topologia drzewa (Tree Topology)

Hierarchiczna struktura, w której urządzenia są połączone w sposób przypominający drzewo – korzeń (np. główny przełącznik) i gałęzie (podprzełączniki).

**Schemat:**

```text
                [SWITCH GŁÓWNY]
                 /           \
                /             \
          [SWITCH A]       [SWITCH B]
           /     \          /     \
        [PC 1] [PC 2]    [PC 3] [PC 4]
```

**Jak działa:** Kombinacja topologii gwiazdy i magistrali – urządzenia w grupach (gwiazdy) łączą się hierarchicznie.

**Zalety:**
- Łatwa do skalowania (dodawanie nowych gałęzi).
- Dobra dla dużych sieci z podziałem na segmenty.

**Wady:**
- Awaria korzenia (głównego przełącznika) przerywa komunikację w całej sieci.
- Złożona konfiguracja.

**Zastosowanie:** Duże sieci LAN, np. w dużej bibliotece z oddziałami, gdzie każdy oddział ma swoją gwiazdę połączoną z głównym serwerem.

## 6. Topologia hybrydowa (Hybrid Topology)

Kombinacja różnych topologii (np. gwiazda + magistrala lub gwiazda + pierścień).

**Schemat (gwiazdy połączone magistralą):**

```text
       [PC 1]                   [PC 3]
          |                        |
       [SWITCH A]              [SWITCH B]
          |                        |
==========+========================+==========
          |                        |
       [PC 2]                   [PC 4]
                 Magistrala
```

**Jak działa:** Łączy zalety różnych topologii w zależności od potrzeb.

**Zalety:**
- Elastyczność – dostosowana do specyficznych wymagań.
- Możliwość optymalizacji kosztów i niezawodności.

**Wady:**
- Złożona w konfiguracji i zarządzaniu.
- Trudniejsza diagnostyka błędów.

**Zastosowanie:** Średnie i duże organizacje, np. biblioteka z centralnym serwerem i różnymi topologiami w oddziałach.

---
 
