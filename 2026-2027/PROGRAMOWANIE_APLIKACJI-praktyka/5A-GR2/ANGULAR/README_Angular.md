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
    1.1. SPrawdzenie wersji zainstalowanej angular wykonuje się poleceniem
    `ng version`
### Tworzenie projektu

1. Wykonaj polecenia:

    - `ng new moj-projekt`
    - `cd moj-projekt`
    - `ng serve -o` 
    - Opcja --open automatycznie otwiera aplikację w przeglądarce pod adresem:
        `http://localhost:4200`

    1.1. Możesz też od razu ustawić np. routing i SCSS:
        - `ng new sklep --routing --style=scss`   

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

Jeżeli chodzi Ci o podział projektu Angular na moduły, to w klasycznym podejściu z NgModule warto grupować je **według funkcjonalności aplikacji**, a nie np. "wszystkie komponenty razem".

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


1. CoreModule

Tutaj umieszczamy elementy używane globalnie w całej aplikacji, zwykle tworzone tylko raz.

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

2. SharedModule

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

3. Moduły funkcjonalne — Feature Modules

To najważniejszy sposób dzielenia większej aplikacji.

Każdy większy obszar aplikacji dostaje własny moduł.

Na przykład sklep:

ProductsModule
UsersModule
OrdersModule
CartModule
AuthModule
AdminModule

Polecenie do tworzenia modułów :
```JS
ng g m products
ng g m users
ng g m orders
ng g m auth
```

4. AuthModule

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
```

5. ProductsModule

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

6. UsersModule

Obsługa użytkowników:
```text
users/
├── user-list/
├── user-details/
├── user-form/
└── users.module.ts
```

7. AdminModule

Jeżeli aplikacja posiada panel administratora:
```text
admin/
├── dashboard/
├── users/
├── settings/
└── admin.module.ts
```

8. Moduły routingu

Przy większych modułach można również wydzielić routing.

Na przykład:

```text
products/
├── product-list/
├── product-details/
├── products.module.ts
└── products-routing.module.ts
```

Można od razu utworzyć moduł z routingiem:

`ng g m products --routing`

Wtedy Angular utworzy:

- `products.module.ts`
- `products-routing.module.ts`