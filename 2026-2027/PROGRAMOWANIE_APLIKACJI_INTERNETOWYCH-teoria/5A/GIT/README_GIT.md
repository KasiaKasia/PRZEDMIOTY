# GIT

**Najważniejsze polecenia Vim**

**Polecenie**	**Działanie**
i	            Włączenie trybu INSERT (edycja tekstu)
Esc 	        Wyjście z trybu INSERT
:w	            Zapisanie zmian
:q	            Zamknięcie edytora
:wq	            Zapisanie zmian i zamknięcie edytora
:q!	            Zamknięcie edytora bez zapisywania zmian
:wq!	        Wymuszenie zapisu i zamknięcia edytora


## Komenda git add

* dodaje wszystkie pliki 

```bash
git add . 
```

*-* Dodanie kilku wybranych plików

```bash
git add index.html style.css script.js
```

* Dodanie wszystkich plików z rozszerzeniem .html

```bash
git add *.html
```

* Dodanie całego katalogu

```bash
git add images/
```

* Dodanie wszystkich zmian z bieżącego katalogu i jego podkatalogów

```bash
git add .
```

* Dodanie pliku, którego nazwa zawiera spacje

```bash
git add "moja strona.html"
```

* Pliki dodane do indeksu sa bezpieczne . Jak usuniemy plik z ideksu jego kopia jest cały czas w indeks.

```bash
git chechout nazwa_pliku_do_cofniecia_do_index
```

* Cofniecie zmian z index

```bash
git reset HEAD nazwa_plikow_do_cofniecia
```