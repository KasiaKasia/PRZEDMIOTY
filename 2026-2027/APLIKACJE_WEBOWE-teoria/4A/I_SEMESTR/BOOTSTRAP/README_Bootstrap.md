# BOOTSTRAP

**Bootstrap** to popularny framework front-endowy zawierający gotowe klasy CSS i komponenty JavaScript do tworzenia stron internetowych.
Link:
https://getbootstrap.com/

Ułatwia budowanie estetycznych i **responsywnych stron**, czyli takich, które dopasowują się do telefonu, tabletu i komputera.

Dzięki Bootstrap można szybciej tworzyć m.in.:

- układ kolumnowy Grid,
- przyciski,
- formularze,
- tabele,
- menu navbar,
- alerty i karty itp

## Podstawowe sposoby dodania Bootstrap

### 1. Dodanie Bootstrap przez CDN

Nie pobieramy i nie instalujemy Bootstrap. Przeglądarka pobiera potrzebne pliki z zewnętrznego serwera CDN.

**CDN (Content Delivery Network)** to sieć serwerów, z których przeglądarka może pobierać gotowe pliki potrzebne stronie, np. CSS, JavaScript, obrazy czy czcionki.
W `<head>`:

```html
<link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" >
```

Przed `</body>`:

```html
<script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
</script>
```
**Pełny przykład**:

```html
<!doctype html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1">

    <title>Bootstrap 5</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-primary">Bootstrap 5</h1>
        <button class="btn btn-success">Zapisz</button>
    </div>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>
```

### 2. Pobranie plików Bootstrap do projektu
Drugi sposób polega na pobraniu gotowych plików Bootstrap.

```text
projekt/
│
├── index.html
│
├── css/
│   └── bootstrap.min.css
│
└── js/
    └── bootstrap.bundle.min.js
```    

I podłączyć je:
**Pełny przykład**:

```html
<!doctype html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1">

    <title>Bootstrap 5</title>

    <link
        rel="stylesheet"
        href="css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-primary">Bootstrap 5</h1>
        <button class="btn btn-success">Zapisz</button>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
```
**Zaleta**

Strona może korzystać z Bootstrap również wtedy, gdy nie ma dostępu do Internetu.

### 3. Instalacja Bootstrap przez npm

Bootstrap można również zainstalować.

Ten sposób jest najczęściej stosowany w nowoczesnych projektach wykorzystujących np.:

- Vite,
- Webpack,
- Angular,
- React,
- Vue,
- Node.js.

Najpierw projekt musi korzystać z **npm**.

**npm** to skrót od **Node Package Manager**. Jest to menedżer pakietów używany głównie w projektach JavaScript i TypeScript do instalowania, aktualizowania i zarządzania bibliotekami oraz zależnościami projektu.

 
**Instalacja npm**

