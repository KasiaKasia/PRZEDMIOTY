# Bootstrap Angular

## **1. Tworzenie projektu:**
```bash
ng new bootstrap-angular
```
✔ Which stylesheet system would you like to use? **wybieramy =>**  **CSS**            
[ https://developer.mozilla.org/docs/Web/CSS                     ]
✔ Do you want to enable Server-Side Rendering (SSR) and Static Site Generation (SSG/Prerendering)? **wybieramy =>** **No**
✔ Which AI tools do you want to configure with Angular best practices? https://angular.dev/ai/develop-with-ai **wybieramy =>** **None**
CREATE bootstrap-angular/.prettierrc (173 bytes)
 
 

## **2. Instalacja paczki bootstrap przez NPM w katalogu projektu**

```bash
cd bootstrap-angular
npm install bootstrap
```

## Konfiguracja bootstrap


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
 
**3. Konfiguracja JavaScript (opcjonalnie, dla komponentów takich jak dropdown, modal itp.)**

Jeśli chcesz korzystać z interaktywnych elementów Bootstrap opartych na JavaScript, przejdź do pliku `angular.json` w katalogu głównym projektu w sekcji:
 **architect -> build -> options -> scripts** dopisz 

```json
            "scripts": [
              "node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"
            ]
```            

Zawartość skryptu `angular.json` powinna prezentować się następująco:

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
## Wykonanie testów, czy Bootstrap działa

w pliku` bootstrap-angular\src\app\app.html`

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

Czyli zawartość (nie kopiowałam styli sekcji <style></style>) z pliku `app.html` ma wyglądać tak:
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











## Development server

To start a local development server, run:

```bash
ng serve
```

Once the server is running, open your browser and navigate to `http://localhost:4200/`. The application will automatically reload whenever you modify any of the source files.

## Code scaffolding

Angular CLI includes powerful code scaffolding tools. To generate a new component, run:

```bash
ng generate component component-name
```

For a complete list of available schematics (such as `components`, `directives`, or `pipes`), run:

```bash
ng generate --help
```

## Building

To build the project run:

```bash
ng build
```

This will compile your project and store the build artifacts in the `dist/` directory. By default, the production build optimizes your application for performance and speed.

## Running unit tests

To execute unit tests with the [Vitest](https://vitest.dev/) test runner, use the following command:

```bash
ng test
```

## Running end-to-end tests

For end-to-end (e2e) testing, run:

```bash
ng e2e
```

Angular CLI does not come with an end-to-end testing framework by default. You can choose one that suits your needs.

## Additional Resources

For more information on using the Angular CLI, including detailed command references, visit the [Angular CLI Overview and Command Reference](https://angular.dev/tools/cli) page.
