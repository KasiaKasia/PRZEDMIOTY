<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Walidacja formularzy HTML5</title>
</head>

<body>

    <h1>Walidacja formularzy HTML5</h1>
 
    <h2>1. required</h2>

    <p>
        Pole jest obowiązkowe.
        Spróbuj wysłać formularz bez wpisania imienia.
    </p>

    <form>

        <label for="imie">Imię:</label>

        <input
            type="text"
            id="imie"
            name="imie"
            required
        >

        <button type="submit">
            Wyślij
        </button>

    </form>


    <hr>
 

    <h2>2. minlength</h2>

    <p>
        Login musi zawierać przynajmniej 5 znaków.
        Spróbuj wpisać np. <strong>Jan</strong>.
    </p>

    <form>

        <label for="login">Login:</label>

        <input
            type="text"
            id="login"
            name="login"
            minlength="5"
            required
        >

        <button type="submit">
            Wyślij
        </button>

    </form>


    <hr>
 

    <h2>3. maxlength</h2>

    <p>
        Można wpisać maksymalnie 10 znaków.
        Spróbuj wpisać więcej niż 10 znaków.
    </p>

    <form>

        <label for="nazwisko">Nazwisko:</label>

        <input
            type="text"
            id="nazwisko"
            name="nazwisko"
            maxlength="10"
        >

        <button type="submit">
            Wyślij
        </button>

    </form>


    <hr>

 
    <h2>4. min</h2>

    <p>
        Minimalny wiek wynosi 18 lat.
        Spróbuj wpisać np. 15.
    </p>

    <form>

        <label for="wiekMin">Wiek:</label>

        <input
            type="number"
            id="wiekMin"
            name="wiek"
            min="18"
            required
        >

        <button type="submit">
            Wyślij
        </button>

    </form>


    <hr>

 
    <h2>5. max</h2>

    <p>
        Maksymalna wartość wynosi 100.
        Spróbuj wpisać np. 150.
    </p>

    <form>

        <label for="punkty">Liczba punktów:</label>

        <input
            type="number"
            id="punkty"
            name="punkty"
            max="100"
            required
        >

        <button type="submit">
            Wyślij
        </button>

    </form>


    <hr>

 
    <h2>6. step</h2>

    <p>
        Dozwolone są wartości zmieniające się co 0.5.
        Poprawne: 1, 1.5, 2, 2.5.
        Spróbuj wpisać np. 2.3.
    </p>

    <form>

        <label for="ocena">Ocena:</label>

        <input
            type="number"
            id="ocena"
            name="ocena"
            min="1"
            max="6"
            step="0.5"
            required
        >

        <button type="submit">
            Wyślij
        </button>

    </form>


    <hr>
 

    <h2>7. pattern</h2>

    <p>
        Kod pocztowy musi mieć format:
        <strong>00-000</strong>.
        Spróbuj wpisać np. 12345.
    </p>

    <form>

        <label for="kod">Kod pocztowy:</label>

        <input
            type="text"
            id="kod"
            name="kod"
            pattern="[0-9]{2}-[0-9]{3}"
            placeholder="00-000"
            title="Kod pocztowy musi mieć format 00-000"
            required
        >

        <button type="submit">
            Wyślij
        </button>

    </form>


    <hr>
 
    <h2>8. multiple</h2>

    <p>
        Można podać kilka adresów e-mail.
        Oddziel je przecinkami.
    </p>

    <p>
        Przykład poprawny:
        <strong>anna@example.com,jan@example.com</strong>
    </p>

    <p>
        Przykład niepoprawny:
        <strong>anna@example.com,jan</strong>
    </p>

    <form>

        <label for="email">Adresy e-mail:</label>

        <input
            type="email"
            id="email"
            name="email"
            multiple
            required
        >

        <button type="submit">
            Wyślij
        </button>

    </form>


    <hr>

 

    <h2>9. accept</h2>

    <p>
        Pole pozwala wybierać pliki JPG i PNG.
    </p>

    <form enctype="multipart/form-data">

        <label for="plik">Wybierz zdjęcie:</label>

        <input
            type="file"
            id="plik"
            name="plik"
            accept=".jpg,.jpeg,.png"
        >

        <button type="submit">
            Wyślij
        </button>

    </form>


</body>

</html> 
