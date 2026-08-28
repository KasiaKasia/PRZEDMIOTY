# SYSTEMY BAZ DANYCH

## 📝**Definicja bazy danych:**
**Baza danych** – uporządkowany zbiór danych dotyczących określonej dziedziny, zapisanych w sposób umożliwiający ich **przechowywanie, wyszukiwanie, dodawanie, modyfikowanie i usuwanie**.

**Dzięki bazom danych można:**

- przechowywać dane w uporządkowany sposób,
- szybko wyszukiwać potrzebne informacje,
- dodawać nowe dane,
- modyfikować i usuwać istniejące dane,
- łączyć dane z różnych tabel,
- ograniczać powtarzanie tych samych informacji,
- kontrolować dostęp do danych,
- wykorzystywać dane w aplikacjach, stronach internetowych i systemach informatycznych.

## 📝 **Rodzaje baz danych i modele baz danych**

Bazy danych można klasyfikować na różne sposoby. Najważniejsze jest rozróżnienie:

1. **według modelu danych** – czyli sposobu organizacji danych,
2. **według sposobu przechowywania i dostępu**,
3. **według specjalnego przeznaczenia lub sposobu działania**.

---

### 📝 1. Modele danych

**Model danych** określa sposób, w jaki dane są zorganizowane, przechowywane i powiązane ze sobą w bazie danych.

#### 📝 1.1. Model hierarchiczny

Dane mają strukturę przypominającą **drzewo**. Element nadrzędny może posiadać wiele elementów podrzędnych.

Przykład:

```text
Szkoła
│
├── Klasa 1A
│   ├── Uczeń 1
│   └── Uczeń 2
│
└── Klasa 2A
    ├── Uczeń 3
    └── Uczeń 4
```

Każdy uczeń należy tutaj do określonej klasy, a klasy należą do szkoły.

---

#### 📝 1.2. Model sieciowy

Dane tworzą **sieć powiązań**. Jeden element może być połączony z wieloma innymi elementami.

**Przykład:** uczeń może uczestniczyć w wielu zajęciach, a w jednych zajęciach może uczestniczyć wielu uczniów.

```text
Anna ─── Programowanie
  │
  └───── Bazy danych

Jan ──── Programowanie
```

Model sieciowy pozwala więc tworzyć bardziej złożone powiązania niż model hierarchiczny.

---

#### 📝 1.3. Model relacyjny

Jest to najważniejszy model z punktu widzenia INF.03.

Dane przechowywane są w **tabelach**, które składają się z wierszy i kolumn. Tabele mogą być ze sobą powiązane za pomocą kluczy.

Tabela `uczniowie`:

| id_ucznia | imie | nazwisko |
| --------: | ---- | -------- |
|         1 | Anna | Kowalska |
|         2 | Jan  | Nowak    |

Tabela `oceny`:

| id_oceny | id_ucznia | ocena |
| -------: | --------: | ----: |
|        1 |         1 |     5 |
|        2 |         1 |     4 |
|        3 |         2 |     3 |

Pole `id_ucznia` pozwala powiązać ocenę z konkretnym uczniem.

**Przykładowe systemy:** MySQL, PostgreSQL, Microsoft SQL Server.

---

#### 📝 1.4. Model obiektowy

W modelu obiektowym dane przechowywane są w postaci **obiektów**, podobnie jak w programowaniu obiektowym.

Obiekt może posiadać właściwości opisujące dany element.

**Przykład:**

```text
Uczen
 ├── imie: Anna
 ├── nazwisko: Kowalska
 ├── klasa: 3A
 └── oceny: 5, 4, 5
```

Model ten jest szczególnie związany z programowaniem obiektowym.

---

#### 📝 1.5. Model obiektowo-relacyjny

**Model obiektowo-relacyjny** łączy cechy relacyjnych baz danych z niektórymi możliwościami charakterystycznymi dla modelu obiektowego.

Dane nadal mogą znajdować się w tabelach, ale system pozwala stosować bardziej rozbudowane typy danych i struktury.

**Przykład:** PostgreSQL jest określany jako system obiektowo-relacyjnej bazy danych.

---

#### 📝 1.6. Modele nierelacyjne – NoSQL

**NoSQL** to grupa baz danych, które nie opierają się wyłącznie na klasycznym modelu relacyjnym.

