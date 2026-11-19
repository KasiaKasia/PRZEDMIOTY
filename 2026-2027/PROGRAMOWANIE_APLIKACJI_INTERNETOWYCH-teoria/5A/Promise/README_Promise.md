# Promise

W JavaScript **Promise** (obietnica) to obiekt, który reprezentuje wynik operacji, która może zakończyć się teraz lub w przyszłości.

Obietnice wykorzystujemy przede wszystkim podczas wykonywania operacji asynchronicznych, np. pobierania danych z serwera, odczytywania plików czy komunikacji z API.

Stany Promise:
- **pending** — oczekująca
- **fulfilled** - **resolve()**
- **rejected** - **reject()**


## Tworzenie Promise
```JS
const obietnica = new Promise((resolve, reject) => {
    let sukces = true;

    if (sukces) {
        resolve("Operacja zakończona sukcesem!");
    } else {
        reject("Wystąpił błąd!");
    }
});
```


## Metody then(), catch() i finally()
A. **then()** — gdy operacja zakończy się sukcesem
Metoda then() pozwala odebrać wynik obietnicy.

```JS
const obietnica = new Promise((resolve, reject) => {
    resolve("Witaj w JavaScript!");
});

obietnica.then((wynik) => {
    console.log(wynik);
});
```

**Kilka metod then() wykorzystujemy **w praktyce wtedy, gdy **jedna operacja asynchroniczna zależy od wyniku poprzedniej**.

```JS
Promise.resolve(5)
    .then((liczba) => {
        return liczba * 2;
    })
    .then((wynik) => {
        return wynik + 10;
    })
    .then((wynik) => {
        console.log(wynik);
    });
```    

B. **catch()** — obsługa błędów
Metoda catch() wykonuje się, gdy obietnica zostanie odrzucona lub wystąpi błąd w poprzednim etapie łańcucha.
```JS
const obietnica = new Promise((resolve, reject) => {
    reject("Nie udało się pobrać danych!");
});

obietnica
    .then((wynik) => {
        console.log(wynik);
    })
    .catch((blad) => {
        console.log(blad);
    });
```

C. **finally()** — wykonuje się niezależnie od wyniku

```JS
const obietnica = new Promise((resolve, reject) => {
    resolve("Dane pobrane!");
});

obietnica
    .then((wynik) => {
        console.log(wynik);
    })
    .catch((blad) => {
        console.log(blad);
    })
    .finally(() => {
        console.log("Operacja zakończona.");
    });
```    

 