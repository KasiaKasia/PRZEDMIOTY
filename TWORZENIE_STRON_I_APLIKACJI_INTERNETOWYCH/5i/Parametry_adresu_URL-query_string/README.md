##  htmlspecialchars

Metoda `htmlspecialchars()` w PHP służy do **zamiany specjalnych znaków HTML na ich odpowiedniki w postaci encji**, tak aby przeglądarka nie interpretowała ich jako kod HTML, tylko wyświetlała dosłownie.


🔹 Jak działa?

Wyobraź sobie, że użytkownik wpisze w formularzu:

```<h1>Witaj!</h1>```


Bez `htmlspecialchars()` po wyświetleniu w przeglądarce zobaczysz duży nagłówek „Witaj!”, bo przeglądarka potraktuje to jako kod HTML.

Z `htmlspecialchars()` dostaniesz tekst &lt;h1&gt;Witaj!&lt;/h1&gt;, który w przeglądarce wyświetli się jako:

```<h1>Witaj!</h1>```


🔹 Składnia
`htmlspecialchars(string $string, int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, string|null $encoding = null, bool $double_encode = true): string`


- `$string` – tekst wejściowy, który chcesz zabezpieczyć.

- `$flags` – określa, które znaki mają być zamieniane. Najczęściej używa się:

    - `ENT_COMPAT` – zamienia tylko podwójne cudzysłowy ("), ale nie pojedyncze (').

    - `ENT_QUOTES` – zamienia zarówno podwójne, jak i pojedyncze cudzysłowy.

    - `ENT_NOQUOTES` – nie zamienia cudzysłowów.

- `$encoding` – np. `"UTF-8"`, ważne aby poprawnie obsługiwać polskie znaki.

- `$double_encode` – domyślnie `true`. Jeśli ustawisz `false`, to już istniejące encje HTML nie zostaną podwójnie zakodowane.


1) Wrażliwy (niebezpieczny) przykład PHP — nie rób w ten sposób:
 
```php

<?php
// Uwaga: PRZYKŁAD NIEBEZPIECZNY — tylko do testów lokalnych!
$komentarz = $_POST['komentarz'] ?? '';
?>
<form method="post">
  <input name="komentarz" value="<?= htmlspecialchars($komentarz, ENT_QUOTES, 'UTF-8') ?>">
  <button type="submit">Wyślij</button>
</form>

<h3>Komentarz (echo bez zabezpieczeń):</h3>
<div>
  <?php
  // TU JEST ZAGROŻENIE — bez htmlspecialchars() pozwoli wykonać JS
  echo $komentarz;
  ?>
</div>

```

Jak to działa: 

wpisz w polu `<script>alert("XSS")</script>`, kliknij przycisk Wyślij — Serwer dokładnie tak to wypisze (echo $komentarz; bez escapingu), alert pojawi się.


2) Bezpieczny wariant (używaj zawsze tak)

Zamiast `echo $komentarz;` użyj:

`echo htmlspecialchars($komentarz, ENT_QUOTES, 'UTF-8');`


Wtedy przeglądarka zobaczy `&lt;script&gt;alert(&quot;XSS&quot;)&lt;/script&gt;` i żaden JS się nie wykona.


## Z czego składa się adres URL?

URL (Uniform Resource Locator) to "adres" zasobu w internecie.
Typowy URL wygląda tak:

https://example.com:443/katalog/plik.html?szukaj=abc#sekcja2


Składniki:

1. **Schemat** (protocol)

np. `http`, `https`, `ftp`, `mailto`

mówi, jak przeglądarka ma się połączyć.

2. **Host** (pełny adres serwera w domenie)

np. `example.com`, `pl.wikipedia.org`

adres serwera (domena lub IP).

- Domena główna (root domain)

    np. `wikipedia.org`

    składa się z:

    -- domeny najwyższego poziomu (TLD) – `org`, `com`, `pl`

    -- domeny drugiego poziomu – wikipedia

razem: `wikipedia.org`.

**To jest podstawowa nazwa, pod którą działa strona**.

- Subdomena

    np. pl. w `pl.wikipedia.org`

    jest **częścią przed domeną główną**.

    Subdomeny tworzy właściciel domeny, żeby wydzielać różne sekcje lub usługi:

    `pl.wikipedia.org` – wersja polska,

    `en.wikipedia.org` – wersja angielska,


3. **Port** (opcjonalny)

np. `:443`, `:8080`

wskazuje port serwera (dla https domyślnie 443, dla http – 80, więc zwykle pomijamy).

4. **Ścieżka** (path)

np. `/katalog/plik.html`

mówi, który plik/zasób na serwerze ma być pobrany.

5. **Parametry zapytania** (query string)

zaczyna się od `?`, np. `?szukaj=abc&strona=2`

Para `klucz=wartość` przekazywana do aplikacji (np. wyniki wyszukiwania). Kolejne parametry oddzielamy **ampersandem** `&` → `strona=2`

Znak `= `(equal sign) służy do przypisania wartości do klucza (parametru).

6. **Kotwica** (fragment)

zaczyna się od `#`, np. `#sekcja2`

nie jest wysyłana do serwera – działa tylko w przeglądarce. Przeglądarka używa jej, żeby przeskoczyć do konkretnego miejsca na stronie. Działa, jeśli w HTML jest element z takim id.