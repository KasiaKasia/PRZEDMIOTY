# ProjektGenerujHaslo5a

## 1. Utworzenie projektu

```bash
ng new projekt-generuj-haslo-5a


```text
- ? Which stylesheet system would you like to use?
Wybieramy:
    CSS

- ? Do you want to enable Server-Side Rendering (SSR) and Static Site Generation (SSG/Prerendering)? (y/N)
Piszemy
    N 

- ? Which AI tools do you want to configure with Angular best practices? https://angular.dev/ai/develop-with-ai
Wybieramy
    None
```


## 2. Wchodziny do projektu

```bash
cd projekt-generuj-haslo-5a
```

### 2.1. **Jak nie ma katalogu `node_modules` to uruchamiamy polecenie do instalacji zależności:**

```bash
npm i --legacy-peer-deps
```

## 3. Uruchamiamy projekt

```bash
ng serve -o
```


## 4. Wchodzimy do nowego terminala i do katalogu projektu
```bash
cd projekt-generuj-haslo-5a
```

## 5. Tworzymy komponent dla formularza sterowanym szablonem poleceniem

```bash
ng g c form_sterowany_szablonem
```

## 6. Wstrzykujemy nowo utworzony komponent do komponentu
### 6.1. Kopjujemy **selector** 

Kopjujemy **selector** `app-form-sterowany-szablonem` z klasy `FormSterowanySzablonem` znajdującej się w pliku: `projekt-generuj-haslo-5a\src\app\form-sterowany-szablonem\form-sterowany-szablonem.ts`

### 6.2. Przechodzimy do pliku: `app.html`
Przechodzimy do pliku znajdujący się podścieżką: `projekt-generuj-haslo-5a\src\app\app.html`

### 6.3. Wstrzykniecie szablonu

**Nie usówamy ani nie modyfikujemy styli**

Skopiowany selector `app-form-sterowany-szablonem` wstrzykujemy do szablonu w pliku `projekt-generuj-haslo-5a\src\app\app.html` w następujacy sposob:
 <app-form-sterowany-szablonem></app-form-sterowany-szablonem>
 można i tak wstrzyknać:

 ```html
  <app-form-sterowany-szablonem/>
```

Zawartość pliku `projekt-generuj-haslo-5a\src\app\app.html` bez `<style>` przedstawia się następująco:

```HTML
<main class="main">
  <div class="content">
    <div class="left-side">
      <app-form-sterowany-szablonem />
      <div class="divider" role="separator" aria-label="Divider"></div>
      <div class="right-side">

      </div>

    </div>
  </div>
</main>

<router-outlet />
```

### 6.4. Dodanie do tablicy import klasy wstrzyknietej do szblonu HTML

Nad klasa App w tablicy imports nalezy dodać klasę wstrzyknietą w komponent. Następnie uzupełnić importy. Klasa App przedstawia się poniżej:

```TS
import { Component, signal } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { FormSterowanySzablonem } from './form-sterowany-szablonem/form-sterowany-szablonem';

@Component({
  selector: 'app-root',
  imports: [RouterOutlet, FormSterowanySzablonem],
  templateUrl: './app.html',
  styleUrl: './app.css'
})
export class App {
  protected readonly title = signal('projekt-generuj-haslo-5a');
}
```
## 7. W nowo utworzonym komponecie


## 7. a) Dodanie [(ngModel)]

**`[(ngModel)]` oznacza wiązanie dwukierunkowe (Two-Way Data Binding)**.
`[(ngModel)]` - nasłuchuje na elementach na których się znajduje (bez `<form> </form>` i `name`)

**Oznacza to, że dane są przekazywane w obie strony:**

1.**Z TypeScript do HTML** – gdy zmienisz wartość zmiennej w TypeScript, automatycznie zmieni się wartość w polu formularza.

2. **Z HTML do TypeScript** – gdy użytkownik wpisze coś w polu formularza, automatycznie zmieni się wartość zmiennej w TypeScript.

Jeśli [(ngModel)] umiescimy wewnątrz formularza <form> to każde pole musi posiadać atrybut `name` ,albo musimy odłączyć ngModel od formularza ustawiając opcje `standalone` w `ngModelOptions`.

Jak dodamy `FormsModule` to formularz <form> dostaje dyrektywe NgForm , aby ngModel wiedział jaki element jest ktorym musimy dodać `name`

## Dodana w `<form >` `#formularzHasel` po kliknieciu zwraca cały element HTML formularza

## Dodana dyrektywa  w `<form >` `#formularzHasel="ngForm"`

zwraca formularz formularzHasel.value i ma dostęp do controls gdzie są nasze pola formularza
### Zawartość HTML

```HTML
<div class="container">

    <h2>Menedżer haseł</h2>

    <form #formularzHasel="ngForm" (ngSubmit)="zapisz()">
        <div>
            <label for="adres">Adres WWW:</label>
            <input type="url" id="adres" name="adres" [(ngModel)]="formularz.adres" >
        </div>
        <div>
            <label for="login">Login:</label>
            <input type="text" id="login" name="login" [(ngModel)]="formularz.login" >

        </div>


        <div class="checkbox">
            <input type="checkbox" id="generuj" name="generuj" [(ngModel)]="formularz.generuj"
                (change)="generujHaslo()">

            <label for="generuj">
                Wygeneruj hasło
            </label>
        </div>

        <label for="haslo">Hasło:</label>
        <input type="password" id="haslo" name="haslo" [(ngModel)]="formularz.haslo" [disabled]="formularz.generuj">
        <div>
            <button type="submit" [disabled]="formularzHasel.invalid">
                Zapisz
            </button>
        </div>


    </form>
    
{{ formularz | json }}
<br>
{{ formularzHasel.value | json }}
<br>
{{ zapisaneDane | json }}
<br>
    @if (zapisaneDane) {

    <div class="wynik">
        <h3>Zapisane dane</h3>

        <p>Adres WWW: {{ zapisaneDane.adres }}</p>
        <p>Login: {{ zapisaneDane.login }}</p>
        <p>Hasło: ************</p>
    </div>

    }

</div>
```