Stosuje się je m.in. wtedy, gdy potrzebna jest duża elastyczność struktury danych, obsługa bardzo dużej ilości informacji albo szybkie przetwarzanie danych.

##### 📝 1.6.1 Model dokumentowy

Dane przechowywane są w postaci **dokumentów**, np. JSON lub BSON.

Przykład:

```json
{
  "imie": "Anna",
  "nazwisko": "Kowalska",
  "klasa": "3A",
  "oceny": [5, 4, 5]
}
```

W jednym dokumencie można przechowywać informacje o uczniu razem z jego ocenami.

**Przykładowe systemy:** MongoDB, Couchbase.

**Zastosowanie:** np. katalogi produktów, profile użytkowników, aplikacje internetowe.

---

##### 📝 1.6.2. Model klucz–wartość

Dane przechowywane są jako pary:

**klucz → wartość**

Przykład:

```text
user_1 → Anna Kowalska
user_2 → Jan Nowak
```

Klucz pozwala szybko odnaleźć przypisaną do niego wartość.

**Przykład:** Redis.

**Zastosowanie:** np. pamięć podręczna (cache), przechowywanie sesji użytkowników lub ustawień aplikacji.

---

##### 📝 1.6.3. Model szerokokolumnowy – wide-column

Dane są organizowane w **rodziny kolumn**, a poszczególne rekordy mogą posiadać dużą liczbę kolumn.

Model ten jest przeznaczony do przechowywania bardzo dużych zbiorów danych i łatwego skalowania systemu.

Przykładowo jeden użytkownik może mieć:

```text
ID: 1
imie: Anna
email: anna@example.com
telefon: 123456789
```

a inny:

```text
ID: 2
imie: Jan
email: jan@example.com
miasto: Warszawa
wiek: 20
```

Struktura nie musi być więc identyczna dla każdego rekordu.

**Przykładowe systemy:** Apache Cassandra, HBase, Google Bigtable.

Cassandra jest przykładem rozproszonej bazy NoSQL wykorzystującej model wide-column.

---

##### 📝 1.6.4. Model grafowy

W bazie grafowej dane przedstawiane są za pomocą:

* **węzłów** – obiektów,
* **relacji/krawędzi** – połączeń między obiektami,
* **właściwości** – dodatkowych informacji o obiektach i relacjach.

Przykład:

```text
(Anna) ──ZNA──> (Jan)
   │
   └──LUBI──> (Programowanie)
```

Węzłami mogą być osoby, produkty, miasta lub inne obiekty, a krawędzie opisują ich wzajemne relacje.

**Przykład:** Neo4j.

**Zastosowanie:** sieci społecznościowe, systemy rekomendacji, analiza powiązań czy wykrywanie oszustw.

Neo4j wykorzystuje model grafowy oparty na węzłach, relacjach i właściwościach.

---

### 📝 2. Rodzaje (podział) baz według sposobu przechowywania i dostępu

Ten podział nie określa modelu danych, ale mówi **gdzie znajduje się baza i w jaki sposób użytkownicy mają do niej dostęp**.

#### 📝 2.1. Baza lokalna

Baza znajduje się na jednym komputerze i jest wykorzystywana przez działającą na nim aplikację.

**Przykład:** program przechowujący listę książek w lokalnej bazie SQLite.

```text
Komputer
│
├── aplikacja
└── baza danych
```

---

#### 📝 2.2. Baza sieciowa

Baza znajduje się na serwerze, a użytkownicy łączą się z nią przez sieć.

```text
Komputer 1 ──┐
             │
Komputer 2 ──┼──> Serwer ──> Baza danych
             │
Komputer 3 ──┘
```

**Przykład:** szkolny system, w którym sekretariat, nauczyciele i dyrekcja korzystają ze wspólnej bazy znajdującej się na serwerze.

---

#### 📝 2.3. Baza rozproszona

Dane są przechowywane na **wielu komputerach lub serwerach**, które współpracują ze sobą.

```text
            SYSTEM
               │
       ┌───────┼───────┐
       │       │       │
   Serwer 1 Serwer 2 Serwer 3
```

**Przykład:** duży sklep internetowy może korzystać z serwerów znajdujących się w różnych centrach danych.

---

