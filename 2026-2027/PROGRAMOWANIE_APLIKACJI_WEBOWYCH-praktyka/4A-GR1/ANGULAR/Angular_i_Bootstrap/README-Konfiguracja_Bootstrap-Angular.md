# Bootstrap Angular

## **1. Tworzenie projektu:**
```bash
ng new bootstrap-angular
```

✔ Which stylesheet system would you like to use? **wybieramy =>**  **CSS**           

✔ Do you want to enable Server-Side Rendering (SSR) and Static Site Generation (SSG/Prerendering)? **wybieramy =>** **No**

✔ Which AI tools do you want to configure with Angular best practices? https://angular.dev/ai/develop-with-ai **wybieramy =>** **None**

 

## **2. Instalacja paczki bootstrap przez NPM w katalogu projektu**

```bash
cd bootstrap-angular
npm install bootstrap
```

## 3. Konfiguracja bootstrap


**1. Otwórz plik `angular.json` w głównym katalogu projektu**

**2. Wyszukaj `architect`:**

```json
      "architect": {
        "build": {
          "builder": "@angular/build:application",
          "options": {
            "browser": "src/main.ts",
            "tsConfig": "tsconfig.app.json",
            "assets": [
              {
                "glob": "**/*",
                "input": "public"
              }
            ],
            "styles": [
              "src/styles.css"
            ]
          },
          // ..
```
w **architect -> build -> options -> styles** dopisz ścieżkę do pliku CSS:
```json
"styles": [
  "node_modules/bootstrap/dist/css/bootstrap.min.css",
  "src/styles.css"
]
```
 
## 4. Konfiguracja JavaScript (opcjonalnie, dla komponentów takich jak dropdown, modal itp.)

Jeśli chcesz korzystać z interaktywnych elementów Bootstrap opartych na JavaScript, przejdź do pliku `angular.json` w katalogu głównym projektu w sekcji:

 **architect -> build -> options -> scripts** dopisz 

```json
            "scripts": [
              "node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"
            ]
```            

## 5. Konfiguraca dla CSS i JavaScript dla Bootstrap

Dla konfiguracji CSS i JavaScript zawartość skryptu `angular.json` powinna prezentować się następująco:

```json
{
  "$schema": "./node_modules/@angular/cli/lib/config/schema.json",
  "version": 1,
  "cli": {
    "packageManager": "npm"
  },
  "newProjectRoot": "projects",
  "projects": {
    "bootstrap-angular": {
      "projectType": "application",
      "schematics": {},
      "root": "",
      "sourceRoot": "src",
      "prefix": "app",
      "architect": {
        "build": {
          "builder": "@angular/build:application",
          "options": {
            "browser": "src/main.ts",
            "tsConfig": "tsconfig.app.json",
            "assets": [
              {
                "glob": "**/*",
                "input": "public"
              }
            ],
            "styles": [
              "node_modules/bootstrap/dist/css/bootstrap.min.css",
              "src/styles.css"
            ],
            "scripts": [
              "node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"
            ]
          },
          "configurations": {
            "production": {
              "budgets": [
                {
                  "type": "initial",
                  "maximumWarning": "500kB",
                  "maximumError": "1MB"
                },
                {
                  "type": "anyComponentStyle",
                  "maximumWarning": "4kB",
                  "maximumError": "8kB"
                }
              ],
              "outputHashing": "all"
            },
            "development": {
              "optimization": false,
              "extractLicenses": false,
              "sourceMap": true
            }
          },
          "defaultConfiguration": "production"
        },
        "serve": {
          "builder": "@angular/build:dev-server",
          "configurations": {
            "production": {
              "buildTarget": "bootstrap-angular:build:production"
            },
            "development": {
              "buildTarget": "bootstrap-angular:build:development"
            }
          },
          "defaultConfiguration": "development"
        },
        "test": {
          "builder": "@angular/build:unit-test"
        }
      }
    }
  }
}
```
## 4. Wykonanie testów, czy Bootstrap działa

w pliku `bootstrap-angular\src\app\app.html`

Dopisz:
```HTML
<div class="form-field">
  <label for="fieldText" class="form-label">Email address</label>
  <input type="email" class="form-control" id="fieldText" placeholder="name@example.com">
  <div class="form-text">
    We’ll never share your email with anyone else.
  </div>
</div>
```

Czyli zawartość (nie kopiowałam styli sekcji <style></style>) z pliku `bootstrap-angular\src\app\app.html` ma wyglądać tak:

```HTML
<main class="main">
  <div class="content">
    <div class="left-side">

      <div class="form-field">
        <label for="fieldText" class="form-label">Email address</label>
        <input type="email" class="form-control" id="fieldText" placeholder="name@example.com">
        <div class="form-text">
          We’ll never share your email with anyone else.
        </div>
      </div>

    </div>
    <div class="divider" role="separator" aria-label="Divider"></div>
    <div class="right-side">

    </div>
  </div>
</main>


<router-outlet />
```

**2. Uruchomienie aplikacji**
```bash
ng serve -o
```






