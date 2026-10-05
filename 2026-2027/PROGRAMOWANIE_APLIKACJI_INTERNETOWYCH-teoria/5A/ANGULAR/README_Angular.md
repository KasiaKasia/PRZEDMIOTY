# ANGULAR
Angular to framework do tworzenia nowoczesnych aplikacji internetowych, rozwijany przez Google.

Najczęściej wykorzystuje się go do budowy aplikacji typu SPA (Single Page Application), czyli takich, które działają dynamicznie bez przeładowywania całej strony.

**Angular opiera się głównie na:**

1. **TypeScript** – języku programowania będącym rozszerzeniem JavaScript.
2. **Komponentach** – podstawowych elementach budujących interfejs aplikacji.
3. **Szablonach HTML** – definiujących strukturę i wygląd widoku komponentu.
4. **Stylach CSS/SCSS** – służących do formatowania wyglądu aplikacji.
5. **Dyrektywach** – umożliwiających modyfikowanie zachowania i wyglądu elementów HTML.
6. **Routingu** – odpowiedzialnym za nawigację pomiędzy widokami aplikacji.
7. **Formularzach** – umożliwiających pobieranie i walidowanie danych wprowadzanych przez użytkownika.
8. **Serwisach i wstrzykiwaniu zależności (Dependency Injection)** – pozwalających wydzielać wspólną logikę i udostępniać ją komponentom.
9. **RxJS** – bibliotece służącej do programowania reaktywnego i obsługi strumieni danych.
10. **Signals** – mechanizmie reaktywności służącym do przechowywania i automatycznego śledzenia zmian stanu.
11. **HTTP Client** – mechanizmie komunikacji z serwerem i zewnętrznymi API za pomocą protokołu HTTP.
12. **Renderowaniu po stronie serwera i renderowaniu hybrydowym (SSR / hybrid rendering)** – umożliwiającym generowanie części lub całości strony po stronie serwera.
13. **Testowaniu** – narzędziach umożliwiających sprawdzanie poprawności działania komponentów, serwisów i innych elementów aplikacji.
14. **Angular Aria** – narzędziach wspierających tworzenie dostępnych komponentów zgodnych z zasadami dostępności.
15. **Internacjonalizacji (i18n)** – mechanizmach umożliwiających tworzenie aplikacji obsługujących wiele języków i regionów.
16. **Animacjach** – mechanizmach umożliwiających tworzenie efektów przejść i animowania elementów interfejsu.
17. **Drag and Drop (przeciągnij i upuść)** – funkcjonalności pozwalającej użytkownikowi przeciągać i przenosić elementy interfejsu.



## Tworzenie pierwszego projektu w Angular 

## Instalacja niezbędnych środowisk
### Instalacja Node.js
1. Pobrać z strony https://nodejs.org/en/download
2. Instalcja
3. Po instalacji Node.js możesz sprawdzić wersję:

    - `node -v`
    - `npm -v`

### Istalacja Angular 

1. Wykonanie polecenia:

    - `npm install -g @angular/cli`
1. 1. Sprawdzenie wersji zainstalowanego Angular wykonuje się poleceniem
    `ng version`

### Tworzenie projektu

1. Wykonaj polecenia:

    - `ng new moj-projekt`
    - `cd moj-projekt`
    - `ng serve -o` Opcja --open automatycznie otwiera aplikację w przeglądarce pod adresem:
        `http://localhost:4200`

1. 1. Możesz też od razu ustawić np. routing i SCSS:
        - `ng new moj-projekt --routing --style=scss`   

### Przydatne polecenia:

Link: https://angular.dev/cli/generate?utm_source=chatgpt.com


```text
ng generate component nazwa
ng generate service nazwa
ng generate directive nazwa
ng generate pipe nazwa
ng generate guard nazwa
ng generate interceptor nazwa
ng generate interface nazwa
ng generate class nazwa
ng generate enum nazwa
ng generate module nazwa
```

## Architektura projektu:

Podział projektu Angular na moduły w klasycznym podejściu z NgModule warto grupować je **według funkcjonalności aplikacji**, a nie np. "wszystkie komponenty razem".

Przykładowy projekt sklepu można podzielić tak:

