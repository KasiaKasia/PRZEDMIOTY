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

    a) domeny najwyższego poziomu (TLD) – `org`, `com`, `pl`

    b) domeny drugiego poziomu – wikipedia

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

## **PDO (PHP Data Objects)**

Blok `try-catch`:

Kod jest owinięty w strukturę `try { ... } catch(PDOException $e) { ... }`. To pozwala na obsługę błędów. Jeśli połączenie się nie uda, skrypt nie zawiesi się bez informacji – zamiast tego wyświetli komunikat błędu i zakończy działanie (die(...)).

`$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);` ustawia tryb obsługi błędów w obiekcie PDO (PHP Data Objects), który jest używany do połączenia z bazą danych (w tym przypadku MySQL).
Co dokładnie robi?

- `PDO::ATTR_ERRMODE`: To jest stała (atrybut) PDO, która określa, jak PDO ma reagować na błędy podczas wykonywania zapytań do bazy danych (np. błędy w SQL, problemy z połączeniem itp.).
- `PDO::ERRMODE_EXCEPTION`: To jest jedna z możliwych wartości dla tego atrybutu. Ustawia tryb na "wyjątki" (exceptions). Oznacza to, że jeśli wystąpi błąd, PDO wyrzuci wyjątek (obiekt klasy PDOException), który możesz złapać w bloku try-catch. To ułatwia debugowanie i obsługę błędów, bo kod nie będzie kontynuował wykonania w milczeniu lub tylko z ostrzeżeniami.

**Inne możliwe tryby błędów w PDO**:

- `PDO::ERRMODE_SILENT`: Błędy są ciche, nie wyrzucają wyjątków (domyślny).
- `PDO::ERRMODE_WARNING`: Błędy generują ostrzeżenia PHP (E_WARNING).
- `PDO::ERRMODE_EXCEPTION`: Błędy wyrzucają wyjątki (zalecane w aplikacjach produkcyjnych dla lepszej kontroli).


`$pojazdy = $stmt->fetchAll(PDO::FETCH_ASSOC);` - pobierz wszystkie wiersze `fetchAll()`z wyniku zapytania SQL i zwróć je jako **tablicę asocjacyjną**

Lista najczęściej używanych trybów pobierania danych (fetch modes) w PDO

🔹 1. `PDO::FETCH_ASSOC`

Zwraca wiersze jako tablice asocjacyjne – klucze to nazwy kolumn.

`$row['marka']`

🔹 2. `PDO::FETCH_NUM`

Zwraca wiersze jako tablice numeryczne – klucze to indeksy liczbowe.

`$row[0]`

🔹 3. `PDO::FETCH_BOTH`

Zwraca wiersze jako tablice mieszane (zarówno asocjacyjne, jak i numeryczne).
To jest domyślny tryb.

`$row['marka'] lub $row[1]`

🔹 4. `PDO::FETCH_OBJ`

Zwraca wiersze jako obiekty anonimowe.

`$row->marka`

🔹 5. `PDO::FETCH_LAZY`

Łączy cechy FETCH_BOTH i FETCH_OBJ — dane można odczytywać zarówno jako tablicę, jak i obiekt.
Używane rzadko, bo jest wolniejsze.

🔹 6. `PDO::FETCH_COLUMN`

Zwraca tylko jedną kolumnę z każdego wiersza (np. tylko nazwę lub ID).
Przykład:

```php 
$stmt = $pdo->query("SELECT marka FROM pojazdy");
$marki = $stmt->fetchAll(PDO::FETCH_COLUMN);
```

🔹 7. `PDO::FETCH_CLASS`

Zwraca dane jako obiekty danej klasy – przypisuje wartości kolumn do właściwości klasy.
```php 
$stmt->setFetchMode(PDO::FETCH_CLASS, 'Pojazd');
$row = $stmt->fetch(); // obiekt klasy Pojazd
```

🔹 8. `PDO::FETCH_INTO`

Podobne do FETCH_CLASS, ale dane są wstawiane do już istniejącego obiektu.

```php 
$pojazd = new Pojazd();
$stmt->setFetchMode(PDO::FETCH_INTO, $pojazd);
```

🔹 9. `PDO::FETCH_KEY_PAIR`

Zwraca dane jako pary klucz–wartość (pierwsza kolumna = klucz, druga = wartość).

```php 
$stmt = $pdo->query("SELECT id, marka FROM pojazdy");
$mapa = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
// np. [1 => 'Toyota', 2 => 'Ford']
```

🔹 10. `PDO::FETCH_GROUP`

Grupuje wyniki wg pierwszej kolumny (klucz grupy), a pozostałe dane są w tablicy.

```php 
$stmt = $pdo->query("SELECT typ, marka FROM pojazdy");
$grupy = $stmt->fetchAll(PDO::FETCH_GROUP);
```

🔹 11. `PDO::FETCH_UNIQUE`

Podobny do `FETCH_GROUP`, ale zamiast tablic w grupach tworzy unikalne pary klucz–wartość.

🔹 12. `PDO::FETCH_FUNC`

Pozwala przetwarzać każdą linię przez wskazaną funkcję callback:

```php 
$stmt->fetchAll(PDO::FETCH_FUNC, 'strtoupper');
```