npm jest standardowo dostarczany razem z Node.js (https://nodejs.org/en/download ). Po instalacji Node.js  otwierasz np. Terminal, PowerShell albo CMD i sprawdzasz:
`node -v`

oraz:

`npm -v`

Po zainstalowaniu Node.js należhy wykonać **polecenie w katalogu projektu** czyli tam, gdzie znajduje się plik **package.json**:

`npm install bootstrap@5.3.8`

 
Przykład:
```text
projekt-bootstrap/
├── index.html
├── package.json
└── ...
```

W terminalu:
```text
cd projekt-bootstrap
npm install bootstrap@5.3.8
```

Po instalacji pojawi się m.in.:
```text
node_modules/
package-lock.json
```

a w `package.json` **zostanie dodana zależność bootstrap**.

Jeśli projekt nie ma jeszcze `package.json`, najpierw wykonujesz:

`npm init -y`

a dopiero potem:

`npm install bootstrap@5.3.8` lub `npm install bootstrap@latest`

### Pliki bootstrap `bootstrap.min.css`, **bootstrap.bundle.min.js**:

**`bootstrap.min.css`** to główny plik CSS Bootstrapa. Zawiera gotowe style odpowiedzialne za wygląd i układ strony, elementów, np.:

- system Grid: `container`, `row`, `col-*`,
- przyciski: `btn`, `btn-primary`,
- formularze: `form-control`, `form-label`,
- tabele: `table`, `table-striped`,
- kolory tekstu i tła,
- marginesy i padding,
- klasy responsywne,
- style navbar, kart, alertów itp.

 
**`bootstrap.bundle.min.js`** to plik JavaScript Bootstrapa. Odpowiada za działanie interaktywnych komponentów, np.:

- rozwijane menu navbar,
- dropdown,
- collapse,
- modal,
- tooltip,
- popover,
- carousel.

Wersja bundle zawiera dodatkowo **Popper**, który jest potrzebny m.in. do poprawnego **działania dropdownów, tooltipów i popoverów**.

## Mobile first, viewport i znacznik meta viewport
### 1. Mobile first

**Mobile first** to sposób projektowania stron internetowych, w którym najpierw tworzy się układ dla **najmniejszych ekranów**, a następnie rozszerza go dla coraz większych szerokości.

Bootstrap jest projektowany zgodnie z zasadą **mobile first**.

Oznacza to, że podstawowe style dotyczą najmniejszych ekranów, a następnie przy pomocy **breakpointów** można zmieniać wygląd strony dla większych ekranów.
 

**Breakpointy** to określone szerokości viewportu, od których Bootstrap może zmieniać wygląd lub układ strony. Czyli **określa, od jakiej szerokości ekranu ma zacząć obowiązywać dana reguła**.

Bootstrap 5 posiada następujące podstawowe breakpointy:

| Breakpoint        | Oznaczenie      | Minimalna szerokość |
| ----------------- | --------------- | ------------------: |
| Extra small       | brak oznaczenia |          `< 576 px` |
| Small             | `sm`            |          `≥ 576 px` |
| Medium            | `md`            |          `≥ 768 px` |
| Large             | `lg`            |          `≥ 992 px` |
| Extra large       | `xl`            |         `≥ 1200 px` |
| Extra extra large | `xxl`           |         `≥ 1400 px` |

Przykład:

```html
<div class="col-12 col-md-6 col-lg-4">
    Produkt
</div>
```

Oznacza:

* `col-12` – na najmniejszych ekranach element zajmuje **12 z 12 kolumn**, czyli 100% szerokości,
* `col-md-6` – od szerokości `768 px` element zajmuje **6 z 12 kolumn**, czyli 50% szerokości,
* `col-lg-4` – od szerokości `992 px` element zajmuje **4 z 12 kolumn**, czyli około 33% szerokości.

Można to zapisać tak:

```text
< 768 px    → 100% szerokości
≥ 768 px    → 50% szerokości
≥ 992 px    → około 33% szerokości
```

### Zasada `min-width`

Bootstrap działa głównie według zasady:

```text
min-width
```

czyli:

> zastosuj daną klasę od określonej szerokości i również na większych ekranach.

Przykład:

```html
col-md-6
```

oznacza:

> od `768 px` wzwyż element ma szerokość 6 z 12 kolumn.

Czyli klasa działa dla:

```text
md
lg
xl
xxl
```

dopóki nie zostanie nadpisana przez klasę dla większego breakpointu, np.:

```html
col-md-6 col-lg-4
```

Wtedy:

```text
md → 6 kolumn
lg i większe → 4 kolumny
```

### Ważne

Dla najmniejszego breakpointu `xs` nie wpisujemy `xs` w nazwie klasy.

Nie piszemy `col-xs-12` tylko `col-12`





## Kontenery w Bootstrap 5

**Kontener (`container`)** to element służący do umieszczania i organizowania zawartości strony.

Najczęściej wewnątrz kontenera umieszczamy później:

```text
container
   ↓
  row
   ↓
  col
   ↓
treść
```

Przykład:

```html
<div class="container">

    <div class="row">

        <div class="col">
            HTML
        </div>

        <div class="col">
            CSS
        </div>

    </div>

</div>
```

Bootstrap udostępnia trzy podstawowe rodzaje kontenerów:

* `.container`
* `.container-fluid`
* `.container-{breakpoint}`, np. `.container-md`, `.container-lg`

---

## 1. `.container`

```html
<div class="container">
    Treść strony
</div>
```

`.container` jest **responsywnym kontenerem o ograniczonej maksymalnej szerokości**.

Oznacza to, że na dużym ekranie zawartość nie rozciąga się od jednej krawędzi monitora do drugiej.

Przykład:

```html
<div class="container bg-light p-4">

    <h1>Bootstrap</h1>

    <p>
        Uczę się korzystać z kontenerów Bootstrap.
    </p>

</div>
```

Na dużym ekranie możemy wyobrazić sobie to tak:

```text
całe okno przeglądarki

|                                              |
|      ┌────────────────────────────────┐      |
|      │                                │      |
|      │          .container            │      |
|      │                                │      |
|      └────────────────────────────────┘      |
|                                              |
```

Po lewej i prawej stronie pozostaje wolne miejsce.

Bootstrap automatycznie zmienia maksymalną szerokość `.container`:

```text
< 576 px    → 100%
≥ 576 px    → 540 px
≥ 768 px    → 720 px
≥ 992 px    → 960 px
≥ 1200 px   → 1140 px
Dla przykładu cały ekran: 1200 px

| 30 px |-------- container 1140 px --------| 30 px |
≥ 1400 px   → 1320 px
```


`.container` jest dobrym wyborem dla głównej zawartości strony, np.:

```html
<div class="container">

    <h1>Lista produktów</h1>

    <p>
        Tutaj znajduje się główna treść strony.
    </p>

</div>
```

---

## 2. `.container-fluid`

```html
<div class="container-fluid">
    Treść
</div>
```

`.container-fluid` zajmuje **100% dostępnej szerokości viewportu na każdym ekranie**.

Czyli:

```text
|──────────────────────────────────────────────|
|              .container-fluid                |
|──────────────────────────────────────────────|
```

Przykład:

```html
<div class="container-fluid bg-primary text-white">

    <h1>Bootstrap 5</h1>

    <p>
        Ten element zajmuje całą szerokość strony.
    </p>

</div>
```

 

### `container` najlepiej używać na przykład dla:

* banera,
* nagłówka,
* sekcji zajmującej całą szerokość,
* dużego tła,
* panelu administracyjnego.



---

## `.container` a `.container-fluid`

### `.container`

```text
|      ┌──────────────────────────────┐      |
|      │             TREŚĆ            │      |
|      └──────────────────────────────┘      |
```

### `.container-fluid`

```text
|────────────────────────────────────────────|
|                   TREŚĆ                    |
|────────────────────────────────────────────|
```

Najprościej:

> `.container` – szerokość treści jest ograniczana.

> `.container-fluid` – treść może zajmować całą szerokość ekranu.

---

# 3. Responsywne kontenery

Bootstrap pozwala również określić **od jakiego breakpointu kontener ma zacząć mieć ograniczoną szerokość**.

Dostępne są:

```text
.container-sm
.container-md
.container-lg
.container-xl
.container-xxl
```


| Klasa kontenera    | Extra small `<576px` | Small `≥576px` | Medium `≥768px` | Large `≥992px` | X-Large `≥1200px` | XX-Large `≥1400px` |
| ------------------ | -------------------: | -------------: | --------------: | -------------: | ----------------: | -----------------: |
| `.container`       |                 100% |     max. 540px |      max. 720px |     max. 960px |       max. 1140px |        max. 1320px |
| `.container-sm`    |                 100% |     max. 540px |      max. 720px |     max. 960px |       max. 1140px |        max. 1320px |
| `.container-md`    |                 100% |           100% |      max. 720px |     max. 960px |       max. 1140px |        max. 1320px |
| `.container-lg`    |                 100% |           100% |            100% |     max. 960px |       max. 1140px |        max. 1320px |
| `.container-xl`    |                 100% |           100% |            100% |           100% |       max. 1140px |        max. 1320px |
| `.container-xxl`   |                 100% |           100% |            100% |           100% |              100% |        max. 1320px |
| `.container-fluid` |                 100% |           100% |            100% |           100% |              100% |               100% |


## Przykład pokazujący wszystkie kontenery

Można przygotować uczniom taką stronę:

```html
<div class="container bg-primary text-white p-3 mb-3">
    .container
</div>

<div class="container-md bg-success text-white p-3 mb-3">
    .container-md
</div>

<div class="container-lg bg-warning p-3 mb-3">
    .container-lg
</div>

<div class="container-xl bg-info p-3 mb-3">
    .container-xl
</div>

<div class="container-fluid bg-dark text-white p-3">
    .container-fluid
</div>
```

Następnie należy **zmniejszać i zwiększać szerokość przeglądarki**.

Dzięki temu można zobaczyć, kiedy poszczególne kontenery:

* zajmują całą szerokość,
* zaczynają mieć ograniczoną szerokość,
* pozostawiają wolne miejsce po bokach.


## System siatkowy Grid  
 
**System siatkowy (Grid)** w Bootstrap służy do tworzenia układu strony za pomocą **wierszy i kolumn**.

Bootstrap dzieli każdy wiersz na **12 części**.

Podstawowa struktura wygląda następująco:

```html
<div class="container">

    <div class="row">

        <div class="col">
            Treść
        </div>
    </div>
</div>
```

Czyli:

```text
container
   ↓
  row
   ↓
  col
   ↓
treść
```

* `.container` – określa obszar strony,
* `.row` – tworzy wiersz,
* `.col` – tworzy kolumnę.

---

### 1. System 12 kolumn

Każdy wiersz możemy traktować jak podzielony na:

```text
12 części
```

Na przykład:

```html
<div class="row">

    <div class="col-6">
        Lewa
    </div>

    <div class="col-6">
        Prawa
    </div>

</div>
```

Ponieważ:

```text
6 + 6 = 12
```

otrzymujemy dwie równe kolumny:

```text
|----------- 6 -----------|----------- 6 -----------|
|          50%            |           50%           |
```

---

Możemy również zrobić:

```html
<div class="row">

    <div class="col-4">
        Lewa
    </div>

    <div class="col-8">
        Prawa
    </div>

</div>
```

czyli:

```text
|------ 4 ------|------------- 8 -------------|
|     około     |                            |
|      33%      |          około 67%         |
```

---

Trzy równe kolumny:

```html
<div class="row">

    <div class="col-4">
        HTML
    </div>

    <div class="col-4">
        CSS
    </div>

    <div class="col-4">
        JavaScript
    </div>

</div>
```

Ponieważ:

```text
4 + 4 + 4 = 12
```
 
 
---

### 2. Rozmiary siatki – breakpointy

Bootstrap posiada **6 poziomów Grid**:

| Nazwa             | Oznaczenie | Szerokość viewportu | Klasa        |
| ----------------- | ---------- | ------------------: | ------------ |
| Extra small       | `xs`       |          `< 576 px` | `.col-*`     |
| Small             | `sm`       |          `≥ 576 px` | `.col-sm-*`  |
| Medium            | `md`       |          `≥ 768 px` | `.col-md-*`  |
| Large             | `lg`       |          `≥ 992 px` | `.col-lg-*`  |
| Extra large       | `xl`       |         `≥ 1200 px` | `.col-xl-*`  |
| Extra extra large | `xxl`      |         `≥ 1400 px` | `.col-xxl-*` |

W miejscu `*` wpisujemy liczbę od `1` do `12`.

Przykładowo:

```text
.col-6
.col-sm-6
.col-md-6
.col-lg-6
.col-xl-6
.col-xxl-6
```
 
 
 
**Przykład działania**:

```text
< 576 px
→ col-12
→ 100%

≥ 576 px
→ col-sm-6
→ 50%
```

Jeżeli mamy dwa elementy:

```html
<div class="row">

    <div class="col-12 col-sm-6">
        Produkt 1
    </div>

    <div class="col-12 col-sm-6">
        Produkt 2
    </div>

</div>
```

Na ekranie mniejszym niż `576 px`:

```text
┌─────────────────────┐
│      Produkt 1      │
├─────────────────────┤
│      Produkt 2      │
└─────────────────────┘
```

Od `576 px`:

```text
┌───────────┬───────────┐
│ Produkt 1 │ Produkt 2 │
└───────────┴───────────┘
```

---


### 3. Łączenie różnych rozmiarów siatki

Największą zaletą Bootstrap jest możliwość połączenia kilku breakpointów w jednej klasie.

Przykład:

```html
<div class="container">

    <div class="row">

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 bg-primary text-white">
            Produkt 1
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 bg-success text-white  ">
            Produkt 2
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3   bg-danger text-white  ">
            Produkt 3
        </div>
     </div>
</div>
```

Oznacza:

#### Extra small

```text
< 576 px

col-12
12 / 12 = 100%

1 element w wierszu
```

```text
┌───────────────────────────────┐
│           Produkt 1           │
├───────────────────────────────┤
│           Produkt 2           │
├───────────────────────────────┤
│           Produkt 3           │
└───────────────────────────────┘
```

---

#### Small

```text
≥ 576 px

col-sm-6
6 / 12 = 50%

2 elementy w wierszu
```

```text
┌───────────────┬───────────────┐
│   Produkt 1   │   Produkt 2   │
├───────────────┼───────────────┴
│   Produkt 3   │               
└───────────────┴
```

---

#### Medium

```text
≥ 768 px

col-md-4
4 / 12 ≈ 33%

3 elementy w wierszu
```

```text
┌───────────┬───────────┬───────────┐
│ Produkt 1 │ Produkt 2 │ Produkt 3 │
└───────────┴───────────┴───────────┘
```

---

#### Large

```text
≥ 992 px

col-lg-3
3 / 12 = 25%

4 elementy w wierszu
```

```text
┌─────────┬─────────┬─────────┬─────────┐
│Produkt 1│Produkt 2│Produkt 3│         │
└─────────┴─────────┴─────────┴─────────┘
```

---

###s Co dzieje się na `xl` i `xxl`?

W naszym kodzie nie podaliśmy:

```text
col-xl-*
```

ani:

```text
col-xxl-*
```

Dlatego nadal obowiązuje ostatnia ustawiona wartość:

```text
col-lg-3
```

Czyli również na `xl` i `xxl`:

```text
3 / 12 = 25%
```

---

### 4. Możemy określić wszystkie breakpointy

Przykład:

```html
    <div class="container">
        <div class="row">

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-1 bg-primary text-white border">
                Produkt 1
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-1 bg-success text-white border">
                Produkt 2
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-1 bg-danger text-white border">
                Produkt 3
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-1 bg-warning border">
                Produkt 4
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-1 bg-info border">
                Produkt 5
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 col-xxl-1 bg-secondary text-white border">
                Produkt 6
            </div>

        </div>
    </div>
```

Działanie:

| Szerokość | Klasa       | Szerokość elementu |
| --------- | ----------- | -----------------: |
| `<576px`  | `col-12`    |               100% |
| `≥576px`  | `col-sm-6`  |                50% |
| `≥768px`  | `col-md-4`  |         ok. 33,33% |
| `≥992px`  | `col-lg-3`  |                25% |
| `≥1200px` | `col-xl-2`  |         ok. 16,67% |
| `≥1400px` | `col-xxl-1` |          ok. 8,33% |

Czyli teoretycznie:

```text
xs  → 1 element
sm  → 2 elementy
md  → 3 elementy
lg  → 4 elementy
xl  → 6 elementów
xxl → 12 elementów,  xxl-1 oznacza 1 z 12 kolumn siatki. Jest 6 elementów, więc łącznie zajmują: 6 × 1 = 6 kolumn z 12, czyli 6 / 12 = 50%

| 1         | 1         | 1         | 1         | 1         | 1         |                 |
| Produkt 1 | Produkt 2 | Produkt 3 | Produkt 4 | Produkt 5 | Produkt 6 |   puste miejsce |
```

w jednym wierszu.
 
---

### 5. Automatyczne kolumny – `.col`

Nie zawsze musimy podawać liczbę.

Możemy napisać:

```html
<div class="row">

    <div class="col">
        HTML
    </div>

    <div class="col">
        CSS
    </div>

    <div class="col">
        JavaScript
    </div>

</div>
```

Bootstrap automatycznie podzieli dostępną przestrzeń na trzy równe części:

```text
|      HTML      |       CSS       |   JavaScript   |
```

Każda kolumna będzie miała około:

```text
33,33%
```

---

## 6. Suma przekroczy 12 KOLUMN

Przykład:

```html
<div class="row">

    <div class="col-8">
        Element 1
    </div>

    <div class="col-8">
        Element 2
    </div>

</div>
```

Pierwszy element zajmuje: `8 / 12`. Drugi również chce zająć: `8 / 12`

Czyli: `8 + 8 = 16`

Nie mieszczą się razem w 12 kolumnach.

Drugi element przejdzie więc do następnego wiersza.

---

## 6. Praktyczny przykład

```html
<div class="container">

    <div class="row g-3">

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="p-3 bg-primary text-white">
                HTML
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="p-3 bg-success text-white">
                CSS
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="p-3 bg-warning">
                JavaScript
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="p-3 bg-info">
                Bootstrap
            </div>
        </div>

    </div>

</div>
```

 ## klasy row-cols-*

 W Bootstrap 5.3 gotowe klasy row-cols-* są generowane maksymalnie do 6 kolumn w jednym wierszu. Oficjalnie wynika to z ustawienia Sass:

`$grid-row-columns: 6 !default;`

Czyli możesz użyć m.in.:
```text
row-cols-1
row-cols-2
row-cols-3
row-cols-4
row-cols-5
row-cols-6
```
oraz wersji responsywnych:
```text
row-cols-sm-6
row-cols-md-6
row-cols-lg-6
```
**Nie zadziała domyślnie `row-cols-50`**

## Gutters
**Gutters** to **odstępy pomiędzy kolumnami** w systemie Grid Bootstrap. Są tworzone głównie za pomocą poziomego padding wewnątrz kolumn. Domyślny gutter ma szerokość **1.5rem**, czyli zwykle **24 px**.


Najważniejsze klasy:

```text
gx-*  → odstępy poziome między kolumnami
gy-*  → odstępy pionowe między wierszami kolumn
g-*   → odstępy poziome i pionowe jednocześnie
```

**Przykład poziomy**:
```html
<div class="row gx-5">
    <div class="col">Kolumna 1</div>
    <div class="col">Kolumna 2</div>
</div>
```
`gx-5` zwiększa odstęp w poziomie pomiędzy kolumnami.

**Przykład pionowy**:
```html
<div class="row gy-5">
    <div class="col-6">1</div>
    <div class="col-6">2</div>
    <div class="col-6">3</div>
    <div class="col-6">4</div>
</div>
```
`gy-5` zwiększa odstęp w pionie, gdy kolumny przechodzą do kolejnych wierszy.

**Przykład w obu kierunkach**:
```html
<div class="row g-2">
    <div class="col-6">1</div>
    <div class="col-6">2</div>
    <div class="col-6">3</div>
    <div class="col-6">4</div>
</div>
```
`g-2` ustawia odstępy zarówno poziome, jak i pionowe.

Dla gutterów Bootstrap udostępnia standardowo wartości:
```text
g-0
g-1
g-2
g-3
g-4
g-5
```

> Jeśli potrzebowałabyś wartości większej niż 5, np. odpowiadającej Twojemu 34, trzeba utworzyć własną klasę CSS albo zmodyfikować skalę Bootstrap przez Sass.


## Utilities for layout

**Utilities** to gotowe klasy pomocnicze Bootstrap, które pozwalają szybko zmieniać wygląd i układ elementów.

### 1. `display`

Klasy `d-*` zmieniają sposób wyświetlania elementu.

**Przykłady**:
```html
<div class="d-block">Element blokowy</div>
<div class="d-inline">Element liniowy</div>
<div class="d-none">Element ukryty</div>
```

Można je też stosować responsywnie:
```html
<div class="d-none d-md-block">
    Widoczny od szerokości md
</div>
```
Czyli:

< 768 px  → ukryty
≥ 768 px  → widoczny

2. **Flexbox**

Klasa: `d-flex` ustawia:

`display: flex;`

Przykład:

```html
<div class="d-flex">
    <div>HTML</div>
    <div>CSS</div>
    <div>JavaScript</div>
</div>
```

3. **Margin i padding**

Bootstrap ma gotowe klasy do ustawiania odstępów.

Na przykład:
```html
<div class="m-3">
    Element
</div>
```

`m-3` oznacza margin.
```html
<div class="p-3">
    Element
</div>
```
`p-3` oznacza padding.

Można określić konkretną stronę:
```text
mt-* → margin-top
mb-* → margin-bottom

ms-* → margin-start
me-* → margin-end

pt-* → padding-top
pb-* → padding-bottom

ps-* → padding-start
pe-* → padding-end
```
Przykład:
```html
<div class="mt-3 p-4">
    Treść
</div>
```
czyli:

mt-3 → margines u góry
p-4  → padding ze wszystkich stron

Można też używać breakpointów:

`<div class="p-2 p-md-5">`

czyli:

małe ekrany → p-2
od md       → p-5

4. **Widoczność**

Bootstrap ma też klasy:

- `visible`
- `invisible`

Na przykład:
```html
<div class="invisible">
    Ukryty element
</div>
```
Ważna różnica:

`d-none`
**usuwa element z układu strony,**

natomiast:

`invisible`

**ukrywa go wizualnie, ale miejsce po nim nadal pozosta**je.