### Zawartość TypeScript

```TS

import { JsonPipe } from '@angular/common';
import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-form-sterowany-szablonem',
  imports: [FormsModule, JsonPipe],
  templateUrl: './form-sterowany-szablonem.html',
  styleUrl: './form-sterowany-szablonem.css',
})
export class FormSterowanySzablonem {
   formularz = {
    adres: '',
    login: '',
    generuj: false,
    haslo: ''
  };

  zapisaneDane: {
    adres: string;
    login: string;
    haslo: string;
  } | null = null;

  generujHaslo(): void {

    if (this.formularz.generuj) {

      const znaki =
        'ABCDEFGHIJKLMNOPQRSTUVWXYZ' +
        'abcdefghijklmnopqrstuvwxyz' +
        '0123456789!@#$%';

      let haslo = '';

      for (let i = 0; i < 12; i++) {
        const indeks = Math.floor(Math.random() * znaki.length);
        haslo += znaki[indeks];
      }

      this.formularz.haslo = haslo;
    }
  }

  zapisz(): void {
    this.zapisaneDane = {
      adres: this.formularz.adres,
      login: this.formularz.login,
      haslo: this.formularz.haslo
    };
  }
}
```


## 7.b) Dodanie [ngModel] - pojedyńcze wiązanie - W TEN SPOSÓB TRZEBA ROZWIĄZAĆ ZADANIE


`[ngModel]` - zadziała w jedną stronę. Czyli w TypeScript

```TS
this.formularz.adres = 'poczatkowa wartosc';
```
wstawi w HTML 

 Nie działa już: wyświetlanie od razu danych po ich wprowadzeniu . Dopiero wysłanie formularza pobiera aktualne dane 

```HTML
{{ formularz | json }}

```

### Zawartość HTML:

```HTML
<div class="container">

    <h2>Menedżer haseł</h2>

    <form #formularzHasel="ngForm" (ngSubmit)="zapisz(formularzHasel)">
        <div>
            <label for="adres">Adres WWW:</label>
            <input type="url" id="adres" name="adres" [ngModel]="formularz.adres"  >
        </div>
        <div>
            <label for="login">Login:</label>
            <input type="text" id="login" name="login" [ngModel]="formularz.login"   >

        </div>


        <div class="checkbox">
            <input type="checkbox" id="generuj" name="generuj" [ngModel]="formularz.generuj" (ngModelChange)="formularz.generuj = $event; generujHaslo()">

            <label for="generuj">
                Wygeneruj hasło
            </label>
        </div>

        <label for="haslo">Hasło:</label>
        <input type="password" id="haslo" name="haslo" [ngModel]="formularz.haslo" [disabled]="formularz.generuj">
        <div>
            <button type="submit" [disabled]="formularzHasel.invalid">
                Zapisz
            </button>
               <button type="button" (click)="reset()" >Reset</button>
             
        </div>


    </form>
    
{{ formularz | json }}
<br>
{{ formularzHasel.value | json }}
<br>
{{ zapisaneDane | json }}
<br>
    @if (zapisaneDane) {

    <div class="wynik">
        <h3>Zapisane dane</h3>

        <p>Adres WWW: {{ zapisaneDane.adres }}</p>
        <p>Login: {{ zapisaneDane.login }}</p>
        <p>Hasło: ************</p>
    </div>

    }

</div>
```

### Zawartość TypeScript

```TS
import { JsonPipe } from '@angular/common';
import { Component, ViewChild } from '@angular/core';
import { FormsModule, NgForm } from '@angular/forms';

@Component({
  selector: 'app-form-sterowany-szablonem-ng-model-pojednyncze-wiazanie-danych',
   imports: [FormsModule, JsonPipe],
  templateUrl: './form-sterowany-szablonem-ng-model-pojednyncze-wiazanie-danych.html',
  styleUrl: './form-sterowany-szablonem-ng-model-pojednyncze-wiazanie-danych.css',
})
export class FormSterowanySzablonemNgModelPojednynczeWiazanieDanych {

   formularz = {
    adres: 'wwww',
    login: '',
    generuj: false,
    haslo: ''
  };

  zapisaneDane: {
    adres: string;
    login: string;
    haslo: string;
  } | null = null;

  generujHaslo(): void {

    if (this.formularz.generuj) {

      const znaki =
        'ABCDEFGHIJKLMNOPQRSTUVWXYZ' +
        'abcdefghijklmnopqrstuvwxyz' +
        '0123456789!@#$%';

      let haslo = '';

      for (let i = 0; i < 12; i++) {
        const indeks = Math.floor(Math.random() * znaki.length);
        haslo += znaki[indeks];
      }

      this.formularz.haslo = haslo;
    }
  }
@ViewChild('formularzHasel') formularzHasel?: NgForm;
  zapisz(formularzHasel: any): void {
    console.log('ngModel  this.formularz:', this.formularz);
    console.log('formularzHasel :', formularzHasel.value);  
    this.zapisaneDane = {
      adres: formularzHasel.value.adres,
      login: formularzHasel.value.login,
      haslo: formularzHasel.value.haslo
    };
  }
  reset(){
     this.formularzHasel?.resetForm();
  // Metoda setValue() ustawia nowe wartości pól, ale nie resetuje stanu formularza.
    //  this.formularzHasel?.setValue({
    //   adres: '',
    //   login: '',
    //   generuj: false,
    //   haslo: ''
    // });
  }
}

```