```text
src/app/

├── core/
│   └── core.module.ts
│
├── shared/
│   └── shared.module.ts
│
├── auth/
│   └── auth.module.ts
│
├── users/
│   └── users.module.ts
│
├── products/
│   └── products.module.ts
│
├── orders/
│   └── orders.module.ts
│
├── admin/
│   └── admin.module.ts
│
└── app.module.ts
```


**1. CoreModule**

Tutaj umieszczamy **elementy używane globalnie w całej aplikacji**, zwykle tworzone tylko raz.

Na przykład:
```text
CoreModule
├── serwisy
├── interceptory
├── guardy
├── obsługa autoryzacji
└── konfiguracja aplikacji
```
Polecenie do tworzenia modułu core:

`ng g m core`

**2. SharedModule**

Tutaj umieszczamy rzeczy **wielokrotnego użytku, wykorzystywane przez różne części aplikacji**.

Na przykład:
```text
SharedModule
├── ButtonComponent
├── LoaderComponent
├── ModalComponent
├── dyrektywy
├── pipe
└── wspólne komponenty
```
Polecenie do tworzenia modułu shared:

`ng g m shared`

Przykładowa struktura:
```text
shared/
├── components/
│   ├── loader/
│   └── button/
├── directives/
├── pipes/
└── shared.module.ts
```

**3. Moduły funkcjonalne — Feature Modules**

Tworzone, aby spełniały funkcję aplikacji. Zgodnie z założeniami projektu.

Każdy większy obszar aplikacji dostaje własny moduł.

Na przykład dla aplikacji sklep, należy utworzyć moduły:

- ProductsModule
- UsersModule
- OrdersModule
- CartModule
- AuthModule
- AdminModule

Polecenie do tworzenia modułów :
```JS
ng g m products
ng g m projects --routing
ng g m users
ng g m orders
ng g m auth
```

**4. AuthModule**

**Moduł związany z logowaniem i rejestracją**.
```text
auth/
├── login/
├── register/
├── forgot-password/
└── auth.module.ts
```
Polecenie do tworzenia modułów:
```JS
ng g m auth
ng g c auth/login
ng g c auth/register

ng g c auth/register --standalone=true
ng g c clients/clients-list --standalone=false --module=clients
```

**5. ProductsModule**

Dla przykładowego modułu `ProductsModule` umieszczamy w nim komponenty:

```text
products/
├── product-list/
├── product-details/
├── product-form/
└── products.module.ts
```

Polecenie do tworzenia modułu products:

`ng g m products`

Polecenia do tworzenia komponentów:

```JS
ng g c products/product-list
ng g c products/product-details
ng g c products/product-form
```

**6. UsersModule**

Moduł UsersModule przykładowo powinien zawierać komponenty dla obsługi użytkowników. W związku z tym takie mogą być komponenty: 

```text
users/
├── user-list/
├── user-details/
├── user-form/
└── users.module.ts
```

**7. AdminModule**

Jeżeli aplikacja posiada panel administratora:

```text
admin/
├── dashboard/
├── users/
├── settings/
└── admin.module.ts
```

**8. Moduły routingu**

Przy większych modułach można również wydzielić moduł routing.

Na przykład:

```text
products/
├── product-list/
├── product-details/
├── products.module.ts
└── products-routing.module.ts
```

Polecenie do tworzenia modułu z routingiem:

`ng g m products --routing`

Wtedy Angular utworzy:

- `products.module.ts`
- `products-routing.module.ts`

## standalone: true - Komponenty samodzielne

Od wersji Angular 17 `standalone: true` jest defaultową wartością, a wiej jej brak oznacza oznacza wartość: `standalone: true`

```TS
import { Component } from '@angular/core';

@Component({
  selector: 'app-projects-list',
  imports: [],
  templateUrl: './projects-list.html',
  styleUrl: './projects-list.scss',
})
export class ProjectsList {}
```

Do tablicy `routes` dodaje się komponent w poniższy sposób:

```TS
export const routes: Routes = [
    // ...
    {
        path: 'projekty',
        loadComponent: () =>
            import('./projects/projects-list/projects-list')
                .then(m => m.ProjectsList)
    }
    // ...
]    
```
komponent `standalone: true` jest samodzielny. Nie trzeba tworzyć modułu i deklarować go w tablicy `declarations`. lazy loading jest szybszy bo nie ładuje całego modułu tylko komponet.


