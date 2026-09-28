<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Typy pól formularza HTML5</title>
</head>

<body>

    <h1>Typy pól formularza HTML5</h1>

    <form method="POST" enctype="multipart/form-data">

        <!-- 1. TEXT -->
        <h2>1. Text</h2>

        <label for="imie">Imię:</label>

        <input
            type="text"
            id="imie"
            name="imie"
            placeholder="Podaj imię"
            minlength="2"
            maxlength="30"
            required
        >


        <!-- 2. PASSWORD -->
        <h2>2. Password</h2>

        <label for="haslo">Hasło:</label>

        <input
            type="password"
            id="haslo"
            name="haslo"
            minlength="8"
            required
        >


        <!-- 3. EMAIL -->
        <h2>3. Email</h2>

        <label for="email">Adres e-mail:</label>

        <input
            type="email"
            id="email"
            name="email"
            placeholder="jan@example.com"
            required
        >


        <!-- 4. NUMBER -->
        <h2>4. Number</h2>

        <label for="wiek">Wiek:</label>

        <input
            type="number"
            id="wiek"
            name="wiek"
            min="18"
            max="100"
            required
        >


        <!-- 5. TEL -->
        <h2>5. Tel</h2>

        <label for="telefon">Numer telefonu:</label>

        <input
            type="tel"
            id="telefon"
            name="telefon"
            placeholder="123456789"
            pattern="[0-9]{9}"
        >


        <!-- 6. URL -->
        <h2>6. URL</h2>

        <label for="strona">Adres strony:</label>

        <input
            type="url"
            id="strona"
            name="strona"
            placeholder="https://example.com"
        >


        <!-- 7. SEARCH -->
        <h2>7. Search</h2>

        <label for="szukaj">Wyszukaj:</label>

        <input
            type="search"
            id="szukaj"
            name="szukaj"
            placeholder="Szukaj..."
        >


        <!-- 8. DATE -->
        <h2>8. Date</h2>

        <label for="data">Data urodzenia:</label>

        <input
            type="date"
            id="data"
            name="data"
        >


        <!-- 9. TIME -->
        <h2>9. Time</h2>

        <label for="godzina">Godzina:</label>

        <input
            type="time"
            id="godzina"
            name="godzina"
        >


        <!-- 10. DATETIME-LOCAL -->
        <h2>10. Datetime-local</h2>

        <label for="spotkanie">Data i godzina spotkania:</label>

        <input
            type="datetime-local"
            id="spotkanie"
            name="spotkanie"
        >


        <!-- 11. MONTH -->
        <h2>11. Month</h2>

        <label for="miesiac">Miesiąc:</label>

        <input
            type="month"
            id="miesiac"
            name="miesiac"
        >


        <!-- 12. WEEK -->
        <h2>12. Week</h2>

        <label for="tydzien">Tydzień:</label>

        <input
            type="week"
            id="tydzien"
            name="tydzien"
        >


        <!-- 13. COLOR -->
        <h2>13. Color</h2>

        <label for="kolor">Wybierz kolor:</label>

        <input
            type="color"
            id="kolor"
            name="kolor"
        >


        <!-- 14. RANGE -->
        <h2>14. Range</h2>

        <label for="ocena">Ocena:</label>

        <input
            type="range"
            id="ocena"
            name="ocena"
            min="1"
            max="10"
            value="5"
        >


        <!-- 15. CHECKBOX -->
        <h2>15. Checkbox</h2>

        <p>Wybierz zainteresowania:</p>

        <input
            type="checkbox"
            id="html"
            name="zainteresowania[]"
            value="HTML"
        >
        <label for="html">HTML</label>

        <br>

        <input
            type="checkbox"
            id="css"
            name="zainteresowania[]"
            value="CSS"
        >
        <label for="css">CSS</label>

        <br>

        <input
            type="checkbox"
            id="javascript"
            name="zainteresowania[]"
            value="JavaScript"
        >
        <label for="javascript">JavaScript</label>

        <br>

        <input
            type="checkbox"
            id="php"
            name="zainteresowania[]"
            value="PHP"
        >
        <label for="php">PHP</label>

        <br>

        <input
            type="checkbox"
            id="python"
            name="zainteresowania[]"
            value="Python"
        >
        <label for="python">Python</label>


        <!-- 16. RADIO -->
        <h2>16. Radio</h2>

        <p>Wybierz poziom:</p>

        <input
            type="radio"
            id="podstawowy"
            name="poziom"
            value="Podstawowy"
        >
        <label for="podstawowy">Podstawowy</label>

        <br>

        <input
            type="radio"
            id="sredni"
            name="poziom"
            value="Średni"
        >
        <label for="sredni">Średni</label>

        <br>

        <input
            type="radio"
            id="zaawansowany"
            name="poziom"
            value="Zaawansowany"
        >
        <label for="zaawansowany">Zaawansowany</label>


        <!-- 17. FILE -->
        <h2>17. File</h2>

        <label for="plik">Wybierz plik:</label>

        <input
            type="file"
            id="plik"
            name="plik"
            accept=".jpg,.jpeg,.png,.pdf"
        >


        <!-- 18. HIDDEN -->
        <h2>18. Hidden</h2>

        <p>
            Pole hidden nie jest widoczne dla użytkownika,
            ale jego wartość zostanie przesłana wraz z formularzem.
        </p>

        <input
            type="hidden"
            name="id_uzytkownika"
            value="123"
        >


        <!-- 19. BUTTON -->
        <h2>19. Button</h2>

        <input
            type="button"
            value="Kliknij mnie"
            onclick="alert('Kliknięto zwykły przycisk')"
        >


        <!-- 20. RESET -->
        <h2>20. Reset</h2>

        <input
            type="reset"
            value="Wyczyść formularz"
        >


        <!-- 21. SUBMIT -->
        <h2>21. Submit</h2>

        <input
            type="submit"
            value="Wyślij formularz"
        >


        <!-- 22. IMAGE -->
        <h2>22. Image</h2>

        <p>
            Obraz może działać jako przycisk wysyłający formularz.
        </p>

        <input
            type="image"
            src="video-poster.jpg"
            alt="Wyślij formularz"
        >

    </form>

</body>

</html>