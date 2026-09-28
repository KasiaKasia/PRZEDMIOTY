<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Znaczniki semantyczne HTML5</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
        }

        header,
        nav,
        main,
        section,
        article,
        aside,
        footer {
            padding: 20px;
            margin: 10px;
            border: 2px solid #777;
        }

        header {
            background-color: #ddd;
        }

        nav {
            background-color: #eee;
        }

        main {
            background-color: white;
        }

        article {
            background-color: #f8f8f8;
        }

        aside {
            background-color: #eeeeee;
        }

        footer {
            background-color: #ddd;
        }

        figure {
            border: 1px solid #999;
            padding: 10px;
            width: 320px;
        }

        img {
            max-width: 100%;
        }

        progress,
        meter {
            width: 250px;
        }
    </style>
</head>

<body>

 

<header>

    <h1>Portal programistyczny</h1>

    <p>
        Przykładowa strona prezentująca znaczniki HTML5.
    </p>

</header>

 

<nav>

    <a href="#artykul">Artykuł</a> |
    <a href="#kurs">Kurs</a> |
    <a href="#kontakt">Kontakt</a>

</nav>

 

<main>
 

    <article id="artykul">

        <h2>Angular – framework aplikacji internetowych</h2>

        <p>
            Angular jest frameworkiem używanym do tworzenia
            nowoczesnych aplikacji internetowych.
        </p>

        <p>
            Artykuł opublikowano:
            <time datetime="2026-09-28">
                28 września 2026
            </time>
        </p>

    </article>

 

    <section id="kurs">

        <h2>Kurs programowania</h2>

        <p>
            W tej sekcji znajdują się informacje dotyczące kursu.
        </p>

        <p>
            Podczas kursu poznamy
            <mark>HTML, CSS i JavaScript</mark>.
        </p>

    </section>

 

    <aside>

        <h3>Dodatkowe informacje</h3>

        <p>
            Tutaj mogą znajdować się dodatkowe materiały,
            reklamy lub linki powiązane z główną treścią.
        </p>

    </aside>

 

    <section>

        <h2>Figure i figcaption</h2>

        <figure>

            <img
                src="images-male.jpg"
                alt="Przykładowy obraz"
            >

            <figcaption>
                Przykładowy obraz umieszczony w elemencie figure.
            </figcaption>

        </figure>

    </section>
 

    <section>

        <h2>Details i summary</h2>

        <details>

            <summary>
                Kliknij, aby zobaczyć więcej informacji
            </summary>

            <p>
                Ta treść jest domyślnie ukryta.
                Pojawia się po rozwinięciu elementu.
            </p>

        </details>

    </section>

 

    <section>

        <h2>Time</h2>

        <p>
            Zajęcia rozpoczną się
            <time datetime="2026-10-01T10:00">
                1 października 2026 o godzinie 10:00
            </time>.
        </p>

    </section>

 

    <section id="kontakt">

        <h2>Dane kontaktowe</h2>

        <address>

            Autor strony: Anna Kowalska<br>

            E-mail:
            <a href="mailto:anna@example.com">
                anna@example.com
            </a>

            <br>

            Telefon:
            <a href="tel:+48123456789">
                123 456 789
            </a>

        </address>

    </section>
 

    <section>

        <h2>Progress</h2>

        <p>Postęp realizacji kursu:</p>

        <progress value="70" max="100">
            70%
        </progress>

        <p>70%</p>

    </section>
 
    <section>

        <h2>Meter</h2>

        <p>Poziom wykorzystania pamięci:</p>

        <meter
            min="0"
            max="100"
            value="65">
            65%
        </meter>

        <p>65%</p>

    </section>

 

    <section>

        <h2>Dialog</h2>

        <button type="button" onclick="otworzOkno()">
            Otwórz okno dialogowe
        </button>

        <dialog id="okno">

            <h3>Okno dialogowe</h3>

            <p>
                To jest przykładowe okno utworzone
                za pomocą znacznika dialog.
            </p>

            <button type="button" onclick="zamknijOkno()">
                Zamknij
            </button>

        </dialog>

    </section>

 
    <section>

        <h2>Picture</h2>

        <picture>

            <source
                media="(min-width: 800px)"
                srcset="images-duze.jpg"
            >

            <source
                media="(min-width: 400px)"
                srcset="images-srednie.jpg"
            >

            <img
                src="images-male.jpg"
                alt="Obraz responsywny"
            >

        </picture>

    </section>

 

    <section>

        <h2>Template</h2>

        <p>
            Poniższy element template nie jest początkowo
            widoczny na stronie.
        </p>

        <button type="button" onclick="dodajElement()">
            Dodaj element z template
        </button>

        <div id="miejsce"></div>


        <template id="szablon">

            <article>

                <h3>Nowy artykuł</h3>

                <p>
                    Ten element został utworzony
                    na podstawie template.
                </p>

            </article>

        </template>

    </section>


</main>
 

<footer>

    <p>
        &copy; 2026 Portal programistyczny
    </p>

</footer>


<script>

    // Obsługa dialog

    function otworzOkno() {

        const dialog = document.getElementById("okno");

        dialog.showModal();
    }


    function zamknijOkno() {

        const dialog = document.getElementById("okno");

        dialog.close();
    }


    // Obsługa template

    function dodajElement() {

        const template =
            document.getElementById("szablon");

        const miejsce =
            document.getElementById("miejsce");

        const kopia =
            template.content.cloneNode(true);

        miejsce.appendChild(kopia);
    }

</script>

</body>

</html>