## `standalone: false` 

**Przy `standalone: false` należy pamiętać o usunieciu tablicy `imports: [],`.**
Problemem jest samo istnienie właściwości imports w komponencie, który ma `standalone: false`. **Tablica imports jest przeznaczona tylko dla komponentów `standalone: true`**, wiec nie ważne czy napiszesz tak `imports: [FormsModule, RouterLink]` czy tak: `imports: []` lub `imports: [CommonModule]` wW każdym przypadku dla `standalone: false` dostaniesz błąd, bo imports w `@Component` jest przeznaczone tylko dla komponentów standalone.

```TS
import { Component } from '@angular/core';

@Component({
  selector: 'app-projects2-list',
  standalone: false, 
  templateUrl: './projects2-list.html',
  styleUrl: './projects2-list.scss',
})
export class Projects2List {}
```

W tablicy `routes` nalezy dodać moduł w którym jest komponent `standalone: false,`

```TS
import { Routes } from '@angular/router';
import { Start } from './start/start';

export const routes: Routes = [
    {
        path: '',
        component: Start
    },
    {
        path: 'projekty',
        loadComponent: () =>
            import('./projects/projects-list/projects-list')
                .then(m => m.ProjectsList)
    },
    {
        path: 'projekty2',
        loadChildren: () =>
            import('./projects2/projects2-module')
                .then(m => m.Projects2Module)
    } 
];
```

Tu ustaliśmy trasę dla modułu, ale jeszcze nie mamy trasy dla komponentu  `standalone: false,`, należy to uzupełnić w następujący sposób:


```TS
import { NgModule } from '@angular/core';
import { Projects2List } from './projects2-list/projects2-list';
import { RouterModule } from '@angular/router';

@NgModule({
  declarations: [
    Projects2List
  ],

  imports: [

    RouterModule.forChild([
      {
        path: '',
        component: Projects2List
      }
    ])
  ],
})
export class Projects2Module {}
```

## loadChildren 

`loadChildren` w routingu Angulara służy do **leniwego ładowania zestawu tras albo modułu**. Wskazuje na większą część aplikacji, używana do tworzenia większej ilości tras routing

Polecenie tworzy moduł z plikiem dla trasy:

`ng g m client  --routing`

Polecenia do tworzenia komponentów w module:

- `ng g c client/client-add`

- `ng g c client/client-list`

W module dla tablicy tras `routes` dodajemy ścieżki. Plik `ClientRoutingModule` routingu pozostaje czytelny,

```TS
import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ClientList } from './client-list/client-list';
import { ClientAdd } from './client-add/client-add';

const routes: Routes = [
    {
    path: '',
    component: ClientList
  },
  {
    path: 'dodaj',
    component: ClientAdd
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class ClientRoutingModule {}
```

Wyświetlnie linków:
```HTML
<nav>
  <a routerLink="/">Start</a>
  <a routerLink="/projekty">Lista projektów</a> 
  <a routerLink="/klienci">Klienci</a> 
  <a routerLink="/klienci/dodaj">Dodaj klienta</a> 
  <a routerLink="/profil">Profil</a>
</nav>
```
Dodanie do `app.routes.ts` naszego modułu:

```TS
import { Routes } from '@angular/router';
import { Start } from './start/start';

export const routes: Routes = [
    {
        path: '',
        component: Start
    },
    {
        path: 'projekty',
        loadComponent: () =>
            import('./projects/projects-list/projects-list')
                .then(m => m.ProjectsList)
    }, 

    {
        path: 'klienci',
        loadChildren: () =>
            import('./clients/clients-module')
                .then(m => m.ClientsModule)
    }, 
];
```

## loadComponent

`loadComponent` w Angularze **służy do leniwego ładowania pojedynczego komponentu standalone**.
```TS
import { Routes } from '@angular/router';
import { Start } from './start/start';

export const routes: Routes = [
    {
        path: '',
        component: Start
    },
    {
        path: 'projekty',
        loadComponent: () =>
            import('./projects/projects-list/projects-list')
                .then(m => m.ProjectsList)
    }, 
 
];
```
W widoku umieszczmy link do komponentu:

`<a routerLink="/projekty">Lista projektów</a>`

Przydatny gdy mamy tylko mało komponentów do prezentacji 