## 3. Rodzaje baz danych według przeznaczenia (specjalizowane i nowoczesne rozwiązania)


#### 3.1. Bazy szeregów czasowych – time-series

Są przeznaczone do danych, w których szczególnie ważny jest **czas wykonania pomiaru lub wystąpienia zdarzenia**.

Przykład:

```text
czas                 temperatura
10:00                21°C
10:05                22°C
10:10                23°C
```

**Przykładowe zastosowania:**

* pomiary temperatury,
* dane z czujników,
* monitoring serwerów,
* kursy giełdowe.

**Przykłady systemów:** InfluxDB, TimescaleDB.

--- 



#### 3.2. Bazy przestrzenne i geograficzne

Służą do przechowywania oraz analizowania danych związanych z **położeniem geograficznym i przestrzenią**.

Mogą przechowywać np.:

* współrzędne punktu,
* lokalizację budynku,
* przebieg drogi,
* granice miasta.

**Przykład zastosowania:** aplikacja wyświetlająca na mapie najbliższe restauracje.

**Przykład:** PostGIS – rozszerzenie PostgreSQL umożliwiające przechowywanie i analizowanie danych przestrzennych.

---
 
#### 3.3. Bazy pamięciowe – in-memory

Dane są przechowywane przede wszystkim w **pamięci RAM**, dzięki czemu dostęp do nich może być bardzo szybki.

**Przykład:** Redis.

Mogą być wykorzystywane np. do:

* cache,
* sesji użytkowników,
* danych wymagających bardzo szybkiego odczytu.

---

#### 3.4. Bazy wielomodelowe

Pozwalają korzystać z **więcej niż jednego modelu danych w jednym systemie**.

Przykładowo jeden system może umożliwiać przechowywanie dokumentów oraz danych grafowych.

**Przykład:** ArangoDB.

---

### Ważne

Te kategorie mogą się **nakładać**.

Na przykład **Redis** można określić jednocześnie jako:

* bazę typu **klucz–wartość** – ponieważ opisuje to model przechowywania danych,
* rozwiązanie **in-memory** – ponieważ opisuje to sposób przechowywania i przetwarzania danych.

Podobnie baza może być jednocześnie:

**relacyjna + sieciowa + rozproszona**

ponieważ każde z tych określeń opisuje inną cechę systemu.


**RODZAJE I MODELE BAZ DANYCH**
```text
1. MODELE DANYCH
   ├── hierarchiczny
   ├── sieciowy
   ├── relacyjny
   ├── obiektowy
   ├── obiektowo-relacyjny
   │
   └── modele NoSQL
       ├── dokumentowy
       ├── klucz–wartość
       ├── szerokokolumnowy
       └── grafowy


2. RODZAJE BAZ WEDŁUG SPOSOBU DOSTĘPU
   ├── lokalne
   ├── sieciowe
   └── rozproszone


3. RODZAJE BAZ WEDŁUG PRZEZNACZENIA
   ├── time-series
   └── przestrzenne


4. INNE ROZWIĄZANIA
   ├── in-memory
   └── wielomodelowe
```
## **Omówienie podstawowych koncepcji: tabele, rekordy, pola**   

### 📝 **1. Tabela**
To główna struktura w relacyjnej bazie danych. Można ją porównać do arkusza w
Excelu – ma wiersze i kolumny. Każda tabela przechowuje dane dotyczące jednego
typu obiektów.

Przykład: Tabela Studenci przechowuje informacje o studentach.

### 📝 **2. Rekord (wiersz, ang. row/record)**
Pojedynczy wiersz w tabeli. Odpowiada jednej jednostce danych (np. jednemu
studentowi). Składa się z pól (kolumn).

Przykład rekordu w tabeli Studenci:
ID Imię Nazwisko Wiek Kierunek
1 Anna Kowalska 21 Informatyka
Ten jeden wiersz to rekord opisujący Annę Kowalską.

### 📝 **3. Pole (kolumna, ang. field/column)**
To kolumna w tabeli, przechowująca określony typ danych.
Każde pole ma nazwę i jest określonego typu danych (np. liczba, tekst, data).

Przykłady pól w tabeli Studenci:
Imię – tekst,
Nazwisko – tekst,
Wiek – liczba całkowita,
Kierunek – tekst.