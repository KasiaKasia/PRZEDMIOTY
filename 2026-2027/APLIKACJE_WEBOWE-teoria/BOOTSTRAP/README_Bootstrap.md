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
≥ 1400 px   → 1320 px
```

### Kiedy używać?

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



### Kiedy używać?

Na przykład dla:

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
| `.container`       |                 100% |          540px |           720px |          960px |            1140px |             1320px |
| `.container-sm`    |                 100% |          540px |           720px |          960px |            1140px |             1320px |
| `.container-md`    |                 100% |           100% |           720px |          960px |            1140px |             1320px |
| `.container-lg`    |                 100% |           100% |            100% |          960px |            1140px |             1320px |
| `.container-xl`    |                 100% |           100% |            100% |           100% |            1140px |             1320px |
| `.container-xxl`   |                 100% |           100% |            100% |           100% |              100% |             1320px |
| `.container-fluid` |                 100% |           100% |            100% |           100% |              100% |               100% |


---

## `.container-sm`

```html
<div class="container-sm">
    Treść
</div>
```

Kontener zajmuje 100% szerokości na najmniejszych ekranach.

Od breakpointu:

```text
sm ≥ 576 px
```

zaczyna otrzymywać maksymalną szerokość podobnie jak `.container`.

W praktyce `.container-sm` zachowuje się bardzo podobnie do zwykłego `.container`.

---

## `.container-md`

```html
<div class="container-md">
    Treść
</div>
```

Działa następująco:

```text
< 576 px    → 100%
576–767 px  → 100%

≥ 768 px    → max-width: 720 px
≥ 992 px    → max-width: 960 px
≥ 1200 px   → max-width: 1140 px
≥ 1400 px   → max-width: 1320 px
```

Czyli:

> do breakpointu `md` kontener zajmuje całą szerokość, a od `md` zaczyna mieć ograniczoną maksymalną szerokość.

Przykład:

```html
<div class="container-md bg-light">

    <h2>Aktualności</h2>    
</div>
```

Na telefonie:

```text
|────────────────────────|
|      Aktualności       |
|────────────────────────|
```

Na większym ekranie:

```text
|     ┌────────────────────────────┐     |
|     │        Aktualności         │     |
|     └────────────────────────────┘     |
```

---

## `.container-lg`

```html
<div class="container-lg">
    Treść
</div>
```

Tutaj kontener zajmuje 100% szerokości aż do breakpointu `lg`.

Czyli:

```text
xs → 100%
sm → 100%
md → 100%

lg ≥ 992 px
→ kontener otrzymuje max-width
```

Przykład:

```html
<div class="container-lg bg-warning p-3">

    <h2>Produkty</h2>

</div>
```

Może być przydatny, jeśli chcemy, aby zawartość na telefonach i tabletach wykorzystywała całą szerokość, a dopiero na komputerach była ograniczona.

---

## `.container-xl`

```html
<div class="container-xl">
    Treść
</div>
```

Zajmuje 100% szerokości dla:

```text
xs
sm
md
lg
```

Dopiero od:

```text
xl ≥ 1200 px
```

zaczyna otrzymywać ograniczoną maksymalną szerokość.

---

## `.container-xxl`

```html
<div class="container-xxl">
    Treść
</div>
```

Zajmuje 100% szerokości aż do:

```text
xxl ≥ 1400 px
```

Dopiero na bardzo dużych ekranach maksymalna szerokość wynosi:

```text
1320 px
```

---

# Porównanie

| Klasa              | Kiedy zajmuje 100% szerokości? |
| ------------------ | ------------------------------ |
| `.container`       | tylko poniżej `576 px`         |
| `.container-sm`    | poniżej `576 px`               |
| `.container-md`    | poniżej `768 px`               |
| `.container-lg`    | poniżej `992 px`               |
| `.container-xl`    | poniżej `1200 px`              |
| `.container-xxl`   | poniżej `1400 px`              |
| `.container-fluid` | **zawsze 100%**                |

---

# Przykład pokazujący wszystkie kontenery

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

---

# Kontener + Grid

Najczęściej kontener jest dopiero początkiem układu.

Przykład:

```html
<div class="container">

    <div class="row">

        <div class="col-12 col-md-6">
            HTML
        </div>

        <div class="col-12 col-md-6">
            CSS
        </div>

    </div>

</div>
```

Tutaj:

```text
.container
```

określa obszar, w którym znajduje się zawartość,

```text
.row
```

tworzy wiersz,

a:

```text
.col-12
.col-md-6
```

określają szerokość kolumn.

Na małym ekranie:

```text
┌───────────────────────────┐
│            HTML           │
├───────────────────────────┤
│            CSS            │
└───────────────────────────┘
```

Od `md`:

```text
┌──────────────┬──────────────┐
│     HTML     │      CSS     │
└──────────────┴──────────────┘
```

---

## Najważniejsze do zapamiętania

```text
.container
```

→ responsywny kontener o ograniczonej szerokości

```text
.container-fluid
```

→ zawsze 100% szerokości

```text
.container-md
```

→ 100% szerokości poniżej `md`, a od `md` ograniczana szerokość

```text
.container-lg
```

→ 100% szerokości poniżej `lg`, a od `lg` ograniczana szerokość
