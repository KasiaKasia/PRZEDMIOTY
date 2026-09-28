# Formularze GET i POST w PHP

## Zadanie

Utwórz plik `index.php`, w którym znajdą się **dwa formularze HTML**.

Pierwszy formularz powinien przesyłać dane za pomocą metody:

```html
<form method="GET">
```

Drugi formularz powinien przesyłać dane za pomocą metody:

```html
<form method="POST">
```

Oba formularze powinny zawierać takie same pola.

---

## Formularz 1 – metoda GET

Utwórz formularz:

```html
<form method="GET">
```

Formularz powinien zawierać:

1. **Pole Imię**

   * zastosuj `input` typu `text`,
   * ustaw `placeholder="Podaj imię"`,
   * pole powinno być obowiązkowe – `required`,
   * dodaj atrybuty `id` oraz `name`,
   * dodaj element `<label>` z atrybutem `for` odpowiadającym wartości `id` pola.

2. **Pole Nazwisko**

   * zastosuj `input` typu `text`,
   * ustaw `placeholder="Podaj nazwisko"`,
   * pole powinno być obowiązkowe – `required`,
   * dodaj atrybuty `id` oraz `name`,
   * dodaj element `<label>` z atrybutem `for` odpowiadającym wartości `id` pola.

3. **Pole Kod pocztowy**

   * zastosuj `input` typu `text`,
   * ustaw `placeholder="00-000"`,
   * pole powinno być obowiązkowe – `required`,
   * zastosuj walidację za pomocą atrybutu:

```html
pattern="[0-9]{2}-[0-9]{3}"
```

* dodaj element `<label>` z odpowiednim atrybutem `for`.

4. **Lista rozwijana Miasto**

   * zastosuj element `<select>`,
   * dodaj elementy `<option>`,
   * umieść przykładowe miasta:

     * Warszawa,
     * Kraków,
     * Gdańsk,
     * Wrocław.

5. **Pole Zainteresowania**

   * zastosuj pola typu `checkbox`,
   * dodaj przykładowe zainteresowania:

     * Programowanie,
     * Sport,
     * Muzyka,
     * Podróże,
   * użytkownik powinien mieć możliwość zaznaczenia kilku zainteresowań jednocześnie,
   * każdy `input` powinien posiadać odpowiadający mu element `<label>`.

6. **Pole Tryb nauki**

   * zastosuj dwa pola typu `radio`,
   * dostępne opcje:

     * Stacjonarny,
     * Zdalny,
   * użytkownik powinien mieć możliwość wybrania tylko jednej opcji,
   * oba pola `radio` powinny posiadać taką samą wartość atrybutu `name`,
   * każde pole powinno posiadać odpowiadający mu element `<label>`.

7. **Przycisk wysyłający formularz**

   * na końcu formularza dodaj:

```html
<button type="submit">
```

Po wysłaniu formularza odczytaj i wyświetl przesłane dane za pomocą tablicy:

```php
$_GET
```

---

## Formularz 2 – metoda POST

Utwórz drugi formularz:

```html
<form method="POST">
```

Formularz powinien zawierać takie same pola jak formularz `GET`:

1. **Imię** – `input type="text"`.
2. **Nazwisko** – `input type="text"`.
3. **Kod pocztowy** – pole tekstowe z atrybutem `pattern`.
4. **Miasto** – lista rozwijana `<select>`.
5. **Zainteresowania** – pola `checkbox`.
6. **Tryb nauki** – dwa pola `radio`.
7. **Przycisk wysyłający formularz** – `<button type="submit">`.

Po wysłaniu formularza odczytaj i wyświetl przesłane dane za pomocą tablicy:

```php
$_POST
```

---

## Wymagania dodatkowe

* Każdy element `<input>` powinien posiadać własny atrybut `id`.
* Każde pole formularza powinno posiadać element `<label>` z atrybutem `for` odpowiadającym wartości `id`.
* Pola `radio` należące do jednej grupy powinny mieć taką samą wartość atrybutu `name`.
* Checkboxy powinny umożliwiać przesłanie kilku wartości.
* Pola `Imię`, `Nazwisko` oraz `Kod pocztowy` powinny być obowiązkowe.
* Kod pocztowy powinien mieć format:

```text
00-000
```

* Formularze powinny być opisane nagłówkami informującymi, czy korzystają z metody `GET`, czy `POST`.
* Kod powinien być czytelny i prawidłowo sformatowany.
* Do obsługi przesłanych danych należy wykorzystać PHP.

---

## Przykładowa struktura pliku

```text
projekt/
│
└── index.php
```

--- 
