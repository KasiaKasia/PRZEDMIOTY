# Zadanie – formularze GET i POST w PHP

Utwórz plik `index.php`, w którym znajdą się **dwa formularze HTML**.

Pierwszy formularz powinien przesyłać dane za pomocą metody:

```html
<form method="GET">
```

Drugi formularz powinien przesyłać dane za pomocą metody:

```html
<form method="POST">
```

Oba formularze powinny zawierać **takie same pola**.

---

## Formularz 1 – metoda GET

Utwórz formularz:

```html
<form method="GET">
```

Formularz powinien zawierać:

### 1. Pole tekstowe Imię

Pole powinno zawierać:

1. `input type="text"`,
2. `placeholder="Podaj imię"`,
3. atrybut `required`,
4. odpowiedni atrybut `id`,
5. odpowiedni atrybut `name`,
6. element `<label>` z atrybutem `for` wskazującym na `id` pola.

### 2. Pole tekstowe Nazwisko

Pole powinno zawierać:

1. `input type="text"`,
2. `placeholder="Podaj nazwisko"`,
3. atrybut `required`,
4. odpowiedni atrybut `id`,
5. odpowiedni atrybut `name`,
6. element `<label>` z atrybutem `for` wskazującym na `id` pola.

### 3. Pole Kod pocztowy

Pole powinno zawierać:

1. `input type="text"`,
2. `placeholder="00-000"`,
3. walidację za pomocą:

```html
pattern="[0-9]{2}-[0-9]{3}"
```

4. atrybut `required`,
5. odpowiedni atrybut `id`,
6. odpowiedni atrybut `name`,
7. element `<label>` z atrybutem `for` wskazującym na `id` pola.

Przykładowa poprawna wartość:

```text
00-000
```

### 4. Lista rozwijana Miasto

Utwórz listę rozwijaną przy użyciu:

1. elementu `<select>`,
2. elementów `<option>`,
3. odpowiedniego atrybutu `id`,
4. odpowiedniego atrybutu `name`,
5. elementu `<label>` z atrybutem `for` wskazującym na `id` elementu `<select>`.

Dodaj przykładowe miasta:

- Warszawa,
- Kraków,
- Gdańsk,
- Wrocław.

### 5. Pole Zainteresowania

Utwórz grupę pól typu:

```html
<input type="checkbox">
```

Dodaj następujące zainteresowania:

- Programowanie,
- Sport,
- Muzyka,
- Podróże.

Każdy `checkbox` powinien posiadać:

1. własny atrybut `id`,
2. odpowiednią wartość `value`,
3. element `<label>` z atrybutem `for` odpowiadającym wartości `id`.

Użytkownik powinien mieć możliwość zaznaczenia **kilku zainteresowań jednocześnie**.

Wszystkie checkboxy powinny umożliwiać przesłanie kilku wartości do PHP, dlatego dla atrybutu `name` zastosuj zapis tablicowy, np.:

```html
name="zainteresowania[]"
```

### 6. Pole Tryb nauki

Utwórz dwa pola typu:

```html
<input type="radio">
```

Dostępne opcje:

1. Stacjonarny,
2. Zdalny.

Każde pole powinno posiadać:

1. własny atrybut `id`,
2. odpowiednią wartość `value`,
3. element `<label>` z atrybutem `for` wskazującym na jego `id`.

Oba pola `radio` powinny posiadać **taką samą wartość atrybutu `name`**, aby użytkownik mógł wybrać tylko jedną opcję.

Przykładowo:

```html
name="tryb"
```

### 7. Przycisk wysyłający formularz

Na końcu formularza dodaj przycisk:

```html
<button type="submit">Zapisz</button>
```

Przycisk powinien służyć do przesłania danych formularza.

---

## Obsługa formularza GET w PHP

Po wysłaniu formularza odczytaj dane za pomocą tablicy superglobalnej:

```php
$_GET
```

Wyświetl przesłane wartości na stronie.


---

## Formularz 2 – metoda POST

Utwórz drugi formularz:

```html
<form method="POST">
```

Powinien zawierać **dokładnie takie same pola jak formularz wykorzystujący metodę GET**:

1. Imię – `input type="text"`,
2. Nazwisko – `input type="text"`,
3. Kod pocztowy – pole tekstowe z atrybutem `pattern`,
4. Miasto – lista `<select>`,
5. Zainteresowania – pola `checkbox`,
6. Tryb nauki – dwa pola `radio`,
7. przycisk `<button type="submit">Zapisz</button>`.

Wszystkie pola powinny posiadać takie same wymagania dotyczące:

- `id`,
- `name`,
- `label`,
- `for`,
- `value`,
- `required`,
- `placeholder`,
- walidacji kodu pocztowego.

---

## Obsługa formularza POST w PHP

Po wysłaniu drugiego formularza odczytaj dane za pomocą tablicy superglobalnej:

```php
$_POST
```

Wyświetl przesłane wartości na stronie.



---

## Dodatkowe wymagania

- Każdy element `<input>` powinien posiadać własny atrybut `id`.
- Każde pole powinno posiadać odpowiedni atrybut `name`.
- Każdy element formularza powinien posiadać `<label>` z atrybutem `for` odpowiadającym wartości `id`.
- Pola `Imię`, `Nazwisko` oraz `Kod pocztowy` powinny być obowiązkowe.
- Kod pocztowy powinien mieć format `00-000`.
- Pola `radio` należące do jednej grupy powinny posiadać taką samą wartość atrybutu `name`.
- Każde pole `radio` powinno posiadać inną wartość atrybutu `value`.
- Checkboxy powinny umożliwiać zaznaczenie i przesłanie kilku wartości.
- Checkboxy zainteresowań powinny wykorzystywać zapis:

```html
name="zainteresowania[]"
```

- Formularz `GET` powinien przesyłać dane za pomocą metody `GET`.
- Formularz `POST` powinien przesyłać dane za pomocą metody `POST`.
- Dane z pierwszego formularza należy odczytywać za pomocą `$_GET`.
- Dane z drugiego formularza należy odczytywać za pomocą `$_POST`.
- Formularze powinny być opisane nagłówkami informującymi, z której metody korzystają.
- Kod HTML i PHP powinien być czytelny i prawidłowo sformatowany.



